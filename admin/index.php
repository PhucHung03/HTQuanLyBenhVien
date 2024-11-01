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
            // lich lam viec
        case 'xem-lich-lam-viec':
            require_once "lichLamViec/xemlichlamviec.php";
            break;
        case 'detail-lich-lam-viec':
            require_once "lichLamViec/giaodienxemlich.php";
            break;
            // danh sach benh nhan
        case 'danh-sach-benh-nhan':
            require_once "dsbn/dsbn.php";
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
                        case 'tra-cuu-benh-nhan':
                            require_once "dsbn/tkbn.php";
                            break;
                            case 'chi-tiet-benh-nhan':
                                require_once "dsbn/xctbn.php";
                                break;
                                case 'danh-sach-nhan-vien':
                                    require_once "dsbn/qlnv.php";
                                    break;
                                    case 'chi-tiet-nhan-vien':
                                        require_once "dsbn/xdsnv.php";
                                        break;
    }
}

require_once "component_admin/footer.php";



ob_end_flush();
?>
