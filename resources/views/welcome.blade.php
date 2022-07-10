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
                                    {{-- <div class="comments">
                                        <div class="comment-icon">
                                            <span>{{ count($type_1->comment) }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                            </svg>
                                        </div>
                                        <div class="like-icon">
                                            @if(count($type_1->comment))
                                                @foreach($type_1->comment as $comment)
                                                    {{ $comment->rate }}
                                                @endforeach
                                            @else
                                                <span>0</span>
                                            @endif
                                            <i class="fa fa-thumbs-up"></i>
                                            @if(count($type_1->comment))
                                                @foreach($type_1->comment as $comment)
                                                <span>{{ $comment->rate }}</span>
                                                @endforeach
                                            @else
                                                <span>0</span>
                                            @endif
                                            <i class="fa fa-thumbs-down"></i>
                                        </div>
                                    </div> --}}
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
                                    {{-- <div class="comments">
                                        <div class="comment-icon">
                                            <span>{{ count($type_2->comment) }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                            </svg>
                                        </div>
                                        <div class="like-icon">
                                            @if(count($type_2->comment))
                                                @foreach($type_2->comment as $comment)
                                                    {{ $comment->rate }}
                                                @endforeach
                                            @else
                                                <span>0</span>
                                            @endif
                                            <i class="fa fa-thumbs-up"></i>
                                            @if(count($type_2->comment))
                                                @foreach($type_2->comment as $comment)
                                                    {{ $comment->rate }}
                                                @endforeach
                                            @else
                                                <span>0</span>
                                            @endif
                                            <i class="fa fa-thumbs-down"></i>
                                        </div>
                                    </div> --}}
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
                                    {{-- <div class="comments">
                                        <div class="comment-icon">
                                            <span>{{ count($type_3->comment) }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                            </svg>
                                        </div>
                                        <div class="like-icon">
                                            @if(count($type_3->comment))
                                                @foreach($type_3->comment as $comment)
                                                    {{ $comment->rate }}
                                                @endforeach
                                            @else
                                                <span>0</span>
                                            @endif
                                            <i class="fa fa-thumbs-up"></i>
                                            @if(count($type_3->comment))
                                                @foreach($type_3->comment as $comment)
                                                    {{ $comment->rate }}
                                                @endforeach
                                            @else
                                                <span>0</span>
                                            @endif
                                            <i class="fa fa-thumbs-down"></i>
                                        </div>
                                    </div> --}}
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