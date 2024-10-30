

<!-- <body class="p-6"> -->
    <div class=" mx-auto bg-white  rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4 text-gray-700">Danh sách bệnh nhân</h1>
        <!-- Search bar and buttons below title -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

               <a href="index.php?quanli=tra-cuu-benh-nhan" > <button class="btn btn-info">Tra cứu bệnh nhân</button></a>
            </div>
        </nav>



        <!-- Patient list table -->
        <table class="w-100 border-collapse shadow-sm rounded-lg overflow-hidden">
            <thead>
                <tr class="table-header">
                    <th class="border p-3">STT</th>
                    <th class="border p-3">Họ tên</th>
                    <th class="border p-3">Mã khám bệnh</th>
                    <th class="border p-3">Số điện thoại</th>
                    <th class="border p-3">Lịch sử khám chữa bệnh</th>
                    <th class="border p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-row">
                    <td class="border p-3 text-center">1</td>
                    <td class="border p-3">Nguyễn Văn A</td>
                    <td class="border p-3 text-center">123456</td>
                    <td class="border p-3 text-center">0912345678</td>
                    <td class="border p-3">Khám nội khoa, điều trị viêm phổi</td>
                    <td class="border p-3 flex space-x-2 justify-center">
                        <a href="xctbn.php"><button class="btn btn-outline-primary">Xem</button></a>
                        <button class="btn btn-outline-success">Chỉnh sửa</button>
                        <button class="btn btn-outline-danger">Xóa</button>
                    </td>
                </tr>
                <tr class="table-row">
                    <td class="border p-3 text-center">2</td>
                    <td class="border p-3">Trần Thị B</td>
                    <td class="border p-3 text-center">234567</td>
                    <td class="border p-3 text-center">0987654321</td>
                    <td class="border p-3">Khám sản khoa, kiểm tra thai kỳ</td>
                    <td class="border p-3 flex space-x-2 justify-center">
                        <button class="btn btn-outline-primary">Xem</button>
                        <button class="btn btn-outline-success">Chỉnh sửa</button>
                        <button class="btn btn-outline-danger">Xóa</button>
                    </td>
                </tr>
                <tr class="table-row">
                    <td class="border p-3 text-center">3</td>
                    <td class="border p-3">Lê Văn C</td>
                    <td class="border p-3 text-center">345678</td>
                    <td class="border p-3 text-center">0909123456</td>
                    <td class="border p-3">Khám nha khoa, điều trị sâu răng</td>
                    <td class="border p-3 flex space-x-2 justify-center">
                        <button class="btn btn-outline-primary">Xem</button>
                        <button class="btn btn-outline-success">Chỉnh sửa</button>
                        <button class="btn btn-outline-danger">Xóa</button>
                    </td>
                </tr>
                <!-- Add more patients here if needed -->
            </tbody>
        </table>
    </div>
