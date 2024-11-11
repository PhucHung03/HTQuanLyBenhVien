
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
      <thead style="color: #007bff;">
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
          <td><a href="index.php?quanli=nv1" class="btn btn-primary btn-warning" >Chỉnh sửa</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>537012</td>
          <td>Nguyễn Thị B</td>
          <td>Thứ 2: 7:00am-4:00pm<br>Thứ 4: 2:00pm-10:00pm</td>
          <td><a href="index.php?quanli=nv2" class="btn btn-primary btn-warning">Chỉnh sửa</a></td>
        </tr>
        </tbody>
    </table>
   


    <div class="text-end">
      <button class="btn btn-secondary">Quay lại</button>
      <button class="btn btn-primary">In lịch</button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>