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
        case 'product':
            break;
        case 'productct':
            break;

       
            include "view/lienhe.php";
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