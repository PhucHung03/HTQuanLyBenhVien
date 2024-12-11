<?php
include("clsbenhvien.php");
    
    class quantri extends benhvien
    {
        public function fetchAll($query) {
            $conn = $this->connect();
            $result = mysqli_query($conn, $query);
        
            if (!$result) {
                die("Lỗi truy vấn SQL: " . mysqli_error($conn));
            }
        
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        
            return $data; // Không in ra dữ liệu
        }
        public function xuatdsbenhnhanphutrach($sql)
        {
            $link = $this->connect();
            $ketqua = mysqli_query($link, $sql);
            if (!$ketqua) {
                echo 'Lỗi truy vấn: ' . mysqli_error($link);
                mysqli_close($link);
                return;
            }
            $i = mysqli_num_rows($ketqua);
            mysqli_close($link);

            if ($i > 0) {
                echo '<div id="table__danhsach">
                        <div class="row header">
                            <div class="col-4 col-sm-1 stt">STT</div>
                            <div class="col-4 col-lg-2">Mã bệnh nhân</div>
                            <div class="col-4 col-lg-2">Họ và tên</div>
                            <div class="col-4 col-lg-2">Ngày sinh</div>
                            <div class="col-4 col-lg-2">Liên hệ</div>
                            <div class="col-4 col-lg-2">Thao tác</div>
                        </div>';

                $dem = 1;
                while ($row = mysqli_fetch_assoc($ketqua)) {
                    $mabenhnhan = $row["maBenhNhan"];
                    $tenBenhNhan = $row["tenBenhNhan"];
                    $namSinh = $row["namSinh"];
                    $sdt = $row["sdt"];
                    echo '<div class="row">
                            <div class="col-4 col-sm-1">'.$dem.'</div>
                            <div class="col-4 col-lg-2">'.$mabenhnhan.'</div>
                            <div class="col-4 col-lg-2">'.$tenBenhNhan.'</div>
                            <div class="col-4 col-lg-2">'.$namSinh.'</div>
                            <div class="col-4 col-lg-2">'.$sdt.'</div>
                            <div class="col-4 col-lg-2"><button><a href="index.php?quanli=xem-chi-tiet-benh-nhan-phu-trach&id='.$mabenhnhan.'">Xem chi tiết</a></button></div>
                        </div>';
                    $dem++;
                }
                echo '</div>';
            } else {
                echo 'Không có dữ liệu';
            }
        }
        public function laycot($sql)
        {
            $link = $this->connect();
            $ketqua = mysqli_query($link, $sql);
            if (!$ketqua) {
                echo 'Lỗi truy vấn: ' . mysqli_error($link);
                mysqli_close($link);
                return null;
            }
            $i = mysqli_num_rows($ketqua);
            $giatri = '';
            if ($i > 0) {
                while ($row = mysqli_fetch_array($ketqua)) {
                    $giatri = $row[0]; 
                }
            }
            mysqli_close($link);
            return $giatri;
        }
        public function themxoasua($sql)
            {
                // Kết nối đến cơ sở dữ liệu bằng mysqli
                $link = $this->connect();
                
                // Kiểm tra kết nối
                if ($link) {
                    // Thực thi câu lệnh SQL sử dụng mysqli_query
                    if (mysqli_query($link, $sql)) {
                        return 1; // Thêm hoặc sửa thành công
                    } else {
                        return 0; // Thực thi thất bại
                    }
                } else {
                    return 0; // Kết nối thất bại
                }
            }

        public function chonthuoc($sql)
        {
            // Kết nối cơ sở dữ liệu
            $link = $this->connect();
            // Thực thi truy vấn
            $ketqua = mysqli_query($link, $sql);
 
            // Kiểm tra số dòng trả về
            $i = mysqli_num_rows($ketqua);
            
            // Nếu có dữ liệu
            if ($i > 0) {
                echo '<select class="medicine-name" name="tenThuoc[]" id="TenThuoc">
                                <option value="" disabled selected>Chọn thuốc</option>';
                
                // Duyệt qua từng dòng dữ liệu
                while ($row = mysqli_fetch_array($ketqua, MYSQLI_ASSOC)) {
                    //$maThuoc = $row['maThuoc'];
                    $tenThuoc = $row['tenThuoc'];
                    //$lieuDung = $row['lieuDung'];
                    
                        echo '<option value="'.$tenThuoc.'" selected>'.$tenThuoc.'</option>';
                    
                }
                
                echo '</select>';
            } else {
                // Nếu không có dữ liệu
                echo 'Dữ liệu đang cập nhật!...';
            }

            // Đóng kết nối (tùy vào yêu cầu, nhưng nên đóng kết nối khi xong việc)
            mysqli_close($link);
        }
        public function generateUniqueMaDonThuoc() {
            do {
                $maDonThuoc = 'DT' . rand(100000, 999999); // Tạo mã ngẫu nhiên
                $checkQuery = "SELECT COUNT(*) as count FROM donthuoc WHERE maDonThuoc = '$maDonThuoc'";
                $connection = $this->connect(); // Kết nối cơ sở dữ liệu
                $result = mysqli_query($connection, $checkQuery);
                $row = mysqli_fetch_assoc($result);
            } while ($row['count'] > 0); // Nếu tồn tại, tạo lại mã khác
            return $maDonThuoc;
        }
        
        public function xemchitietbenhnhan($sql){
            $link = $this->connect();  // Keep connection open
        
            // Execute the first query for patient details
            $ketqua = mysqli_query($link, $sql);
            if (!$ketqua) {
                echo 'Lỗi truy vấn: ' . mysqli_error($link);
                mysqli_close($link);
                return;
            }
        
            $i = mysqli_num_rows($ketqua);
        
            if ($i > 0) {
                // Fetch the patient details (single record)
                $row = mysqli_fetch_assoc($ketqua);
                $mabenhnhan = $row["maBenhNhan"];
                $tenBenhNhan = $row["tenBenhNhan"];
                $namSinh = $row["namSinh"];
                $gioiTinh = $row["gioiTinh"];
                $diaChi = $row["diaChi"];
                $ngayTao = $row["ngayTao"];
                $tinhTrangBenh = $row["tinhTrangBenh"];
                $chanDoan = $row["chanDoan"];
                $keHoachDieuTri = $row["keHoachDieuTri"];
        
                // Display patient details
                echo '<div id="thongtin__mabn"><span>Mã bệnh nhân: </span> <p>'.$mabenhnhan.'</p></div>
                      <div id="thongtin__hoten"><span>Họ và Tên: </span><p>'.$tenBenhNhan.'</p></div>
                      <div id="thongtin__ngaysinh"><span>Ngày sinh: </span><p>'.$namSinh.'</p></div>
                      <div id="thongtin__gioitinh"><span>Giới tính:</span> <p>'.$gioiTinh.'</p></div>
                      <div id="thongtin__diachi"><span>Địa chỉ: </span><p>'.$diaChi.'</p></div>
                      <div id="thongtin__ngaykham"><span>Ngày khám: </span><p>'.$ngayTao.'</p></div>
                      <div id="thongtin__tinhtrangbenh"><span>Tình trạng bệnh: </span><p>'.$tinhTrangBenh.'</p></div>
                      <div id="thongtin__chandoan"><span>Chẩn đoán: </span><p>'.$chanDoan.'</p></div>
                      <div id="thongtin__kehoachdieutri"><span>Kế hoạch điều trị: </span><p>'.$keHoachDieuTri.'</p></div>';
        
                
                $sql_history = "SELECT ngayTao, tinhTrangBenh FROM phieukham WHERE maBenhNhan = '$mabenhnhan' ORDER BY ngayTao DESC";
                $history_result = mysqli_query($link, $sql_history);
        
                if ($history_result && mysqli_num_rows($history_result) > 0) {
                    echo '<div id="thongtin__lichsukhambenh"><span>Lịch sử khám: </span><div class="history-list">';
                    while ($history_row = mysqli_fetch_assoc($history_result)) {
                        $ngayTaoHistory = $history_row["ngayTao"];
                        $tinhTrangBenhHistory = $history_row["tinhTrangBenh"];
                        
                        // Chuyển đổi định dạng ngày tháng thành "d-m-y"
                        $ngayTaoFormatted = date('d-m-y', strtotime($ngayTaoHistory));
                        
                        // Hiển thị ngày và tình trạng bệnh, mỗi phần cách nhau bằng khoảng trắng và xuống dòng
                        echo '<div class="history-item">'.$ngayTaoFormatted.'&nbsp;&nbsp;&nbsp;'.$tinhTrangBenhHistory.'</div>';
                    }
                    echo '</div></div>';
                } else {
                    echo '<div id="thongtin__lichsu"><span>Lịch sử khám: </span><p>Không có dữ liệu lịch sử khám.</p></div>';
                }
        
            } else {
                echo 'Không có dữ liệu';
            }
        
            // Close the connection after all queries are executed
            mysqli_close($link);
        }
        
        

        public function xemthongkedoanhthu($sql) {
            // Kết nối cơ sở dữ liệu
            $link = $this->connect();
            
            // Kiểm tra kết nối
            if (!$link) {
                echo 'Lỗi kết nối cơ sở dữ liệu: ' . mysqli_connect_error();
                return;
            }
        
            // Thực thi truy vấn
            $ketqua = mysqli_query($link, $sql);
        
            // Kiểm tra lỗi trong quá trình thực thi truy vấn
            if (!$ketqua) {
                echo 'Lỗi truy vấn: ' . mysqli_error($link);
                mysqli_close($link);
                return;
            }
        
            // Mảng lưu kết quả
            $results = [];
            while ($row = mysqli_fetch_assoc($ketqua)) {
                $results[] = $row;
            }
        
            mysqli_close($link);
        
            return $results;
        }

        public function tinhTongTien($sql) {
            // Kết nối cơ sở dữ liệu
            $link = $this->connect();
            
            // Thực thi câu truy vấn
            $ketqua = mysqli_query($link, $sql);
            
            // Kiểm tra lỗi truy vấn
            if (!$ketqua) {
                echo 'Lỗi truy vấn: ' . mysqli_error($link);
                mysqli_close($link);
                return;
            }
        
            $tongTien = 0;  
        
            // Tính tổng tiền từ các hóa đơn
            while ($row = mysqli_fetch_assoc($ketqua)) {
                $tienDichVu = $row["tienDichVu"];
                $tienVienPhi = $row["tienVienPhi"];
                $tienThuoc = $row["tienThuoc"];
                $chiphiKhac = $row["chiPhiKhac"];
                // Cộng dồn tổng tiền
                $tongTien += $tienDichVu + $tienVienPhi + $tienThuoc + $chiphiKhac;  
            }
        
            // Đóng kết nối
            mysqli_close($link);
        
            // Hiển thị tổng doanh thu
            echo '<div id="title__tongtien"><strong>Tổng doanh thu: <p>' . number_format($tongTien, 0, ',', '.') . 'đ</p></strong></div>';
        }
    }

    
?>