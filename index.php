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
include "model/HinhAnh.php";
include "model/HoaDon.php";
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
            if(isset($_SESSION['role']))
            {
                $err = "";
                if (isset($_POST['btndathang'])) {
                    $hoten = $_POST['hoten'];
                    foreach ($_SESSION['giohang'] as $item) {
                        $tt = $item[3] * $item[4];
                        $tong += $tt;
                    }

                    if ($hoten == "" ) {
                        $err = "Vui lòng nhập đầy đủ thông tin";
                    } else {
                        InsertHoaDon($_SESSION['iduser'], $hoten, '1', '2','1', '1', $tong);
                        // Clear the cart after successful order
                        unset($_SESSION['giohang']);
                        header("Location: index.php?page=DatHangThanhCong");
                        exit();
                    }
                }
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
            if(isset($_POST['login']) && ($_POST['login']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = getuserinfo($username,$password);
                $role = $kq[0]['role'];
                if($role == 1)
                {
                    $_SESSION['role'] = $role;
                    header('Location: admin/index.php');
                } 
                else
                {
                    $_SESSION['role'] = $role;
                    $_SESSION['iduser'] = $kq[0]['id'];
                    $_SESSION['userName'] = $kq[0]['userName'];
                    header('Location: index.php');
                }
            }
            include "view/login.php";
            break;
        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['userName']);
            header('Location: index.php');
            break;
        case 'dangky':
            if (!isset($_POST['dangky'])) {
                include "view/register.php";
            } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
                $errors = [];
            
                // Lấy dữ liệu từ form
                $f_name = $_POST['f_name'];
                $l_name = $_POST['l_name'];
                $diachi = $_POST['diachi'];
                $tinh = $_POST['hidden_tinh']; // Lấy tên tỉnh từ trường ẩn
                $quan = $_POST['hidden_quan']; // Lấy tên quận huyện từ trường ẩn
                $phuong = $_POST['hidden_phuong']; // Lấy giá trị của phường xã
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $confirm_pwd = $_POST['confirm_pwd'];
            
                // Kết nối cơ sở dữ liệu
                $conn = ketnoi();
            
                // Kiểm tra f_name và l_name không được chứa ký tự số
                if (preg_match('/[0-9]/', $f_name)) {
                    $errors['f_name'] = "Họ không được chứa ký tự số.";
                }
                if (preg_match('/[0-9]/', $l_name)) {
                    $errors['l_name'] = "Tên không được chứa ký tự số.";
                }
            
                // Kiểm tra sdt chỉ chứa số và có độ dài đúng 10 số
                if (!preg_match('/^[0-9]{10}$/', $sdt)) {
                    $errors['sdt'] = "Số điện thoại phải đúng 10 số.";
                } else {
                    // Kiểm tra định dạng số điện thoại Vinaphone, Mobifone, Viettel
                    $valid_sdt_prefixes = [
                        '086', '096', '097', '098', // Viettel
                        '089', '090', '093', // Mobifone
                        '088', '091', '094' // Vinaphone
                    ];
                    $prefix = substr($sdt, 0, 3);
                    if (!in_array($prefix, $valid_sdt_prefixes)) {
                        $errors['sdt'] = "Số điện thoại không đúng định dạng.";
                    }
                }
            
                // Kiểm tra định dạng email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Email không hợp lệ.";
                } else {
                    // Kiểm tra email có trùng lặp không
                    $sql = "SELECT email FROM users WHERE email = :email";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([':email' => $email]);
                    if ($stmt->rowCount() > 0) {
                        $errors['email'] = "Email đã tồn tại.";
                    }
                }
            
                // Kiểm tra tên đăng nhập có trùng lặp không
                $sql = "SELECT userName FROM users WHERE userName = :userName";
                $stmt = $conn->prepare($sql);
                $stmt->execute([':userName' => $userName]);
                if ($stmt->rowCount() > 0) {
                    $errors['userName'] = "Tên đăng nhập đã tồn tại.";
                }
            
                // Kiểm tra password
                if (strlen($password) < 8 || !preg_match('/\d/', $password)) {
                    $errors['password'] = "Mật khẩu phải ít nhất 8 ký tự và có ít nhất một số.";
                }
            
                // Kiểm tra confirm password
                if ($password !== $confirm_pwd) {
                    $errors['confirm_pwd'] = "Mật khẩu xác nhận không khớp.";
                } else {
                    // Hash mật khẩu
                    $password_hashed = password_hash($password, PASSWORD_BCRYPT);
                    
                }
                
                // Nếu không có lỗi, thực hiện câu lệnh INSERT
                if (empty($errors)) {

                    $sql = "INSERT INTO users (f_name, l_name, diachi, tinh, quan, phuong, sdt, email, userName, password, session, role) 
                            VALUES (:f_name, :l_name, :diachi, :tinh, :quan, :phuong, :sdt, :email, :userName, :password, '', 0)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([
                        ':f_name' => $f_name,
                        ':l_name' => $l_name,
                        ':diachi' => $diachi,
                        ':tinh' => $tinh,
                        ':quan' => $quan,
                        ':phuong' => $phuong,
                        ':sdt' => $sdt,
                        ':email' => $email,
                        ':userName' => $userName,
                        ':password' => $password_hashed
                    ]);
                    include "view/login.php";
                } else {
                    include "view/register.php";
                }
            }
            break;
        case 'taikhoancuatoi':
            if(isset($_SESSION['role']))
            {
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
            if(isset($_SESSION['role']))
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
