<?php 
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');

if(!isset($_GET['quanli'])) {
    require_once "home.php";
}else {
    switch ($_GET['quanli']) {
   
        case 'xem-benh-nhan':
            require_once "bacsi/xembenhnhan.php";         
            break;
        
        case 'xem-lich-lam-viec':
            require_once "bacsi/xemlichlamviec.php";         
            break;

            case 'giao-dien-xem-lich':
                require_once "bacsi/giaodienxemlich.php";         
                break;

                case 'QL-LichKham':
                    require_once "bacsi/QLLichKham.php";         
                    break;  

                    case 'QL-LichLamViec':
                        require_once "bacsi/QLLichLamViec.php";         
                        break;  
    

        }
}

require_once "component_admin/footer.php";


    
ob_end_flush();
?>
