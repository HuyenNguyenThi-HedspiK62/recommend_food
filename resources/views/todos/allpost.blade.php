<!DOCTYPE html>
<html>

<head>
    <title>Food Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap-theme.css.map')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">{{Auth::user()->name}}</a>
            @else
            <a href="{{ route('login') }}">Đăng Nhập</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Đăng Ký</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    <div class="header">
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="text">
                            <h1>WHAT<font color="blue">ISFOR</font>
                            </h1>
                            <p>DINNER</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="topnav" id="myTopnav">
                            <ul>
                                <li><a href="/">Trang Chủ</a></li>
                                <li><a href="/todos/tab1">Có Nguyên Liệu</a></li>
                                <li><a href="/todos/tab2">Tùy Chọn</a></li>
                                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()"><i
                                            class="fa fa-bars"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="main_body">
        <div class="container">
            <div class="row">
                @if ($user->foods->isEmpty())
                    <div style="height: 250px; align-items: center; justify-content:center; display:flex;"><p style="color: red; font-family: monospace; font-size: 20px; font-weight: bold;">Bạn chưa đăng món ăn nào!</p></div>
                @else
                @foreach($user->foods as $f)
                <div class="col-md-5" style="padding: 50px 0px;">
                    <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                        src="/asset/image/{{$f->image}}">
                </div>
                <div class="col-md-7" style="padding-bottom: 50px;">
                    <h1 style="font-family: monospace; text-align: center;">{{$f->name}}</h1>
                    <h2 style="font-family: monospace;">Nguyên liệu</h2>
                    <table style="font-size: 20px;">
                        <tr>
                            <th style="padding-right: 150px; font-family: monospace;">Tên Nguyên Liệu</th>
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
                    <h2 style="font-family: monospace;">Cách chế biến</h2>
                    <p style="font-family: monospace; color: black;">
                        {{$f->description}}
                    </p>
                </div>
                @endforeach
                @endif
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

</html>