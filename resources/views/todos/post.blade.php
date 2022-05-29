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
    </div>
    <div class="main_body">
        <div>
            <h1 style="text-align:center; font-family: monospace; padding: 50px 0px;">MÓN ĂN CỦA BẠN</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="padding-bottom: 50px;">
                    <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                        src="/asset/image/{{$monan->image}}">
                </div>
                <div class="col-md-7" style="padding-bottom: 50px;">
                    <h1 style="font-family: monospace; text-align: center;">{{$monan->name}}</h1>
                    <h2 style="font-family: monospace;">Nguyên liệu</h2>
                    @foreach($monan->nguyenlieu as $nguyenlieus)
                        <div style="display: flex; justify-content: space-between;">
                            <a href="/todos/food/{{$monan->id}}/{{$nguyenlieus->id}}"
                                    style="font-family:monospace; color: black; font-size: 20px;">{{ $nguyenlieus->name }}</a>
                            <a style="font-family:monospace; color: black; font-size: 20px;">{{ $nguyenlieus->luong }}</a>
                        </div>
                    @endforeach
                    <h2 style="font-family: monospace;">Cách chế biến</h2>
                    <p style="font-family: monospace; font-size: 20px;">
                        {{$monan->description}}
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
<footer style="border-top: 1px solid black;">
    @include('includes.footer')
</footer>

</html>