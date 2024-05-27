<div class="breadcrumbs-area position-relative">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Thanh Bên Cửa Hàng</h3>
                    <ul>
                        <li><a href="index.html">Trang Chủ</a></li>
                        <li>Cửa Hàng</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container container-default custom-area">
    <div class="row flex-row-reverse">
        <div class="col-lg-9 col-12 col-custom widget-mt">
            <!--shop toolbar start-->
            <div class="shop_toolbar_wrapper mb-30">
                <div class="shop_toolbar_btn">
                    <button data-role="grid_3" type="button" class="active btn-grid-3" title="Lưới"><i class="fa fa-th"></i></button>
                    <button data-role="grid_list" type="button" class="btn-list" title="Danh sách"><i class="fa fa-th-list"></i></button>
                </div>

                <div class="shop-select">
                <form class="d-flex flex-column w-100" action="index.php" method="get">
                    <input type="hidden" name="page" value="sanpham">
                    <div class="form-group">
                        <select class="form-control nice-select w-100" name="sort" onchange="this.form.submit()">
                            <option value="1" <?php if(isset($_GET['sort']) && $_GET['sort'] == '1') echo 'selected'; ?>>Theo bảng chữ cái, AZ</option>
                            <option value="2" <?php if(isset($_GET['sort']) && $_GET['sort'] == '2') echo 'selected'; ?>>Theo giá</option>
                            <!-- Thêm các tuỳ chọn khác nếu cần -->
                        </select>                   
                    </div>
                </form>

                </div>
            </div>
            <!--shop toolbar end-->
            <!-- Shop Wrapper Start -->
            <div class="row shop_wrapper grid_3">
                <?php
                if (isset($kq) && (count($kq) > 0)) {
                    foreach ($kq as $sp) {
                        $maHinh = $sp['MaSP']; // Lấy mã hình từ sản phẩm
                        $hinhanh = get_HinhAnh($maHinh);
                    ?>
                        <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                            <div class="product-item">

                                <div class="single-product position-relative mr-0 ml-0">

                                    <div class="product-image">
                                        <a class="d-block" href="index.php?page=chitietsanpham&id=<?php echo $sp['MaSP'] ?>">
                                            <img src="view/assets/images/product/<?php echo $sp['HinhAnh'] ?>" alt="" class="product-image-1 w-100">
                                            <img src="view/assets/images/product/" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <span class="onsale">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Doanh thu!</font>
                                            </font>
                                        </span>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.html" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.html" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?php echo $sp['TenSP'] ?></font>
                                                    </font>
                                                </a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                    <?php 
                                                    $dongia = number_format($sp['DonGia'], 0, ',', '.') . ' VNĐ';
                                                    echo  $dongia; 
                                                    ?>
                                                </font>
                                                </font>
                                            </span>
                                            
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                <?php
                    }
                    $conn = null;
                }
                else {
                ?>
                    <div class="" style="height: 200px;">
                        <h2 class=" fw-bold text-center ">Không có sản phẩm trong giỏ hàng</h2>
                    </div>
                    
                <?php } ?>
            </div>
            <!-- Shop Wrapper End -->
            <!-- Bottom Toolbar Start -->
            <div class="row">
                <div class="col-sm-12 col-custom">
                    <div class="toolbar-bottom">
                        <div class="pagination">
                            <ul>
                                <!-- Link 'Previous' -->
                                <?php if ($current_page > 1) : ?>
                                    <li><a href="index.php?page=sanpham&trang=<?php echo $current_page - 1; ?>&sort=<?php echo isset($_GET['sort']) ? $_GET['sort'] : '1'; ?>">&lt;&lt;</a></li>
                                <?php else : ?>
                                    <li class="disabled"><span>&lt;&lt;</span></li>
                                <?php endif; ?>

                                <!-- Links cho các trang số -->
                                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                                    <?php if ($i == $current_page) : ?>
                                        <li class="current"><span><?php echo $i; ?></span></li>
                                    <?php else : ?>
                                        <li><a href="index.php?page=sanpham&trang=<?php echo $i; ?>&sort=<?php echo isset($_GET['sort']) ? $_GET['sort'] : '1'; ?>"><?php echo $i; ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                <!-- Link 'Next' -->
                                <?php if ($current_page < $total_pages) : ?>
                                    <li><a href="index.php?page=sanpham&trang=<?php echo $current_page + 1; ?>&sort=<?php echo isset($_GET['sort']) ? $_GET['sort'] : '1'; ?>">&gt;&gt;</a></li>
                                <?php else : ?>
                                    <li class="disabled"><span>&gt;&gt;</span></li>
                                <?php endif; ?>

                            </ul>
                        </div>
                        <p class="desc-content text-center text-sm-right mb-0">Hiển thị 1 - 12 trên <?php echo $total_rows; ?> kết quả</p>
                    </div>
                </div>

            </div>
            <!-- Bottom Toolbar End -->
        </div>
        <div class="col-lg-3 col-12 col-custom">
            <!-- Sidebar Widget Start -->
            <aside class="sidebar_widget widget-mt">
                <div class="widget-list widget-mb-1">
                    <h3 class="widget-title">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tìm kiếm</font>
                        </font>
                    </h3>
                    <div class="search-box">
                        <div class="input-group">
                            <form action="index.php?page=sanpham" method="post">
                            <input type="text" name="keyword"  class="" placeholder="Nhập từ khóa tìm kiếm" aria-label="">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fa fa-search w-100"></i>
                                </button>
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="widget_inner">
                    

                    <div class="widget-list widget-mb-3">
                        <h3 class="widget-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Màu sắc</font>
                            </font>
                        </h3>
                        <div class="sidebar-body">
                            <ul class="tags">
                                <?php foreach($mausac as $mau) {?>
                                    <li><a href="index.php?page=sanpham&mamau=<?php echo $mau['MaMau'] ?>">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"><?php echo $mau['TenMau'] ?></font>
                                            </font>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                 
                </div>
            </aside>
            <!-- Sidebar Widget End -->
        </div>
    </div>
</div>