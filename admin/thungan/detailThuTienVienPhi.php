<?php
require_once("../config/config.php");

// Kiểm tra nếu người dùng nhấn nút tìm kiếm
if (isset($_POST['timKiemThanhToan'])) {
    $keyword = $_POST['maBenhNhan'];

    // Xây dựng câu truy vấn
    $sql = "SELECT lhk.maLichHen, bn.maBenhNhan, bn.tenBenhNhan, bn.sdt, bn.diaChi, bn.maBHYT, bs.maKhoa, kk.tenKhoa, bs.tenBacSi, lhk.ngayKham, lhk.gioKham, lhk.moTaSucKhoe
            FROM benhnhan bn 
            JOIN lichhenkham lhk ON bn.maBenhNhan = lhk.maBenhNhan
            JOIN bacsi bs ON lhk.maBacSi = bs.maBacSi 
            JOIN khoakham kk ON bs.maKhoa = kk.maKhoa
            WHERE lhk.maBenhNhan = '$keyword'";
    
    $result = mysqli_query($conn, $sql);

    // Kiểm tra nếu không tìm thấy kết quả
    if (mysqli_num_rows($result) == 0) {
        echo "<script>
                alert('Không tìm thấy bệnh nhân');
                window.location.href = 'index.php?quanli=thanh-toan'; // Chuyển hướng về trang tìm kiếm
              </script>";
        exit; // Dừng thực thi mã tiếp theo
    }

    // Lấy thông tin bệnh nhân
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="detailThanhToan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5">
                <div class="bg-light h-100 p-5">
                    <h3>THÔNG TIN THANH TOÁN</h3>
                    <form action="" method="post">
                            <div class="info">
                                <p><strong>Tên Bệnh Nhân: </strong><?=$row['tenBenhNhan'] ?></p>
                                <p><strong>Mã khám bệnh: </strong> <?=$row['maBenhNhan']  ?></p>
                                <p><strong>Số điện thoại: </strong> <?=$row['sdt'] ?></p>
                                <p><strong>Địa chỉ: </strong><?= $row['diaChi']  ?></p>
                                <p><strong>Mã BHYT: </strong> <?= $row['maBHYT']  ?></p>
                                <p><strong>Ngày khám bệnh: </strong><?= $row['ngayKham']  ?></p>
                            </div>
                            <div class="table-container">
                        <div class="info_service">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã dịch vụ</th>
                                                <th>Dịch vụ khám</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                            $sql_str = "select dichvu_benhnhan.maDichVu,tenDichVu, donGia from dichVu,dichvu_benhnhan 
                                            where dichvu.maDichVu = dichvu_benhnhan.maDichVu and maBenhNhan='$keyword';";
                                            $res = mysqli_query($conn, $sql_str);
                                            $stt = 0;
                                            $tongtien = 0;
                                            while ($item = mysqli_fetch_assoc($res)) {
                                                $tongTien += $item['donGia'];
                                          ?> 
                                          <tbody>
                                              <tr>
                                                  <td><?= ++$stt ?></td>
                                                  <td><?= $item['maDichVu'] ?></td>
                                                  <td><?=$item['tenDichVu'] ?></td>
                                                  <td><?= number_format($item['donGia'], 0, ',', '.'); ?> VND</td>
                                              </tr>
                                          </tbody>
                                          <?php }?>
                                    </table>
                                </div>
                        </div>
                        <div class="sumCost">
                            <h5>Thành tiền: <?= number_format($tongTien, 0, ',', '.'); ?> VND</h5>
                        </div>
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-danger me-2" name="btnHuy" onclick="window.location.href='index.php?quanli=thanh-toan'">Hủy</button>
                        <button type="submit" class="btn btn-success" name="btnThanhToan">Thanh Toán</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>