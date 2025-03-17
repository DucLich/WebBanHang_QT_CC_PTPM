
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đăng ký thành viên</div>
            <div class="row boxcontent formtaikhoan">
                <form name="registrationForm" action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email <br />
                        <input type="email" name="email" id="">
                        <div id="error-email" style="color: red;"></div> <!-- Thêm phần tử cho thông báo -->
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br />
                        <input type="text" name="user" id="username">
                        <div id="error-username" style="color: red;"></div> <!-- Thêm phần tử cho thông báo -->
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br />
                        <input type="password" name="pass" id="">
                        <div id="error-password" style="color: red;"></div> <!-- Thêm phần tử cho thông báo -->
                    </div>

                    <input type="submit" value="Đăng ký" name="dangky" onclick="return validateRegistration()">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo "<span style='color: green;'>$thongbao</span>";
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