<?php

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
            case 'tra-cuu-tt':
                require_once "public/view/tracuubenhnhan.php";
                break;
    }
}

require_once("component/footer.php");
