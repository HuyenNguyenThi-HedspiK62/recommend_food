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
                    <h1>Ăn Gì <font color="blue">Cũng Được</font></h1>
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
    </div>
    <div class="selection">
        <div class=selection1>
            <div class="container">
                <div class="text">
                    <h1>Bữa Ăn Ngày Thường</h1>
                </div>
                <div class="image">
                    <ul>
                        @foreach($mean as $means)
                        <div class="food">
                            <div>
                                <li>
                                    <a href="/todos/food/{{$means->id}}">
                                        <img src="/asset/image/{{$means->image}}"
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
                        <div class="food">
                            <div>
                                <li>
                                    <a href="/todos/food/{{$spes->id}}">
                                        <img src="/asset/image/{{$spes->image}}"
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
                        <div class="food">
                            <div>
                                <li>
                                    <a href="/todos/food/{{$chays->id}}">
                                        <img src="/asset/image/{{$chays->image}}"
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