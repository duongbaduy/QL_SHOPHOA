<?php
function getall_thongke(){
    $conn = ketnoi();
    $stmt = $conn->prepare("select loai.Ma_Loai as Ma_Loai, loai.Ten_Loai as Ten_Loai, sum(san_pham.So_Luong) as So_Luong from san_pham LEFT JOIN loai on loai.Ma_Loai = san_pham.Ma_Loai GROUP by loai.Ma_Loai, loai.Ten_Loai;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $listtk = $stmt->fetchAll();
    return $listtk;
}
function getall_thongke_doanhthu(){
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT sp.Ten_Hoa AS Ten_San_Pham, SUM(cthd.so_luong) AS So_Luong_Ban_Ra, SUM(cthd.so_luong * cthd.don_gia) AS Doanh_Thu FROM chi_tiet_hoa_don cthd INNER JOIN san_pham sp ON cthd.Ma_Hoa = sp.Ma_Hoa GROUP BY sp.Ten_Hoa;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $listtkdt = $stmt->fetchAll();
    return $listtkdt;
}
?>