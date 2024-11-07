
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
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  }
  
  /* Bảng */
  .table {
    border-collapse: collapse;
    width: 100%;
  }
  
  .table th, .table td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
  }
  
  .table th {
    background-color: #f2f2f2;
    font-weight: bold;
  }
  
  /* Nút */
  .btn {
    border-radius: 5px;
    padding: 10px 20px;
  }
  
  .btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
  }
  
  /* Tìm kiếm */
  .input-group {
    width: 300px;
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .table th, .table td {
      padding: 10px 5px;
    }
  }
 .title {
    color: #007bff; 
  }
  

</style>


<body>
  <div class="container">
    <h2 class="title">Danh sách lịch làm việc của nhân viên</h2>
    <div class="input-group mb-4">
      <input type="text" class="form-control " placeholder="Tìm kiếm thông tin nhân viên">
      <button class="btn btn-primary " type="button">Tìm</button>
    </div>
    <table class="table">
      <thead >
        <tr>
          <th>STT</th>
          <th>Mã Nhân Viên</th>
          <th>Tên Nhân Viên</th>
          <th>Ca Làm Việc</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>234032</td>
          <td>Đặng Văn C</td>
          <td>Thứ 5: 8:00am-10:00pm<br>Thứ 6: 9:00am-5:00pm</td>
          <td><button class="btn btn-primary btn-warning" data-bs-toggle="modal" data-bs-target="#viewModal">Chỉnh sửa</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>537012</td>
          <td>Nguyễn Thị B</td>
          <td>Thứ 2: 7:00am-4:00pm<br>Thứ 4: 2:00pm-10:00pm</td>
          <td><button class="btn btn-primary btn-warning" data-bs-toggle="modal" data-bs-target="#viewModal">Chỉnh sửa</button></td>
        </tr>
        </tbody>
    </table>
    <!-- Modal Cập Nhật Thông Tin -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <style>
                    /* Định dạng chung */
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

