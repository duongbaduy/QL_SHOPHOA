<!-- Header Area End Here -->
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Liên hệ chúng tôi</font>
                        </font>
                    </h3>
                    <ul>
                        <li><a href="index.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Trang chủ</font>
                                </font>
                            </a></li>
                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Liên hệ chúng tôi</font>
                            </font>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Contact Us Area Start Here -->
<div class="contact-us-area mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-map-marker"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Địa điểm của chúng tôi</font>
                            </font>
                        </h4>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">(800) 123 456 789 / (800) 123 456 789 info@example.com</font>
                            </font>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-smartphone"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Liên hệ với chúng tôi bất cứ lúc nào</font>
                            </font>
                        </h4>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Di động: 012 345 678 </font>
                            </font><br>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Fax: 123 456 789</font>
                            </font>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-custom text-align-center">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-envelope"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hỗ trợ tổng thể</font>
                            </font>
                        </h4>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Support24/7@example.com </font>
                            </font><br>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">info@example.com</font>
                            </font>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-custom">
                <form method="post" action="index.php?page=sendmail" class="contact-form">
                    <div class="comment-box mt-5">
                        <h5 class="text-uppercase">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">GÓP Ý VỀ SHOP</font>
                            </font>
                        </h5>
                        <div class="row mt-3">
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border-0 rounded-0 w-100 input-area name gray-bg" type="text" name="name" id="con_name" placeholder="Tên">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border-0 rounded-0 w-100 input-area email gray-bg" type="email" name="email" id="con_email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <textarea cols="30" rows="5" class="border-0 rounded-0 w-100 custom-textarea input-area gray-bg" name="message" id="con_message" placeholder="Tin nhắn"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-custom mt-40">
                                <button type="submit" id="submit" name="btnGui" class="btn flosun-button secondary-btn theme-color rounded-0">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Gửi tin nhắn</font>
                                    </font>
                                </button>
                            </div>
                            <p class="text-danger ">
                                <?php echo $err ?>
                            </p>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Area End Here -->