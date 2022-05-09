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
                <div class="col-md-5" style="padding-bottom: 50px;">
                    <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                        src="/asset/image/{{$f->image}}">
                </div>
                <div class="col-md-7" style="padding-bottom: 50px;">
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
<footer>
@include('includes.footer')
</footer>

</html>