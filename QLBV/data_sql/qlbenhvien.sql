-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2024 lúc 05:22 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbenhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bacsi`
--

CREATE TABLE `bacsi` (
  `maBacSi` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tenBacSi` varchar(100) NOT NULL,
  `maKhoa` varchar(10) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

CREATE TABLE `benhnhan` (
  `maBenhNhan` int(11) UNSIGNED NOT NULL,
  `hoTen` varchar(30) NOT NULL,
  `ngaySinh` date NOT NULL,
  `diaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioiTinh` enum('Nam','Nữ','Tùy chỉnh') NOT NULL,
  `sdt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`maBenhNhan`, `hoTen`, `ngaySinh`, `diaChi`, `gioiTinh`, `sdt`, `email`, `password`) VALUES
(133, 'Duy Khang', '2001-05-23', '', 'Nam', '0979745946', 'duykhangtp93@gmail.com', '4297f44b13955235245b2497399d7a93'),
(134, 'Gia Huy', '2001-05-23', '', 'Nam', '0328346952', 'khangbe81@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bhyt`
--

CREATE TABLE `bhyt` (
  `maBHYT` varchar(15) NOT NULL,
  `ngayBatDau` date NOT NULL,
  `ngayKetThuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `maDichVu` varchar(10) NOT NULL,
  `tenDichVu` varchar(100) NOT NULL,
  `donGia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc`
--

CREATE TABLE `donthuoc` (
  `maDonThuoc` varchar(10) NOT NULL,
  `maThuoc` varchar(10) NOT NULL,
  `tongTien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadondichvu`
--

CREATE TABLE `hoadondichvu` (
  `maHoaDon` varchar(10) NOT NULL,
  `maLichHen` varchar(10) NOT NULL,
  `maNhanVien` int(11) NOT NULL,
  `tongTien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonthuoc`
--

CREATE TABLE `hoadonthuoc` (
  `maHoaDon` int(11) NOT NULL,
  `maDonThuoc` int(11) NOT NULL,
  `maBenhNhan` int(11) NOT NULL,
  `maNhanVien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoakham`
--

CREATE TABLE `khoakham` (
  `maKhoa` varchar(10) NOT NULL,
  `tenKhoa` varchar(50) NOT NULL,
  `chucNang` text NOT NULL,
  `phongKham` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhen`
--

CREATE TABLE `lichhen` (
  `maLichHen` int(10) UNSIGNED NOT NULL,
  `hoTen` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `sdt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khoaKham` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bacSi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngayKham` date NOT NULL,
  `gioKham` datetime NOT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhenkham`
--

CREATE TABLE `lichhenkham` (
  `maLichHen` varchar(10) NOT NULL,
  `ngayKham` datetime NOT NULL,
  `moTaSucKhoe` text NOT NULL,
  `maDichVu` varchar(10) NOT NULL,
  `maKhoa` varchar(10) NOT NULL,
  `maBacSi` int(11) NOT NULL,
  `maBenhNhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichlamviec`
--

CREATE TABLE `lichlamviec` (
  `maNhanVien` int(11) NOT NULL,
  `maBacSi` int(11) NOT NULL,
  `ngayLam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNhanVien` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `tenNhanVien` varchar(100) NOT NULL,
  `vaiTro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieukham`
--

CREATE TABLE `phieukham` (
  `maPhieuKham` varchar(10) NOT NULL,
  `maBenhNhan` int(11) NOT NULL,
  `maBacSi` int(11) NOT NULL,
  `tinhTrangBenh` text NOT NULL,
  `chuanDoan` text NOT NULL,
  `keHoachDieuTri` varchar(100) NOT NULL,
  `maDonThuoc` varchar(10) NOT NULL,
  `ghiChu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanli`
--

CREATE TABLE `quanli` (
  `maQuanli` int(11) NOT NULL,
  `tenQuanLi` varchar(100) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc`
--

CREATE TABLE `thuoc` (
  `maThuoc` varchar(10) NOT NULL,
  `tenThuoc` varchar(100) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `lieuDung` varchar(50) NOT NULL,
  `giaTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`maBacSi`),
  ADD UNIQUE KEY `maKhoa` (`maKhoa`);

--
-- Chỉ mục cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`maBenhNhan`);

--
-- Chỉ mục cho bảng `bhyt`
--
ALTER TABLE `bhyt`
  ADD PRIMARY KEY (`maBHYT`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`maDichVu`);

--
-- Chỉ mục cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD PRIMARY KEY (`maDonThuoc`),
  ADD UNIQUE KEY `maThuoc` (`maThuoc`);

--
-- Chỉ mục cho bảng `hoadondichvu`
--
ALTER TABLE `hoadondichvu`
  ADD PRIMARY KEY (`maHoaDon`),
  ADD UNIQUE KEY `maLichHen` (`maLichHen`),
  ADD UNIQUE KEY `maNhanVien` (`maNhanVien`);

--
-- Chỉ mục cho bảng `hoadonthuoc`
--
ALTER TABLE `hoadonthuoc`
  ADD PRIMARY KEY (`maHoaDon`),
  ADD UNIQUE KEY `maDonThuoc` (`maDonThuoc`),
  ADD UNIQUE KEY `maBenhNhan` (`maBenhNhan`),
  ADD UNIQUE KEY `maNhanVien` (`maNhanVien`);

--
-- Chỉ mục cho bảng `khoakham`
--
ALTER TABLE `khoakham`
  ADD PRIMARY KEY (`maKhoa`),
  ADD UNIQUE KEY `tenKhoa` (`tenKhoa`),
  ADD UNIQUE KEY `phongKham` (`phongKham`),
  ADD UNIQUE KEY `chucNang` (`chucNang`) USING HASH;

--
-- Chỉ mục cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD PRIMARY KEY (`maLichHen`);

--
-- Chỉ mục cho bảng `lichhenkham`
--
ALTER TABLE `lichhenkham`
  ADD PRIMARY KEY (`maLichHen`),
  ADD UNIQUE KEY `maDichVu` (`maDichVu`),
  ADD UNIQUE KEY `maKhoa` (`maKhoa`),
  ADD UNIQUE KEY `maBacSi` (`maBacSi`),
  ADD UNIQUE KEY `maBenhNhan` (`maBenhNhan`);

--
-- Chỉ mục cho bảng `lichlamviec`
--
ALTER TABLE `lichlamviec`
  ADD UNIQUE KEY `maNhanVien` (`maNhanVien`),
  ADD UNIQUE KEY `maBacSi` (`maBacSi`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNhanVien`);

--
-- Chỉ mục cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  ADD PRIMARY KEY (`maPhieuKham`),
  ADD UNIQUE KEY `maDonThuoc` (`maDonThuoc`),
  ADD UNIQUE KEY `maBacSi` (`maBacSi`),
  ADD UNIQUE KEY `maBenhNhan` (`maBenhNhan`);

--
-- Chỉ mục cho bảng `quanli`
--
ALTER TABLE `quanli`
  ADD PRIMARY KEY (`maQuanli`);

--
-- Chỉ mục cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`maThuoc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `maBacSi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `maBenhNhan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `hoadonthuoc`
--
ALTER TABLE `hoadonthuoc`
  MODIFY `maHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  MODIFY `maLichHen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNhanVien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quanli`
--
ALTER TABLE `quanli`
  MODIFY `maQuanli` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
