<?php
    include("../xuly/clsquantri.php");
    $p = new quantri();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chi tiết bệnh nhân</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
     <link rel="stylesheet" href="../css/bacsi.css">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

<?php 
require('../component_admin/sidebar.php');
require('../component_admin/topbar.php');
?>

<body>
   <section class="container-fluid pt-4 px-4" >
    <div class="bg-light text-center rounded p-4">
       <p><a href="../bacsi/xemBenhNhanPhuTrach.php">< Trở lại</a></p>
       <h4>Thông Tin Bệnh Nhân</h4>
       <div id="thongtin__left">
            <?php
                $sql = "SELECT 
                    benhnhan.maBenhNhan, benhnhan.tenBenhNhan, benhnhan.namSinh, benhnhan.gioiTinh, benhnhan.diaChi,
                    phieukham.ngayKham, phieukham.tinhTrangBenh, phieukham.chanDoan, phieukham.keHoachDieuTri
                    FROM benhnhan
                    INNER JOIN phieukham ON benhnhan.maBenhNhan = phieukham.maBenhNhan
                    WHERE benhnhan.maBenhNhan = '$maBenhNhan'";  // $maBenhNhan là biến bạn sẽ truyền vào hàm
            
            $p->xemchitietbenhnhan($sql);
            ?>
       </div>
       <div id="thongtin__right"><img src="../img/anhthe.png" alt=""></div>
    </div>
   </section>
</body>
<?php
require('../component_admin/footer.php');
?>