<?php
error_reporting(0);
session_start();
ob_start();
class login {
    private $con;

    public function connectlogin() {
        // Sử dụng `mysqli` để kết nối
        $this->con = new mysqli("localhost", "usertmdt", "passtmdt", "qlbenhvien");
        
        // Kiểm tra lỗi kết nối
        if ($this->con->connect_error) {
            die("Không Kết Nối Được: " . $this->con->connect_error);
        }

        // Thiết lập mã hóa UTF-8
        $this->con->set_charset("utf8");

        return $this->con;
    }

    public function mylogin($user, $pass) {
        $pass = md5($pass);
        $sql = "SELECT maBenhNhan, hoTen, ngaySinh, diaChi, gioiTinh, sdt, email, password FROM benhnhan WHERE sdt=? AND password=? LIMIT 1";

        // Chuẩn bị câu truy vấn với prepared statement để ngăn chặn SQL Injection
        $stmt = $this->connectlogin()->prepare($sql);
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        
        // Lấy kết quả trả về
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['maBenhNhan'];
            $_SESSION['user'] = $row['sdt'];
            $_SESSION['ten'] = $row['hoTen'];
            $_SESSION['nam'] = $row['ngaySinh'];
            $_SESSION['diachi'] = $row['diaChi'];
            $_SESSION['gioitinh'] = $row['gioiTinh'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['password'];          
            header('location:../admin/admin.php');
        } else {
            return 0; // Không tìm thấy tài khoản
        }
    }

    public function confirmlogin($id, $ten, $nam, $diachi, $gioitinh, $user, $email, $pass) {
        $sql = "SELECT maBenhNhan FROM benhnhan WHERE maBenhNhan=? AND hoTen=? AND ngaySinh=? AND diaChi=? AND gioiTinh=? AND sdt=? AND email=? AND password=? LIMIT 1";

        // Chuẩn bị câu truy vấn
        $stmt = $this->connectlogin()->prepare($sql);
        $stmt->bind_param("isssssss", $id, $ten, $nam, $diachi, $gioitinh, $user, $email, $pass);

        $stmt->execute();
        
        // Lấy kết quả trả về
        $result = $stmt->get_result();
        if ($result->num_rows != 1) {
            header('location:../login/');
        }
    }
}
?>
