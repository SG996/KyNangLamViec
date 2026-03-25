<header class="main-header">
    <div class="container header-wrapper">
        <div class="header-left">
            <a href="{{ url('/') }}" class="logo">MY-JOB-CV</a>
            <nav class="nav-menu">
                <a href="{{ url('/') }}">Việc làm</a>
                <a href="#">Hồ sơ & CV</a>
                <a href="#">Công ty</a>
                <a href="{{ url('/post') }} ">Bài viết</a>
            </nav>
        </div>
        <div class="header-right">
            <a href="{{ url('/login') }}" class="btn btn-outline">Đăng nhập</a>
            <a href="{{ url('/register') }}" class="btn btn-primary">Đăng ký</a>
        </div>
    </div>
</header>