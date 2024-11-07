<style>

.card {
    border: none;
  }
  .table td, .table th {
    border: 1px solid #ddd;
    text-align: center;}
    .container  {
      width: 80%;             
      max-width: 1200px;        
      margin: 0 auto;          
      padding: 20px;          
      border: 1px solid #ccc;   
      border-radius: 10px;      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
      background-color: #f9f9f9; 
  }
  h1{
      text-align: center;
  }
  .button{
      text-align: right;
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
    <h1 class="title">Xem lịch làm việc</h1>
    <div class="row mb-3">
      <div class="col-md-3">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Tìm kiếm bác sĩ">
          <button class="btn btn-primary" type="button">Tìm</button>
        </div>
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option>Tất cả</option>
          <option>Nội khoa</option>
          <option>Ngoại khoa</option>
        </select>
      </div>
      <div class="col-md-3">
        <input type="date" class="form-control">
      </div>
    </div>

    <table class="table mt-3">
      <thead class="table-header">
        <tr>
          <th>STT</th>
          <th>Tên bác sĩ</th>
          <th>Chuyên khoa</th>
          <th>Giờ làm việc</th>
          <th>Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>BS. Trần Văn A</td>
          <td>Nội khoa</td>
          <td>8:00am - 12:00pm</td>
          <td>Đang làm việc</td>
        </tr>
        <tr>
          <td>2</td>
          <td>BS. Lê Thị D</td>
          <td>Ngoại khoa</td>
          <td>9:00am - 11:00pm</td>
          <td>Đang làm việc</td>
        </tr>
        <tr>
          <td>3</td>
          <td>BS. Nguyễn Văn B</td>
          <td>Ngoại khoa</td>
          <td>7:00am - 6:00pm</td>
          <td>Đang làm việc</td>
        </tr>
      </tbody>
    </table>
    
    <div class="text-center">
      <a href="index.php?quanli=detail-lich-lam-viec" class="btn btn-primary btn-sm">Chi tiết bác sĩ</a>
      <button class="btn btn-secondary">Quay lại</button>
    </div>
  </div>
  
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
</body>