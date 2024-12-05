<?php
include("../xuly/clsquantri.php");
$p = new quantri();
?>
<div class="detailBenhNhanPhuTrach">
    <section class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <p><a href="index.php?quanli=xem-benh-nhan-phu-trach">< Back</a></p>
            <div id="thongtin__left">
                <?php
                    $maBenhNhan = $_REQUEST['id'];
                    $sql = "SELECT 
                        benhnhan.maBenhNhan, benhnhan.tenBenhNhan, benhnhan.namSinh, benhnhan.gioiTinh, benhnhan.diaChi,
                        phieukham.ngayTao, phieukham.tinhTrangBenh, phieukham.chanDoan, phieukham.keHoachDieuTri
                        FROM benhnhan
                        INNER JOIN phieukham ON benhnhan.maBenhNhan = phieukham.maBenhNhan
                        WHERE benhnhan.maBenhNhan = '$maBenhNhan'";  

                    $p->xemchitietbenhnhan($sql);
                ?>
            </div>
            <div id="thongtin__right"><img src="img/anhthe.png" alt=""></div>
        </div>
    </section>
</div>
