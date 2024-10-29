<?php 
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');

if(!isset($_GET['quanli'])) {
    require_once "home.php";
}else {
    switch ($_GET['quanli']) {
        case 'thuoc-ton-kho':
            require_once "bacsi/thuocTonKho.php";         
            break;
        case 'thong-tin-thuoc':
            require_once "bacsi/thongTinThuoc.php";         
            break;
        case 'xem-benh-nhan':
            require_once "bacsi/xembenhnhan.php";         
            break;
        case 'ton-kho':
            require_once "bacsi/baoCaoTonKho.php";         
            break;
        
        case 'het-han':
            require_once "bacsi/baoCaoHetHan.php";         
            break;
        }
    }

require_once "component_admin/footer.php";


    
ob_end_flush();
?>
