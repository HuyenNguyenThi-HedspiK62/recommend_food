@extends('layouts.app')

@section('content')
<div class="container">
    <div><a class="showpost_button" href="/home/{{$user->id}}">Món Ăn Của Bạn</a></div>
    <div><a class="showpostuser_button" href="{{route('showuserfood')}}">Món Ăn Của Mọi Người</a></div>
</div>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
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
                i + '" class="btn btn-danger btn_remove">Xóa</button></td></tr>');
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
                                    <td><button type="button" name="add" id="add" class="btn btn-success">Thêm</button>
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
                    <label for="country">Hình Ảnh: <span style="color: red" class="pl-2">*</span></label>
                </div>
                <div class="col-md-9">
                    <input type="file" id="myFile" name="image" class="@error('image') is-invalid @enderror">
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="submit-food">
                <button type="submit" class="btn btn-success btn-lg">Đăng</button>
            </div>
        </form>
    </div>
</div>
<footer style="border-top: 3px solid #f2f2f2;">
@include('includes.footer')
</footer>

@endsection