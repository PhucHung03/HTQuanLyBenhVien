<div class="thanhtoan">
    <div class="container" style="width: 800px;">
        <div class="row">
            <div class="col-lg-12 p-4">
                <div class="bg-light rounded h-100 p-5">
                    <h3 style="text-align: center; color: #009CFF; padding: 20px;">Nhập thông tin bệnh nhân thanh toán</h3>
                    <form action="index.php?quanli=xem-chi-tiet-thanh-toan" method="post">
                        <div class="form-group row mb-3">
                            <label for="hoTenBN" class="col-sm-3 col-form-label fw-bold">Tên bệnh nhân</label>
                            <div class="col-sm-9">
                                <input type="text" name="hoTenBN" id="hoTenBN" class="form-control" placeholder="Họ tên bệnh nhân" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="maBenhNhan" class="col-sm-3 col-form-label fw-bold">Mã bệnh nhân</label>
                            <div class="col-sm-9">
                                <input type="text" name="maBenhNhan" id="maBenhNhan" class="form-control" placeholder="Mã bệnh nhân" required>
                            </div>
                        </div>
                        <div class="submit" style="text-align: center;">
                            <input type="submit" class="btn btn-success" name="timKiemThanhToan" value="Tìm kiếm">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>