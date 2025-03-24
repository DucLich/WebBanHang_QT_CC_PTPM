<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN KHÁCH ĐẶT HÀNG</div>
                <div class="row boxcontent bill">
                    <table>
                        <?php
                        if ($_SESSION['user1']) {
                            $name = $_SESSION['user1']['username'];
                            $address = $_SESSION['user1']['address'];
                            $email = $_SESSION['user1']['email'];
                            $tel = $_SESSION['user1']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row ">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" value="1" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" value="2">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" value="3">Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent frmdsloai">
                    <table>
                        <?php viewcart(0); ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>