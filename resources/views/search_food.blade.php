<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('includes.head')
</head>

<body>
@include('includes.user')
    <div class="header">
    @include('includes.header')
        <div class="banner-header">
            <div class="container">
                <div class="header-title">
                    <h1>Ăn gì <font color="blue">Cũng được</font></h1>
                </div>
                <div class="search_box">
                    <form role="search" method="get" id="searchform" action="search_food">
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
        <div class="main-body">
            <div class="container">
                <div class="row">
                    @foreach($foods as $f)
                    <div class="col-md-5" style="padding-bottom: 50px;">
                        <img class="img_responsive" style="height:350px; width:350px; border-radius: 10px;"
                            src="/asset/image/{{$f->image}}">
                    </div>
                    <div class="col-md-7">
                        <h1 style="font-family: open sans; text-align: center;">{{$f->name}}</h1>
                        <h2 style="font-family: open sans;">Nguyên liệu</h2>
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
                        <h2 style="font-family: open sans;">Cách chế biến</h2>
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
    <footer style="border-top: 1px solid black;">
    @include('includes.footer')
    </footer>
</body>

</html>