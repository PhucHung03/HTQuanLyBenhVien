<style>
  .container1 {
    width: 80%;           
    max-width: 900px;        /* Giới hạn chiều rộng */
    margin: 20px auto;       /* Thêm khoảng cách trên và dưới */
    padding: 20px;
    border: 1px solid #007bff;  
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    background-color: #f8f9fa; /* Tông màu sáng hơn */
  }

  /* Định dạng chung */
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  }

  /* Card chứa thông tin */
  .card {
    border: none;
    border-radius: 10px;
    padding: 20px;
  }

  /* Tiêu đề */
  .card-header h1 {
    color: #007bff;   /* Màu xanh lam đậm cho tiêu đề */
    font-size: 24px;
    margin-bottom: 20px;
  }

  /* Ảnh đại diện */
  .img-fluid {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 10px auto;
  }

  /* Định dạng cho thông tin bệnh nhân */
  .card-body p {
    font-size: 16px;
    color: #333;
  }

  .card-body button {
    margin-top: 10px;
  }

  /* Radio button */
  .form-check-label {
    font-size: 16px;
    color: #555;
  }

  /* Form control */
  .form-control {
    border-radius: 5px;
    width: 100%;
    margin-bottom: 15px;
  }

  /* Label */
  .form-label {
    font-weight: bold;
    color: #333;
  }

  /* Nút */
  .btn {
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
  }

  .btn-success {
    background-color: #28a745;
    border: none;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .row {
      flex-direction: column;
    }

    .text-end {
      text-align: center;
      margin-top: 20px;
    }
  }
</style>

<body>
  <div class="container1">
    <div class="card">
      <div class="card-header">
        <h1>Điều chỉnh lịch khám</h1>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-3">
            <img src="user.png" alt="Avatar" class="img-fluid">
          </div>
          <div class="col-md-9">
            <p><strong>Bệnh nhân:</strong> Trần Thị B</p>
            <p>Năm sinh: 23/02/1989</p>
            <p>Mã bệnh nhân: 213456</p>
            <button type="button" class="btn btn-primary">Chỉnh sửa</button>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <p><strong>Thông tin cuộc hẹn</strong></p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">Hẹn khám bệnh</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">Tái khám</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="flexRadioDefault3">
              <label class="form-check-label" for="flexRadioDefault3">Đọc kết quả</label>
            </div>
            <div class="mb-3">
              <label for="doctor" class="form-label">Bác sĩ:</label>
              <select class="form-control" id="doctor">
                <option>Nguyễn Thị Hiền</option>
                <option>Bác sĩ khác</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="note" class="form-label">Ghi chú:</label>
              <textarea class="form-control" id="note" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Ngày:</label>
              <input type="date" class="form-control" id="date">
            </div>
            <div class="mb-3">
              <label for="time" class="form-label">Giờ:</label>
              <input type="time" class="form-control" id="time">
            </div>
          </div>
        </div>
        <div class="text-end">
          <a href="index.php?quanli=ql-lich-kham"><button type="button" class="btn btn-danger">Quay lại</button></a>
          <button type="button" class="btn btn-success">Cập nhật</button>
        </div>
      </div>
    </div>
  </div>
</body>
