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
    <?php $tong = 0;    ?>
    <div class="container custom-area">
        <form action="index.php?page=updatecart" method="post">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <?php
                        if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                            $i = 0;
                        ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Hình ảnh</font>
                                            </font>
                                        </th>
                                        <th class="pro-title">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Sản phẩm</font>
                                            </font>
                                        </th>
                                        <th class="pro-price">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Giá</font>
                                            </font>
                                        </th>
                                        <th class="pro-quantity">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Số lượng</font>
                                            </font>
                                        </th>
                                        <th class="pro-subtotal">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tổng cộng</font>
                                            </font>
                                        </th>
                                        <th class="pro-remove">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Di dời</font>
                                            </font>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['giohang'] as $item) { ?>
                                        <?php

                                        $tt = $item[3] * $item[4];
                                        $tong += $tt;
                                        $product_info = get_SanPham($item[0]);
                                        // Lấy số lượng từ thông tin sản phẩm
                                        $stock = $product_info[0]['SoLuong'];
                                        ?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="view/assets/images/product/small-size/<?php echo $item[2] ?>" alt="Sản phẩm"></a></td>
                                            <td class="pro-title"><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?php echo $item[1] ?></font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"></font>
                                                    </font>
                                                </a></td>
                                            <td class="pro-price"><span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                        <?php 
                                                            $formattedValue= number_format($item[4] , 0, ',', '.') . ' VNĐ';
                                                            echo $formattedValue;
                                                        ?></font>
                                                    </font>
                                                </span></td>
                                            <td class="pro-quantity">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="soluong[]" value="<?php echo $item[3] ?>" type="number" min="1">
                                                        <input type="hidden" class="availableStock" value="<?php echo $stock ?>">
                                                        <div class="dec qtybutton">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">-</font>
                                                            </font>
                                                        </div>
                                                        <div class="inc qtybutton">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">+</font>
                                                            </font>
                                                        </div>
                                                        <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                        <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                        <?php 
                                                            $tongtien= number_format($tt , 0, ',', '.') . ' VNĐ';
                                                            echo $tongtien;
                                                        ?>
                                                        </font>
                                                    </font>
                                                </span></td>
                                            <td class="pro-remove"><a href="index.php?page=delcart&i=<?php echo $i ?>"><i class="lnr lnr-trash"></i></a></td>
                                        </tr>
                                    <?php $i++;
                                    } ?>
                                    <tr>
                                        <td colspan="4"><button type="submit" class="btn flosun-button primary-btn rounded-0 black-btn">Cập nhật giỏ hàng</button></td>
                                        <td>
                                            <?php 
                                                $formattedValue = number_format($tong, 0, ',', '.') . ' VNĐ';
                                                echo $formattedValue;
                                            ?>
                                        </td>
                                        <td><a href="index.php?page=delcart" class="btn flosun-button primary-btn rounded-0 black-btn">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xóa giỏ hàng</font>
                                                </font>
                                            </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-danger" role="alert">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Không có sản phẩm nào trong giỏ hàng</font>
                                </font>
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
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Tổng số giỏ hàng</font>
                            </font>
                        </h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tổng phụ</font>
                                            </font>
                                        </td>
                                        <td>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                <?php 
                                                    $formattedValue = number_format($tong, 0, ',', '.') . ' VNĐ';
                                                    echo $formattedValue;
                                                ?>
                                                </font>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tổng cộng</font>
                                            </font>
                                        </td>
                                        <td class="total-amount">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                <?php 
                                                    $formattedValue = number_format($tong, 0, ',', '.') . ' VNĐ';
                                                    echo $formattedValue;
                                                ?>
                                                </font>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>         
                    <?php if ((isset($_SESSION['iduser']) && ($_SESSION['iduser']) != "") || (isset($_COOKIE['id']))) { ?>
                        <?php if (empty($_SESSION['giohang'])) { ?>
                        <?php } else { ?>
                            <form id="cart-form" action="index.php?page=dathang" method="post">
                                <button id="checkout-button" type="submit" class="btn flosun-button primary-btn rounded-0 black-btn w-100">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Tiến hành đặt hàng</font>
                                    </font>
                                </button>
                            </form>
                        <?php } ?>
                    <?php } else { ?>
                        <form id="cart-form" action="index.php?page=dathang" method="post">
                                <button id="checkout-button" type="submit" class="btn flosun-button primary-btn rounded-0 black-btn w-100">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Tiến hành đặt hàng</font>
                                    </font>
                                </button>
                            </form>
                        <p class="text-danger ">Vui lòng đăng nhập để đặt hàng</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('cart-form').addEventListener('submit', function(event) {
        var quantities = document.querySelectorAll('.cart-plus-minus-box');
        var stocks = document.querySelectorAll('.availableStock');
        var error = false;

        quantities.forEach(function(quantity, index) {
            var stock = parseInt(stocks[index].value, 10);
            var qty = parseInt(quantity.value, 10);
            if (qty > stock) {
                var productName = document.querySelectorAll('.pro-title a')[index].innerText.trim();
                alert('Số lượng sản phẩm "' + productName + '" vượt quá số lượng hiện có.');
                error = true;
            }
        });

        if (error) {
            // Nếu có lỗi, hủy thực hiện hành động mặc định của form
            event.preventDefault();
            window.history.back(); // Chuyển hướng người dùng trở lại trang trước đó
        }
    });
});
</script>