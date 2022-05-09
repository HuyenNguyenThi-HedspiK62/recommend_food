<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('includes.head_homepage')
</head>

<body>
@include('includes.user')
    <div class="header">
        @include('includes.header')
        <div class="banner-header">
            <h1>WHAT<font color="blue"> IS FOR </font>DINNER?</h1>
        </div>
        <div class="main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-title">
                            <h3 style="text-align: center;">Tìm Kiếm Theo <font color="blue">Nguyên Liệu</font></h3>
                        </div>
                        <div style="font-family: monospace;">
                            <form method="get" id="searchform" action="search_ngl">
                                <select name="tennguyenlieu[]" style="font-family: monospace;" class="selectpicker" multiple
                                    data-live-search="true">
                                    @foreach($nguyenlieu as $ngl)
                                    <option value="{{$ngl->id}}" style="font-family: monospace;">{{$ngl->name}}</option>
                                    @endforeach
                                </select>
                                <div style="text-align: center; padding-top: 20px; font-family: monospace;">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="text">
                            <h1>Bữa Ăn Ngày Thường</h1>
                        </div>
                        <div class="img">
                            <ul>
                                @foreach($type1 as $type_1)
                                <li><a href="/todos/food/{{$type_1->id}}"><img src="asset/image/{{$type_1->image}}"
                                            class="img-responsive"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div style="border-bottom: 1px solid black;" class="row_link">{{$type1->links()}}</div>
                        <div class="text">
                            <h1>Bữa Ăn Dịp Đặc Biệt</h1>
                        </div>
                        <div class="img">
                            <ul>
                                @foreach($type2 as $type_2)
                                <li><a href="/todos/food/{{$type_2->id}}"><img src="asset/image/{{$type_2->image}}"
                                            class="img-responsive"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div style="border-bottom: 1px solid black;" class="row_link">{{$type2->links()}}</div>
                        <div class="text">
                            <h1>Bữa chay</h1>
                        </div>
                        <div class="img">
                            <ul>
                                @foreach($type3 as $type_3)
                                <li><a href="/todos/food/{{$type_3->id}}"><img src="asset/image/{{$type_3->image}}"
                                            class="img-responsive"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row_link">{{$type3->links()}}</div>
                    </div>
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
        $('select').selectpicker();
    }
    </script>
</body>

<footer>
@include('includes.footer')
</footer>

</html>