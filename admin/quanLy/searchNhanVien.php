<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khoa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy từ khóa tìm kiếm
$search = isset($_POST['search']) ? trim($_POST['search']) : '';

// Tìm kiếm theo mã nhân viên
if ($search) {
    $sql = "SELECT 
                nhanvien.maNhanVien, 
                nhanvien.tenNhanVien, 
                lichlamviec.ngayLam
            FROM 
                nhanVien nhanvien
            JOIN 
                lichLamViec lichlamviec
            ON 
                nhanvien.maNhanVien = lichlamviec.maNhanVien
            WHERE 
                nhanvien.maNhanVien = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $sql = "SELECT 
                nhanvien.maNhanVien, 
                nhanvien.tenNhanVien, 
                lichlamviec.ngayLam
            FROM 
                nhanVien nhanvien
            JOIN 
                lichLamViec lichlamviec
            ON 
                nhanvien.maNhanVien = lichlamviec.maNhanVien";
    $result = $conn->query($sql);
}

// Trả dữ liệu JSON
$data = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($data);
?>
