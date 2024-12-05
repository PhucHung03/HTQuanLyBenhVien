<?php
    include("../xuly/clsquantri.php");
    $p = new quantri();
?>

<div class="taoPhieuKham">
    <section class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <form method="post" enctype="multipart/form-data" name="form1" id="form1">
                <h4 id="title_taophieukham">Tạo Phiếu Khám</h4>
                <div class="danhsach__thongtin">
                    <!-- Thông tin bệnh nhân -->
                    <div id="phieukham__mabn"><span>Mã bệnh nhân :</span> <input name="txtmabenhnhan" id="txtmabenhnhan" type="text" placeholder="Nhập mã bệnh nhân" ><button type="button" id="checkPatient">Kiểm tra</button>
                    <span id="checkResult"></span> <!-- Hiển thị kết quả kiểm tra --></div>
                    
                    <div id="phieukham__hoten"><span>Họ và tên :</span><input name="txttenbenhnhan" id="txttenbenhnhan" type="text" placeholder="Nhập tên bệnh nhân" readonly></div>
                    <div id="phieukham__ngaysinh"><span>Ngày sinh :</span><input name="txtngaysinh" id="txtngaysinh" type="date" placeholder="Nhập ngày sinh" readonly></div>
                    <div id="phieukham__gioitinh">
                        <span>Giới tính:</span>
                        <input type="radio" id="nam" name="gioitinh" value="Nam" disabled><label for="nam">Nam</label>
                        <input type="radio" id="nu" name="gioitinh" value="Nữ" disabled><label for="nu">Nữ</label>
                    </div>
                    <div id="phieukham__sodienthoai"><span>Số điện thoại :</span><input name="txtsdt" id="txtsdt" type="number" placeholder="Nhập số điện thoại" readonly></div>
                    <div id="phieukham__diachi"><span>Địa chỉ :</span><textarea name="txtdiachi" id="txtdiachi" placeholder="Nhập địa chỉ" readonly></textarea></div>
                    <div id="phieukham__tinhtrangbenh"><span>Tình trạng bệnh :</span><textarea name="txttinhtrangbenh" id="txttinhtrangbenh" placeholder="Nhập tình trạng bệnh" ></textarea></div>
                    <div id="phieukham__chandoan"><span>Chẩn đoán :</span><textarea name="txtchandoan" id="txtchandoan" placeholder="Nhập chẩn đoán bệnh"></textarea></div>
                    <div id="phieukham__kehoachdieutri"><span>Kế hoạch điều trị :</span><textarea name="txtkehoachdieutri" id="txtkehoachdieutri" placeholder="Nhập kế hoạch điều trị"></textarea></div>

                    <!-- Thông tin thuốc -->
                    <div id="phieukham__thuockedon">
                        <span>Thuốc kê đơn :</span>
                        <div id="medicine-list">
                            <div class="medicine-entry">
                                <p class="title__donthuoc">Tên thuốc:</p>
                                <?php $p->chonthuoc("select * from thuoc order by tenThuoc asc"); ?>
                                <p class="title2__donthuoc">Số lượng:</p>
                                <input type="number" class="medicine-quantity" name="soluong[]" id="soluong" value="1" min="1" />
                                <p class="title2__donthuoc">Liều dùng:</p>
                                <select class="lieudung" name="lieudung[]" id="lieudung">
                                    <option value="1 lần / ngày">1 lần / ngày</option>
                                    <option value="2 lần / ngày">2 lần / ngày</option>
                                    <option value="3 lần / ngày">3 lần / ngày</option>
                                </select>
                                <button type="button" class="remove-medicine btn btn-danger btn-sm" style="margin-left: 10px;">X</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="nutthemthuoc">
                            <button type="button" onclick="addMedicineEntry()" class="nut__themthuoc"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
                        </div>
                    <!-- Ghi chú bác sĩ -->
                    <div id="phieukham__ghichu"><span>Ghi chú :</span><textarea name="txtghichu" id="txtghichu" placeholder="Ghi chú của bác sĩ"></textarea></div>
                    
                    <!-- Nút tạo phiếu khám -->
                    <button name="btn__taophieukham"  id="btn__taophieukham" value="Tạo Phiếu Khám">Tạo Phiếu Khám</button>
                </div>
            </form>

            <?php
                if (isset($_POST['btn__taophieukham']) && $_POST['btn__taophieukham'] == 'Tạo Phiếu Khám') {
                    // Lấy dữ liệu từ form
                    $maBenhNhan = $_REQUEST['txtmabenhnhan'];
                    $tenBenhNhan = $_REQUEST['txttenbenhnhan'];
                    $ngaySinh = $_REQUEST['txtngaysinh'];
                    $gioiTinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : 'Nam'; // Default to 'Nam' if not set
                    $sdt = $_REQUEST['txtsdt'];
                    $diaChi = $_REQUEST['txtdiachi'];
                    $tinhTrangBenh = $_REQUEST['txttinhtrangbenh'];
                    $chanDoan = $_REQUEST['txtchandoan'];
                    $keHoachDieuTri = $_REQUEST['txtkehoachdieutri'];
                    $ghiChu = $_REQUEST['txtghichu'];
                
                    // Tạo mã đơn thuốc
                    $maDonThuoc = $p->generateUniqueMaDonThuoc(); // Đảm bảo mã đơn thuốc duy nhất
                    $tenThuoc = $_POST['tenThuoc']; // Mảng tên thuốc
                    $soLuong = $_POST['soluong'];   // Mảng số lượng
                    $lieuDung = $_POST['lieudung']; // Mảng liều dùng
                
                    // Tạo danh sách thuốc dưới dạng chuỗi
                    $danhSachThuoc = [];
                    foreach ($tenThuoc as $index => $thuoc) {
                        $danhSachThuoc[] = "$thuoc, $soLuong[$index], $lieuDung[$index]";
                    }
                    $danhSachThuocStr = implode('; ', $danhSachThuoc);
                
                    // Kiểm tra mã đơn thuốc có trùng không
                    $conn = $p->connect(); // Establish the connection
                    $checkQuery = "SELECT * FROM donthuoc WHERE maDonThuoc = '$maDonThuoc'";
                    $result = mysqli_query($conn, $checkQuery); // Use $conn here
                
                    if ($result && mysqli_num_rows($result) > 0) {
                        // Nếu mã đơn thuốc đã tồn tại, tạo mã đơn thuốc mới
                        $maDonThuoc = $p->generateUniqueMaDonThuoc(); // Tạo mã đơn thuốc mới
                    }
                
                    // Thêm đơn thuốc vào bảng donthuoc
                    $query = "INSERT INTO donthuoc(maDonThuoc, maBenhNhan, danhSachThuoc) 
                            VALUES ('$maDonThuoc', '$maBenhNhan', '$danhSachThuocStr')";
                    if ($p->themxoasua($query) != 1) {
                        echo '<script>alert("Có lỗi khi tạo đơn thuốc!");</script>';
                    } else {
                        // Lấy ngày hôm nay
                        $ngayTao = date('Y-m-d');  // Lấy ngày hiện tại theo định dạng YYYY-MM-DD
                
                        // Tạo phiếu khám và gán mã đơn thuốc
                        $maPhieuKham = 'PK' . rand(100000, 999999);
                        $query = "INSERT INTO phieukham(maPhieuKham, maBenhNhan, tinhTrangBenh, chanDoan, keHoachDieuTri, maDonThuoc, ghiChu, ngayTao) 
                                VALUES ('$maPhieuKham', '$maBenhNhan', '$tinhTrangBenh', '$chanDoan', '$keHoachDieuTri', '$maDonThuoc', '$ghiChu', '$ngayTao')";
                
                        if ($p->themxoasua($query) == 1) {
                            // Cập nhật mã phiếu khám vào bảng bệnh nhân
                            $updateQuery = "UPDATE benhnhan SET maPhieuKham = '$maPhieuKham' WHERE maBenhNhan = '$maBenhNhan'";
                            if ($p->themxoasua($updateQuery)) {
                                echo '<script language="javascript">
                                        alert("Tạo phiếu khám thành công!");
                                    </script>';
                            } else {
                                echo '<script language="javascript">
                                        alert("Có lỗi khi cập nhật mã phiếu khám vào bệnh nhân.");
                                    </script>';
                            }
                        } else {
                            echo '<script language="javascript">
                                    alert("Có lỗi khi tạo phiếu khám. Vui lòng thử lại!");
                                </script>';
                        }
                    }
                }
                ?>


        </div>
    </section>
