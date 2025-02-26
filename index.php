<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "global.php";

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