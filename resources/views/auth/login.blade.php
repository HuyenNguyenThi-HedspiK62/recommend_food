@extends('layouts.app')

@section('content')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap-theme.css.map')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="margin-bottom: 40px;" class="card">
                <div style="text-align: center; font-size: 25px;" class="card-header">{{ __('Đăng Nhập') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật Khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div style="display:flex; justify-content:space-between;" class="col-md-6 offset-md-4">
                                <div style="padding: 0" class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="padding-left: 20px;" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a style="padding: 0; margin: 0;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Quên Mật Khẩu?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Đăng Nhập') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer style="border-top: 3px solid #f2f2f2;">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>WHAT<font color="blue">ISFOR</font>DINNER</h2>
                    <address>
                        <ul>
                            <li><a href="https://www.hust.edu.vn/">Đại Học Bách Khoa Hà Nội</a></li>
                            <li><a href="https://soict.hust.edu.vn/">Hedspi - Viện CNTT&TT</a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-4">
                    <h2>Hỗ Trợ</h2>
                    <div class="col-md-4--contact">

                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-envelope"></span> whatisfordinner@gmail.com
                        </a>
                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-earphone"></span> 0987906734
                        </a>

                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Xêm Thêm</h2>
                    <div class="col-md-3--contact">
                        <div class="col-md-3--contact1"><a href="https://www.facebook.com/"><img
                                    src="{{asset('asset/image/face.png')}}"></a></div>
                        <div class="col-md-3--contact1"><a href="https://www.twiter.com/"><img
                                    src="{{asset('asset/image/twiter.png')}}"></a></div>
                        <div class="col-md-3--contact1"><a href="https://www.instagram.com/"><img
                                    src="{{asset('asset/image/instagram.png')}}"></a></div>
                        <div class="col-md-3--contact1"><a href="https://www.youtube.com/"><img
                                    src="{{asset('asset/image/youtube.png')}}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