</div>

<script>
            
        // Hàm thêm một ô nhập thuốc mới
        function addMedicineEntry() {
            const medicineList = document.getElementById("medicine-list");
            const newEntry = document.createElement("div");
            newEntry.classList.add("medicine-entry");

            newEntry.innerHTML = `
                <p class="title__donthuoc">Tên thuốc:</p>
                                    <?php $p->chonthuoc("select * from thuoc order by tenThuoc asc"); ?>
                                    <p class="title2__donthuoc">Số lượng:</p>
                                    <input type="number" class="medicine-quantity" name="soluong[]" id="soluong" value="1" min="1" />
                                    <p class="title2__donthuoc">Liều dùng:</p>
                                    <select class="lieudung" name="lieudung[]" id="lieudung">
                                        <option value="1 lần / ngày">1 lần / ngày</option>
                                        <option value="2 lần / ngày">2 lần / ngày</option>
                                        <option value="3 lần / ngày">3 lần / ngày</option>
                                    </select>
                                    <button type="button" class="remove-medicine btn btn-danger btn-sm" style="margin-left: 10px;">X</button>
            `;

            medicineList.appendChild(newEntry);
        }

                // Xóa một ô nhập thuốc
                document.addEventListener('click', function(e) {
                    if (e.target && e.target.classList.contains('remove-medicine')) {
                        e.target.parentElement.remove();
                    }
                });

                document.getElementById('checkPatient').addEventListener('click', function() {
                var maBenhNhan = document.getElementById('txtmabenhnhan').value;

                if (maBenhNhan.trim() === "") {
                    alert("Vui lòng nhập mã bệnh nhân!");
                    return;
                }

                // Gửi yêu cầu AJAX kiểm tra mã bệnh nhân
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../xuly/check_patient.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);

                        if (response.status === 'success') {
                            // Điền thông tin vào các trường nếu tìm thấy
                            document.getElementById('txttenbenhnhan').value = response.data.tenBenhNhan;
                            document.getElementById('txtngaysinh').value = response.data.namSinh;
                            document.getElementById('txtsdt').value = response.data.sdt;
                            document.getElementById('txtdiachi').value = response.data.diaChi;

                            // Điền giới tính vào radio button
                            if (response.data.gioiTinh === 'Nam') {
                                document.getElementById('nam').checked = true;
                            } else if (response.data.gioiTinh === 'Nữ') {
                                document.getElementById('nu').checked = true;
                            }

                            // Hiển thị kết quả kiểm tra
                            document.getElementById('checkResult').innerHTML = "<span style='color: green;'>✓</span>";
                        } else {
                            // Nếu không tìm thấy mã bệnh nhân
                            document.getElementById('checkResult').innerHTML = "<span style='color: red;'>X</span>";
                        }
                    }
                };

                xhr.send("maBenhNhan=" + maBenhNhan);
            });
</script>
