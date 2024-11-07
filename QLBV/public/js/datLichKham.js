document.getElementById("dat-lich").addEventListener("click", function (event) {
    event.preventDefault();

    // Lấy giá trị từ các trường nhập liệu
    const hoVaTen = document.getElementById("hoVaTen").value.trim();
    const ngaySinh = document.getElementById("ngaySinh").value.trim();
    const soDienThoai = document.getElementById("soDienThoai").value.trim();
    const email = document.getElementById("email").value.trim();
    const diaChi = document.getElementById("diaChi").value.trim();
    const khoaKham = document.getElementById("khoaKham").value;
    const bacSi = document.getElementById("bacSi").value;
    const ngayKham = document.getElementById("ngayKham").value.trim();
    const gioKham = document.getElementById("gioKham").value.trim();
    const moTaBenh = document.getElementById("moTaBenh").value.trim();

    // Kiểm tra các trường nhập liệu (chỉ là ví dụ cơ bản, bạn có thể thêm điều kiện chi tiết hơn)
    if (!hoVaTen || !ngaySinh || !soDienThoai || !email || !diaChi || !khoaKham || !bacSi || !ngayKham || !gioKham || !moTaBenh) {
        alert("Vui lòng nhập đầy đủ thông tin.");
        return;
    }

    // Kiểm tra email hợp lệ
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Vui lòng nhập email hợp lệ.");
        return;
    }

    // Kiểm tra số điện thoại hợp lệ (10 chữ số, ví dụ trong trường hợp số điện thoại Việt Nam)
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(soDienThoai)) {
        alert("Vui lòng nhập số điện thoại hợp lệ (10 chữ số).");
        return;
    }

    // Nếu tất cả thông tin hợp lệ, chuyển đến trang thông báo thành công
    window.location.href = "thong-bao-thanh-cong.html";
});
