<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Xem bệnh nhân phụ trách</title>
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
        <div id="top__header">
            <strong id="title_header">Danh sách bệnh nhân phụ trách</strong>
            <form class="d-flex">
                <input id="form__search" type="search" placeholder="Tìm kiếm bệnh nhân..." aria-label="Search">
                <button id="btn__search" type="submit"><img src="../img/search.png" alt=""></button>
            </form>
            <div id="table__danhsach">
                <div class="row header">
                    <div class="col-4 col-sm-1 stt">STT</div>
                    <div class="col-4 col-lg-2">Mã bệnh nhân</div>
                    <div class="col-4 col-lg-2">Họ và tên</div>
                    <div class="col-4 col-lg-2">Ngày sinh</div>
                    <div class="col-4 col-lg-2">Liên hệ</div>
                    <div class="col-4 col-lg-2">Thao tác</div>
                 </div>
                 <div class="row">
                    <div class="col-4 col-sm-1 stt">1</div>
                    <div class="col-4 col-lg-2">000001</div>
                    <div class="col-4 col-lg-2">Nguyễn Văn A</div>
                    <div class="col-4 col-lg-2">01/01/1980</div>
                    <div class="col-4 col-lg-2">0123456789</div>
                    <div class="col-4 col-lg-2"><button><a href="../bacsi/xemChiTietBenhNhan.php">Xem chi tiết</a></button></div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-1">2</div>
                    <div class="col-4 col-lg-2">000002</div>
                    <div class="col-4 col-lg-2">Trần Thị B</div>
                    <div class="col-4 col-lg-2">02/10/1986</div>
                    <div class="col-4 col-lg-2">0123456789</div>
                    <div class="col-4 col-lg-2"><button><a href="../bacsi/xemChiTietBenhNhan.php">Xem chi tiết</a></button></div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-1">3</div>
                    <div class="col-4 col-lg-2">000003</div>
                    <div class="col-4 col-lg-2">Võ Minh Hiếu</div>
                    <div class="col-4 col-lg-2">30/11/2000</div>
                    <div class="col-4 col-lg-2">0123456789</div>
                    <div class="col-4 col-lg-2"><button><a href="../bacsi/xemChiTietBenhNhan.php">Xem chi tiết</a></button></div>
                </div>
            </div>
        </div>
    </div>
   </section>
</body>

<?php
require('../component_admin/footer.php');
?>
=======
<div class="xemBenhNhanPhuTrach">
    <section class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div id="top__header">
                <strong id="title_header">Danh sách bệnh nhân phụ trách</strong>
                <form class="d-flex">
                    <input id="form__search" type="search" placeholder="Tìm kiếm bệnh nhân..." aria-label="Search">
                    <button id="btn__search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div id="table__danhsach">
                    <div class="row header">
                        <div class="col-4 col-sm-1 stt">STT</div>
                        <div class="col-4 col-lg-2">Mã bệnh nhân</div>
                        <div class="col-4 col-lg-2">Họ và tên</div>
                        <div class="col-4 col-lg-2">Ngày sinh</div>
                        <div class="col-4 col-lg-2">Liên hệ</div>
                        <div class="col-4 col-lg-2">Thao tác</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-1 stt">1</div>
                        <div class="col-4 col-lg-2">000001</div>
                        <div class="col-4 col-lg-2">Nguyễn Văn A</div>
                        <div class="col-4 col-lg-2">01/01/1980</div>
                        <div class="col-4 col-lg-2">0123456789</div>
                        <div class="col-4 col-lg-2"><button><a href="index.php?quanli=xem-chi-tiet-benh-nhan-phu-trach">Xem chi tiết</a></button></div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-1">2</div>
                        <div class="col-4 col-lg-2">000002</div>
                        <div class="col-4 col-lg-2">Trần Thị B</div>
                        <div class="col-4 col-lg-2">02/10/1986</div>
                        <div class="col-4 col-lg-2">0123456789</div>
                        <div class="col-4 col-lg-2"><button><a href="index.php?quanli=xem-chi-tiet-benh-nhan-phu-trach">Xem chi tiết</a></button></div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-1">3</div>
                        <div class="col-4 col-lg-2">000003</div>
                        <div class="col-4 col-lg-2">Võ Minh Hiếu</div>
                        <div class="col-4 col-lg-2">30/11/2000</div>
                        <div class="col-4 col-lg-2">0123456789</div>
                        <div class="col-4 col-lg-2"><button><a href="index.php?quanli=xem-chi-tiet-benh-nhan-phu-trach">Xem chi tiết</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
>>>>>>> 8159146 (them giao dien)
