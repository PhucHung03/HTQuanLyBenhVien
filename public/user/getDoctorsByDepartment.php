<?php
    $pdo = new PDO("mysql:host=localhost;dbname=qlbenhvien", "usertmdt", "passtmdt");
    $maKhoa = $_GET['maKhoa'] ?? '';
    $stmt = $pdo->prepare("SELECT maBacSi, tenBacSi FROM bacsi WHERE maKhoa = ?");
    $stmt->execute([$maKhoa]);
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>