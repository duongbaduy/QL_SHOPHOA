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
                                    <input placeholder="" name="hoten" type="text">
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
                                    <input placeholder="Địa chỉ đường phố" name="diachi" type="text">
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
                                    <input placeholder="" name="email" type="email">
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
                                    <input type="text" name="sdt">
                                </div>
                            </div>
                            <div class="col-md-12 col-custom">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label for="cbox">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Tạo một tài khoản?</font>
                                        </font>
                                    </label>
                                </div>
                                <div id="cbox-info" class="checkout-form-list create-account">
                                    <p class="mb-2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</font>
                                        </font>
                                    </p>
                                    <label>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Mật khẩu tài khoản </font>
                                        </font><span class="required">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">*</font>
                                            </font>
                                        </span>
                                    </label>
                                    <input placeholder="mật khẩu" type="password">
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
                                                                × <?php echo $item['3'] ?></font>
                                                        </font>
                                                    </strong>
                                                </td>
                                                <td class="cart-product-total text-center"><span class="amount">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"><?php echo $tt ?></font>
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
                                                        <font style="vertical-align: inherit;"><?php echo $tong ?></font>
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
                                                            Chuyển khoản trực tiếp.
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
                                                            Thanh toán séc
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
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            PayPal
                                                        </font>
                                                    </font>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
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

                                    <button type="submit" name="btndathang" class="btn flosun-button secondary-btn black-color rounded-0 w-100">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Đặt hàng 123</font>
                                        </font>
                                    </button>
                                    <p class="text-danger "><?php echo $err ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>