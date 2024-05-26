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
        <form id="payment-form" action="" method="post">
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
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            Thanh toán khi nhận hàng
                                                        </font>
                                                    </font>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font>
                                                    </font>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            Thanh toán trực tuyến
                                                        </font>
                                                    </font>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font>
                                                    </font>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <p>Quý khách muốn thay đổi thông tin vui lòng nhấn <a href="index.php?page=taikhoancuatoi" class="text-primary ">vào đây</a></p>
                                    <button id="cash-payment-btn" type="submit" name="btndathang" class="btn flosun-button secondary-btn black-color rounded-0 w-100">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Thanh toán tiền mặt</font>
                                        </font>
                                    </button>
                                    <button id="momo-payment-btn" type="submit" name="btn" class="mt-2 btn flosun-button secondary-btn black-color rounded-0 w-100">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Thanh toán momo</font>
                                        </font>
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

<script>
    document.getElementById('cash-payment-btn').addEventListener('click', function() {
        document.getElementById('payment-form').action = '';
        document.getElementById('payment-form').submit();
    });

    document.getElementById('momo-payment-btn').addEventListener('click', function() {
        document.getElementById('payment-form').action = 'facebook.com';
        document.getElementById('payment-form').submit();
    });
</script>