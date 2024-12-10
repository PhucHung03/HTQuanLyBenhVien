
<?php
    session_start();    
    if (isset($_SESSION['id']) && isset($_SESSION['ten']) && isset($_SESSION['nam']) && isset($_SESSION['diachi']) && isset($_SESSION['gioitinh']) && isset($_SESSION['user']) && isset($_SESSION['email']) && isset($_SESSION['pass']) && isset($_SESSION['quyen'])){
        include("../class/clslogin.php");
        $p = new login();
        // Kiểm tra lại các giá trị session với cơ sở dữ liệu để xác nhận tính hợp lệ
        $p->confirmlogin($_SESSION['id'], $_SESSION['ten'],$_SESSION['nam'],$_SESSION['diachi'],$_SESSION['gioitinh'],$_SESSION['user'],$_SESSION['email'],$_SESSION['pass'],$_SESSION['quyen']);
    } else {
        // Nếu thiếu bất kỳ giá trị nào, chuyển hướng đến trang đăng nhập
        header('location:../account/login.php');
        exit();
    }

    $hoTen = isset($_SESSION['ten']) ? $_SESSION['ten'] : '';  
    $ngaySinh = isset($_SESSION['nam']) ? $_SESSION['nam'] : '';
    $sdt = isset($_SESSION['user']) ? $_SESSION['user'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hoTen = isset($_POST['hoTen']) ? $_POST['hoTen'] : $hoTen;
        $ngaySinh = isset($_POST['ngaySinh']) ? $_POST['ngaySinh'] : $ngaySinh;
        $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : $sdt;
        $email = isset($_POST['email']) ? $_POST['email'] : $email;
    }
?>
<?php   
if (isset($_POST['nut'])) {
    error_reporting(0);
    //Lấy dữ liệu từ form
    $diaChi = $_POST['diaChi'];
    $khoaKham = $_POST['khoaKham'];
    $bacSi = $_POST['bacSi'];
    $ngayKham = $_POST['ngayKham'];
    $gioKham = $_POST['gioKham'];
    $moTa = $_POST['moTa'];
    try {

        $pdo = new PDO("mysql:host=localhost;dbname=qlbenhvien", "usertmdt", "passtmdt");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Câu lệnh SQL
        $sql = "INSERT INTO lichhen (maLichHen,hoTen, ngaySinh, sdt, email, diaChi, khoaKham, bacSi, ngayKham, gioKham, moTa) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        
        // Chuẩn bị statement
        $stmt = $pdo->prepare($sql);

        // Thực thi statement với mảng giá trị
        $stmt->execute([
            Null,
            $hoTen,
            $ngaySinh,
            $sdt,
            $email,
            $diaChi,
            $khoaKham,
            $bacSi,
            $ngayKham,
            $gioKham,
            $moTa
        ]);

        echo "<script>alert('Đặt lịch khám thành công!');</script>";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
    // Đóng kết nối
    $pdo = null;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chỉnh Sửa Dữ Liệu</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    <script src="../js/datLichKham.js"></script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
	integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
<style>
        #ctn {
            margin: 0px auto;
            margin-top: 50px;
            max-width: 800px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            color: #4a56e2;
        }
        .header h2 {
            font-weight: bold;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: #4a56e2;
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
        label{
            color: black;
            font-weight: bold;
        }
        #bt1 {
            margin-left: -200px;
            background-color: #52b788;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            padding: 15px;
            width: 100%;
            margin-top: 50px;
        }
        
    </style>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                    <div class="header__top">
                        <ul>
                            <li ><button class="" rel="tel:0284567890" style="border-radius:20px; background-color: rgb(243, 11, 11); border: none;">
                                <i class="fa fa-heart" style="color: #fcfcfc;"></i>	<span style="color: #ffffff;">Cấp cứu (028) 456-7890</span>
                                </button>
                            </li>
                            <li><button href="tel:19002003" style="border-radius:20px;background-color: rgb(21, 176, 21); border: none;" >
                                <i class="fa fa-phone" style="color: #ffffff;"></i>	<span style="color: #ffffff;">1900 2003</span>
                                </button>
                            </li>               
                            <li><a href="datLichKham.php"><?php echo $_SESSION['ten'];?>!</a>
                            <a href="../account/logout.php">Thoát</a></li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-3 " style="text-align: center; padding-bottom: 5px;">
                    <div class="header__img">
                        <img src="../img/cih (1).svg" alt="" style="width: 250px;">
                    </div> 
                </div>
                <div class="col-lg-8 col-sm-3 ml-5">
                    <div class="header__right">
                        <div class="header__menu">
                            <ul>
                                <li><a href="../index.html"><h5>TRANG CHỦ</h5></a></li>
                                <li><a href=""><h5>CHUYÊN KHOA</h5></a></li>
                                <li><a href=""><h5>BÁC SĨ</h5></a></li>
                                <li><a href=""><h5>DỊCH VỤ</h5></a>
                                    <ul class="dropdown">
                                        <li><a href="">Bảng giá dịch vụ</a></li>
                                        <li><a href="">Quy trình nhập viện</a></li>
                                        <li><a href="">Quy trình xuất viện</a></li>
                                        <li><a href="">Liên hệ với chúng tôi</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><h5>THÀNH TỰU</h5></a></li>
                                <li><a href=""><h5>TIN TỨC</h5></a></li>
                                <li><a href=""><h5>BỆNH NHÂN</h5></a>
                                    <ul class="dropdown">
                                        <li><a href="datLichKham.php">Đặt lịch khám</a></li>
                                        <li><a href="">Tra cứu thông tin</a></li>
                                    </ul>
                                </li>
                            </ul>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- end header  -->
    <div>
        <img src="../img/banner-phuc-hoi-chuc-nang-deskto.jpg" alt="">
    </div>
    <!-- section  -->
     <!-- footer -->
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer__system">
                    <h5>Hệ thống ST</h5>
                    <ul>
                        <li><a href="#">Tầm nhìn sứ mệnh</a></li>
                        <li><a href="#">Hệ thống cơ sở y tế </a></li>
                        <li><a href="#">Tìm bác Sĩ</a></li>
                        <li><a href="#">Việc làm tại ST</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer__system" >
                    <h5>Dịch vụ</h5>
                    <ul>
                        <li><a href="#">Chuyên Khoa</a></li>
                        <li><a href="#">Gói dịch vụ </a></li>
                        <li><a href="#">Bảo hiểm</a></li>
                        <li><a href="#">Đặt lịch hẹn</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 center footer__system">
                    <h5>Hệ thống ST</h5>
                    <ul>
                        <li><a href="#">Tầm nhìn sứ mệnh</a></li>
                        <li><a href="#">Hệ thống cơ sở y tế </a></li>
                        <li><a href="#">Tìm bác Sĩ</a></li>
                        <li><a href="#">Việc làm tại ST</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Bản quyền &copy; 2024 thuộc về Bệnh viện Đa khoa ST <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Sáng Tạo Hospital</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
     </footer>
</body>
</html>