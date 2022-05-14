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
                @if ($users->foods->isEmpty())
                    <div style="height: 250px; align-items: center; justify-content:center; display:flex;"><p style="color: red; font-family: monospace; font-size: 20px; font-weight: bold;">Bạn chưa đăng món ăn nào!</p></div>
                @else
                @foreach($users->foods as $f)
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
@include('includes.footer')
</footer>

</html>