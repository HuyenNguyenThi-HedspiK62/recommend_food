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
                            <h1 style="text-align: center;">WHAT<font color="blue">ISFOR</font> DINNER?</h1>
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
                        <div class="container">
                            <div class="row">
                            @if ($foods->isEmpty())
                                <p style="color: red; font-family: monospace; font-size: 20px; font-weight: bold;">Không có món ăn chứa nguyên liệu đó!</p>
                            @else
                                @foreach($foods as $f)
                                <div style="margin-bottom: 40px;">
                                    <div class="col-sm-3" style="padding-bottom: 50px; text-align:center;">
                                        <img class="img_responsive" style="height:200px; width:200px; border-radius: 10px;"
                                            src="/asset/image/{{$f->image}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <h1 style="font-family: monospace;; text-align: center; font-weight: bolder;">{{$f->name}}</h1>
                                        <h2 style="font-family: monospace;;">Nguyên liệu</h2>
                                        <table style="font-size: 20px;">
                                            <tr>
                                                <th style="padding-right: 50px; font-family:  monospace;">Tên Nguyên Liệu</th>
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
                                        <p style="font-family: monospace; font-size: 20px;">
                                            {{$f->description}}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            </div>
                        </div>
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
    <footer>
    @include('includes.footer')
    </footer>
</body>

</html>