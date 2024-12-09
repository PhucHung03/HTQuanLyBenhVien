<?php
class bacSiModel
{
    public function select_xemLichHenKham()
    {
        $sql = "select maLichHen, bn.maBenhNhan, bn.tenBenhNhan, gioKham from benhnhan bn join lichhenkham lhk on bn.maBenhNhan = lhk.maBenhNhan; ";

        return pdo_query($sql);
    }

    public function select_detail_xemLichHenKham($maBenhNhan)
    {
        $sql = "SELECT 
        lhk.maLichHen,
        bn.maBenhNhan,
        bn.tenBenhNhan,
        bn.sdt,
        bn.diaChi,
        bn.maBHYT,
        bs.maKhoa,
        kk.tenKhoa,
        bs.tenBacSi,
        lhk.ngayKham,
        lhk.gioKham,
        lhk.moTaSucKhoe
    FROM 
        benhnhan bn 
    JOIN 
        lichhenkham lhk 
        ON bn.maBenhNhan = lhk.maBenhNhan
    JOIN 
        bacsi bs 
        ON lhk.maBacSi = bs.maBacSi
    JOIN 
        khoakham kk 
        ON bs.maKhoa = kk.maKhoa
    WHERE 
        lhk.maLichHen = ?;
    ";
        return pdo_query($sql, $maBenhNhan);
    }


    public function seclect_timKiemLichHen($keyword)
    {
        // Bắt đầu câu truy vấn SQL
        $sql = "select maLichHen, bn.maBenhNhan, bn.tenBenhNhan, gioKham from benhnhan bn 
        join lichhenkham lhk 
        on bn.maBenhNhan = lhk.maBenhNhan where 1"; // "WHERE 1" để dễ dàng thêm điều kiện

        // Thêm điều kiện tìm kiếm theo tên bệnh nhân (keyword)
        if ($keyword !='') {
            $sql .= " AND bn.tenBenhNhan LIKE '%".$keyword."%'";
        }

        // Sắp xếp theo giờ khám (giảm dần)
        $sql .= " ORDER BY lhk.gioKham DESC";
        // Thực thi truy vấn
        return pdo_query($sql);
    }
}

$bacSiModel = new bacSiModel();
