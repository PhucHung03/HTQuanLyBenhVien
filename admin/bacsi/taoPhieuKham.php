<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tạo phiếu khám</title>
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
        <h4 id="title_taophieukham">Tạo Phiếu Khám</h4>
        <div class="danhsach__thongtin">
            <div id="phieukham__mabn"><span>Mã bệnh nhân :</span> <input type="text" placeholder="Nhập mã bệnh nhân"></div>
            <div id="phieukham__hoten"><span>Họ và tên : </span><p></p></div>
            <div id="phieukham__ngaysinh"><span>Ngày sinh : </span><p></p></div>
            <div id="phieukham__gioitinh"><span>Giới tính : </span><p></p></div>
            <div id="phieukham__sodienthoai"><span>Số điện thoại : </span><p></p></div>
            <div id="phieukham__diachi"><span>Địa chỉ : </span><p></p></div>
            <div id="phieukham__tinhtrangbenh"><span>Tình trạng bệnh :</span>
                <textarea name="tinhtrangbenh" id="" placeholder="Nhập tình trạng bệnh của bệnh nhân"></textarea>
            </div>
            <div id="phieukham__chandoan"><span>Chẩn đoán :</span>
                <textarea name="chandoan" id="" placeholder="Nhập chẩn đoán bệnh cho bệnh nhân"></textarea>
            </div>
            <div id="phieukham__kehoachdieutri"><span>Kế hoạch điều trị :</span>
                <textarea name="kehoachdieutri" id="" placeholder="Nhập kế hoạch điều trị cho bệnh nhân"></textarea>
            </div>
            <div id="phieukham__thuockedon"><span>Thuốc kê đơn :</span>
                <textarea name="thuockedon" id="" placeholder="Nhập đơn thuốc của bệnh nhân"></textarea>
            </div>
            <div id="phieukham__ghichu"><span>Ghi chú :</span>
                <textarea name="ghichu" id="" placeholder="Ghi chú của bác sĩ"></textarea>
            </div>
            <button  id="btn__taophieukham">Tạo Phiếu Khám</button>
        </div>
    </div>
   </section>
</body>

<?php
require('../component_admin/footer.php');
?>