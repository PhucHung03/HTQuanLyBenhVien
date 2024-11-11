<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <style>
        .login-container {
            margin: 0px auto;
            background-color: #ffffff;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header-spacing {
            margin-top: 50px; /* Tạo khoảng cách 50px giữa header và form */
        }
        .login-container h2 {
            color: #4b72fa;
            font-weight: bold;
        }
        .form-group label {
            font-weight: 600;
            color: #555;
        }
        .form-control {
            height: 45px;
            border-radius: 10px;
            border: 1px solid #ddd;
            padding-left: 15px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #667eea;
        }
        .btn-login {
            background-color: #667eea;
            color: #fff;
            font-weight: 600;
            border: none;
            width: 100%;
            height: 45px;
            border-radius: 10px;
            transition: background 0.3s;
        }
        .btn-login:hover {
            background-color: #5a67d8;
        }
        .footer-links {
            margin-top: 20px;
        }
        .footer-links a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
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
                            <li><a href="dangNhap.php">Đăng nhập /</a>
                            <a href="dangKy.php">Đăng kí</a></li>
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

    <!-- section  -->
     <div class="header-spacing" >
        <div class="login-container">
            <h2>Đăng Nhập</h2>
            <p>đơn giản và dễ dàng</p>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" placeholder="Nhập email hoặc số điện thoại">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" class="btn btn-login">Đăng Nhập</button>
            </form>
            <div class="footer-links mt-3">
                <a href="quenMatKhau.php">Quên mật khẩu?</a> | <a href="dangKy.php">Đăng ký tài khoản</a>
            </div>
        </div>
     </div>
    <!-- footer -->
     <footer class="footer" style="margin-top: 50px;">
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