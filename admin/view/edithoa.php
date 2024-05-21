<?php
$MaSP=$kq1[0]['MaSP'];
function get_AllHinhAnh($maSP)
    {
        $conn = ketnoi();
        $stmt = $conn->prepare("SELECT * FROM HinhAnh where MaSP = '$maSP'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $sanpham = $stmt->fetchAll();
        return $sanpham;
    }
    $DSHA = get_AllHinhAnh($MaSP);
?>
<div id="layoutSidenav_content">
<main>
    <form action="index.php?act=edit" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>SẢN PHẨM</h2>
        <div class="mb-3">
            <label for="MaSP" class="form-label">Mã Hoa</label>
            <input type="text" class="form-control" name="MaSP" placeholder="" value="<?=$kq1[0]['MaSP']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="TenSP" class="form-label">Tên Hoa</label>
            <input type="text" class="form-control" name="TenSP" placeholder="" value="<?=$kq1[0]['TenSP']?>">
        </div>
        <div class="mb-3">
            <label for="HinhAnh" class="form-label">Hình Ảnh</label><br>
            <!-- <input type="text" class="form-control" name="Hinh_anh" placeholder="" value=""> -->
            <img src="images/product/<?=$kq1[0]['HinhAnh']?>" alt="" width="80px"><br>
            <input type="file" name="hinh" id="">
        </div>
        <div class="mb-3">
            <label for="HinhAnh" class="form-label">Ảnh Mô Tả</label><br>
            <!-- <input type="text" class="form-control" name="Hinh_anh" placeholder="" value=""> -->
            <?php foreach($DSHA as $ha) {?>
            <img src="images/product/<?php echo $ha['TenHinh'] ?>" alt="" width="80px">
            <?php } ?>
            <input type="file" name="hinhs[]" id="" multiple="multiple">
        </div>
        <div class="mb-3">
            <label for="DonGia" class="form-label">Đơn Giá</label>
            <input type="number" class="form-control" name="DonGia" placeholder="" value="<?=$kq1[0]['DonGia']?>">
        </div>
        <div class="mb-3">
            <label for="SoLuong" class="form-label">Số Lượng</label>
            <input type="number" class="form-control" name="SoLuong" placeholder="" value="<?=$kq1[0]['SoLuong']?>">
        </div>
        <div class="mb-3">
            <label for="MoTa" class="form-label">Mô Tả</label>
            <input type="text" class="form-control" name="MoTa" placeholder="" value="<?=$kq1[0]['MoTa']?>">
        </div>
        <div class="mb-3">
            <label for="MaMau" class="form-label">Mã Màu</label>
            <!-- <input type="text" class="form-control" name="Ma_Loai" placeholder="" value=""> -->
            <select name="MaMau" id="" class="form-control">
                <option value="0">Chọn mã màu</option>
                <?php
                    $mamau=$kq1[0]['MaMau'];
                    if(isset($mau))
                    {
                        foreach($mau as $KQ1)
                        {
                            if($KQ1['MaMau']==$mamau)
                                echo '<option value="'.$KQ1['MaMau'].'" selected>'.$KQ1['TenMau'].'</option>';
                            else
                                echo'<option value="'.$KQ1['MaMau'].'">'.$KQ1['TenMau'].'</option>';
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="MaLoai" class="form-label">Mã Loại</label>
            <!-- <input type="text" class="form-control" name="Ma_Loai" placeholder="" value=""> -->
            <select name="MaLoai" id="" class="form-control">
                <option value="0">Chọn mã loại</option>
                <?php
                    $maloai=$kq1[0]['MaLoai'];
                    if(isset($loai))
                    {
                        foreach($loai as $KQ)
                        {
                            if($KQ['MaLoai']==$maloai)
                                echo '<option value="'.$KQ['MaLoai'].'" selected>'.$KQ['TenLoai'].'</option>';
                            else
                                echo'<option value="'.$KQ['MaLoai'].'">'.$KQ['TenLoai'].'</option>';
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Save" class="btn btn-secondary" name="edit"/>
        </div>
    </div>
    </div>

    </form>
    
    
</main>
</div>
