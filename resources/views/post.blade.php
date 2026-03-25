@extends('layouts.master')

@section('title', 'Cẩm nang nghề nghiệp - Góc chia sẻ | MyJobCV')

@section('content')
    <div class="container job-detail-grid">

        <div class="main-content">
            <div class="content-block">

                <div class="blog-list-header">
                    <h1 class="blog-list-title">Cẩm Nang Nghề Nghiệp</h1>
                </div>

                <article class="article-card">
                    <a href="{{ url('/article') }}" class="article-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=400&auto=format&fit=crop" alt="Thumbnail" class="article-card-img">
                    </a>
                    <div class="article-card-content">
                        <a href="{{ url('/article') }}" class="article-card-title">Bạn có biết việc làm remote là gì? 5 lợi ích bất ngờ từ việc làm remote</a>
                        <div class="article-card-meta">Ngày 25/03/2026 • Bởi MyJobCV Team</div>
                        <p class="article-card-excerpt">Sau đại dịch, khái niệm việc làm remote (làm việc từ xa) đã không còn xa lạ với người lao động Việt Nam. Vậy chính xác việc làm remote là gì và tại sao nó lại được săn đón đến vậy?</p>
                    </div>
                </article>

                <article class="article-card">
                    <a href="#" class="article-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=400&auto=format&fit=crop" alt="Thumbnail" class="article-card-img">
                    </a>
                    <div class="article-card-content">
                        <a href="#" class="article-card-title">Cách viết CV chuẩn ATS giúp bạn vượt qua vòng lọc hồ sơ dễ dàng</a>
                        <div class="article-card-meta">Ngày 20/03/2026 • Bởi Chuyên gia Nhân sự</div>
                        <p class="article-card-excerpt">Hệ thống theo dõi ứng viên (ATS) đang được phần lớn các tập đoàn và công ty lớn sử dụng. Nếu CV của bạn không chuẩn định dạng, bạn có thể bị máy móc loại ngay từ vòng gửi xe.</p>
                    </div>
                </article>

                <article class="article-card">
                    <a href="#" class="article-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=400&auto=format&fit=crop" alt="Thumbnail" class="article-card-img">
                    </a>
                    <div class="article-card-content">
                        <a href="#" class="article-card-title">Top 10 câu hỏi phỏng vấn thường gặp và cách trả lời ghi điểm tuyệt đối</a>
                        <div class="article-card-meta">Ngày 18/03/2026 • Bởi MyJobCV Team</div>
                        <p class="article-card-excerpt">"Điểm yếu lớn nhất của bạn là gì?", "Tại sao chúng tôi nên chọn bạn?"... Những câu hỏi tưởng chừng đơn giản nhưng lại làm khó không ít ứng viên. Hãy cùng bỏ túi ngay bí kíp này.</p>
                    </div>
                </article>

                <div class="pagination">
                    <a href="#" class="page-link">&laquo; Trước</a>
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">Sau &raquo;</a>
                </div>

            </div>
        </div>

        <aside class="sidebar">
            <div class="content-block sidebar-block">
                <h3>Chủ đề nổi bật</h3>
                <ul class="category-list">
                    <li><a href="#">💡 Kỹ năng phỏng vấn</a></li>
                    <li><a href="#">📝 Bí quyết viết CV</a></li>
                    <li><a href="#">🧭 Định hướng nghề nghiệp</a></li>
                    <li><a href="#">☕ Môi trường công sở</a></li>
                    <li><a href="#">📈 Báo cáo thị trường</a></li>
                </ul>
            </div>

            <div class="content-block sidebar-block">
                <h3>Việc làm HOT</h3>
                <div class="sidebar-job-item">
                    <img src="https://via.placeholder.com/50" alt="Logo" class="sidebar-job-img">
                    <div class="sidebar-job-info">
                        <h4><a href="#" style="color: #333; text-decoration: none;">Lập trình viên ReactJS</a></h4>
                        <div class="company">Công ty Công nghệ ABC</div>
                        <div class="salary" style="color: #00b14f; font-weight: bold; font-size: 13px;">15 - 25 Triệu</div>
                    </div>
                </div>
                <div class="sidebar-job-item" style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee;">
                    <img src="https://via.placeholder.com/50" alt="Logo" class="sidebar-job-img">
                    <div class="sidebar-job-info">
                        <h4><a href="#" style="color: #333; text-decoration: none;">Chuyên viên Digital Marketing</a></h4>
                        <div class="company">Tập đoàn VinaCorp</div>
                        <div class="salary" style="color: #00b14f; font-weight: bold; font-size: 13px;">Lên đến 30 Triệu</div>
                    </div>
                </div>
            </div>
        </aside>

    </div>
@endsection