<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Shopping Cart</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-main-wrapper mt-no-text">
    <?php  $tong = 0;    ?>
        <div class="container custom-area">
            <form action="index.php?page=updatecart" method="post">
            <div class="row">       
                    <div class="col-lg-12 col-custom">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <?php 
                                if((isset($_SESSION['giohang'])) && (count($_SESSION['giohang'])>0)) {   
                                    $i=0;                          
                            ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hình ảnh</font></font></th>
                                        <th class="pro-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th>
                                        <th class="pro-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giá</font></font></th>
                                        <th class="pro-quantity"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng</font></font></th>
                                        <th class="pro-subtotal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng cộng</font></font></th>
                                        <th class="pro-remove"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di dời</font></font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($_SESSION['giohang'] as $item){ ?>
                                        <?php 
                                        
                                            $tt = $item[3] * $item[4];
                                            $tong+=$tt;
                                        ?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="view/assets/images/product/small-size/<?php echo $item[2] ?>" alt="Sản phẩm"></a></td>
                                            <td class="pro-title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $item[1] ?></font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a></td>
                                            <td class="pro-price"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $item[4] ?></font></font></span></td>
                                            <td class="pro-quantity">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="soluong[]" value="<?php echo $item[3] ?>" type="number" min="1">
                                                        <div class="dec qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></div>
                                                        <div class="inc qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></div>
                                                        <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div><div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $tt ?></font></font></span></td>
                                            <td class="pro-remove"><a href="index.php?page=delcart&i=<?php echo $i ?>"><i class="lnr lnr-trash"></i></a></td>
                                        </tr>                                          
                                    <?php $i++; }?>
                                    <tr>
                                        <td colspan="4"><button type="submit" class="btn flosun-button primary-btn rounded-0 black-btn">Cập nhật giỏ hàng</button></td>                               
                                        <td><?php echo $tong ?></td>
                                        <td><a href="index.php?page=delcart" class="btn flosun-button primary-btn rounded-0 black-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa giỏ hàng</font></font></a></td>
                                    </tr>    
                                </tbody>
                            </table>
                            <?php } else {?>
                                <div class="alert alert-danger" role="alert">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Không có sản phẩm nào trong giỏ hàng</font></font>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                            
                            </div>
                            <div class="cart-update mt-sm-16"> 
                                
                            </div>
                        </div>
                    </div>
            </div>
            </form>
            <div class="row">
                <div class="col-lg-5 ml-auto col-custom">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng số giỏ hàng</font></font></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng phụ</font></font></td>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $tong ?></font></font></td>
                                    </tr>             
                                    <tr class="total">
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng cộng</font></font></td>
                                        <td class="total-amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $tong ?></font></font></td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                        <?php if(isset($_SESSION['iduser']) && ($_SESSION['iduser']) != "") { ?>
                        <a href="index.php?page=dathang" class="btn flosun-button primary-btn rounded-0 black-btn w-100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiến hành đặt hàng</font></font></a>
                        <?php } else {?>
                            <a href="index.php?page=giohang" class="btn flosun-button primary-btn rounded-0 black-btn w-100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiến hành đặt hàng</font></font></a>
                            <p class="text-danger ">Vui lòng đăng nhập để đặt hàng</p>    
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>