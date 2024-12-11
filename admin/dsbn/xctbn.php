<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "khoa"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the maBenhNhan from the URL
$maBenhNhan = $_GET['maBenhNhan'] ?? null;

if ($maBenhNhan) {
    // Fetch detailed patient information based on maBenhNhan, including data from phieukham
    $sql = "
        SELECT benhnhan.*, phieukham.ngayTao, phieukham.maPhieuKham, phieukham.chanDoan, phieukham.keHoachDieuTri, phieukham.ghiChu
        FROM benhnhan
        LEFT JOIN phieukham ON benhnhan.maPhieuKham = phieukham.maPhieuKham
        WHERE benhnhan.maBenhNhan = ?
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $maBenhNhan); // Binding the maBenhNhan parameter
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $patient = $result->fetch_assoc();
    } else {
        $patient = null;
    }

    $stmt->close();
} else {
    $patient = null;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Bệnh Nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6">
    <div class="mx-auto bg-white rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4 text-gray-700">Chi Tiết Bệnh Nhân</h1>

        <?php if ($patient): ?>
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Thông Tin Bệnh Nhân</h2>
                <p><strong>Họ tên:</strong> <?= htmlspecialchars($patient['tenBenhNhan']) ?></p>
                <p><strong>Số điện thoại:</strong> <?= htmlspecialchars($patient['sdt']) ?></p>
                <p><strong>Lịch sử khám chữa bệnh:</strong> <?= htmlspecialchars($patient['ngayTao']) ?></p>
                <p><strong>Mã phiếu khám:</strong> <?= htmlspecialchars($patient['maPhieuKham']) ?></p>

                <!-- Check if 'chanDoan' is set and not null (from phieukham) -->
                <p><strong>Chuẩn đoán:</strong> <?= htmlspecialchars($patient['chanDoan'] ?? 'Chưa có thông tin') ?></p>
                <!-- Check if 'keHoachDieuTri' is set and not null (from phieukham) -->
                <p><strong>Kế hoạch điều trị:</strong> <?= htmlspecialchars($patient['keHoachDieuTri'] ?? 'Chưa có thông tin') ?></p>
                <!-- Check if 'ghiChu' is set and not null (from phieukham) -->
                <p><strong>Ghi chú:</strong> <?= htmlspecialchars($patient['ghiChu'] ?? 'Chưa có thông tin') ?></p>
            </div>

            <a href="index.php?quanli=tra-cuu-benh-nhan" class="text-blue-500 hover:underline">Quay lại danh sách bệnh nhân</a>
        <?php else: ?>
            <p class="text-red-500">Không tìm thấy bệnh nhân với mã bệnh nhân này.</p>
        <?php endif; ?>
    </div>
</body>
</html>
