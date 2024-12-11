<?php
// Kết nối cơ sở dữ liệu
require_once("../config/config.php");
$maLichHen = isset($_GET['maLichHen']) ? $_GET['maLichHen'] : null;
$lichHen = null;

// Lấy thông tin lịch hẹn theo mã
if ($maLichHen) {
    $sql = "SELECT lhk.maLichHen, lhk.maBenhNhan, bn.tenBenhNhan, lhk.ngayKham
            FROM lichhenkham lhk
            JOIN benhnhan bn ON lhk.maBenhNhan = bn.maBenhNhan
            WHERE lhk.maLichHen = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $maLichHen);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $lichHen = $result->fetch_assoc();
    } else {
        die("Không tìm thấy lịch hẹn.");
    }
}

// Xử lý cập nhật ngày khám
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $ngayKham = $_POST['ngayKham'];

    $sql = "UPDATE lichhenkham SET ngayKham = ? WHERE maLichHen = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ngayKham, $maLichHen);

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Cập nhật thành công!</p>";
    } else {
        echo "<p style='color: red;'>Cập nhật thất bại!</p>";
    }

   
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa ngày khám</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Chỉnh sửa ngày khám</h1>

        <?php if ($lichHen): ?>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Mã lịch hẹn</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($lichHen['maLichHen']); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mã bệnh nhân</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($lichHen['maBenhNhan']); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tên bệnh nhân</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($lichHen['tenBenhNhan']); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ngày khám</label>
                    <input type="date" name="ngayKham" class="form-control" value="<?php echo htmlspecialchars($lichHen['ngayKham']); ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-success">Cập nhật</button>
                <a href="?quanli=quan-ly-lich-kham" class="btn btn-secondary">Quay lại</a>
            </form>
        <?php else: ?>
            <p class="text-danger">Không tìm thấy lịch hẹn!</p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
