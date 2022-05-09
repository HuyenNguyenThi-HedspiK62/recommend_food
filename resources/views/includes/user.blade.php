<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">{{Auth::user()->name}}</a>
        @else
        <a href="{{ route('login') }}">Đăng Nhập</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Đăng Ký</a>
        @endif
        @endauth
    </div>
    @endif
</div>