<div class="row shad mb">
    <div class="boxtitle"><b>TÀI KHOẢN</b></div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user1'])) {
            extract($_SESSION['user1']);
            ?>
            <div class="row mb10">
                Xin chao <br />
                <?= $username ?>
            </div>
            <div class="row mb10">
                <li>
                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                </li>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php
                if ($role == 1) {
                    ?>
                    <li>
                        <a href="admin/index.php">Đăng nhập admin</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>
            <?php
        } else {
            ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập <br />
                    <input type="text" name="user" />
                </div>
                <div class="row mb10">
                    Mật khẩu<br />
                    <input type="text" name="pass" /><br />
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="" /> Ghi nhớ tài khoản?<br />
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap" />
                </div>
            </form>
            <li>
                <a href="">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng kí thành viên</a>
            </li>
        <?php } ?>
        <?php
        if (isset($_SESSION['thongbao']) && $_SESSION['thongbao'] != "") {
            echo "<span style='color: red;'>" . $_SESSION['thongbao'] . "</span>";
            unset($_SESSION['thongbao']); // Xóa thông báo sau khi đã hiển thị
        }
        ?>
    </div>
</div>
<div class="row shad mb">
    <div class="boxtitle"><b>LOẠI SẢN PHẨM</b></div>
    <div class="boxcontent2 menudoc">
        <ul><?php
        foreach ($dscartegory as $cartegory) {
            extract($cartegory);
            $linkcartegory = "index.php?act=product&cartegory_id=" . $cartegory_id;
            echo '<li>
                <a href="' . $linkcartegory . '">' . $cartegory_name . '</a>
                </li>
                ';

        }
        ?></ul>
    </div>
    <div class="boxfooter searbox prosl">
        <form action="index.php?act=product" method="post">
            <table>
                <tr>
                    <td><input type="text" name="kyw"></td>
                    <td><input type="submit" name="timkiem" value="Tìm kiếm"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="row shad mb">
    <div class="boxtitle"><b>TOP 10 YÊU THÍCH</b></div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $product) {
            extract($product);
            $linksp = "index.php?act=productct&product_id=" . $product_id;
            $img = $img_path . $product_img;
            echo '<div class="row mb10 top10">
            <a href="' . $linksp . '"><img src="' . $img . '" alt="" ></a>
                    <a href="' . $linksp . '">' . $product_name . '</a>
                </div>';
        }
        ?>
        <!-- <div class="row mb10 top10">
                    <img src="admin/uploads/ao2.1_VT.png" alt="" />
                    <a href="#">Aos thun</a>
                </div> -->
    </div>
</div>