/* Thẻ card */
.card {
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

/* Header của card */
.card-header {
  background-color: #f2f2f2;
  padding: 15px;
  font-weight: bold;
}

/* Nội dung của card */
.card-body {
  padding: 15px;
}

/* Thông tin nhân viên */
.col-md-9 h4 {
  margin-top: 0;
}

.col-md-9 p {
  margin-bottom: 5px;
}

/* Bảng lịch làm việc */
.table {
  border: 1px solid #ddd;
  width: 100%;
}

.table th, .table td {
  padding: 10px;
  text-align: center;
}

.table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

/* Thêm lịch làm việc */
.mb-3 {
  margin-bottom: 15px;
}

/* Nút */
.btn {
  border-radius: 5px;
  padding: 10px 20px;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  color: #fff;
}

.btn-secondary {
  background-color: #ccc;
  border: none;
  color: #333;
}

/* Icon */
.bi {
  font-size: 1.2rem;
}
.modal-dialog {
  max-width: 800px; 
}
.text-blue {
  color: #007bff; /* Màu xanh dương */
}
              
            </style>
            <div class="modal-header">
              <h2 class="modal-title text-blue" id="viewModalLabel">Điều chỉnh lịch làm việc</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        
                <div class="container">
                    <div   
                 class="card">
                      <div class="card-header" style="color: #007bff;">
                        Điều chỉnh Lịch Làm Việc
                        
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="user.png" alt="Avatar" class="img-fluid rounded-circle">
                          </div>
                          <div class="col-md-9">
                            <h4>Thông Tin Nhân Viên:</h4>
                            <p>Họ và Tên: Đặng Văn C</p>
                            <p>Năm Sinh: 23/09/1985</p>
                            <p>Mã Nhân Viên: 234032</p>
                            <p>Chuyên Khoa: Khoa Nội</p>
                          </div>
                        </div>
                        <hr>
                        <h4>Lịch Làm Việc</h4>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Ngày Làm Việc</th>
                              <th>Ca Làm Việc</th>
                              <th>Chỉnh Sửa</th>
                             <th> Xóa</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Thứ 5</td>
                              <td>8:00am-10pm</td>
                              <td><a href="#" class="text-primary"><i class="bi bi-pencil-square">chỉnh sửa</i></a></td>
                              <td><a href="#" class="text-danger"><i class="bi bi-trash">xóa</i></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Thứ 6</td>
                              <td>9:00am-5:00pm</td>
                              <td><a href="#" class="text-primary"><i class="bi bi-pencil-square">chỉnh sửa</i></a></td>
                              <td><a href="#" class="text-danger"><i class="bi bi-trash">xóa</i></a></td>
                            </tr>
                          </tbody>
                        </table>
                        <hr>
                        <h4>Thêm Lịch Làm Việc</h4>
                        <div class="mb-3">
                          <label for="ngayLamViec">Chọn Ngày Làm Việc:</label>
                          <input type="date" class="form-control" id="ngayLamViec">
                        </div>
                        <div class="mb-3">
                          <label for="caLamViec">Giờ:</label>
                          <input type="time" class="form-control" id="caLamViec">
                        </div>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <div class="text-end">
                          <button type="button" class="btn btn-danger">Quay Lại</button>
                          <button type="button" class="btn btn-success">Cập Nhật</button>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>






<!-- Modal Cập Nhật Thông Tin nhân viên 2 -->

      <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <style>
                    /* Định dạng chung */
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

/* Thẻ card */
.card {
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

/* Header của card */
.card-header {
  background-color: #f2f2f2;
  padding: 15px;
  font-weight: bold;
}

/* Nội dung của card */
.card-body {
  padding: 15px;
}

/* Thông tin nhân viên */
.col-md-9 h4 {
  margin-top: 0;
}

.col-md-9 p {
  margin-bottom: 5px;
}

/* Bảng lịch làm việc */
.table {
  border: 1px solid #ddd;
  width: 100%;
}

.table th, .table td {
  padding: 10px;
  text-align: center;
}

.table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

/* Thêm lịch làm việc */
.mb-3 {
  margin-bottom: 15px;
}

/* Nút */
.btn {
  border-radius: 5px;
  padding: 10px 20px;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  color: #fff;
}

.btn-secondary {
  background-color: #ccc;
  border: none;
  color: #333;
}

/* Icon */
.bi {
  font-size: 1.2rem;
}
.modal-dialog {
  max-width: 800px; 
}
.text-blue {
  color: #007bff; 
}
              
            </style>
            <div class="modal-header">
              <h2 class="modal-title text-blue" id="viewModalLabel" style="color: #007bff;">Điều chỉnh lịch làm việc</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        
                <div class="container">
                    <div   
                 class="card">
                      <div class="card-header">
                        Điều chỉnh Lịch Làm Việc
                        
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="user.png" alt="Avatar" class="img-fluid rounded-circle">
                          </div>
                          <div class="col-md-9">
                            <h4>Thông Tin Nhân Viên:</h4>
                            <p>Họ và Tên:Nguyễn Thị B</p>
                            <p>Năm Sinh: 23/12/1985</p>
                            <p>Mã Nhân Viên: 537012</p>
                            <p>Chuyên Khoa: Khoa Ngoại</p>
                          </div>
                        </div>
                        <hr>
                        <h4>Lịch Làm Việc</h4>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Ngày Làm Việc</th>
                              <th>Ca Làm Việc</th>
                              <th>Chỉnh Sửa</th>
                             <th> Xóa</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Thứ 2</td>
                              <td>7:00am-4:00pm</td>
                              <td><a href="#" class="text-primary"><i class="bi bi-pencil-square">chỉnh sửa</i></a></td>
                              <td><a href="#" class="text-danger"><i class="bi bi-trash">xóa</i></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Thứ 4</td>
                              <td>2:00pm-10:00pm</td>
                              <td><a href="#" class="text-primary"><i class="bi bi-pencil-square">chỉnh sửa</i></a></td>
                              <td><a href="#" class="text-danger"><i class="bi bi-trash">xóa</i></a></td>
                            </tr>
                          </tbody>
                        </table>
                        <hr>
                        <h4>Thêm Lịch Làm Việc</h4>
                        <div class="mb-3">
                          <label for="ngayLamViec">Chọn Ngày Làm Việc:</label>
                          <input type="date" class="form-control" id="ngayLamViec">
                        </div>
                        <div class="mb-3">
                          <label for="caLamViec">Giờ:</label>
                          <input type="time" class="form-control" id="caLamViec">
                        </div>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <div class="text-end">
                          <button type="button" class="btn btn-danger">Quay Lại</button>
                          <button type="button" class="btn btn-success">Cập Nhật</button>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>










      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Xóa nhân viên</h5>
            </div>
            <div class="modal-body">
              <p>Bạn có chắc chắn muốn xóa nhân viên này không?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="button" class="btn btn-danger">Xóa</button>
            </div>
          </div>
        </div>
      </div>
      


    <div class="text-end">
      <button class="btn btn-secondary">Quay lại</button>
      <button class="btn btn-primary">In lịch</button>
    </div>
  </div>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>-->
</body>