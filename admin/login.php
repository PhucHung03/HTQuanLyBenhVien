<?php
session_start(); // Khởi động session

// Kiểm tra nếu người dùng đã đăng nhập rồi thì chuyển hướng tới trang chính
if (isset($_SESSION['sdt'])) {
    header("Location: index.php?quanli=tao-phieu-kham");
    exit;
}

if (isset($_POST['login'])) {
    // Lấy thông tin đăng nhập từ form
    $sdt = $_POST['sdt']; 
    $password = $_POST['password'];

    // Kết nối cơ sở dữ liệu
    include("../xuly/clsquantri.php");
    $p = new quantri();
    $conn = $p->connect();

    // Kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM user WHERE sdt = '$sdt' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['sdt'] = $user['sdt']; // Lưu số điện thoại vào session
        $_SESSION['hoTen'] = $user['hoTen']; // Lưu tên người dùng vào session

        // Chuyển hướng đến trang tạo phiếu khám
        header("Location: index.php?quanli=tao-phieu-kham");
        exit;
    } else {
        $error = "Thông tin đăng nhập sai!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .login-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Đăng Nhập</h2>
        <form method="POST">
            <input type="text" name="sdt" placeholder="Số điện thoại" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit" name="login">Đăng Nhập</button>
        </form>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
