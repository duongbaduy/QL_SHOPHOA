<?php 
<<<<<<< HEAD
    function InsertHoaDon($makh,$diachi,$ngaydat,$ghichu,$tongtien,$hinhthucthanhtoan)
    {
        $conn = ketnoi();
        $sql = "INSERT INTO hoadon (MaKH, DiaChiGiaoHang, NgayDat, GhiChu, TongTien,HinhThucThanhToan) values('$makh','$diachi','$ngaydat','$ghichu','$tongtien','$hinhthucthanhtoan')";
=======
    function InsertHoaDon($makh,$ngaydat,$ghichu,$tongtien)
    {
        $conn = ketnoi();
        $sql = "INSERT INTO hoadon (MaKH, NgayDat, GhiChu, TongTien) values('$makh','$ngaydat','$ghichu','$tongtien')";
>>>>>>> b5c0927902fa29b8435dc9da00f95ed98be0efd0
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $lastInsertedId = $conn->lastInsertId();
        return $lastInsertedId;
    }
    
    function InserCTHoaDon($MaHD,$MaSP,$SoLuong,$DonGia)
    {
        $conn = ketnoi();
        $sql = "INSERT INTO chitiethoadon (MaHD, MaSP, SoLuong, DonGia) values('$MaHD','$MaSP','$SoLuong','$DonGia')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $sanpham = $stmt->fetchAll();
        return $sanpham;
    }

    function getHoaDon($id)
    {
        $conn = ketnoi();
        $stmt = $conn->prepare("SELECT * FROM hoadon where MaKH = '$id'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $sanpham = $stmt->fetchAll();
        return $sanpham;
    }

    function DeleteHoaDon($id)
    {
          // Kết nối đến cơ sở dữ liệu
        $conn = ketnoi();

        // Câu lệnh SQL DELETE với tham số chuẩn bị
        $sql = "DELETE FROM hoadon WHERE MaHD = :id AND TinhTrang = N'Chờ xác nhận'";

        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);

        // Bind giá trị tham số
        $stmt->bindParam(':id', $id);

        // Thực thi câu lệnh SQL
        $stmt->execute();

        // Trả về số hàng bị ảnh hưởng
        return $stmt->rowCount();
    }
?>