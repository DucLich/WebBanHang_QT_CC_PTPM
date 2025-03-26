<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = load_all_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website BÁN HÀNG</title>
    <link rel="stylesheet" type="text/css" href="../view/css/style.css" />
</head>
<style>
    body {
        margin: 0;
    }

    * {
        font-size: 1.5vw;
        color: #333;
    }

    .binhluan table {
        width: 90%;
        margin-left: 5%;
    }

    .binhluan table td:nth-child(1) {
        width: 70%;
    }

    .binhluan table td:nth-child(2) {
        width: 15%;
    }

    .binhluan table td:nth-child(3) {
        width: 15%;
    }
</style>

<body>
    <div class="row">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    $noidung = $bl['noidung'];
                    $email = $bl['email'];
                    $ngaybinhluan = $bl['ngaybinhluan'];

                    // Hiển thị dữ liệu trong các hàng bảng HTML
                    echo '<tr>';
                    echo '<td>' . $noidung . '</td>';
                    echo '<td>' . $email . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td>';
                    echo '</tr>';
                    // extract($bl);
                    // echo '<tr><td>' . $noidung . '</td>';
                    // echo '<td>' . $iduser . '</td>';
                    // echo '<td>' . $ngaybinhluan . '</td></tr>';
                
                }
                ?>
            </table>
        </div>
        <div class="row boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung">
                <input type="submit" value="Gửi bình luận" name="guibinhluan">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user1']['id'];
            $ngaybinhluan = date("l jS \of F Y h:i:s A");
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>