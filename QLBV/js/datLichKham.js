document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const inputs = form.querySelectorAll("input");
    const emailInput = form.querySelector("input[name='email']");
    const phoneInput = form.querySelector("input[name='sdt']");
    const appointmentDateInput = form.querySelector("input[name='ngaykham']"); // Ngày khám
    const symptomsInput = form.querySelector("textarea[name='mota']"); // Mô tả bệnh
    const departmentSelect = form.querySelector("select[name='khoakham']"); // Khoa khám
    const doctorSelect = form.querySelector("select[name='bacsi']"); // Bác sĩ
    const submitButton = form.querySelector("button[type='submit']");

    // Hàm kiểm tra xem tất cả trường có dữ liệu không
    function validateForm() {
        let isValid = true;

        // Kiểm tra các trường bắt buộc
        inputs.forEach(input => {
            if (input.type !== "submit" && input.name !== "mota" && input.value.trim() === "") {
                input.style.borderColor = "red";
                isValid = false;
            } else {
                input.style.borderColor = "#ddd";
            }
        });

        // Kiểm tra số điện thoại
        const phoneRegex = /^(03|09|07)\d{8}$/;
        if (!phoneRegex.test(phoneInput.value)) {
            phoneInput.style.borderColor = "red";
            isValid = false;
        } else {
            phoneInput.style.borderColor = "#ddd";
        }

        // Kiểm tra email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            emailInput.style.borderColor = "red";
            isValid = false;
        } else {
            emailInput.style.borderColor = "#ddd";
        }

        // Kiểm tra ngày khám: phải lớn hơn ngày hiện tại + 1 ngày
        if (appointmentDateInput.value.trim() === "") {
            appointmentDateInput.style.borderColor = "red";
            isValid = false;
        } else {
            const today = new Date();
            const appointmentDate = new Date(appointmentDateInput.value);

            today.setDate(today.getDate() + 1); // Thêm 1 ngày vào ngày hiện tại
            if (appointmentDate <= today) {
                appointmentDateInput.style.borderColor = "red";
                isValid = false;
                alert("Ngày khám phải lớn hơn ngày hiện tại ít nhất 1 ngày.");
            } else {
                appointmentDateInput.style.borderColor = "#ddd";
            }
        }

        // Kiểm tra khoa khám: Bắt buộc chọn
        if (departmentSelect.value === "") {
            departmentSelect.style.borderColor = "red";
            isValid = false;
        } else {
            departmentSelect.style.borderColor = "#ddd";
        }

        // Kiểm tra bác sĩ: Bắt buộc chọn
        if (doctorSelect.value === "") {
            doctorSelect.style.borderColor = "red";
            isValid = false;
        } else {
            doctorSelect.style.borderColor = "#ddd";
        }

        return isValid;
    }

    // Gắn sự kiện kiểm tra form trước khi submit
    form.addEventListener("submit", function (event) {
        if (!validateForm()) {
            event.preventDefault();
            alert("Vui lòng điền đầy đủ và chính xác thông tin.");
        }
    });

    // Đổi màu nút khi di chuột
    submitButton.addEventListener("mouseover", function () {
        submitButton.style.backgroundColor = "#3a5ec4";
    });

    submitButton.addEventListener("mouseout", function () {
        submitButton.style.backgroundColor = "#4b72fa";
    });
});
