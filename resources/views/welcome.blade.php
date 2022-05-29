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
                                <div class="food">
                                    <div>
                                        <li>
                                            <a href="/todos/food/{{$type_1->id}}">
                                                <img src="asset/image/{{$type_1->image}}"
                                                    class="img-responsive">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="comments">
                                        <div class="comment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                          </svg></div>
                                        <div class="like-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                          </svg></div>
                                    </div>
                                </div>
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
                                <div class="food">
                                    <div>
                                        <li>
                                            <a href="/todos/food/{{$type_2->id}}">
                                                <img src="asset/image/{{$type_2->image}}"
                                            class="img-responsive">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="comments">
                                        <div class="comment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                          </svg></div>
                                        <div class="like-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                          </svg></div>
                                    </div>
                                </div>
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
                                <div class="foods">
                                    <div>
                                        <li><a href="/todos/food/{{$type_3->id}}">
                                                <img src="asset/image/{{$type_3->image}}" class="img-responsive">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="comments">
                                        <div class="comment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                          </svg></div>
                                        <div class="like-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                          </svg></div>
                                    </div>
                                </div>
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