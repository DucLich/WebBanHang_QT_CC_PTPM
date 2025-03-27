<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Cập nhật tài khoản</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user1']) && (is_array($_SESSION['user1']))) {
                    extract($_SESSION['user1']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email <br />
                        <input type="email" name="email" id="" value="<?= $email ?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br />
                        <input type="text" name="user" id="" value="<?= $username ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br />
                        <input type="password" name="pass" id="" value="<?= $password ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ <br />
                        <input type="text" name="address" id="" value="<?= $address ?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại <br />
                        <input type="text" name="tel" id="" value="<?= $tel ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>