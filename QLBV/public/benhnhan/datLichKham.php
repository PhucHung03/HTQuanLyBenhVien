<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/datLichKham.js"></script>
    <!-- link -->
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
    <div id="ctn">
    <div class="header">
        <h2 style="color: #4a56e2;">Đặt Lịch Khám</h2>
        <p>Cảm ơn Quý Khách hàng đã quan tâm đến dịch vụ chăm sóc sức khỏe của Chúng tôi. Vui lòng gửi thông tin chi tiết để chúng tôi có thể sắp xếp cuộc hẹn.</p>
    </div>

    <div class="row">
        <!-- Thông Tin Bệnh Nhân -->
        <div class="col-md-6">
                <div class="section-title">Thông Tin Bệnh Nhân</div>
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ Và Tên</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Ngày Sinh</label>
                        <input type="date" class="form-control" id="dob" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số Điện Thoại</label>
                        <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa Chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ">
                    </div>
                </form>
                </div>

            <!-- Chọn Lịch Đặt -->
            <div class="col-md-6">
                <div class="section-title">Chọn Lịch Đặt</div>
                <form>
                    <div class="mb-3">
                        <label for="department" class="form-label">Khoa Khám</label>
                        <select id="department" class="form-select">
                            <option selected>Chọn khoa khám</option>
                            <option value="1">Khoa Nội</option>
                            <option value="2">Khoa Ngoại</option>
                            <option value="3">Khoa Tai Mũi Họng</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="doctor" class="form-label">Bác Sĩ</label>
                        <select id="doctor" class="form-select">
                            <option selected>Chọn bác sĩ</option>
                            <option value="1">Bác sĩ A</option>
                            <option value="2">Bác sĩ B</option>
                            <option value="3">Bác sĩ C</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="appointmentDate" class="form-label">Ngày Khám</label>
                        <input type="date" class="form-control" id="appointmentDate" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="mb-3">
                        <label for="appointmentTime" class="form-label">Giờ Khám</label>
                        <input type="time" class="form-control" id="appointmentTime" placeholder="--:-- --">
                    </div>
                    <div class="mb-3">
                        <label for="symptoms" class="form-label">Mô Tả Bệnh</label>
                        <textarea id="symptoms" class="form-control" rows="3" placeholder="Mô tả tình trạng sức khỏe của bạn"></textarea>
                    </div>
                    <button id="bt1" type="submit">Đặt lịch khám</button>
                </form>
            </div>
        </div>
    </div>

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