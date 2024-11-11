
    <div class="container mt-5">
        <div class="card ">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Tra cứu đơn thuốc</h2>
            </div>
            <style>
    .custom-spacing {
        margin-bottom: 20px; /* Điều chỉnh khoảng cách dưới tùy ý */
    }
</style>

<div class="card-body">

    <div class="form-group custom-spacing">
        <label for="insuranceId">Mã đơn thuốc:</label>
        <input type="text" class="form-control" id="insuranceId" name="insurance_id" placeholder="Nhập mã bảo hiểm y tế">
    </div>

    <div class="form-group custom-spacing">
        <label for="patientId">Mã Bệnh Nhân:</label>
        <input type="text" class="form-control" id="patientId" name="patient_id" placeholder="Nhập mã bệnh nhân">
    </div>

    <div class="form-group custom-spacing">
        <label for="patientName">Tên Bệnh Nhân:</label>
        <input type="text" class="form-control" id="patientName" name="patient_name" placeholder="Nhập tên bệnh nhân">
    </div>

    <div class="form-group custom-spacing">
        <label for="age">Mã khám bệnh</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Nhập tuổi">
    </div>

    <div class="form-group custom-spacing">
        <label for="phone">Số Điện Thoại:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
    </div>

   <a href="index.php?quanli=chi-tiet-don-thuoc"><button type="submit" class="btn btn-primary btn-block">Tra cứu</button></a> 
</div>

        </div>
    </div>
