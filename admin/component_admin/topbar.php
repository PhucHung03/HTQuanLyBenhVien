        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Tìm kiếm">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="message-icon">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle" id="message-badge" style="display: none; width: 10px; height: 10px;"></span>
                        <span class="d-none d-lg-inline-flex">Tin nhắn</span>
                    </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0" id="message-container">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            
                            <a href="#" class="dropdown-item text-center">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Thông báo</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            
                            <a href="#" class="dropdown-item text-center">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/profile.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Sáng Tạo</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="../index.php?url=dang-xuat" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Conntent start -->
            <script>
                // Mảng chứa các tin nhắn ngẫu nhiên
                const messages = [
                    { text: "Bác sĩ ơi, tôi đau đầu quá.", time: "15 phút trước" },
                    { text: "Tôi bị dị ứng sau khi uống thuốc", time: "10 phút trước" },
                    { text: "Tin nhắn từ quản trị viên", time: "5 phút trước" },
                    { text: "Tôi thấy đau ngực bên trái.", time: "1 phút trước" },
                    { text: "Đừng quên họp lúc 3 giờ chiều", time: "30 phút trước" }
                ];

                // Hàm hiển thị tin nhắn ngẫu nhiên
                function displayRandomMessage() {
                    // Lấy ngẫu nhiên một tin nhắn từ mảng
                    const randomIndex = Math.floor(Math.random() * messages.length);
                    const message = messages[randomIndex];

                    // Tạo HTML cho tin nhắn
                    const messageHTML = `
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/admin.png" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">${message.text}</h6>
                                    <small>${message.time}</small>
                                </div>
                            </div>
                        </a>
                    `;

                    // Thêm tin nhắn vào đầu danh sách
                    const container = document.getElementById("message-container");
                    container.insertAdjacentHTML("afterbegin", messageHTML);

                    // Hiển thị chấm đỏ trên icon
                    const messageBadge = document.getElementById("message-badge");
                    messageBadge.style.display = "block"; // Hiển thị chấm đỏ
                }

                // Hàm ẩn chấm đỏ khi người dùng mở dropdown
                function hideMessageBadge() {
                    const messageBadge = document.getElementById("message-badge");
                    messageBadge.style.display = "none";
                }

                // Lắng nghe sự kiện mở dropdown để ẩn chấm đỏ
                document.getElementById("message-icon").addEventListener("click", hideMessageBadge);

                // Gọi hàm hiển thị tin nhắn mỗi 10 giây
                setInterval(displayRandomMessage, 60000);

                // Hiển thị tin nhắn đầu tiên ngay khi tải trang
                displayRandomMessage();

</script>