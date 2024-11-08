
<?php 
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');
?>

<body>
    <section class="container-fluid pt-4 px-4" >
        <div class="menu__thongso">
            <div id="thongso__1">
                    <img src="../admin/img/money.png" alt="">
                    <p class="thongso__name">Doanh thu</p>
                    <p class="thongso__number">800.000đ</p>
            </div>
            <div id="thongso__2">
                    <img src="../admin/img/patient.png" alt="">
                    <p class="thongso__name">Tổng bệnh nhân</p>
                    <p class="thongso__number">70</p>
            </div>
            <div id="thongso__3">
                    <img src="../admin/img/operation.png" alt="">
                    <p class="thongso__name">Hoạt động</p>
                    <p class="thongso__number">54</p>
            </div>
            <div id="thongso__4">
                    <img src="../admin/img/lich.png" alt="">
                    <p class="thongso__name">Lịch hẹn</p>
                    <p class="thongso__number">35</p>
            </div>
        </div>
        <div class="menu__thongso2">
            <div id="thongso__doctor">
                <p id="thongso__title">Bác Sĩ Tốt Nhất</p>
                <a href="#">Xem thêm <img src="../admin/img/arrow.png" alt=""></a></a>
                <div id="thongso__listbacsi">
                    <img src="../admin/img/bacsi1.png" alt="" >
                    <img src="../admin/img/bacsi2.png" alt="" style="margin-left: 10px;">
                    <img src="../admin/img/bacsi3.png" alt="" style="margin-left: 10px;">
                    <img src="../admin/img/bacsi4.png" alt="" style="margin-left: 10px;">
                </div>
            </div>
            <div id="thongso__khach">
                <p id="thongso__title">Lượt khách</p>
                <div class="chart-container">
                    <canvas id="visitorsChart"></canvas>
                </div>
            </div>
            <div id="thongso__hoiphuc">
                <p id="thongso__title">Hồi phục</p>
                <div class="chart-container">
                    <canvas id="recoveryChart"></canvas>
                </div>
            </div>
        </div>
        <div class="menu__thongso3">
            <div id="thongso__benhnhan">
                <p id="thongso__title">Bệnh nhân</p>
                <a href="#">Xem thêm <img src="../admin/img/arrow.png" alt=""></a></a>
                <div class="patients-container">
                    <div class="patients-info">
                        <p>Tổng bệnh nhân</p>
                        <h2>784,670 Người</h2>
                        <div class="legend">
                            <div class="legend-item">
                                <span class="color-box new"></span> Mới
                            </div>
                            <div class="legend-item">
                                <span class="color-box recovered"></span> Đã hồi phục
                            </div>
                            <div class="legend-item">
                                <span class="color-box treatment"></span> Điều trị
                            </div>
                        </div>
                    </div>
                    <div class="chart-container-pie">
                        <canvas id="patientsChart"></canvas>
                    </div>
                </div>
            </div>
            <div id="thongso__tuvan">
                <p id="thongso__title">Khung giờ tư vấn</p>
                <a href="#">Xem thêm <img src="../admin/img/arrow.png" alt=""></a></a>
                <div id="bacsi__tuvan1">
                    <img src="../admin/img/bacsi5.png" alt="">
                    <p id="ten__bacsi">Dr.Phúc Hưng</p>
                    <p id="chuyenkhoa__bacsi">Khoa nội tổng hợp</p>
                    <p id="giolamviec__bacsi">10:20AM - 12:30PM</p>
                    <button id="xem__bacsi">Xem</button>
                </div>
                <div id="bacsi__tuvan2">
                    <img src="../admin/img/bacsi4.png" alt="">
                    <p id="ten__bacsi">Dr.Tuấn Anh</p>
                    <p id="chuyenkhoa__bacsi">Khoa hồi sức cấp cứu</p>
                    <p id="giolamviec__bacsi">10:20AM - 12:30PM</p>
                    <button id="xem__bacsi">Xem</button>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
