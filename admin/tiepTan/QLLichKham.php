
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

 .table-header {
      background-color: #007bff; 
      color: white; 
    }
    .title {
      color: #007bff; 
    }

  
</style>


<body>
  <div class="container">
    <h1 class="title">Danh sách lịch đăng ký khám</h1>
    <div class="row mb-3">
      <div class="col-md-7">
        <div class="input-group ">
          <input type="text" class="form-control " placeholder="Tìm kiếm thông tin bệnh nhân">
          <button class="btn btn-primary " type="button">Tìm</button>
        </div>
      </div>
    </div>
    <table class="table">
      <thead class="table-header">
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
          <td><a href="index.php?quanli=benhnhan1"  ><button class="btn btn-primary" >Chỉnh sửa</button></a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>213456</td>
          <td>Trần Thị B</td>
          <td>Thứ 3, 3:00pm</td>
          <td><a href="index.php?quanli=benhnhan2" class="btn btn-primary" >Chỉnh sửa</a></td>
        </tr>
      </tbody>
    </table>
    




    <div class="text-end">
      <button class="btn btn-secondary">Quay lại</button>
      <button class="btn btn-primary">In lịch khám</button>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>