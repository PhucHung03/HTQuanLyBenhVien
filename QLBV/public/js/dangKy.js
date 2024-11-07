document.addEventListener("DOMContentLoaded", function() {
    // Lấy form và gán sự kiện submit
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Ngăn gửi form mặc định

        // Lấy giá trị từ các trường input
        const ho = document.querySelector("input[placeholder='Họ']").value.trim();
        const ten = document.querySelector("input[placeholder='Tên']").value.trim();
        const sdt = document.querySelector("input[placeholder='Số điện thoại di động']").value.trim();
        const email = document.querySelector("input[type='email']").value.trim();
        const password = document.querySelector("input[type='password']").value.trim();
        const dobDay = document.querySelector("input[placeholder='Ngày']").value.trim();
        const dobMonth = document.querySelector("select").value.trim();
        const dobYear = document.querySelector("input[placeholder='Năm']").value.trim();
        const gender = document.querySelector('input[name="gender"]:checked');

        // Kiểm tra trường Họ và Tên
        if (ho === "" || ten === "") {
            alert("Vui lòng điền đầy đủ họ và tên.");
            return;
        }

        // Kiểm tra ngày tháng năm sinh
        if (dobDay === "" || dobMonth === "" || dobYear === "") {
            alert("Vui lòng điền đầy đủ ngày, tháng, năm sinh.");
            return;
        }

        // Kiểm tra giới tính
        if (!gender) {
            alert("Vui lòng chọn giới tính.");
            return;
        }

        // Kiểm tra số điện thoại (10 hoặc 11 chữ số)
        const phonePattern = /^(01|09|03)\d{8}$/;
        if (!sdt.match(phonePattern)) {
            alert("Số điện thoại không hợp lệ. Vui lòng nhập lại.");
            return;
        }

        // Kiểm tra email
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            alert("Vui lòng nhập email hợp lệ.");
            return;
        }

        // Kiểm tra mật khẩu (ít nhất 6 ký tự)
        if (password.length < 6) {
            alert("Mật khẩu phải có ít nhất 6 ký tự.");
            return;
        }

        // Nếu tất cả đều hợp lệ, gửi form
        alert("Đăng ký thành công!");
        window.location.href = "dangNhap.php"; 
    });
});
