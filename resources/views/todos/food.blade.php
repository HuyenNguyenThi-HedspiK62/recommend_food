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
                @if(empty($foods))
                    <div style="height: 250px; align-items: center; justify-content:center; display:flex;"><p style="color: red; font-family: monospace; font-size: 20px; font-weight: bold;">Chưa có món ăn nào!</p></div>
                @else
                    @foreach($foods as $f)
                        <div class="col-md-5" style="padding: 50px 0px;">
                            <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                                src="/asset/image/{{$f->image}}">
                            <div class="comments" style="width: 350px">
                                <div class="comment-icon">
                                    <span>{{count($f->comments)}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </div>
                                
                                <div class="like-icon">
                                    <span>{{($f->comments)}}</span>
                                    <i class="fa fa-thumbs-up"></i>
                                    {{-- <span>{{($f->comments->rate == 0)}}</span> --}}
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-7" style="padding: 30px 0px;">
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
                        <div class="comment-meal">
                            <form id="cmt-f" action="{{ route('comment', ['stt' => $f->id]) }}" method="GET">
                                @csrf
                                <div class="form-group">
                                    <h1>Bình Luận</h1>
                                    <input type="text" id="cmt" style="width: 80%" class="form-control form-control-lg" name="comment" placeholder="Add Comment">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if(old('rate') === "1") checked @endif type="radio" name="rate" id="like" value="1" class="@error('like') is-invalid @enderror">
                                    <label class="form-check-label" for="inlineRadio1">Like</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if(old('rate') === "0") checked @endif type="radio" name="rate" id="unlike" value="0" class="@error('unlike') is-invalid @enderror">
                                    <label class="form-check-label" for="inlineRadio2">Unlike</label>
                                </div>
                                @error('rate')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <div class="form-group row" style="margin-top: 20px;">
                                    <div class="col-sm-10">
                                        <button type="submit" id="comment" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            @foreach($f->comments as $comment)
                                <div style="show-comment">
                                    @if(Auth::user() == $comment->user)
                                        <h3>Bình luận của bạn</h3>
                                    @else
                                        <h3>Bình luận bởi: {{$comment->user->name}}</h3>
                                    @endif
                                    <div style="font-size: 18px; margin-bottom: 20px;">Nội dung: {{$comment->description}}</div>
                                    <div class="rate">
                                        @if($comment->rate == 1)
                                            <i class="fa fa-thumbs-up">1</i>
                                        @else
                                            <i class="fa fa-thumbs-down">1</i>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
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
    $(document).ready(function() {
        $("#cmt-f").submit(function (e) {
            $("#comment").attr("disabled", true);
        });
    });
    </script>
</body>
<footer style="border-top: 1px solid black;">
@include('includes.footer')
</footer>

</html>