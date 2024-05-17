<?php 
    function InsertHoaDon($makh,$diachi,$email,$sdt,$ngaydat,$ghichu,$tongtien)
    {
        $conn = ketnoi();
        $sql = "INSERT INTO hoadon (MaKH, DiaChi, email, sdt, NgayDat, GhiChu, TongTien) values('$makh','$diachi','$email','$sdt','$ngaydat','$ghichu','$tongtien')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>