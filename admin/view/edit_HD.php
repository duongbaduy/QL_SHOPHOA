<div id="layoutSidenav_content">
<main>
    <form action="index.php?act=edit_HD" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>SẢN PHẨM</h2>
        <div class="mb-3">
            <label for="MaHD" class="form-label">Mã HD</label>
            <input type="number" class="form-control" name="MaHD" placeholder="" value="<?=$kq1[0]['MaHD']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="MaKH" class="form-label">Mã KH</label>
            <input type="number" class="form-control" name="MaKH" placeholder="" value="<?=$kq1[0]['MaKH']?>">
        </div>
        <div class="mb-3">
            <label for="NgayDat" class="form-label">Ngày Đặt</label>
            <input type="date" class="form-control" name="NgayDat" placeholder="" value="<?=$kq1[0]['NgayDat']?>">
        </div>
        <div class="mb-3">
            <label for="GhiChu" class="form-label">Ghi Chú</label>
            <input type="text" class="form-control" name="GhiChu" placeholder="" value="<?=$kq1[0]['GhiChu']?>">
        </div>
        
        <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Save" class="btn btn-secondary" name="edit_HD"/>
        </div>
    </div>
    </div>

    </form>
    
    
</main>
</div>
