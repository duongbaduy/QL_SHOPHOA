<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
ob_start();
include "model/KetNoi.php";
include "model/user.php";
include "model/loai.php";
$loai = getAll_Loai();
include "view/Layout_Chung/header.php";
include "model/sanpham.php";
include "model/SoLuong.php";
include "model/MauSac.php";
$mausac = get_AllMausac();
include "model/HinhAnh.php";
include "model/HoaDon.php";
$tong=0;
$SP = getAll_SanPham();
if (isset($_GET['page']) && $_GET['page'] != "") {
    switch ($_GET['page']) {
        case 'sanpham':
            if (isset($_POST['keyword'])) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }
            if (!isset($_GET['trang'])) {
                $current_page = 1;
            } else {
                $current_page = (int)$_GET['trang'];
            }
            $soluongsp = 6;
            $sort_option = isset($_GET['sort']) ? $_GET['sort'] : '1'; // Mặc định sắp xếp theo tên
            
            switch ($sort_option) {
                case '1':
                    $kq = sortSanPhamByName($keyword, $current_page, $soluongsp);
                    break;
                case '2':
                    $kq = sortSanPhamByPrice($keyword, $current_page, $soluongsp);
                    break;
                    // Thêm các case khác nếu bạn muốn sắp xếp theo các tiêu chí khác
            }
            $total_rows = countRowsInTable();
            $total_pages = ceil($total_rows / $soluongsp);
            if (isset($_GET['mamau'])) {
                $id = $_GET['mamau'];
                $kq = getSPTheoMau($id);
            }
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kq = getSPtheoLoai($id);
                include "view/shop.php";
            } else {
                include "view/shop.php";
            }
            break;
        case 'chitietsanpham':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $mausac = get_MauSac($id);
                $sanpham = get_SanPham($id);         
                include "view/product-details.php";
            }
            break;
        case 'addcart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];

                if (isset($_POST['soluong']) && $_POST['soluong'] > 0)
                    $soluong = $_POST['soluong'];
                else
                    $soluong = 1;

                $fg = 0;
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] == $tensp) {
                        $slnew = $soluong + $item[3];
                        $_SESSION['giohang'][$i][3] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }

                if ($fg == 0) {
                    $item = array($id, $tensp, $img, $soluong, $gia);
                    $_SESSION['giohang'][] = $item;
                }
                header('location: index.php?page=viewcart');
            }
            //include "view/cart.php";
            break;
        case 'updatecart':     
                if (isset($_POST['soluong'])) {
                    $soluong = $_POST['soluong'];
                    foreach ($_SESSION['giohang'] as $key => $item) {
                        if (isset($soluong[$key]) && $soluong[$key] > 0) {
                            $_SESSION['giohang'][$key][3] = $soluong[$key];
                        }
                    }
                    header('location: index.php?page=viewcart');
                }
                break;
            
            
        case 'delcart': {
                    if (isset($_GET['i']) && $_GET['i'] >= 0 && $_GET['i'] < count($_SESSION['giohang'])) {
                        array_splice($_SESSION['giohang'], $_GET['i'], 1);
                    } elseif (isset($_SESSION['giohang'])) {
                        unset($_SESSION['giohang']);
                    }
                
                    // Kiểm tra xem giỏ hàng còn sản phẩm không
                    if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                        header('location: index.php?page=viewcart');
                    } else {
                        header('location: index.php');
                    }
                    break;
                }
        case 'dathang';  
            // Kiểm tra số lượng sản phẩm
            foreach ($_SESSION['giohang'] as $item) {
                $product_info = get_SanPham($item[0]);
                $stock = $product_info[0]['SoLuong'];
                if ($item[3] > $stock) {
                    // Số lượng sản phẩm vượt quá số lượng trong kho
                    header("Location: index.php?page=viewcart");
                    exit();
                }
            }
   
            if(isset($_SESSION['role']) || isset($_COOKIE['id']))
            {            
                $errHT ="";
                $errDC ="";
                $errEmail ="";
                $errSDT ="";
                if (isset($_POST['btndathang'])) {
                    if (empty($_SESSION['giohang'])) {
                        // Nếu giỏ hàng trống, quay về trang chính
                        header("Location: index.php");
                        exit(); // Kết thúc script để ngăn mã tiếp tục chạy
                    }
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $ghichu = $_POST['ghichu'];
                    $ngaydat = date("Y-m-d");
                    if($hoten == "")
                    {
                        $errHT = "Vui lòng cập nhật họ tên <a href='index.php?page=taikhoancuatoi' class='text-primary'>Tại đây</a>";
                    }
                    else if($diachi == "")
                    {
                        $errDC = "Vui lòng nhập địa chỉ <a href='index.php?page=taikhoancuatoi' class='text-primary'>Tại đây</a>";
                    }
                    else if($email == "")
                    {
                        $errEmail = "Vui lòng cập nhật email <a href='index.php?page=taikhoancuatoi' class='text-primary'>Tại đây</a> ";
                    }
                    else if($sdt == "")
                    {
                        $errSDT = "Vui lòng cập nhật số điện thoại <a href='index.php?page=taikhoancuatoi' class='text-primary'>Tại đây</a>";
                    }
                    else
                    {
                        foreach ($_SESSION['giohang'] as $item) {
                            $tt = $item[3] * $item[4];
                            $tong += $tt;
                        }
                        // Gọi hàm InsertHoaDon() và truyền thông tin vào
                        if (isset($_SESSION['role'])) {
                            $lastID = InsertHoaDon($_SESSION['iduser'], $diachi, $ngaydat, $ghichu, $tong);
                         
                            foreach ($_SESSION['giohang'] as $item) 
                            {
                                InserCTHoaDon($lastID, $item[0], $item[3],$item[4]);
                            }          
                        }
                        if (isset($_COOKIE['id'])) {
                            $lastID = InsertHoaDon($_COOKIE['id'], $diachi, $ngaydat, $ghichu, $tong);
                            
                            foreach ($_SESSION['giohang'] as $item) 
                            {
                                InserCTHoaDon($lastID, $item[0], $item[3],$item[4]);
                            }
                        }
                        // Xóa giỏ hàng sau khi đặt hàng thành công
                        unset($_SESSION['giohang']);
                        header("Location: index.php?page=DatHangThanhCong");
                        exit();
                    }    
                }
                
                if(isset($_COOKIE['id']))
                    $infor = getInfor($_COOKIE['id']);
                if(isset($_SESSION['role']))
                    $infor = getInfor($_SESSION['iduser']);
                include "view/checkout.php";
            }
            else
            {
                header('Location: index.php');
            }
            
            break;
        case 'viewcart':      
            include "view/cart.php";
            break;
        case 'vechungtoi':
            include "view/about-us.php";
            break;
        case 'lienhe':
            include "view/contact-us.php";
            break;
        case 'login':
            $errDN = "";
            if((isset($_POST['login']) ||isset($_COOKIE['id']) && $_POST['login]']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = getuserinfo($username,$password);
                $KTDN = KTDN($username, $password);
                if($KTDN)
                {
                    $role = $kq[0]['role'];
                    $_SESSION['role'] = $role;
                    $_SESSION['iduser'] = $kq[0]['id'];
                    $_SESSION['userName'] = $kq[0]['userName'];
                    if($role == 1)
                    {
                        $_SESSION['role'] = $role;
                        header('Location: admin/index.php');
                    }
                    else
                    {
                        header('Location: index.php');
                    } 
                    $errDN = ""; 
                }   
                else
                {   
                    $errDN = "Tên đăng nhập hoặc mật khẩu không đúng"; 
                }
            }
            include "view/login.php";
            break;
        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['userName']);
            header('Location:index.php');
            break;
        case 'dangky':
            include "view/register.php";
            break;
        case 'taikhoancuatoi':
            $readonly = "";
            $err = "";
            $infor = "";
            if(isset($_SESSION['role']) || isset($_COOKIE['id']))
            {
                if(isset($_SESSION['iduser']))
                {
                    $hoadon = getHoaDon($_SESSION['iduser']);
                    $infor = getInfor($_SESSION['iduser']);
                }
                if(isset($_COOKIE['id']))
                {
                    $hoadon = getHoaDon($_COOKIE['id']);
                    $infor = getInfor($_COOKIE['id']);
                }
                if(isset($_POST['btnThayDoi']))
                {
           
                    $f_name = $_POST['f_name'];
                    $l_name = $_POST['l_name'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $tinh = $_POST['hidden_tinh'];
                    $quan = $_POST['hidden_quan'];
                    $phuong = $_POST['hidden_phuong'];
                    if($f_name == "" || $l_name == "" || $diachi == "" || $sdt == "")
                    {
                        $err = "Vui lòng nhập đầy đủ thông tin";
                    }
                    else if($tinh == "" || $quan == "" || $phuong == "")
                    {
                        $err = "Vui lòng chọn địa chỉ";
                    }
                    else
                    {
                        $diachifull = $diachi . ', ' . $phuong . ', ' . $quan . ', ' . $tinh;
                        if(isset($_SESSION['iduser']))
                        {
                            $updateUser = UpdateUser($_SESSION['iduser'],$f_name,$l_name,$diachifull,$sdt,$email);
                            $err = "Thay đổi thành công";
                        }                   
                        if(isset($_COOKIE['id']))
                        {
                            $updateUser = UpdateUser($_COOKIE['id'],$f_name,$l_name,$diachifull,$sdt,$email);
                            $err = "Thay đổi thành công";
                        }         
                    }
                }
                if(isset($_GET['MaHD']))
                {
                    $maHD = $_GET['MaHD'];
                    $deleteHD = DeleteHoaDon($maHD);
                    header('Location: index.php?page=taikhoancuatoi');
                }
                include "view/my-account.php";
            }
            else
            {
                header('Location: index.php');
            }
            break;
        case 'giohang':
            include "view/cart.php";
            break;
        case 'DatHangThanhCong':
            if(isset($_SESSION['role']) || isset($_COOKIE['id']))
            {
                include "DatHangThanhCong.php";
            }
            else
            {
                include "view/login.php";
            }
            break;
        default:
            break;
    }
} else {
    include "view/home.php";
}
include "view/Layout_Chung/footer.php";
