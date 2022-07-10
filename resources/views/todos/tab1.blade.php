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
                        <div class="food">
                            <div>
                                <li>
                                    <a href="/todos/food/{{$means->id}}">
                                        <img src="/asset/image/{{$means->image}}"
                                            class="img-responsive">
                                    </a>
                                </li>
                            </div>
                            {{-- <div class="comments">
                                <div class="comment-icon">
                                    <span>13</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg></div>
                                <div class="like-icon">
                                    <span>13</span>
                                    <i class="fa fa-thumbs-up"></i>
                                    <span>13</span>
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                            </div> --}}
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
                            {{-- <div class="comments">
                                <div class="comment-icon">
                                    <span>13</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </div>
                                <div class="like-icon">
                                    <span>13</span>
                                    <i class="fa fa-thumbs-up"></i>
                                    <span>13</span>
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                            </div> --}}
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
                            {{-- <div class="comments">
                                <div class="comment-icon">
                                    <span>13</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </div>
                                <div class="like-icon">
                                    <span>13</span>
                                    <i class="fa fa-thumbs-up"></i>
                                    <span>13</span>
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                            </div> --}}
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