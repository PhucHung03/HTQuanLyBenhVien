-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2024 lúc 04:24 PM
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
  `tenBacSi` varchar(100) NOT NULL,
  `maKhoa` varchar(10) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bacsi`
--

INSERT INTO `bacsi` (`maBacSi`, `tenBacSi`, `maKhoa`, `hinh`, `sdt`, `email`) VALUES
(10123456, 'Nguyễn Văn A', 'CN006', '1.img', '0923432457', 'vana@gmail.com'),
(10123457, 'Nguyễn Văn B', 'CN006', '2.img', '0923432458', 'vanb@gmail.com'),
(10123458, 'Nguyễn Văn C', 'CN006', '3.img', '0923432459', 'vanc@gmail.com'),
(10123459, 'Nguyễn Văn D', 'DL003', '4.img', '0923432460', 'vand@gmail.com'),
(10123460, 'Nguyễn Văn E', 'DL003', '5.img', '0923432461', 'vane@gmail.com'),
(10123461, 'Nguyễn Văn F', 'DL003', '6.img', '0923432462', 'vanf@gmail.com'),
(10123462, 'Nguyễn Văn G', 'HM004', '7.img', '0923432463', 'vang@gmail.com'),
(10123463, 'Nguyễn Văn H', 'HM004', '8.img', '0923432464', 'vanh@gmail.com'),
(10123464, 'Nguyễn Văn I', 'HM004', '9.img', '0923432465', 'vani@gmail.com'),
(10123465, 'Nguyễn Văn J', 'HP006', '10.img', '0923432466', 'vanj@gmail.com'),
(10123466, 'Nguyễn Văn K', 'HP006', '11.img', '0923432467', 'vank@gmail.com'),
(10123467, 'Nguyễn Văn L', 'HP006', '12.img', '0923432468', 'vanl@gmail.com'),
(10123468, 'Nguyễn Văn M', 'KM002', '13.img', '0923432469', 'vanm@gmail.com'),
(10123469, 'Nguyễn Văn N', 'KM002', '14.img', '0923432470', 'vann@gmail.com'),
(10123470, 'Nguyễn Văn O', 'KM002', '15.img', '0923432471', 'vano@gmail.com'),
(10123471, 'Nguyễn Văn P', 'KN001', '16.img', '0923432472', 'vanp@gmail.com'),
(10123472, 'Nguyễn Văn Q', 'KN001', '17.img', '0923432473', 'vanq@gmail.com'),
(10123473, 'Nguyễn Văn R', 'KN001', '18.img', '0923432474', 'vanr@gmail.com'),
(10123474, 'Nguyễn Văn S', 'KN001', '19.img', '0923432475', 'vans@gmail.com'),
(10123475, 'Nguyễn Văn T', 'MH005', '20.img', '0923432476', 'vant@gmail.com'),
(10123476, 'Nguyễn Văn U', 'MH005', '21.img', '0923432477', 'vanu@gmail.com'),
(10123477, 'Nguyễn Văn V', 'MH005', '22.img', '0923432478', 'vanv@gmail.com'),
(10123478, 'Nguyễn Văn W', 'MH005', '23.img', '0923432479', 'vanw@gmail.com'),
(10231231, 'Nguyễn Văn Dũng', 'KN001', 'hinh bac si', '0314114123', 'dung@gmail.com'),
(10231232, 'Trần Gia Huy', 'CN006', '111.img', '0122357842', 'giahuy@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

CREATE TABLE `benhnhan` (
  `maBenhNhan` int(11) NOT NULL,
  `tenBenhNhan` varchar(100) NOT NULL,
  `namSinh` date NOT NULL,
  `gioiTinh` enum('Nam','Nữ','Tùy chỉnh') NOT NULL,
  `diaChi` text DEFAULT NULL,
  `sdt` varchar(11) NOT NULL,
  `maBHYT` varchar(15) DEFAULT NULL,
  `maPhieuKham` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`maBenhNhan`, `tenBenhNhan`, `namSinh`, `gioiTinh`, `diaChi`, `sdt`, `maBHYT`, `maPhieuKham`) VALUES
(11123461, 'Duy Khang', '2003-10-23', 'Nam', '', '0979745946', NULL, NULL);

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

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`maDichVu`, `tenDichVu`, `donGia`) VALUES
('xn0001', 'Xét nghiệm ', 250000),
('xn0002', 'Xét nghiệm máu ', 250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu_benhnhan`
--

