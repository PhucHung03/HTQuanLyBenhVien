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
       <p><a href="../bacsi/xemBenhNhanPhuTrach.php">< Back</a></p>
       <h4>Thông Tin Bệnh Nhân</h4>
       <div id="thongtin__left">
            <div id="thongtin__mabn"><span>Mã bệnh nhân: </span> <p> 000001</p></div>
            <div id="thongtin__hoten"><span>Họ và Tên: </span><p> Trần Văn A</p></div>
            <div id="thongtin__ngaysinh"><span>Ngày sinh: </span><p> 16/11/2000</p></div>
            <div id="thongtin__gioitinh"><span>Giới tính:</span> <p> Nam</p></div>
            <div id="thongtin__diachi"><span>Địa chỉ: </span><p> Lê Đức Thọ, quận Gò Vấp, Thành phố Hồ Chí Minh</p></div>
            <div id="thongtin__ngaykham"><span>Ngày khám: </span><p> 28/10/2024</p></div>
            <div id="thongtin__tinhtrangbenh"><span>Tình trạng bệnh: </span><p> Ho khan, sốt nhẹ (37.8°C), đau họng và mệt mỏi</p></div>
            <div id="thongtin__chandoan"><span>Chẩn đoán: </span><p> Viêm họng do nhiễm virus, có thể do cảm lạnh thông thường</p></div>
            <div id="thongtin__kehoachdieutri"><span style="width: 300px;">Kế hoạch điều trị: </span><p > Nghỉ ngơi, uống nhiều nước, và dùng thuốc hạ sốt nếu cần. Nếu triệu chứng không cải thiện sau 5 ngày hoặc có biểu hiện nặng hơn (sốt cao, khó thở), cần tái khám ngay</p></div>
            <div id="thongtin__lichsukhambenh"><span>Lịch sử khám bệnh: </span><p> 24-02-2023: Viêm dạ dày, đã điều trị bằng thuốc kháng axit và ổn định.</p></div>
       </div>
       <div id="thongtin__right"><img src="../img/anhthe.png" alt=""></div>
    </div>
   </section>
</body>
<?php
require('../component_admin/footer.php');
?>