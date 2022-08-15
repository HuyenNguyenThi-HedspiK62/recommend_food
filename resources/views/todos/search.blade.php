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
            <div class="container">
                <div class="header-title">
                    <h1>Có <font color="blue">Nguyên Liệu</font></h1>
                </div>
            </div>
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
                @if ($mean->isEmpty())
                    <p style="color: red; text-align: center; font-family: monospace; font-size: 20px; font-weight: bold;">Không có bữa ăn phù hợp</p>
                @else
                <div class="image-search">
                @foreach($mean as $means)
                    <div style="margin-right: 30px;">
                        <a href="/todos/food/{{$means->id}}"><img src="/asset/image/{{$means->image}}"
                                class="img-responsive">
                        </a>
                    </div>
                @endforeach
                </div>
                @endif
                <div class="row_link">{{$mean->links()}}</div>
            </div>
        </div>
        <div class=selection2>
            <div class="container">
                <div class="text">
                    <h1>Bữa Ăn Dịp Đặc Biệt</h1>
                </div>                
                @if ($spe->isEmpty())
                    <p style="color: red; text-align: center; font-family: monospace; font-size: 20px; font-weight: bold;">Không có bữa ăn phù hợp</p>
                @else
                <div class="image-search">
                @foreach($spe as $spes) 
                    <div style="margin-right: 30px;">
                        <a href="/todos/food/{{$spes->id}}"><img src="/asset/image/{{$spes->image}}"
                                class="img-responsive">
                        </a>
                    </div>
                @endforeach
                </div>
                @endif                   
                <div class="row_link">{{$spe->links()}}</div>
            </div>
        </div>
        <div class=selection3>
            <div class="container">
                <div class="text">
                    <h1>Bữa Chay</h1>
                </div>
                @if ($chay->isEmpty())
                    <div>
                        <p style="color: red; text-align: center; font-family: monospace; font-size: 20px; font-weight: bold;">Không có bữa ăn phù hợp</p>
                    </div>
                @else
                <div class="image-search">
                @foreach($chay as $chays)
                    <div style="margin-right: 30px;">
                        <a href="/todos/food/{{$chays->id}}"><img src="/asset/image/{{$chays->image}}"
                                class="img-responsive">
                        </a>
                    </div>
                @endforeach
                </div>
                @endif
                <div class="row_link">{{$chay->links()}}</div>
            </div>
        </div>
        <div class="container">
            <div class="text">
                <h1>Đề Xuất Món Ăn</h1>
            </div>
            <div>
                @if ($foods->isEmpty())
                    <div style="color: red; text-align: center; font-family: monospace; font-size: 20px; font-weight: bold;">Không có món ăn được đề xuất</div>
                @else
                <div class="image-search">
                @foreach($foods as $food)
                    <div style="margin-right: 30px;">
                        <a href="/todos/fooddetail/{{$food->id}}"><img src="/asset/image/{{$food->image}}"
                                style="margin-bottom: 10px;" class="img-responsive"></a>
                        <p style="font-family: monospace; font-size: 17px; font-weight: bold;">{{$food->name}}</p>
                    </div>
                @endforeach
                <div>
                @endif
            </div>
            {{-- <div class="row_link">{{$foods->links()}}</div> --}}
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
<footer style="border-top: 1px solid black">
@include('includes.footer')
</footer>

</html>