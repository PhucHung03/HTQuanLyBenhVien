<?php
include("../xuly/clsquantri.php");
$p = new quantri();
?>

<div class="thongKeDoanhThu">
    <section class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <h4>THỐNG KÊ DOANH THU HẰNG NGÀY</h4>
            <div id="top__header">
                <strong id="title_header">Chọn ngày: 
                    <form method="POST" action="">
                        <input type="date" id="chonngay" name="ngayGiaoDich" onchange="this.form.submit();">
                    </form>
                </strong>

                <!-- Form tìm kiếm -->
                <form class="d-flex" method="POST">
                    <input id="form__search" type="search" placeholder="Tìm kiếm mã hóa đơn..." aria-label="Search" name="search">
                    <button id="btn__search" type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div id="table__danhsach">
                    <div class="row header">
                        <div class="col-4 col-sm-1 stt">Mã hóa đơn</div>
                        <div class="col-4 col-lg-2">Dịch vụ</div>
                        <div class="col-4 col-lg-2">Tiền viện phí</div>
                        <div class="col-4 col-lg-2">Tiền thuốc</div>
                        <div class="col-4 col-lg-2">Chi phí khác</div>
                        <div class="col-4 col-lg-2">Ngày giao dịch</div>
                    </div>

                    <div id="content__thongke">
                        <?php
                        // Lọc dữ liệu theo ngày và mã hóa đơn
                        $query = "SELECT * FROM hoadon WHERE 1=1";

                        // Lọc theo mã hóa đơn
                        if (isset($_POST['timkiem']) && !empty($_POST['search'])) {
                            $search = addslashes($_POST['search']);
                            $query .= " AND maHoaDon LIKE '%$search%'";
                        }

                        // Lọc theo ngày giao dịch
                        if (isset($_POST['ngayGiaoDich']) && !empty($_POST['ngayGiaoDich'])) {
                            $ngayGiaoDich = $_POST['ngayGiaoDich'];
                            $query .= " AND ngayGiaoDich = '$ngayGiaoDich'";
                        }

                        // Truy vấn và hiển thị kết quả
                        $result = $p->xemthongkedoanhthu($query);

                        // Kiểm tra và hiển thị kết quả
                        if (!empty($result)) {
                            foreach ($result as $row) {
                                echo "<div class='row'>";
                                echo "<div class='col-4 col-sm-1'>" . $row['maHoaDon'] . "</div>";
                                echo "<div class='col-4 col-lg-2'>" . number_format($row['tienDichVu'], 0, ',', '.') . "đ</div>";
                                echo "<div class='col-4 col-lg-2'>" . number_format($row['tienVienPhi'], 0, ',', '.') . "đ</div>";
                                echo "<div class='col-4 col-lg-2'>" . number_format($row['tienThuoc'], 0, ',', '.') . "đ</div>";
                                echo "<div class='col-4 col-lg-2'>" . number_format($row['chiPhiKhac'], 0, ',', '.') . "đ</div>";
                                echo "<div class='col-4 col-lg-2'>" . $row['ngayGiaoDich'] . "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "<p style='color: red;'>Không có giao dịch trong ngày này.</p>";
                        }
                        ?>
                    </div>
                </div>

                <button type="button" class="btn btn-success btn__xuatbaocao">Xuất báo cáo</button>

                <!-- Tính tổng doanh thu -->
                <?php
                // Tính tổng doanh thu sau khi có tìm kiếm hoặc chọn ngày
                if (isset($_POST['timkiem']) && !empty($_POST['search'])) {
                    $p->tinhTongTien("SELECT * FROM hoadon WHERE maHoaDon LIKE '%$search%'");
                } elseif (isset($_POST['ngayGiaoDich']) && !empty($_POST['ngayGiaoDich'])) {
                    $ngayGiaoDich = $_POST['ngayGiaoDich'];
                    $p->tinhTongTien("SELECT * FROM hoadon WHERE ngayGiaoDich = '$ngayGiaoDich'");
                } else {
                    $p->tinhTongTien("SELECT * FROM hoadon");
                }
                ?>
            </div>
        </div>
    </section>
</div>