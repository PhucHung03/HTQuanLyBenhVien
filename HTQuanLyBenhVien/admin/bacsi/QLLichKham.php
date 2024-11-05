

<style>

/* Định dạng chung */
.container  {
  width: 80%;           
  max-width: 1000px;      
  margin: 0 auto;           
  padding: 20px;            
  border: 1px solid black;  
  border-radius: 10px;     
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  background-color: #f9f9f9; 
}

body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
  }
  
  /* Thanh tiêu đề */
  .container {
    padding: 20px;
  }
  
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  /* Tìm kiếm */
  .row {
    margin-bottom: 20px;
   
  }
  
  .form-control {
    height: 20px;
  }
  
  /* Bảng lịch khám */
  .table {
    text-align: center;
  }
  
  th,
  td {
    padding: 10px;
  }
  
  /* Nút chức năng */
  .text-end button {
    margin: 5px;
  }
  
  /* Nút chỉnh sửa */
  .btn-warning {
    background-color: orange; /* Thay đổi màu nền nút Chỉnh sửa */
  }




</style>

<body>
  <div class="container">
    <h1>Danh sách lịch đăng ký khám</h1>
    <div class="row mb-3">
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Tìm kiếm thông tin bệnh nhân">
      </div>
      <div class="col-md-3">
        <button class="btn btn-primary">Search</button>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Mã bệnh nhân</th>
          <th>Tên bệnh nhân</th>
          <th>Lịch khám</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>345798</td>
          <td>Nguyễn Văn A</td>
          <td>Thứ 4, 9:00am</td>
         
          <td><button class="btn btn-primary btn-warning" data-bs-toggle="modal" data-bs-target="#viewModal">Chỉnh sửa</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>213456</td>
          <td>Trần Thị B</td>
          <td>Thứ 3, 3:00pm</td>
          <td><button class="btn btn-primary btn-warning" data-bs-toggle="modal" data-bs-target="#viewModal">Chỉnh sửa</button></td>
        </tr>
      </tbody>
    </table>
    
<!-- Modal Cập Nhật Thông Tin -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="viewModalLabel">Điều chỉnh lịch khám</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
        <link rel="stylesheet" href="../css/filecss2.css">
            <div class="container1">
              <div   
           class="card">
                <div class="card-header">
                  <h1>Điều chỉnh lịch khám</h1>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="user.png" alt="Avatar" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-9">
                      <p><strong>Bệnh nhân:</strong> Nguyễn Văn A</p>
                      <p>Năm sinh: 23/02/1998</p>
                      <p>Mã bệnh nhân: 3457798</p>
                      <button type="button" class="btn btn-primary" >Chỉnh sửa</button>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <p><strong>Thông tin cuộc hẹn</strong></p>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">   
          
                          Hẹn khám bệnh
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">   
          
                          Tái khám
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                          Đọc kết quả
                        </label>
                      </div>
                      <div class="mb-3">
                        <label for="doctor" class="form-label"><p><strong>Bác sĩ:</strong></p></label>
                        <select class="form-select" id="doctor">
                          <option>Đặng Hoàng Nam</option>
                          <option>Bác sĩ khác</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="note" class="form-label"><p><strong>Ghi chú:</strong></p></label>
                        <textarea class="form-control" id="note" rows="3"></textarea>
                      </div>
                      <div   
           class="mb-3">
                        <label for="date" class="form-label"><p><strong>Ngày:</strong></p></label>
                        <input type="date" class="form-control" id="date">
                      </div>
                      <div class="mb-3">
                        <label for="time" class="form-label"><p><strong>Giờ:</strong></p></label>
                        <input type="time" class="form-control" id="time">
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="button" class="btn btn-danger">Quay lại</button>
                    <button type="button" class="btn btn-success">Cập nhật</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>


    <div class="text-end">
      <button class="btn btn-secondary">Quay lại</button>
      <button class="btn btn-primary">In lịch khám</button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>