<div id="layoutSidenav_content">
<main>
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="post" action="index.php?act=hoa">
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search" name="timkiem"></i></button>
                </div>
</form>
<table class="table table-light table-striped">
           <th>Mã HD</th>
           <th>Tên HD</th>
           <th>Ngày Đặt</th>
           <th>Ghi Chú</th>
           <th>Tổng Tiền</th>
           <th></th>
        </tr>
        <?php
        if(isset($hd)&&(count($hd)>0))
        {
            foreach($hd as $HD)
            {

        ?>
        <tr>
            <td><?php echo $HD['MaHD'] ?></td>
            <td><?php echo $HD['MaKH'] ?></td>
            <td><?php echo $HD['NgayDat'] ?></td>
            <td><?php echo $HD['GhiChu'] ?></td>
            <td><?php echo $HD['TongTien'] ?></td>
            <td><a href="index.php?act=edit_HD&id=<?php echo $HD['MaHD'] ?>" class="btn btn-primary">Sửa</a>  <a href="index.php?act=del_HD&id=<?php echo $HD['MaHD'] ?>" class="btn btn-danger">Xóa</a></td>
            
</td>
        </tr>
        <?php 
            }
            $con = null;

        } 
           
        ?>
    </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link">Previous</a>
                </li>
                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item"><a class="page-link" href="index.php?act=hoadon&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    
</main>
</div>
