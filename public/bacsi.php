<?php
    include("myclass/clsbacsi.php");
    $p = new clsbacsi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: rgb(37, 37, 37);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .photo{
            margin-top: 140px;
            margin-bottom: 20px;
            display: block;
            max-width: 100%;
            height: auto;
        }

        .doctor-card {
            display: flex;
            align-items: center;
            background-color: #f4f4f4;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .doctor-card img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
        }

        .doctor-info {
            flex: 1;
        }

        .doctor-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .doctor-title {
            font-size: 16px;
            margin-bottom: 10px;
            color: #585858;
        }

        .doctor-desc {
            font-size: 14px;
            line-height: 1.5;
            color: #000000;
        }

        .doctor-actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                    <div class="header__top">
                        <ul>
                            <li><button href="tel:19002003" style="border-radius:20px;background-color: rgb(10, 104, 10); border: none;" >
                                <i class="fa fa-phone" style="color: #ffffff;"></i>	<span style="color: #ffffff; padding: 10px;">1900 2003</span>
                                </button>
                            </li>
                            <li ><button  rel="tel:0284567890" style="border-radius:20px; background-color: rgb(243, 11, 11); border: none;">
                                <i class="fa fa-heart" style="color: #ffffff;"></i>	<span style="color: #ffffff;padding: 10px;">Cấp cứu (028) 456 7890</span>
                                </button>
                            </li>
                            <li><button href="tel:19002003" style="border-radius:20px;background-color: rgb(21, 176, 21); border: none;" >
                                <i class="fa fa-calendar" style="color: #ffffff;"></i>	<span style="color: #ffffff;padding: 10px;">Đặt lịch khám</span>
                                </button>
                            </li>
                            <li>
                                <a href="">Đăng nhập / </a>
                                <a href="">Đăng kí</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="container-fluid header__menu">
            <div class="row">
                <div class="col-lg-4 col-sm-3 " style="text-align: center; padding-bottom: 5px;">
                    <div class="header__img">
                        <img src="img/sang tao hospital.png" alt="" style="width: 300px;">
                    </div> 
                </div>
                <div class="col-lg-8 col-sm-3 ml-5">
                    <div class="header__right">
                        <div class="header__menu">
                            <ul>
                                <li><a href=""><h5>TRANG CHỦ</h5></a></li>
                                <li><a href=""><h5>CHUYÊN KHOA</h5></a></li>
                                <li><a href="bacsi.php"><h5>BÁC SĨ</h5></a></li>
                                <li><a href=""><h5>DỊCH VỤ</h5></a>
                                    <ul class="dropdown">
                                        <li><a href="">Bảng giá dịch vụ</a></li>
                                        <li><a href="">Quy trình nhập viện</a></li>
                                        <li><a href="">Quy trình xuất viện</a></li>
                                        <li><a href="">Liên hệ với chúng tôi</a></li>
                                    </ul>
                                </li>
                                <li><a href="thanhtuu.php"><h5>THÀNH TỰU</h5></a></li>
                                <li><a href=""><h5>TIN TỨC</h5></a></li>
                                <li><a href=""><h5>BỆNH NHÂN</h5></a>
                                    <ul class="dropdown">
                                        <li><a href="">Đặt lịch khám</a></li>
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
    <div class="container">
    <div class="photo"><img src="img/headerbs.jpg" alt="" width="100%"></div>
        <?php
            $p->xemBacSi();
        ?>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer__descrice">
                    <h4>Bệnh viện Sáng Tạo</h4>
                    <hr>
                    <p>Số 3, đường 17A, P. Bình Trị Đông B, Quận Bình Tân, TP.HCM</p>
                    <p>Tổng đài: 1900 8146</p>
                    <p>Cấp cứu 24/7: (028) 6290 1155</p>
                    <p>Email: sangtaoHospital@st.com.vn</p>    
                </div>
                <div class="col-lg-4 footer__system" >
                    <h4>Dịch vụ</h4>
                    <ul>
                        <li><a href="#">Chuyên Khoa</a></li>
                        <li><a href="#">Gói dịch vụ </a></li>
                        <li><a href="#">Bảo hiểm</a></li>
                        <li><a href="#">Đặt lịch hẹn</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer__search" >
                  <div><img src="img/logoFooter.png" alt="logoFooter"></div>
                  <div><p>THEO DÕI TIN TỨC VÀ DỊCH VỤ MỚI NHẤT CỦA CHÚNG TÔI</p></div>
                  <div class=" email-container">
                    <label><input class="text-content-footer input-email form-control" type="email" placeholder="Email của bạn"></label>
                    <button class="btn btn-success">Gửi</button>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Bản quyền &copy; 2024 thuộc về Bệnh viện Sáng Tạo <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Sáng Tạo Hospital</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
     </footer>

    </body>