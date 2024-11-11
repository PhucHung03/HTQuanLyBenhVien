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
    <style>
        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }
        .gender-group {
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
        }
        .gender-group label {
            width: 32%;
            text-align: center;
            font-weight: normal;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        } 
        .gender-group input[type="radio"] {
            display: none;
        }
        .gender-group input[type="radio"]:checked + label {
            background-color: #e6f4ea;
            border-color: #52b788;
        } 
        .header-spacing {
            margin-top: 50px; /* Tạo khoảng cách 50px giữa header và form */
        }
        .form-container {
            margin: 0 auto;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        .form-container h2 {
            color: #4b72fa;
            font-weight: bold;
            text-align: center;
        }
        .form-container p {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .gender-buttons {
            display: flex;
            justify-content: space-between;
        }
        .gender-buttons button {
            width: 32%;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
            color: #555;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .gender-buttons button:hover {
            background-color: #4b72fa;
            color: white;
        }
        .btn-primary {
            background-color: #4b72fa;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #3a5ec4;
        }
    </style>
    <script src="../js/dangKy.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="header__top">
                    <ul>
                        <li>
                            <button style="border-radius:20px; background-color: rgb(243, 11, 11); border: none;">
                                <i class="fa fa-heart" style="color: #fcfcfc;"></i>
                                <span style="color: #ffffff;">Cấp cứu (028) 456-7890</span>
                            </button>
                        </li>
                        <li>
                            <button style="border-radius:20px;background-color: rgb(21, 176, 21); border: none;">
                                <i class="fa fa-phone" style="color: #ffffff;"></i>
                                <span style="color: #ffffff;">1900 2003</span>
                            </button>
                        </li>
                        <li><a href="dangNhap.php">Đăng nhập /</a><a href="dangKy.php">Đăng kí</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-3 text-center" style="padding-bottom: 5px;">
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

    <!-- form đăng ký -->
    <div class="header-spacing">
        <div class="form-container">
            <h2>Đăng Ký Tài Khoản</h2>
            <p>để đăng ký nhanh chóng</p>
            <form>
                <!-- Tên -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Họ">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên">
                </div>

                <!-- Ngày Sinh -->
                <div class="form-group">
                    <label for="dob" class="text-muted">Ngày Sinh</label>
                    <div class="d-flex">
                        <input type="number" class="form-control mr-2" placeholder="Ngày" min="1" max="31" required>
                        <select class="form-control mr-2">
                            <option value="">Tháng</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <!-- Thêm các tháng khác -->
                        </select>
                        <input type="number" class="form-control" placeholder="Năm" min="1960" max="2024" required>
                    </div>
                </div>

                <!-- Giới Tính -->
                <label for="dob" class="text-muted">Giới Tính</label>
                    <div class="gender-group" >
                        <input type="radio" id="female" name="gender" value="Nữ">
                        <label for="female">Nữ</label>
                        
                        <input type="radio" id="male" name="gender" value="Nam">
                        <label for="male">Nam</label>
                        
                        <input type="radio" id="other" name="gender" value="Tùy chỉnh">
                        <label for="other">Tùy chỉnh</label>
                    </div>
                <label>

                <!-- Thông Tin -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Số điện thoại di động">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu mới">
                </div>
                <button type="submit" class="btn btn-primary">Đăng Ký</button>
            </form>
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
                        <li><a href="#">Hệ thống cơ sở y tế</a></li>
                        <li><a href="#">Tìm bác Sĩ</a></li>
                        <li><a href="#">Việc làm tại ST</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer__system">
                    <h5>Dịch vụ</h5>
                    <ul>
                        <li><a href="#">Chuyên Khoa</a></li>
                        <li><a href="#">Gói dịch vụ</a></li>
                        <li><a href="#">Bảo hiểm</a></li>
                        <li><a href="#">Đặt lịch hẹn</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer__system">
                    <h5>Hệ thống ST</h5>
                    <ul>
                        <li><a href="#">Tầm nhìn sứ mệnh</a></li>
                        <li><a href="#">Hệ thống cơ sở y tế</a></li>
                        <li><a href="#">Tìm bác Sĩ</a></li>
                        <li><a href="#">Việc làm tại ST</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright__text">
                        <p>Bản quyền &copy; 2024 thuộc về Bệnh viện Đa khoa ST <i class="fa fa-heart"></i> by <a href="#" target="_blank">Sáng Tạo Hospital</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