require('component_admin/footer.php');
?>
<script>
    // Biểu đồ khách truy cập
    const ctxVisitors = document.getElementById('visitorsChart').getContext('2d');
    ctxVisitors.canvas.height = 200;
    const visitorsChart = new Chart(ctxVisitors, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Visitors',
                data: [20, 25, 30, 28, 40.6, 31, 30],
                borderColor: '#38a1db',
                backgroundColor: 'rgba(56, 161, 219, 0.2)',
                borderWidth: 2,
                pointBackgroundColor: '#ffffff',
                pointBorderColor: '#38a1db',
                pointRadius: 4,
                pointHoverRadius: 6,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#1e1e2d',
                    titleColor: '#ffffff',
                    bodyColor: '#ffffff',
                    borderColor: '#38a1db',
                    borderWidth: 1,
                    callbacks: {
                        label: function(context) {
                            return `${context.parsed.y} visitors`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: {
                        color: '#9a9a9a',
                        font: { size: 10 },
                        maxRotation: 0,
                        minRotation: 0
                    }
                },
                y: {
                    grid: { display: false },
                    ticks: { display: false }
                }
            }
        }
    });

    // Biểu đồ hồi phục
    const ctxRecovery = document.getElementById('recoveryChart').getContext('2d');
    ctxRecovery.canvas.height = 200;
    const recoveryChart = new Chart(ctxRecovery, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Recovery',
                data: [15, 20, 28, 35, 30, 25, 20], // Dữ liệu mẫu cho biểu đồ hồi phục
                borderColor: '#4caf50', // Màu xanh lá cây cho biểu đồ hồi phục
                backgroundColor: 'rgba(76, 175, 80, 0.2)',
                borderWidth: 2,
                pointBackgroundColor: '#ffffff',
                pointBorderColor: '#4caf50',
                pointRadius: 4,
                pointHoverRadius: 6,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#1e1e2d',
                    titleColor: '#ffffff',
                    bodyColor: '#ffffff',
                    borderColor: '#4caf50',
                    borderWidth: 1,
                    callbacks: {
                        label: function(context) {
                            return `${context.parsed.y} recovered`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: {
                        color: '#9a9a9a',
                        font: { size: 10 },
                        maxRotation: 0,
                        minRotation: 0
                    }
                },
                y: {
                    grid: { display: false },
                    ticks: { display: false }
                }
            }
        }
    });
    // Biểu đồ bệnh nhân
    // Plugin để hiển thị nhãn ở trung tâm
    Chart.register({
        id: 'doughnutCenterText',
        beforeDraw: function(chart) {
            const { width, height, ctx } = chart;
            ctx.restore();
            const fontSize = (height / 150).toFixed(2);
            ctx.font = `${fontSize}em sans-serif`;
            ctx.textBaseline = "middle";

            const text = "90%";
            const text2 = "Recovered";
            const textX = Math.round((width - ctx.measureText(text).width) / 2);
            const textY = height / 2;

            ctx.fillStyle = "#ffffff";
            ctx.fillText(text, textX, textY - 10);

            ctx.font = `${(fontSize * 0.6).toFixed(2)}em sans-serif`;
            ctx.fillStyle = "#9a9a9a";
            ctx.fillText(text2, textX, textY + 15);
            ctx.save();
        }
    });

    const ctxPatients = document.getElementById('patientsChart').getContext('2d');
    const patientsChart = new Chart(ctxPatients, {
        type: 'doughnut',
        data: {
            labels: ['New', 'Recovered', 'Treatment'],
            datasets: [{
                data: [10, 60, 30], // Phần trăm mẫu cho từng loại
                backgroundColor: ['#4bc0c0', '#36a2eb', '#ff6384'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            cutout: '70%', // Khoảng trống ở giữa biểu đồ tròn
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#1e1e2d',
                    titleColor: '#ffffff',
                    bodyColor: '#ffffff',
                    borderColor: '#38a1db',
                    borderWidth: 1
                }
            }
        }
    });

</script>
=======
<?php
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');

if (!isset($_GET['quanli'])) {
    require_once "home.php";
} else {
    switch ($_GET['quanli']) {
            //bác sĩ
        case 'tao-phieu-kham':
            require_once "bacsi/taophieukham.php";
            break;
        case 'xem-lich-hen-benh-nhan':
            require_once "bacsi/xemLichHenKham.php";
            break;
        case 'xem-chi-tiet-lich-hen-benh-nhan':
            require_once "bacsi/detailXemLichHenKham.php";
            break;
        case 'xem-benh-nhan-phu-trach':
            require_once "bacsi/xemBenhNhanPhuTrach.php";
            break;
        case 'xem-chi-tiet-benh-nhan-phu-trach':
            require_once "bacsi/detailBenhNhanPhuTrach.php";
            break;
            // bệnh nhân
        case 'dang-ki-tai-khoan':
            require_once "benhnhan/dangKiTaiKhoan.php";
            break;
        case 'dat-lich-kham':
            require_once "benhnhan/datLichKham.php";
            break;
        case 'xem-phieu-kham':
            require_once "benhnhan/xemPhieuKham1.php";
            break;
        case 'xem-chi-tiet-phieu-kham':
            require_once "benhnhan/xemPhieuKham2.php";
            break;
        case 'xem-chi-tiet-benh-nhan':
            require_once "dsbn/xctbn.php";
            break;
        case 'tra-cuu-benh-nhan':
            require_once "dsbn/tkbn.php";
            break;
        case 'danh-sach-benh-nhan':
            require_once "dsbn/dsbn.php";
            break;
            // nhà thuốc
        case 'xem-thuoc-ton-kho':
            require_once "nhathuoc/xemThuocTonKho.php";
            break;
        case 'xem-thong-tin-thuoc':
            require_once "nhathuoc/thongTinThuoc.php";
            break;
        case 'bao-cao-thuoc-ton-kho':
            require_once "nhathuoc/baoCaoTonKho.php";
            break;
        case 'bao-cao-thuoc-het-han':
            require_once "nhathuoc/baoCaoHetHan.php";
            break;
        case 'don-thuoc':
            require_once "dsbn/dt.php";
            break;
        case 'tra-cuu-don-thuoc':
            require_once "dsbn/tkdt.php";
            break;
        case 'chi-tiet-don-thuoc':
            require_once "dsbn/xctdt.php";
            break;
            //thu ngân
        case 'thanh-toan':
            require_once "thungan/thuTienVienPhi.php";
            break;
        case 'xem-chi-tiet-thanh-toan':
            require_once "thungan/detailThuTienVienPhi.php";
            break;
        case 'thong-ke-doanh-thu':
            require_once "thungan/thongKeDoanhThu.php";
            break;
            // quản lý
        case 'quan-ly-lich-lam-viec':
            require_once "quanLy/QLLichLamViec.php";
            break;
        case 'quan-ly-lich-kham':
            require_once "tiepTan/QLLichKham.php";
            break;
            case 'danh-sach-nhan-vien':
                require_once "dsbn/qlnv.php";
                break;
            case 'chi-tiet-nhan-vien':
                require_once "dsbn/xdsnv.php";
                break;
            // lich lam viec
        case 'xem-lich-lam-viec':
            require_once "lichLamViec/xemlichlamviec.php";
            break;
        case 'detail-lich-lam-viec':
            require_once "lichLamViec/giaodienxemlich.php";
            break;


    }
}

require_once "component_admin/footer.php";



