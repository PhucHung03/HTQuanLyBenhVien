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

</head>
<body>
    <div class="container">
        <div  class="card">
          <div class="card-header" style="color: #007bff;">
            Điều chỉnh Lịch Làm Việc
            
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="user.png" alt="Avatar" class="img-fluid rounded-circle">
              </div>
              <div class="col-md-9">
                <h4 style="color: #007bff;">Thông Tin Nhân Viên:</h4>
                <p>Họ và Tên:Nguyễn Thị B</p>
                <p>Năm Sinh: 23/12/1985</p>
                <p>Mã Nhân Viên: 537012</p>
                <p>Chuyên Khoa: Khoa Ngoại</p>
              </div>
            </div>
            <hr>
            <h4>Lịch Làm Việc</h4>
            <table class="table">
              <thead style="color: #007bff;">
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
              <a href="index.php?quanli=quan-ly-lich-lam-viec"><button type="button" class="btn btn-danger">Quay Lại</button></a>
              <button type="button" class="btn btn-success">Cập Nhật</button>
            </div>
          </div>
        </div>
      </div>
</body>