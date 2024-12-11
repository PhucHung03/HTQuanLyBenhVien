<?php
require_once("public/class/clslogin.php");
require_once('component/header.php');


if (!isset($_GET['url'])) {
    require_once "public/trangchu.php";
} else {
    switch ($_GET['url']) {
        case 'trang-chu':
            require_once "public/trangchu.php";
            break;
            // chuyên khoa
        case 'chuyen-khoa':
            require_once "public/view/chuyenkhoa.php";
            break;
        case 'detail-chuyen-khoa':
            require_once "public/view/detail-chuyenkhoa.php";
            break;
            //dang ki
        case 'dang-ki-tai-khoan':
            require_once "public/account/register.php";
            break;
        case 'dang-nhap':
            require_once "public/account/login.php";
            break;
        case 'dat-lich-kham':
            require_once "public/user/datLichKham.php";
            break;
        case 'dang-xuat':
            require_once "public/account/logout.php";
            break;
        case 'admin':
            require_once "  admin/";
            break;
            //thanh tuu
        case 'thanh-tuu':
            require_once "public/thanhtuu.php";
            break;
            //bac si
        case 'bac-si':
            require_once "public/bacsi.php";
            break;
    }
}

require_once("component/footer.php");