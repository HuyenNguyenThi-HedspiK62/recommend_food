<!DOCTYPE html>
<html>

<head>
    <title>Đã có nguyên liệu</title>
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
                                <li><a class="active" href="tab1.html">Có Nguyên Liệu</a></li>
                                <li><a href="tab2">Tùy Chọn</a></li>
                                <li><a a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-header">
            <h1>Có <font color="blue">Nguyên Liệu</font></h1>
        </div>
    </div>
    <div class="selection">
        <div class="search">
            <div class="container">
                <div class="search_text">
                    <p>Có Gì Trong Tủ Lạnh Nhà Bạn?</p>
                </div>
                <div class="search_box">
                    <form role="search" method="get" id="searchform" action="search">
                        <div style="position: relative; font-family: open sans;" class="form-group has-feedback">
                            <input style="background: #f2f2f2; height: 50px; font-size: 28px;border-radius: 20px;"
                                type="text" name="key" class="form-control" placeholder="Search">
                            <button
                                style="border: none; position: absolute; top:15px;right:30px;font-size: 28px;color:black"
                                class="glyphicon glyphicon-search"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=selection1>
            <div class="container">
                <div class="text">
                    <h1>Bữa Ăn Ngày Thường</h1>
                </div>
                <div class="image">
                    <ul>
                        @foreach($mean as $means)
                        <li><a href="/todos/food/{{$means->id}}"><img src="/asset/image/{{$means->image}}"
                                    class="img-responsive"></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row_link">{{$mean->links()}}</div>
            </div>
        </div>
        <div class=selection2>
            <div class="container">
                <div class="text">
                    <h1>Bữa Ăn Dịp Đặc Biệt</h1>
                </div>
                <div class="image">
                    <ul>
                        @foreach($spe as $spes)
                        <li><a href="/todos/food/{{$spes->id}}"><img src="/asset/image/{{$spes->image}}"
                                    class="img-responsive"></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row_link">{{$spe->links()}}</div>
            </div>
        </div>
        <div class=selection3>
            <div class="container">
                <div class="text">
                    <h1>Bữa Chay</h1>
                </div>
                <div class="image">
                    <ul>
                        @foreach($chay as $chays)
                        <li><a href="/todos/food/{{$chays->id}}"><img src="/asset/image/{{$chays->image}}"
                                    class="img-responsive"></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row_link">{{$chay->links()}}</div>
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
<footer style="border-top: 3px solid #f2f2f2;">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>WHAT<font color="blue">ISFOR</font>DINNER</h2>
                    <address>
                        <ul>
                            <li><a href="https://www.hust.edu.vn/">Đại Học Bách Khoa Hà Nội</a></li>
                            <li><a href="https://soict.hust.edu.vn/">Hedspi - Viện CNTT&TT</a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-4">
                    <h2>Hỗ Trợ</h2>
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
                    <h2>Xêm Thêm</h2>
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