CREATE TABLE `dichvu_benhnhan` (
  `id` int(11) NOT NULL,
  `maBenhNhan` int(11) NOT NULL,
  `maLichHen` varchar(10) NOT NULL,
  `maDichVu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu_benhnhan`
--

INSERT INTO `dichvu_benhnhan` (`id`, `maBenhNhan`, `maLichHen`, `maDichVu`) VALUES
(1, 11123456, 'LH1231', 'xn0001'),
(2, 11123456, 'LH1231', 'xn0002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc`
--

CREATE TABLE `donthuoc` (
  `maDonThuoc` varchar(10) NOT NULL,
  `maBenhNhan` varchar(11) NOT NULL,
  `danhSachTHuoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHoaDon` varchar(8) NOT NULL,
  `maBenhNhan` int(11) NOT NULL,
  `tienDichVu` double NOT NULL,
  `tienVienPhi` double NOT NULL,
  `tienThuoc` double NOT NULL,
  `chiPhiKhac` double NOT NULL,
  `ngayGiaoDich` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadondichvu`
--

CREATE TABLE `hoadondichvu` (
  `maHoaDon` varchar(10) NOT NULL,
  `maLichHen` varchar(10) NOT NULL,
  `nguoiThanhToan` varchar(100) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `hinhThucThanhToan` varchar(50) NOT NULL,
  `tongTien` double NOT NULL,
  `tienthu` int(11) NOT NULL,
  `tienthua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadondichvu`
--

INSERT INTO `hoadondichvu` (`maHoaDon`, `maLichHen`, `nguoiThanhToan`, `sodienthoai`, `hinhThucThanhToan`, `tongTien`, `tienthu`, `tienthua`) VALUES
('1', '1', 'HUNG ', '123123', 'chuyenkhoan', 1231, 123, 12),
('TT123', 'LH1231', 'hung ', '351231124', 'Tiền mặt', 250000, 250000, 500000);

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
  `hinh` varchar(100) NOT NULL,
  `mota` text NOT NULL,
  `phongKham` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khoakham`
--

INSERT INTO `khoakham` (`maKhoa`, `tenKhoa`, `chucNang`, `hinh`, `mota`, `phongKham`) VALUES
('CN006', 'Khoa phục hồi chức năng', 'Chúng tôi luôn hỗ trợ bệnh nhân với các mức độ khác nhau về sự suy giảm, hận chế chức năng, khuyết tật hay các vấn đề liên quan đến sức khỏe khác. Tại Bệnh viện Quốc tế city, chúng tôi đảm bảo rằng bệnh nhân sẽ được tận hưởng một dịch vụ chăm sóc chu đáo từ các liệu trình viên để có được kết quả điều trị tốt nhất. Khoa Phục hồi chức năng cung cấp phương pháp điều trị được thiết kế để tạo thuận lợi cho quá trình phục hồi chấn thương hoặc bệnh tật. Khoa của chúng tôi bao gồm vật lý trị liệu và hoạt động trị liệu.', 'Phuchoi_CN.jpg', 'Hoạt động trị liệu (HĐTL)là một ngành y tế phối hợp với bác sĩ và các ngành khác. Mục tiêu quan trọng nhất của HĐTL là giúp bệnh nhân có thể tham gia vào các sinh hoạt và hoạt động sống hằng ngày như mặc quần áo, ăn uống, đi vệ sinh, làm việc hay giải trí bằng cách thay đổi sự thực hiện các hoạt động hay thay đổi môi trường.', 'KN07'),
('DL003', 'Khoa da liễu ', 'Phòng khám da liễu của Bệnh viện Quốc tế City quy tụ các bác sĩ có uy tín, chuyên môn cao trong lĩnh vực Da liễu, cơ sở vật chất tiện nghi, khang trang, mang tới sự hài lòng cho người bệnh.', 'KHOA-DA-LIEU.jpg', 'Bệnh da viêm: viêm da cơ địa (chàm), viêm da tiếp xúc, viêm da tiết bã,…\r\nBệnh da nhiễm trùng: do nấm, chốc, viêm nang lông, nhiễm trùng mô mềm, ký sinh trùng (bệnh ghẻ,…), herpes, thuỷ đậu, zona, mụn cơm…\r\nBệnh da do rối loạn miễn dịch: mày đay, vảy nến, bệnh da bóng nước, bệnh lupus đỏ hệ thống, viêm bì cơ, xơ cứng bì, phản ứng da do thuốc,…\r\nKhác: trứng cá, u lành da,…\r\nBệnh lây qua đường tình dục (STD).\r\nThực hiện các thủ thuật và tiểu phẫu da: Meso, Botox, Filler HA, Căng chỉ, Tiêm điều trị sẹo, Sinh thiết da,…\r\nLaser, Ultherapy, Thermage.', 'KN03'),
('HM004', 'Khoa răng hàm mặt', 'Khoa Răng Hàm Mặt, với đội ngũ bác sĩ chuyên nghiệp, được thiết kế theo tiêu chuẩn quốc tế đảm bảo vô trùng tuyệt đối cho bệnh nhân và trang bị các máy móc hiện đại, máy cấy ghép rang Implant, máy chụp X-quang cầm tay, máy chữa tủy nội nha… Ưu thế của khoa là chuyên về Nha khoa thẩm mỹ, phục hình răng toàn sứ chất lượng cao, cấy ghép Implant và chỉnh hình răng mặt.\r\n\r\nĐặt lịch tư vấn', 'khoa-rang-ham-mat.jpg', 'Nha khoa tổng quát\r\n\r\n– Khám và điều trị các bệnh lý răng miệng\r\n\r\n– Cạo vôi răng đánh bóng\r\n\r\n– Nạo túi nha chu\r\n\r\n– Nhổ răng/tiểu phẫu răng mọc lệch, mọc ngầm\r\n\r\n– Chữa tủy nội nha\r\n\r\n– Chăm sóc răng cho bé\r\n\r\nNha khoa thẩm mỹ\r\n\r\n– Trám răng thẩm mỹ\r\n\r\n– Tẩy trắng răng Nha khoa phục hồi', 'KN04'),
('HP006', 'Khoa hô hấp', '', 'KHOA-HÔ-HẤP.jpg', '', 'KN06'),
('KM002', 'Khoa mắt ', 'Khoa mắt của Bệnh viện Quốc tế City cung cấp dịch vụ chăm sóc mắt toàn diện cho bệnh nhân nội và ngoại trú. Đội ngũ bác sĩ nhãn khoa cam kết phục vụ chăm sóc và bảo vệ đôi mắt sáng cho người bệnh. Khoa cung cấp đa dạng các dịch vụ khám và điều trị các bệnh mắt thường gặp cũng như các bệnh lý về mắt như: đục thủy tinh thể, Glaucoma… ', 'kham-mat.jpg', 'Khoa Mắt ứng dụng các trang thiết bị chẩn đoán hình ảnh hiện đại nhằm phát hiện sớm các bệnh về mắt.\r\n\r\nViêm kết mạc, viêm giác mạc.\r\nBệnh lý bộ lệ.\r\nCườm khô (đục thuỷ tinh thể).\r\nCườm nước ( glaucoma) tất cả các dạng bệnh.\r\nViêm màng bồ đào trước, sau và toàn bộ.\r\nTật khúc xạ bao gồm cận, viễn loạn.\r\nChắp, lẹo, mộng, quặm.\r\nPhù hoàng điểm, thoái hóa hoàng điểm liên quan tuổi.\r\nVẩn đục pha lê dịch.\r\nBệnh lý võng mạc đái tháo đường.\r\nCác bệnh lý VM khác: tắc tĩnh mạch VM, xuất huyết võng mạc.\r\nBệnh lý thần kinh thị giác, viêm gai thị,…', 'KM02'),
('KN001', 'Khoa nhi', 'Khoa Nhi Bệnh viện Sáng Tạo phát triển tương xứng với một bệnh viện hiện đại, đạt tiêu chuẩn chất lượng theo mô hình bệnh viện quốc tế. Chúng tôi đáp ứng nhu cầu được khám chữa bệnh chất lượng cao của bệnh nhi và gia đình với đội ngũ nhân viên y tế nhiệt tình, năng động, sáng tạo, có trình độ và kỹ năng nhi khoa cùng với một môi trường an toàn, thân thiện. Đặc biệt Khoa nhi có đầy đủ chức năng hoạt động cả trong giờ hành trình và ngoài giờ.', 'KHOA-NHI.jpg', 'Khoa Nhi tổng quát điều trị nội khoa và phẫu thuật cho trẻ dưới 16 tuổi.\r\n\r\nĐội ngũ bác sĩ của chúng tôi đều có kinh nghiệm làm việc lâu năm, tham gia nhiều lớp huấn luyện trong và ngoài nước, có tay nghề cao trong cả nhi khoa tổng quát và nhi khoa chuyên sâu.\r\n\r\nĐội ngũ điều dưỡng được đào tạo chuyên sâu về kỹ thuật chăm sóc trẻ. Với mong muốn là “bệnh viện thân thiện với trẻ em”, khoa luôn thiết kế phòng bệnh sáng sủa, tiện nghi cho việc chăm sóc trẻ cùng những khu vực vui chơi dành riêng cho trẻ.\r\n\r\nNgoài ra, chế độ dinh dưỡng được xây dựng phù hợp từng lứa tuổi về chất lượng cũng như số lượng và theo nhu cầu dinh dưỡng, nhu cầu bệnh lý cho trẻ.\r\n\r\n', 'KN01'),
('MH005', 'Khoa tai mũi họng ', 'Khoa Tai Mũi Họng của Bệnh viện Quốc tế City triển khai khám và điều trị tất cả các bệnh lý liên quan đến tai mũi họng. Khoa có nhiều bác sĩ đầu ngành có trình độ chuyên môn cao. Cơ sở vật chất hiện đại, kỹ thuật tiên tiến sẽ đáp ứng đầy đủ các nhu cầu của người bệnh ở lĩnh vực tai mũi họng.\r\n\r\nĐặt lịch tư vấn', 'KHOA-TAI-MUI-HONG.jpg', 'Khám và điều trị bệnh lý thông thường\r\nViêm nhiễm Tai – Mũi – Họng.\r\nViêm VA, Amidan.\r\nViêm mũi xoang cấp và mãn tính.\r\nViêm tai giữa cấp và mãn tính.\r\nViêm thanh quản cấp và mãn tính.', 'KN05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhenkham`
--

CREATE TABLE `lichhenkham` (
  `maLichHen` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngayKham` date NOT NULL,
  `gioKham` time NOT NULL,
  `moTa` text DEFAULT NULL,
  `maKhoa` varchar(50) NOT NULL,
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
  `tenBacSi` varchar(100) NOT NULL,
  `tinhTrangBenh` text NOT NULL,
  `chanDoan` text NOT NULL,
  `keHoachDieuTri` varchar(100) NOT NULL,
  `maDonThuoc` varchar(10) NOT NULL,
  `ghiChu` text NOT NULL,
  `ngayTao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phieukham`
--

INSERT INTO `phieukham` (`maPhieuKham`, `maBenhNhan`, `tenBacSi`, `tinhTrangBenh`, `chanDoan`, `keHoachDieuTri`, `maDonThuoc`, `ghiChu`, `ngayTao`) VALUES
('', 1, 'Nguyễn Văn Tùng', 'Đau ở chân', 'Gãy chân', 'Bó bột', '1', 'Nên uống thuốc đều', '2024-12-10');

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
  `giaTien` float NOT NULL,
  `ngaySanXuat` date NOT NULL,
  `hanSuDung` date NOT NULL,
  `hinhAnh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoc`
--

INSERT INTO `thuoc` (`maThuoc`, `tenThuoc`, `soLuong`, `lieuDung`, `giaTien`, `ngaySanXuat`, `hanSuDung`, `hinhAnh`) VALUES
('MT0001', 'Levothyroxine', 300, '1 lần/ngày', 75000, '2023-01-01', '2025-01-01', 'levothyroxine.jpg'),
('MT0002', 'Memantine', 278, '2 lần/ngày', 350000, '2023-06-01', '2025-06-01', 'memantine.png'),
('MT0003', 'Donepezil', 435, '1 lần/ngày', 450000, '2023-03-01', '2025-03-01', 'donepezil.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `maUser` int(11) UNSIGNED NOT NULL,
  `hoTen` varchar(30) NOT NULL,
  `ngaySinh` date NOT NULL,
  `diaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioiTinh` enum('Nam','Nữ','Tùy chỉnh') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quyen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`maUser`, `hoTen`, `ngaySinh`, `diaChi`, `gioiTinh`, `sdt`, `email`, `password`, `quyen`) VALUES
(11, 'Duy Khang', '2003-10-23', '', 'Nam', '0979745946', 'nuongle04022003@gmail.com', '4297f44b13955235245b2497399d7a93', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`maBacSi`),
  ADD KEY `maKhoa` (`maKhoa`) USING BTREE;

--
-- Chỉ mục cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`maBenhNhan`),
  ADD UNIQUE KEY `maPhieuKham` (`maPhieuKham`);

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
-- Chỉ mục cho bảng `dichvu_benhnhan`
--
ALTER TABLE `dichvu_benhnhan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD PRIMARY KEY (`maBenhNhan`),
  ADD UNIQUE KEY `maThuoc` (`maBenhNhan`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHoaDon`),
  ADD UNIQUE KEY `maBenhNhan` (`maBenhNhan`);

--
-- Chỉ mục cho bảng `hoadondichvu`
--
ALTER TABLE `hoadondichvu`
  ADD PRIMARY KEY (`maHoaDon`),
  ADD UNIQUE KEY `maLichHen` (`maLichHen`);

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
-- Chỉ mục cho bảng `lichhenkham`
--
ALTER TABLE `lichhenkham`
  ADD PRIMARY KEY (`maLichHen`),
  ADD KEY `FK_maBacSi` (`maBacSi`),
  ADD KEY `maKhoa` (`maKhoa`) USING BTREE,
  ADD KEY `maBenhNhan` (`maBenhNhan`) USING BTREE;

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
  ADD PRIMARY KEY (`maBenhNhan`,`maPhieuKham`),
  ADD UNIQUE KEY `maDonThuoc` (`maDonThuoc`),
  ADD UNIQUE KEY `maBacSi` (`tenBacSi`);

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
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`maUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `maBacSi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10231233;

--
-- AUTO_INCREMENT cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `maBenhNhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11123462;

--
-- AUTO_INCREMENT cho bảng `dichvu_benhnhan`
--
ALTER TABLE `dichvu_benhnhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadonthuoc`
--
ALTER TABLE `hoadonthuoc`
  MODIFY `maHoaDon` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `maUser` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `lichhenkham`
--
ALTER TABLE `lichhenkham`
  ADD CONSTRAINT `FK_maBacSi` FOREIGN KEY (`maBacSi`) REFERENCES `bacsi` (`maBacSi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
