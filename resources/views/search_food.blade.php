<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Search Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap-theme.css.map')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/homestyle.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/home_responsive.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .full-height {
                height: 30px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

        </style>
    </head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">User</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div class = "header">
        <div class = "main-header">
            <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="text">
                            <h1>WHAT<font color="blue">ISFOR</font></h1>
                            <p>DINNER</p></div>
                        </div>
                        <div class="col-md-7">
                            <div class="topnav" id="myTopnav">
                            <ul>
                                <li><a class="active" href="/">Home</a></li>
                                <li><a href="/todos/tab1">HAD SOMETHING</a></li>
                                <li><a href="/todos/tab2">EAT ANYTHING</a></li>
                                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></li>
                            </ul>
                        </div>
                        </div>
                    </div>                      
                </div>
        </div>
        <div class = "banner-header">
            <div class = "container">
                <div class = "header-title">
                    <h1><font color="blue">WHAT IS FOR DINNER?</font></h1>
                </div>
                <div class="search_box">
                <form role="search" method="get" id="searchform" action="search_food">
                    <div style="position: relative; font-family: open sans;" class="form-group has-feedback">
                        <input style="background: #f2f2f2; height: 50px; font-size: 28px;border-radius: 20px;" type="text" name="key" class="form-control" placeholder="Search">
                        <button style="border: none; position: absolute; top:15px;right:30px;font-size: 28px;color:black" class="glyphicon glyphicon-search"></button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="container">
                <div class="row">
                    @foreach($foods as $f)
                    <div class="col-md-5" style = "padding-bottom: 50px;">
                        <img class = "img_responsive" style = "height:350px; width:350px; border-radius: 10px;" src="/asset/image/{{$f->image}}">
                    </div>
                    <div class="col-md-7">
                    <h1 style="font-family: open sans; text-align: center;">{{$f->name}}</h1>
                        <h2 style="font-family: open sans;">Nguyên liệu</h2>
                        <p style="font-family: open sans;">
                            <!-- Cá đối 2kg <br>
                            Thịt ba chỉ 0.5kg <br>
                            Mía 0.5 cây <br>
                            Riềng 0,3kg <br>
                            Nước mía 1 ly <br>
                            500ml nước lọc <br>
                            Đường thắng nước hàng <br>
                            Hạt tiêu xanh, ớt, nước mắm <br> -->
                        </p>
                        <h2 style = "font-family: open sans;">Cách chế biến</h2>
                        <p style="font-family: open sans;">
                            {{$f->description}}
                        </p>
                    </div>
				    @endforeach
                    
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
                            <div class="col-md-3--contact1"><a href="https://www.facebook.com/"><img src="{{asset('asset/image/face.png')}}"></a></div>
                            <div class="col-md-3--contact1"><a href="https://www.twiter.com/"><img src="{{asset('asset/image/twiter.png')}}"></a></div>
                            <div class="col-md-3--contact1"><a href="https://www.instagram.com/"><img src="{{asset('asset/image/instagram.png')}}"></a></div>
                            <div class="col-md-3--contact1"><a href="https://www.youtube.com/"><img src="{{asset('asset/image/youtube.png')}}"></a></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</footer>
</body>
</html>
