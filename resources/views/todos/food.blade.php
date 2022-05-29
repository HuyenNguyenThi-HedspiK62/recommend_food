<!DOCTYPE html>
<html>

<head>
@include('includes.head')
</head>

<body>
@include('includes.user')
    <div class="header">
    @include('includes.header')
    </div>
    <div class="main_body">
        <div class="container">
            <div class="row">
                @foreach($foods as $f)
                <div class="col-md-5" style="padding: 50px 0px;">
                    <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                        src="/asset/image/{{$f->image}}">
                </div>
                <div class="col-md-7" style="padding: 30px 0px;">
                    <h1 style="font-family: open sans; text-align: center;">{{$f->name}}</h1>
                    <h2>Nguyên liệu</h2>
                    <table style="font-size: 20px;">
                        <tr>
                            <th style="padding-right: 150px; font-family:  monospace;">Tên Nguyên Liệu</th>
                            <th style="font-family: monospace;">Khối lượng nguyên liệu</th>
                        </tr>
                        @foreach($f->nguyenlieu as $nguyenlieus)
                        <tr>
                            <td><a href="/todos/food/{{$f->id}}/{{$nguyenlieus->id}}"
                                    style="font-family:monospace; color: black;">{{ $nguyenlieus->name }}</a></td>
                            <td style="font-family:monospace; color: black;">{{ $nguyenlieus->luong }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <h2>Cách chế biến</h2>
                    <p>
                        {{$f->description}}
                    </p>
                </div>
                <div class="comment-meal">
                    <div class="cmt">
                        <h1>Bình Luận</h1>
                        <form class="form-inline">
                            <input type="text" class="form-control mb-2 mr-sm-2" style="width: 50%;" id="inlineFormInputName2" placeholder="Add Comment">
                            <button type="submit" class="btn btn-primary mb-2">Comment</button>
                        </form>
                    </div>
                    <div class="rate">
                        <h1>Đánh Giá</h1>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Like</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Unlike</label>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</body>
<footer style="border-top: 1px solid black;">
@include('includes.footer')
</footer>

</html>