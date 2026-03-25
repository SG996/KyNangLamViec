@extends('layouts.master')

@section('title', 'Chi tiết công việc')

@section('content')
    <div class="container job-detail-grid">
        <div class="main-content">

            <div class="content-block job-card-detailed">
                <h1 class="job-detailed-title">Nhân Viên Kinh Doanh, Biết Tiếng Trung - Ưu Tiên Nam, Thu Nhập Đến 35 Triệu, Ngành Thang Máy, Tại Hà Nội</h1>

                <div class="job-info-grid">
                    <div class="info-item-detailed">
                        <div class="icon-circle">
                            <span class="icon-text">$</span>
                        </div>
                        <div class="info-text-group">
                            <div class="info-label" style="color: #7f878f; font-size: 14px;">Thu nhập</div>
                            <div class="info-value" style="font-weight: 600; font-size: 15px;">Thoả thuận</div>
                        </div>
                    </div>
                    <div class="info-item-detailed">
                        <div class="icon-circle">
                            <span class="icon-text">P</span>
                        </div>
                        <div class="info-text-group">
                            <div class="info-label" style="color: #7f878f; font-size: 14px;">Địa điểm</div>
                            <div class="info-value text-primary" style="font-weight: 600; font-size: 15px;">Hà Nội</div>
                        </div>
                    </div>
                    <div class="info-item-detailed">
                        <div class="icon-circle">
                            <span class="icon-text">8</span>
                        </div>
                        <div class="info-text-group">
                            <div class="info-label" style="color: #7f878f; font-size: 14px;">Kinh nghiệm</div>
                            <div class="info-value" style="font-weight: 600; font-size: 15px;">1 năm</div>
                        </div>
                    </div>
                </div>

                <p class="deadline-text">Hạn nộp hồ sơ: 15/04/2026 (Còn 21 ngày)</p>

                <div class="action-buttons-group">
                    <a href="#" class="btn btn-apply-detailed btn-primary">
                        <span class="btn-icon">✈</span> Ứng tuyển ngay
                    </a>
                    <a href="#" class="btn btn-save-detailed btn-outline">
                        <span class="btn-icon-save">♡</span> Lưu tin
                    </a>
                </div>
            </div>

            <div class="content-block info-summary">
                <table class="info-summary-table">
                    <tr>
                        <td>Lương<br><strong>25 - 35 Triệu VNĐ</strong></td>
                        <td>Hình thức làm việc<br><strong>Toàn thời gian</strong></td>
                        <td>Cấp bậc<br><strong>Nhân viên</strong></td>
                        <td>Kinh nghiệm<br><strong>1 năm</strong></td>
                    </tr>
                    <tr>
                        <td>Yêu cầu<br><strong>1 - 3 vị trí</strong></td>
                        <td>Phái<br><strong>Ưu tiên Nam</strong></td>
                        <td>Bằng cấp<br><strong>Không yêu cầu</strong></td>
                        <td>Ngày cập nhật<br><strong>Cập nhật hôm nay</strong></td>
                    </tr>
                </table>
            </div>

            <div class="content-block description-section">
                <h2>Chi tiết công việc</h2>
                <ul>
                    <li>Phát triển giao diện người dùng cho các ứng dụng web phức tạp sử dụng ReactJS và TypeScript.</li>
                    <li>Nghiên cứu và triển khai các giải pháp kỹ thuật mượt mà, tối ưu hóa hiệu suất (rendering performance).</li>
                    <li>Tương tác chặt chẽ với đội ngũ backend để thiết kế và tích hợp API.</li>
                    <li>Tham gia vào quy trình code review để đảm bảo chất lượng và tuân thủ các chuẩn mực mã nguồn.</li>
                    <li>Giải quyết các vấn đề kỹ thuật phát sinh và đề xuất cải tiến kỹ thuật.</li>
                </ul>
                <br>
                <h2>Yêu cầu ứng viên</h2>
                <ul>
                    <li>Nắm vững ReactJS (ít nhất 3 năm kinh nghiệm thực tế) và TypeScript.</li>
                    <li>Hiểu sâu về HTML5, CSS3 (SCSS/SASS), và các kỹ thuật responsive design.</li>
                    <li>Có kinh nghiệm sử dụng các thư viện như Redux, React Query, hoặc các giải pháp quản lý state tương đương.</li>
                    <li>Có kiến thức cơ bản về quy trình CI/CD và sử dụng Docker.</li>
                    <li>Khả năng đọc hiểu tài liệu tiếng Anh tốt.</li>
                </ul>
                <br>
                <h2>Quyền lợi được hưởng</h2>
                <ul>
                    <li>Lương hấp dẫn lên đến 35 Triệu VNĐ, xét tăng lương hàng năm.</li>
                    <li>Thưởng tháng 13 và các dịp lễ, tết, dự án.</li>
                    <li>Bảo hiểm đầy đủ theo quy định của pháp luật.</li>
                    <li>Đội ngũ mượt mà, trẻ trung, môi trường làm việc cởi mở.</li>
                    <li>Có nhiều cơ hội học hỏi và phát triển bản thân.</li>
                </ul>
            </div>
        </div>

        <aside class="sidebar">
            <div class="content-block sidebar-block company-info">
                <h3>Công ty Cổ phần Tech Global</h3>
                <div class="info-item"><strong>Quy mô:</strong> 500 - 1000 nhân viên</div>
                <div class="info-item"><strong>Lĩnh vực:</strong> Công nghệ thông tin / Phần mềm</div>
                <div class="info-item"><strong>Địa điểm:</strong> Tòa nhà ABC, Quận 1, TP. HCM</div>
            </div>

            <div class="content-block sidebar-block similar-jobs">
                <h3>Việc làm tương tự</h3>
                <ul>
                    <li><a href="#">Lập trình viên Senior ReactJS</a><span class="company">Công ty TNHH Solution</span></li>
                    <li><a href="#">Frontend Developer (NextJS)</a><span class="company">Công ty Innovative Apps</span></li>
                    <li><a href="#">Chuyên viên Javascript (React)</a><span class="company">Tập đoàn FinTech Toàn Cầu</span></li>
                </ul>
            </div>
        </aside>
    </div>
@endsection