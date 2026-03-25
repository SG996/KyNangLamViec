@extends('layouts.master')

@section('title', 'Tuyển dụng, tìm việc làm lương cao | MyJobCV')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Vị trí ứng tuyển, tên công ty...">
                <select class="search-select"><option>Tất cả địa điểm</option><option>Hà Nội</option><option>TP. HCM</option></select>
                <select class="search-select"><option>Tất cả ngành nghề</option><option>IT - Phần mềm</option></select>
                <button class="btn btn-primary">Tìm kiếm</button>
            </div>

            <div class="hero-content">
                <div class="category-sidebar">
                    <ul>
                        <li>Kinh doanh / Bán hàng <span>></span></li>
                        <li>IT Phần mềm <span>></span></li>
                        <li>Marketing / PR <span>></span></li>
                        <li>Tài chính / Kế toán <span>></span></li>
                        <li>Hành chính / Nhân sự <span>></span></li>
                        <li>Cơ khí / Ô tô <span>></span></li>
                    </ul>
                </div>
                <div class="main-banner">
                    [ Ảnh Banner Quảng cáo chạy Slider ]
                </div>
            </div>
        </div>
    </section>

    <section class="section-jobs container">
        <div class="section-title">
            <h2>Việc làm tốt nhất</h2>
        </div>

        <div class="job-grid">
            <a href="{{ url('/detail') }}">
                <div class="job-card">
                    <div class="job-header">
                        <img src="https://via.placeholder.com/60" alt="Logo" class="job-logo">
                        <div class="job-info">
                            <h3>Chuyên viên Marketing Phát triển Thị trường</h3>
                            <p class="company-name">Công ty TNHH Giải pháp Công nghệ ABC</p>
                        </div>
                    </div>
                    <div class="job-tags">
                        <span class="tag tag-salary">15 - 20 triệu</span>
                        <span class="tag">Hà Nội</span>
                        <span class="tag">Cập nhật 2 giờ trước</span>
                    </div>
                </div>
            </a>

            <a href="{{ url('/job/2') }}">
                <div class="job-card">
                    <div class="job-header">
                        <img src="https://via.placeholder.com/60" alt="Logo" class="job-logo">
                        <div class="job-info">
                            <h3>Lập trình viên Backend (PHP/Laravel)</h3>
                            <p class="company-name">Tập đoàn Thương mại Điện tử XYZ</p>
                        </div>
                    </div>
                    <div class="job-tags">
                        <span class="tag tag-salary">Lên đến $1500</span>
                        <span class="tag">TP. HCM</span>
                        <span class="tag">Còn 10 ngày</span>
                    </div>
                </div>
            </a>

            <a href="{{ url('/job/3') }}">
                <div class="job-card">
                    <div class="job-header">
                        <img src="https://via.placeholder.com/60" alt="Logo" class="job-logo">
                        <div class="job-info">
                            <h3>Nhân viên Kế toán Tổng hợp</h3>
                            <p class="company-name">Công ty Cổ phần Đầu tư Toàn Cầu</p>
                        </div>
                    </div>
                    <div class="job-tags">
                        <span class="tag tag-salary">Thỏa thuận</span>
                        <span class="tag">Đà Nẵng</span>
                        <span class="tag">Cập nhật hôm nay</span>
                    </div>
                </div>
            </a>
            </div>
    </section>
@endsection