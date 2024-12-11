<?php
    include("./xuly/clsquantri.php");
    $p = new quantri();
?>
<div class="xemBenhNhanPhuTrach">
    <section class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div id="top__header">
                <strong id="title_header">Danh sách bệnh nhân phụ trách</strong>
                <form class="d-flex">
                    <input id="form__search" type="search" placeholder="Tìm kiếm bệnh nhân..." aria-label="Search">
                    <button id="btn__search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <?php
                    $p->xuatdsbenhnhanphutrach("select * from benhnhan order by maBenhNhan asc")
                ?>
            </div>
        </div>
    </section>
</div>