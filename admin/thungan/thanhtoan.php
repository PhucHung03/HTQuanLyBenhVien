<?php
require_once("../config/config.php");
if (isset($_SESSION['tongtien'])) {
    $tongtien = $_SESSION['tongtien'];
} else {
    $tongtien = 0; // Giá trị mặc định
}

$maLichHen = $_GET['maLichHen'];
if (isset($_POST['inHoaDon'])) {
    $tenNguoiThanhToann = $_POST['tenNguoiThanhToan'];
    $sodienthoai = $_POST['sodienthoai'];
    $hinhThucThanhToan = $_POST['hinhThucThanhToan'];
    $tienthu = $_POST['tienthu'];
    $tienthua = $tongtien - $tienthu;

    $sql_str = "INSERT INTO hoadondichvu (maHoaDon,maLichHen,nguoiThanhToan,sodienthoai,hinhThucThanhToan,tongTien,tienthu,tienthua,thoiGianThanhToan) 
        VALUES ('TT123', '$maLichHen', '$tenNguoiThanhToann ', $sodienthoai, '$hinhThucThanhToan',$tongtien,$tienthu,$tienthua,NOW());";
    if (mysqli_query($conn, $sql_str)) {
        echo "<script>
        alert('Thanh toán thành công !');
        window.location.href='index.php?quanli=hoa-don-thanh-toan';
    </script>";
    }else{
        echo "<script>
        alert('Thanh toán thất bại !');
    </script>";
    }
}

?>
<div class="detailThanhToan">
    <div class="container" style="width: 800px;">
        <div class="row">
            <div class="col-lg-12 p-4">
                <div class="bg-light rounded h-100 p-5">
                    <h3 style="text-align: center; color: #009CFF; padding: 20px;">THÔNG TIN THANH TOÁN</h3>
                    <form action="" method="post">
                        <div class="form-group row mb-3">
                            <label for="tenNguoiThanhToan" class="col-sm-4 col-form-label fw-bold">Tên người thanh toán</label>
                            <div class="col-sm-8">
                                <input type="text" name="tenNguoiThanhToan" id="tenNguoiThanhToan" class="form-control" placeholder="Tên người thanh toán" style="width: 400px;" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="sdt" class="col-sm-4 col-form-label fw-bold">Số điện thoại</label>
                            <div class="col-sm-8">
                                <input type="text" name="sodienthoai" id="sodienthoai" class="form-control" placeholder="Nhập số điện thoại" style="width: 400px;" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="tongtien" class="col-sm-4 col-form-label fw-bold">Tổng tiền: <b style="color:red"><?php echo number_format($tongtien, 0, ',', '.'); ?> VND</b></label>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="sdt" class="col-sm-4 col-form-label fw-bold">Hình thức thanh toán</label>
                            <div class="col-sm-2" style="padding-top: 7px;">
                                <input type="radio" value="Tiền mặt" name="hinhThucThanhToan"> Tiền mặt
                            </div>
                            <div class="col-sm-3" style="padding-top: 7px;">
                                <input type="radio" value="Chuyển khoản" name="hinhThucThanhToan"> Chuyển khoản
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="tienthu" class="col-sm-4 col-form-label fw-bold">Số tiền thu </label>
                            <div class="col-sm-8">
                                <input type="text" name="tienthu" id="tienthu" class="form-control" placeholder="Số tiền thu" style="width: 400px;" required>
                            </div>
                        </div>
                        <div class="submit" style="text-align: center;">
                            <input type="reset" class="btn btn-danger" name="troLai" value="Trở về" onclick="window.location.href='index.php?quanli=thanh-toan'">
                            <input type="submit" class="btn btn-success" name="inHoaDon" value="In hóa đơn">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>