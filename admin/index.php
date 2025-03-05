<?php
include "../model/pdo.php";
include "../model/product.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
         /*---product---*/
        case 'productadd':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $cartegory_id = $_POST['cartegory_id'];
                $brand_id = $_POST['brand_id'];
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
                $product_desc = $_POST['product_desc'];
                $product_img = $_FILES['product_img']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
                if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_product($product_name, $cartegory_id, $brand_id, $product_price, $product_desc, $product_img);
                $thongbao = "Thêm thành công";

            }
            $cartegorylist = load_all_cartegory();
            $brandlist = load_all_brand();
            include "product/productadd.php";
            break;
        case 'productlist':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $cartegory_id = $_POST['cartegory_id'];

            } else {
                $kyw = '';
                $cartegory_id = 0;
            }
            $cartegorylist = load_all_cartegory();
            $productlist = load_all_product($kyw, $cartegory_id);
            include "product/productlist.php";
            break;
        case 'productdelete':
            if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                delete_product($_GET['product_id']);
            }
            $productlist = load_all_product("", 0);
            include "product/productlist.php";
            break;
        case 'suasp':
            if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                $productupdate = load_one_product($_GET['product_id']);
            }
            $cartegorylist = load_all_cartegory();
            $brandlist = load_all_brand();
            include "product/productupdate.php";
            break;
        case 'updateproduct':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $product_id = $_POST['id'];
                $cartegory_id = $_POST['cartegory_id'];
                $brand_id = $_POST['brand_id'];
                $product_name = $_POST['name'];
                $product_price = $_POST['price'];
                $product_desc = $_POST['desc'];
                $product_img = $_FILES['img']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_product($product_name, $product_id, $cartegory_id, $brand_id, $product_price, $product_desc, $product_img);
                $thongbao = "Cập nhật thành công";
            }
            $cartegorylist = load_all_cartegory();
            $brandlist = load_all_brand();
            $productlist = load_all_product('', 0);
            include "product/productlist.php";
            break;

        case 'clientlist':
            $listtaikhoan = load_all_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tk($_GET['id']);
            }
            $listtaikhoan = load_all_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbinhluan = load_all_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bl($_GET['id']);
            }
            $listbinhluan = load_all_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $bill = check_kyw($kyw);
                if ($bill == "") {
                    $error_message = "Mã đơn hàng không tồn tại.";
                }

            }
            $listbill = load_all_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'thongke':
            $listthongke = load_all_thongke();
            include "thongke/list.php";
            break;
        default:
            include "home.php";
            break;

    }
} else {
    include "home.php";
}

include "footer.php";
?>