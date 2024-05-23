<?php 
    function insertDiaChi($MaKH,$Duong,$Phuong,$Huyen,$Tinh)
    {
        $conn = ketnoi();
        $sql = "INSERT INTO diachi (MaKH,Duong,Phuong,Huyen,Tinh) values('$MaKH','$Duong','$Phuong','$Huyen','$Tinh')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $lastInsertedId = $conn->lastInsertId();
        return $lastInsertedId;
    }

    function getDiaChi($id)
    {
        $conn = ketnoi();
        $sql = "SELECT * FROM diachi WHERE MaKH = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $sanpham = $stmt->fetchAll();
        return $sanpham;
    }
?>