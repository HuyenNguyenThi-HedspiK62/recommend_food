<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.user')
    <div class="header">
        @include('includes.header')
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
<footer>
    @include('includes.footer')
</footer>
</html>