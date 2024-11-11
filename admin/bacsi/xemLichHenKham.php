<div class="xemLichHen">
    <div class="container">
        <div class="bg-light m-4">
            <div class="row">
                <div class="col-lg-12 p-4">
                    <h3>Danh sách Lịch hẹn khám</h3>
                </div>
            </div>
            <div class="container-fluid">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex">
                        <label for="date">Chọn ngày:</label>
                        <div class="form-group mb-1">
                            <input type="date" id="date" name="date" class="form-control">
                        </div>

                    </div>
                    <div class="d-flex">
                        <div class="form-group">
                            <input type="search" class="form-control" placeholder="Tìm bệnh nhân">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Tìm">

                    </div>
                </div>
            </div>
            <div class="container-fluid justify-content-between mb-4">
                <div class="table-container pb-4">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã bệnh nhân</th>
                                <th>Tên bệnh nhân</th>
                                <th>Giờ khám</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>25000123</td>
                                <td>Nguyễn Văn A</td>
                                <td>9:00</td>
                                <td><button class="action-btn" onclick="window.location.href='index.php?quanli=xem-chi-tiet-lich-hen-benh-nhan'">Xem</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>26123433</td>
                                <td>Trần Văn B</td>
                                <td>10:00</td>
                                <td><button class="action-btn" onclick="window.location.href='index.php?quanli=xem-chi-tiet-lich-hen-benh-nhan'">Xem</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>26000534</td>
                                <td>Phạm Văn C</td>
                                <td>13:00</td>
                                <td><button class="action-btn" onclick="window.location.href='index.php?quanli=xem-chi-tiet-lich-hen-benh-nhan'">Xem</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>