<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Thủ tục thanh toán</font>
                        </font>
                    </h3>
                    <ul>
                        <li><a href="index.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Trang chủ</font>
                                </font>
                            </a></li>
                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Thủ tục thanh toán</font>
                            </font>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$tong = 0;
?>

<div class="checkout-area mt-no-text">
    <div class="container custom-container">
        <form action="index.php?page=dathang" method="post">
            <div class="row">
                <div class="col-lg-6 col-12 col-custom">

                    <div class="checkbox-form">
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Chi tiết thanh toán</font>
                            </font>
                        </h3>
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Họ tên</font>
                                        </font><span class="required">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">*</font>
                                            </font>
                                        </span>
                                    </label>
                                    <input placeholder="" name="hoten" value="<?php echo  $infor[0]['l_name'], ' ', $infor[0]['f_name'] ?>" type="text" readonly>
                                    <p class="text-danger"><?php echo $errHT ?></p>
                                </div>
                            </div>

                            <div class="col-md-12 col-custom">
                                <div class="checkout-form-list">
                                    <label>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Địa chỉ </font>
                                        </font><span class="required">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">*</font>
                                            </font>
                                        </span>
                                    </label>
                                    <select class="form-select" name="diachifull" id="">
                                        <?php
                                        if (isset($diachi)) {
                                            foreach ($diachi as $dc) {
                                                if (!empty($dc['Duong']) && !empty($dc['Phuong']) && !empty($dc['Huyen']) && !empty($dc['Tinh'])) {
                                        ?>
                                            <option value="<?php echo $dc['MaDC']; ?>">
                                                <?php echo $dc['Duong'] . ', ' . $dc['Phuong'] . ', ' . $dc['Huyen'] . ', ' . $dc['Tinh']; ?>
                                            </option>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                    <p class="text-danger "><?php echo $errDC ?></p>
                                    <p>Nếu quý khánh muốn thêm địa chỉ mới vui lòng click <a href="index.php?page=taikhoancuatoi" class="text-primary "> vào đây</a></p>
                                </div>
                                
                            </div>

                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Địa chỉ email </font>
                                        </font><span class="required">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">*</font>
                                            </font>
                                        </span>
                                    </label>
                                    <input placeholder="" name="email" value="<?php echo $infor[0]['email'] ?>" type="email" readonly>
                                    <p class="text-danger"><?php echo $errEmail ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Điện thoại </font>
                                        </font><span class="required">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">*</font>
                                            </font>
                                        </span>
                                    </label>
                                    <input type="text" name="sdt" readonly value="<?php echo $infor[0]['sdt'] ?>">
                                    <p class="text-danger"><?php echo $errSDT ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <div>
                                    <input id="ship-box" type="checkbox">
                                    <label for="ship-box">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Gửi đến một địa chỉ khác?</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                            <div id="ship-box-info" class="row mt-2">
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tên đầu tiên </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Họ </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>

                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Địa chỉ </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input placeholder="Địa chỉ đường phố" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <input placeholder="Căn hộ, dãy phòng, căn hộ, v.v. (tùy chọn)" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Thị trấn / Thành phố </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tiểu bang / Quận </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Mã bưu / Zip </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Địa chỉ email </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Điện thoại </font>
                                            </font><span class="required">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">*</font>
                                                </font>
                                            </span>
                                        </label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes mt-3">
                                <div class="checkout-form-list checkout-form-list-2">
                                    <label>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Ghi chú đặt hàng</font>
                                        </font>
                                    </label>
                                    <input name="ghichu" type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-12 col-custom">
                    <div class="your-order">
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Đơn hàng của bạn</font>
                            </font>
                        </h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Sản phẩm</font>
                                            </font>
                                        </th>
                                        <th class="cart-product-total">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tổng cộng</font>
                                            </font>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                                        foreach ($_SESSION['giohang'] as $item) {
                                    ?>
                                            <?php
                                            $tt = $item[3] * $item[4];
                                            $tong += $tt;
                                            ?>
                                            <tr class="cart_item">
                                                <td class="cart-product-name">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?php echo $item['1'] ?></font>
                                                    </font><strong class="product-quantity">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                × <?php echo $item['3'] ?>

                                                            </font>
                                                        </font>
                                                    </strong>
                                                </td>
                                                <td class="cart-product-total text-center"><span class="amount">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <?php
                                                                $formattedValue = number_format($tt, 0, ',', '.') . ' VNĐ';
                                                                echo $formattedValue;
                                                                ?>
                                                            </font>
                                                        </font>
                                                    </span></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tổng tiền</font>
                                            </font>
                                        </th>
                                        <td class="text-center"><strong><span class="amount">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <?php
                                                            $formattedValue = number_format($tong, 0, ',', '.') . ' VNĐ';
                                                            echo $formattedValue;
                                                            ?></font>
                                                    </font>
                                                </span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                       
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="panel-title mb-1">
                                                <a href="#" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <p>
                                                    <input style="vertical-align: inherit;" type="checkbox" id="payment1" name="payment1" value="payment1">
                                                    <label style="vertical-align: inherit;" for="payment1">
                                                        <font class="fw-bold">Thanh toán khi nhận hàng</font>
                                                    </label>
                                                </p>
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="panel-title mb-1 mt-3">
                                                <form action="" method="post" enctype="application/x-www-form-urlencoded">
                                                    <a href="#" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                        <p>
                                                            <input style="vertical-align: inherit;" type="checkbox" id="payment2" name="payment2">
                                                            <label style="vertical-align: inherit;" for="payment2">
                                                                <font class="fw-bold">Thanh toán trực tuyến qua MOMO</font>
                                                            </label>
                                                        </p>
                                                    </a>
                                            </h5>
                                        </div>
                                        <div class="single-input-item mb-2" id="collapseTwo" data-parent="#accordion">
                                            <input type="submit" name="btnmomo" id="btnmomo" value="Mã QRcode">
                                        </div>
                                        </form>
                                    </div>

                                    <script>
                            // Lắng nghe sự kiện khi checkbox được thay đổi
                                    document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
                                        checkbox.addEventListener('change', function() {
                                            // Nếu checkbox payment1 được chọn, hủy chọn checkbox payment2
                                            if (this.id === 'payment1' && this.checked) {
                                                document.getElementById('payment2').checked = false;
                                            }
                                            // Nếu checkbox payment2 được chọn, hủy chọn checkbox payment1
                                            if (this.id === 'payment2' && this.checked) {
                                                document.getElementById('payment1').checked = false;
                                            }
                                        });
                                    });
                                </script>
                                </div>
                                <div class="order-button-payment">
                                    <p>Quý khách muốn thay đổi thông tin vui lòng nhấn <a href="index.php?page=taikhoancuatoi" class="text-primary ">vào đây</a></p>
                                    <button type="submit" name="btndathang" class="btn flosun-button secondary-btn black-color rounded-0 w-100">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Đặt hàng</font>
                                        </font>
                                        <div class="text-danger" style="font-size:smaller" id="btndathang"><?php echo isset($errors['btndathang']) ? $errors['btndathang'] : ''; ?></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>