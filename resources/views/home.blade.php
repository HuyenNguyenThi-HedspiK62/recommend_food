@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap-theme.css.map')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i +
                '"><td><input type="text" name="tennguyenlieu[]" placeholder="Tên Nguyên Liệu" class="name_list" /></td><td><input type="text" id="lname" name="luong[]" placeholder="Lượng.."></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">Remove</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: "name.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function(data) {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
    </script>
</head>
<style>
input[type=text],
select,
textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-family: monospace;
}

button {
    font-family: monospace;
}

label,
input[type=file] {
    font-family: monospace;
    font-size: 24px;
}

div {
    border-radius: 5px;
    background-color: white;
}

.submit-food {
    padding: 30px 0px 50px 0px;
    text-align: center;
}

h1 {
    text-align: center;
    padding-bottom: 20px;
}

.col-md-3 {
    display: flex;
    justify-content: end;
    align-items: center;
}
.text-danger {
    font-family: monospace;
    font-size: 23px;
}
</style>
<div class="container">
    <div>
        <h1 style="font-family: monospace;">Món ăn của bạn</h1>
    </div>
    <div class="post">
        <form action="{{route('showpost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="fname">Tên món ăn: <span style="color: red" class="pl-2">*</span></label>
                </div>
                <div class="col-md-9">
                    <input type="text" id="fname" name="tenmon" placeholder="Tên món.."
                        class="@error('tenmon') is-invalid @enderror">
                    @error('tenmon')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="fname">Thành Phần: <span style="color: red" class="pl-2">*</span></label>
                </div>
                <div class="col-md-9">
                    <div name="add_name" id="add_name">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td><input type="text" name="tennguyenlieu[]" placeholder="Tên Nguyên Liệu.."
                                            class="name_list"></td>
                                    <td><input type="text" id="lname" name="luong[]" placeholder="Lượng.."></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add
                                            More</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="fname">Cách nấu: <span style="color: red" class="pl-2">*</span></label>
                </div>
                <div class="col-md-9">
                    <textarea rows="4" style="width: -webkit-fill-available;" type="text" name="cachnau"
                        placeholder="Cách nấu.." class="@error('cachnau') is-invalid @enderror"></textarea>
                    @error('cachnau')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="country">Image: <span style="color: red" class="pl-2">*</span></label>
                </div>
                <div class="col-md-9">
                    <input type="file" id="myFile" name="image" class="@error('image') is-invalid @enderror">
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="submit-food">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
        </form>
    </div>
</div>
<footer style="border-top: 3px solid #f2f2f2;">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>WHAT<font color="blue">ISFOR</font>DINNER</h2>
                    <address>
                        <ul>
                            <li><a href="https://www.hust.edu.vn/">Ha Noi University of Science and Technology</a></li>
                            <li><a href="https://soict.hust.edu.vn/">Student Of Soict</a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-4">
                    <h2>SUPPORT</h2>
                    <div class="col-md-4--contact">

                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-envelope"></span> whatisfordinner@gmail.com
                        </a>
                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-earphone"></span> 0987906734
                        </a>

                    </div>
                </div>
                <div class="col-md-4">
                    <h2>FOLLOW US</h2>
                    <div class="col-md-3--contact">
                        <div class="col-md-3--contact1"><a href="https://www.facebook.com/"><img
                                    src="{{asset('asset/image/face.png')}}"></a></div>
                        <div class="col-md-3--contact1"><a href="https://www.twiter.com/"><img
                                    src="{{asset('asset/image/twiter.png')}}"></a></div>
                        <div class="col-md-3--contact1"><a href="https://www.instagram.com/"><img
                                    src="{{asset('asset/image/instagram.png')}}"></a></div>
                        <div class="col-md-3--contact1"><a href="https://www.youtube.com/"><img
                                    src="{{asset('asset/image/youtube.png')}}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection