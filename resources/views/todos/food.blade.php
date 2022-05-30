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
                @foreach($foods as $f)
                    <div class="col-md-5" style="padding: 50px 0px;">
                        <img class="img_responsive" style="height: 350px; width: 350px; border-radius: 10px;"
                            src="/asset/image/{{$f->image}}">
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
                        <form action="{{ route('comment') }}" method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h1>Bình Luận</h1>
                                <input type="text" style="width: 80%" class="form-control form-control-lg" name="comment" placeholder="Add Comment">
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
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