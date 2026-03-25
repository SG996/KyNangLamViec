@extends('layouts.master')

@section('title', 'Cài đặt tài khoản | MyJobCV')

@section('content')
    <div class="container account-grid">

        <aside class="account-sidebar">
            <div class="account-user-info">
                <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="account-user-avatar">
                <div class="account-user-name">Nguyễn Văn A</div>
                <div class="account-user-email">nguyenvana@gmail.com</div>
            </div>

            <nav class="account-nav">
                <a href="#" class="active">
                    <span class="account-nav-icon">👤</span> Thông tin cá nhân
                </a>
                <a href="#">
                    <span class="account-nav-icon">📄</span> Quản lý CV
                </a>
                <a href="#">
                    <span class="account-nav-icon">💼</span> Việc làm đã ứng tuyển
                </a>
                <a href="#">
                    <span class="account-nav-icon">❤️</span> Việc làm đã lưu
                </a>
                <a href="#">
                    <span class="account-nav-icon">🔒</span> Đổi mật khẩu
                </a>
                <a href="#" style="color: #dc3545;">
                    <span class="account-nav-icon">🚪</span> Đăng xuất
                </a>
            </nav>
        </aside>

        <main class="account-content">
            <h1 class="account-content-title">Cài đặt thông tin cá nhân</h1>
            <p class="account-content-subtitle">Quản lý thông tin hồ sơ để nhà tuyển dụng có thể hiểu rõ hơn về bạn</p>

            <form action="#" method="POST">
                <div class="avatar-upload-box">
                    <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="account-user-avatar" style="margin-bottom: 0;">
                    <div>
                        <p style="font-size: 14px; color: var(--text-main); font-weight: 600; margin-bottom: 8px;">Ảnh đại diện</p>
                        <button type="button" class="btn-upload">Tải ảnh mới lên</button>
                        <p style="font-size: 12px; color: var(--text-muted); margin-top: 5px;">Định dạng .JPEG, .PNG dung lượng tối đa 5MB</p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Họ và tên <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" value="Nguyễn Văn A" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Chức danh</label>
                        <input type="text" class="form-control" value="Frontend Developer" placeholder="Vị trí bạn đang làm">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email <span style="color: red;">*</span></label>
                        <input type="email" class="form-control" value="nguyenvana@gmail.com" readonly style="background-color: #f8f9fa; cursor: not-allowed;">
                        <small style="color: var(--text-muted); font-size: 12px;">Email không thể thay đổi</small>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" value="0987654321" placeholder="Số điện thoại liên hệ">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Giới tính</label>
                        <select class="form-control">
                            <option value="nam" selected>Nam</option>
                            <option value="nu">Nữ</option>
                            <option value="khac">Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" value="1998-05-15">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Địa chỉ hiện tại</label>
                    <input type="text" class="form-control" value="Quận 1, TP. Hồ Chí Minh" placeholder="Nhập địa chỉ của bạn">
                </div>

                <div class="form-group">
                    <label class="form-label">Giới thiệu bản thân</label>
                    <textarea class="form-control" rows="4" placeholder="Viết một đoạn ngắn giới thiệu về kỹ năng và định hướng của bạn...">Tôi là một Frontend Developer với 3 năm kinh nghiệm làm việc với ReactJS. Tôi luôn mong muốn được học hỏi và phát triển trong một môi trường năng động.</textarea>
                </div>

                <div style="margin-top: 30px; text-align: right;">
                    <button type="submit" class="btn btn-primary" style="padding: 12px 35px; font-size: 16px;">Lưu thay đổi</button>
                </div>
            </form>
        </main>

    </div>
@endsection