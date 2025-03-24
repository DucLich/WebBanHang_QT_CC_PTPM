<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "global.php";
include "model/cartegory.php";
include "model/product.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$productnew = load_all_product_home();
$dscartegory = load_all_cartegory();
$dstop10 = load_all_product_top10();


if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        /*-----Tài khoản-----*/
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $username = $_POST['user'];
                $passwword = $_POST['pass'];
                insert_taikhoan($email, $username, $passwword);
                $thongbao = "Đã đăng ký thành công.Vui lòng đăng nhập!";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $username = $_POST['user'];
                $passwword = $_POST['pass'];
                $checkuser = checkuser($username, $passwword);
                if (is_array($checkuser)) {
                    $_SESSION['user1'] = $checkuser;
                    // $thongbao = "Bạn đã đăng nhập thành công";
                    header('Location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }

            }
            if (isset($thongbao) && $thongbao != "") {
                $_SESSION['thongbao'] = $thongbao;
            }
            header('Location:index.php');
            break;

        /*---Giỏ hàng----*/
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);

            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $index = $_GET['idcart'];
                // Loại bỏ phần tử tại vị trí $index khỏi mảng $_SESSION['mycart']
                array_splice($_SESSION['mycart'], $index, 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            include "view/cart/viewcart.php";
            // header('Location:index.php?act=viewcart');
            break;
        case 'product':
            break;
        case 'productct':
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>