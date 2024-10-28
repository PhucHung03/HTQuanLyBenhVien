<?php 
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');

if(!isset($_GET['quanli'])) {
    require_once "home.php";
}else {
    switch ($_GET['quanli']) {
        case 'tao-phieu-kham':
            require_once "bacsi/taophieukham.php";         
            break;
        case 'xem-benh-nhan':
            require_once "bacsi/xembenhnhan.php";         
            break;
        }
}

require_once "component_admin/footer.php";


    
ob_end_flush();
?>
