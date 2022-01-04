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
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/food.css')}}">
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
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
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
                                <li><a href="/">Home</a></li>
                                <li><a href="/todos/tab1">HAD SOMETHING</a></li>
                                <li><a href="/todos/tab2">EAT ANYTHING</a></li>
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
        <div>
            <h1 style="text-align:center; font-family: open sans; padding: 50px 0px;">MÓN ĂN CỦA BẠN</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="padding-bottom: 50px;">
                    <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                        src="/asset/image/{{$hinhanh_name}}">
                </div>
                <div class="col-md-7" style="padding-bottom: 50px;">
                    <h1 style="font-family: open sans; text-align: center;">{{$tenmon}}</h1>
                    <h2>Nguyên liệu</h2>
                    <p>{{$tennguyenlieu}}</p>
                    <p>{{$luong}}</p>
                    <h2>Cách chế biến</h2>
                    <p>
                        {{$cachnau}}
                    </p>
                </div>
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
<footer>
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