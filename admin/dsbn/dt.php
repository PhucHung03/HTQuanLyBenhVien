
<div class="container mt-5">
        <h2 class="text-center mb-4">Danh Sách Đơn Thuốc</h2>


        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

               <a href="index.php?quanli=tra-cuu-don-thuoc" > <button class="btn btn-info">Tra cứu đơn thuốc</button></a>
            </div>
        </nav>


        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Tên Bệnh Nhân</th>
                    <th>Mã Khám Bệnh</th>
                    <th>Mã Đơn Thuốc</th>
                    <th>Trạng Thái Đơn Thuốc</th>
                    <th>Hành Động</th> <!-- Thêm cột hành động -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nguyễn Văn A</td>
                    <td>KB123</td>
                    <td>ĐT456</td>
                    <td>Đã hoàn thành</td>
                    <td>
                        <a href="index.php?quanli=chi-tiet-don-thuoc" class="btn btn-info btn-sm">Xem</a>
                        <a href="edit.php?id=456" class="btn btn-warning btn-sm">Sửa</a>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete('456')">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>Trần Thị B</td>
                    <td>KB124</td>
                    <td>ĐT457</td>
                    <td>Chưa hoàn thành</td>
                    <td>
                        <a href="view.php?id=457" class="btn btn-info btn-sm">Xem</a>
                        <a href="edit.php?id=457" class="btn btn-warning btn-sm">Sửa</a>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete('457')">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>Lê Văn C</td>
                    <td>KB125</td>
                    <td>ĐT458</td>
                    <td>Đã hủy</td>
                    <td>
                        <a href="view.php?id=458" class="btn btn-info btn-sm">Xem</a>
                        <a href="edit.php?id=458" class="btn btn-warning btn-sm">Sửa</a>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete('458')">Xóa</button>
                    </td>
                </tr>
                <!-- Thêm các đơn thuốc khác ở đây -->
            </tbody>
        </table>
    </div>

