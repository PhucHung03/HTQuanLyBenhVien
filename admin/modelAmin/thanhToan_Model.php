<?php
class thanhtoanModel
{

    public function select_all_dichvu($keyword){
        $sql = "select tenDichVu, donGia from dichVu,dichvu_benhnhan where dichvu.maDichVu = dichvu_benhnhan.maDichVu and maBenhNhan='$keyword';";

        return pdo_query($sql);
    }
    public function select_thongtinthanhtoan($keyword)
    {
        $sql = "SELECT 
        bn.tenBenhNhan, 
        bn.maBenhNhan, 
        bn.sdt, 
        bn.diaChi, 
        bn.maBHYT, 
        lhk.ngayKham, 
        dv.maDichVu, 
        dv.tenDichVu, 
        dv.donGia
    FROM 
        benhnhan bn
    LEFT JOIN 
        lichhenkham lhk ON bn.maBenhNhan = lhk.maBenhNhan
    LEFT JOIN 
        dichvu_benhnhan bd ON bn.maBenhNhan = bd.maBenhNhan
    LEFT JOIN 
        dichvu dv ON bd.maDichVu = dv.maDichVu
    WHERE 1";

        if ($keyword != '') {
            $sql .= " AND bn.maBenhNhan like '%" . $keyword . "%'";
        }
        return pdo_query($sql);
    }
}

$thanhToanModel = new thanhtoanModel();