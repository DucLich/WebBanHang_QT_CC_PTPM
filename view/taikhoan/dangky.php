<script type="text/javascript">
    function validateRegistration() {
        var email = document.forms["registrationForm"]["email"].value;
        var username = document.forms["registrationForm"]["user"].value;
        var password = document.forms["registrationForm"]["pass"].value;
        var gmailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/; // Định dạng gmail
        var usernamePattern = /^[a-zA-Z0-9]([._]?[a-zA-Z0-9]+)*$/; // Định dạng tên đăng nhập
        var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;// Định dạng mật khẩu

        if (email == "") {
            document.getElementById("error-email").innerText = "Vui lòng nhập địa chỉ email";
            return false;
        } else if (!gmailPattern.test(email)) {
            document.getElementById("error-email").innerText = "Vui lòng nhập địa chỉ Gmail hợp lệ (kết thúc bằng @gmail.com)";
            return false;
        } else {
            document.getElementById("error-email").innerText = ""; // Xóa thông báo lỗi nếu đã nhập email
        }

        if (username == "") {
            document.getElementById("error-username").innerText = "Vui lòng nhập tên đăng nhập";
            return false;
        } else if (!usernamePattern.test(username)) {
            document.getElementById("error-username").innerText = "Tên đăng nhập chỉ được chứa chữ cái, số và dấu . hoặc _";
            return false;
        } else if (username.length < 8 || username.length > 15) {
            document.getElementById("error-username").innerText = "Tên đăng nhập có độ dài phải từ 8 đến 15 ký tự";
            return false;
        } else {
            document.getElementById("error-username").innerText = "";
        }

        if (password == "") {
            document.getElementById("error-password").innerText = "Vui lòng nhập mật khẩu";
            return false;
        } else if (!passwordPattern.test(password)) {
            document.getElementById("error-password").innerText = 
                "Mật khẩu phải chứa ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt";
            return false;
        } else {
            document.getElementById("error-password").innerText = "";
        }
    }
</script>

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