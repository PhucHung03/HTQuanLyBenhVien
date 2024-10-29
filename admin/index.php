<?php 
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');

if(!isset($_GET['quanli'])) {
    require_once "home.php";
}else {
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
        // bệnh nhân
        case 'dang-ki-tai-khoan':
            require_once "benhnhan/dktk.php";
            break;
        case 'dat-lich-kham':
            require_once "benhnhan/dlk.php";
            break;
        case 'xem-phieu-kham':
            require_once "benhnhan/xpk_1.php";
            break;
        case 'xem-chi-tiet-phieu-kham':
            require_once "benhnhan/xpk_2.php";
            break;
        // nhà thuốc
        case 'thanh-toan':
            require_once "nhathuoc/thuTienVienPhi.php";
            break;
        case 'xem-chi-tiet-thanh-toan':
                require_once "nhathuoc/detailThuTienVienPhi.php";
                break;

        }
}

require_once "component_admin/footer.php";


    
ob_end_flush();
?>
