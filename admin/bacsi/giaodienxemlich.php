
<style>
  /* Định dạng chung */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
  }
  
  /* Thanh tiêu đề */
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
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  /* Tìm kiếm, chuyên khoa, chọn ngày */
  .row {
    margin-bottom: 20px;
  }
  
  .form-control,
  .form-select {
    height: 40px;
  }
  
  /* Bảng lịch làm việc */
  .table {
    text-align: center;
  }
  
  th,
  td {
    padding: 10px;
  }
  
  /* Các nút chức năng */
  .text-center button {
    margin-left: 5px;
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
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h1 margin:0px  auto class="title">Thông tin lịch làm việc</h1>
        <h5 class="card-title" style="color: blue;">Thông tin bác sĩ</h5>
        <p class="card-text">Họ và Tên: Trần Văn A</p>
        <p class="card-text">Mã bác sĩ: 21029771</p>
        <p class="card-text">Ngày sinh: 19/12/2003</p>
        <p class="card-text">SĐT: 0344485128</p>
        <p class="card-text">Chuyên khoa: Nội khoa</p>
      </div>
    </div>
    <div class="card mt-3">
      <div class="card-body">
        <h5 class="card-title" style="color: blue;">Lịch làm việc</h5>
        <table class="table">
          <thead class="table-header">
            <tr>
              <th>Phòng khám</th>
              <th>Ngày làm việc</th>
              <th>Ca làm việc</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>B1.4</td>
              <td>Thứ 2</td>
              <td>8:00am - 5:00pm</td>
            </tr>
            <tr>
              <td>A2.3</td>
              <td>Thứ 4</td>
              <td>9:00am - 6:00pm</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="button">
    <button class="btn btn-secondary"><a href="../html/giaodienxemlich.html" class="btn btn-secondary">Quay Lại</a></button>
    <button class="btn btn-primary btn-sm">In thông tin</button>
    </div>
  </div>
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>-->
</body>