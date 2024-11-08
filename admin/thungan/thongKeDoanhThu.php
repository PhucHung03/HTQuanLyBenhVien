<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thống Kê Doanh Thu</title>
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
    <link rel="stylesheet" href="../css/thungan.css">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
        <h4>THỐNG KÊ DOANH THU HẰNG NGÀY</h4>
        <div id="top__header">
            <strong id="title_header">Chọn ngày: <input id="chonngay"></strong>
            <form class="search__form">
                <input id="form__search" type="search" placeholder="Tìm kiếm hóa đơn..." aria-label="Search">
                <button id="btn__search" type="submit"><img src="../img/search.png" alt=""></button>
            </form>
        </div>
        <div id="table__danhsach">
=======
<div class="thongKeDoanhThu">
<section class="container-fluid pt-4 px-4" >
    <div class="bg-light text-center rounded p-4">
        <h4>THỐNG KÊ DOANH THU HẰNG NGÀY</h4>
        <div id="top__header">
            <strong id="title_header">Chọn ngày: <input type="date" id="chonngay"></strong>
            
            <form class="d-flex">
                <input id="form__search" type="search" placeholder="Tìm kiếm hóa đơn..." aria-label="Search">
                <button id="btn__search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div id="table__danhsach">
>>>>>>> 8159146 (them giao dien)
                <div class="row header">
                    <div class="col-4 col-sm-1 stt">STT</div>
                    <div class="col-4 col-lg-2">Mã hóa đơn</div>
                    <div class="col-4 col-lg-2">Dịch vụ</div>
                    <div class="col-4 col-lg-2">Tiền viện phí</div>
                    <div class="col-4 col-lg-2">Tiền thuốc</div>
                    <div class="col-4 col-lg-2">Chi phí khác</div>
                 </div>
                 <div class="row">
                    <div class="col-4 col-sm-1 stt">1</div>
                    <div class="col-4 col-lg-2">000001</div>
                    <div class="col-4 col-lg-2">120.000đ</div>
                    <div class="col-4 col-lg-2">1220.000đ</div>
                    <div class="col-4 col-lg-2">350.000đ</div>
                    <div class="col-4 col-lg-2">23.000đ</div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-1">2</div>
                    <div class="col-4 col-lg-2">000002</div>
                    <div class="col-4 col-lg-2">210.000đ</div>
                    <div class="col-4 col-lg-2">440.000đ</div>
                    <div class="col-4 col-lg-2">200.000đ</div>
                    <div class="col-4 col-lg-2">150.000đ</div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-1">3</div>
                    <div class="col-4 col-lg-2">000003</div>
                    <div class="col-4 col-lg-2">530.000đ</div>
                    <div class="col-4 col-lg-2">420.000đ</div>
                    <div class="col-4 col-lg-2">110.000đ</div>
                    <div class="col-4 col-lg-2">70.000đ</div>
                </div>
            </div>
            <button type="button" class="btn btn-success btn__xuatbaocao">Xuất báo cáo</button>
            <div id="title__tongtien"><strong>Tổng doanh thu : <p>1.780.000đ</p></strong></div>
<<<<<<< HEAD
    </div>
   </section>
</body>

<?php
require('../component_admin/footer.php');
?>
<script>
   flatpickr("#chonngay", {
            defaultDate: new Date(), // Đặt ngày hiện tại
            dateFormat: "d/m/Y" // Định dạng ngày
        });
</script>
=======
        </div>
    </div>
   </section>
</div>
>>>>>>> 8159146 (them giao dien)
