@extends('layouts.master')

@section('title', 'Đăng ký tài khoản | MyJobCV')

@section('content')
    <div class="auth-wrapper">
        <div class="auth-container">

            <div class="auth-banner">
                <h2>Khởi đầu sự nghiệp<br>cùng MyJobCV!</h2>
                <p>Tham gia cộng đồng hàng triệu ứng viên, tạo CV ấn tượng và nhận cơ hội việc làm phù hợp nhất mỗi ngày hoàn toàn miễn phí.</p>

                <ul class="auth-banner-features">
                    <li>✨ Gợi ý việc làm bằng AI</li>
                    <li>🚀 Hàng trăm mẫu CV chuyên nghiệp</li>
                    <li>🔒 Bảo mật thông tin tuyệt đối</li>
                </ul>
            </div>

            <div class="auth-form-box">
                <h1 class="auth-title">Tạo tài khoản mới</h1>
                <p class="auth-subtitle">Nhanh chóng, tiện lợi và hoàn toàn miễn phí</p>

                <form action="#" method="POST">

                    <div class="form-group">
                        <label class="form-label" for="fullname">Họ và tên</label>
                        <input type="text" id="fullname" class="form-control" placeholder="Ví dụ: Nguyễn Văn A" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email của bạn</label>
                        <input type="email" id="email" class="form-control" placeholder="Ví dụ: nguyenvanan@gmail.com" required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label" for="password">Mật khẩu</label>
                            <input type="password" id="password" class="form-control" placeholder="Từ 6-20 ký tự" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password_confirmation">Xác nhận mật khẩu</label>
                            <input type="password" id="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" required>
                        </div>
                    </div>

                    <div class="auth-options" style="margin-bottom: 20px;">
                        <label style="display: flex; align-items: flex-start; gap: 8px;">
                            <input type="checkbox" required style="margin-top: 4px;">
                            <span style="font-size: 13px; line-height: 1.5; color: var(--text-muted);">
                                Tôi đã đọc và đồng ý với <a href="#" style="color: var(--primary);">Điều khoản dịch vụ</a> và <a href="#" style="color: var(--primary);">Chính sách bảo mật</a>.
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-auth-submit">Đăng ký ngay</button>

                    <div class="auth-divider">Hoặc đăng ký bằng</div>

                    <div class="social-login">
                        <a href="#" class="btn btn-social">
                            <span style="font-weight:bold; color:#EA4335; font-size:16px;">G</span> Google
                        </a>
                        <a href="#" class="btn btn-social">
                            <span style="font-weight:bold; color:#1877F2; font-size:16px;">f</span> Facebook
                        </a>
                    </div>

                    <div class="auth-switch">
                        Đã có tài khoản? <a href="{{ url('/login') }}">Đăng nhập ngay</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection