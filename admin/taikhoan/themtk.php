<script type="text/javascript">
function validateAccountInput() {
    var username = document.forms["accountForm"]["username"].value;
    var password = document.forms["accountForm"]["password"].value;
    var repassword = document.forms["accountForm"]["repassword"].value;
    var address = document.forms["accountForm"]["address"].value;
    var email = document.forms["accountForm"]["email"].value;
    var phone = document.forms["accountForm"]["phone"].value;
    var errorMessage = document.getElementById("error-message");
    
    // Kiểm tra username
    if (username == "") {
        errorMessage.innerText = "Vui lòng nhập tên tài khoản";
        return false;
    }
    if (username.length < 10 || username.length > 15) {
        errorMessage.innerText = "Tên tài khoản phải từ 10 đến 15 ký tự";
        return false;
    }

    // Kiểm tra password
    if (password == "") {
        errorMessage.innerText = "Vui lòng nhập mật khẩu";
        return false;
    }
    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    if (!passwordRegex.test(password)) {
        errorMessage.innerText = "Mật khẩu phải chứa chữ cái, số và ký tự đặc biệt";
        return false;
    }

    // Kiểm tra repassword
    if (repassword == "") {
        errorMessage.innerText = "Vui lòng nhập lại mật khẩu";
        return false;
    }
    if (password != repassword) {
        errorMessage.innerText = "Mật khẩu không khớp";
        return false;
    }

    // Kiểm tra address
    if (address == "") {
        errorMessage.innerText = "Vui lòng nhập địa chỉ";
        return false;
    }

    // Kiểm tra email
    if (email == "") {
        errorMessage.innerText = "Vui lòng nhập email";
        return false;
    }
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        errorMessage.innerText = "Email không hợp lệ";
        return false;
    }

    // Kiểm tra phone
    if (phone == "") {
        errorMessage.innerText = "Vui lòng nhập số điện thoại";
        return false;
    }
    var phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
        errorMessage.innerText = "Số điện thoại phải là 10 chữ số";
        return false;
    }
    
    return true;
}
</script>

<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <form name="accountForm" action="index.php?act=Themtaikhoan" method="post">
            <div class="rowadmin mb5">
                <div>Tên tài khoản <span class="required">*</span></div>
                <input type="text" name="username" />
            </div>
            <div class="rowadmin mb5">
                <div>Mật khẩu <span class="required">*</span></div>
                <input type="password" name="password" />
            </div>
            <div class="rowadmin mb5">
                <div>Nhập lại mật khẩu <span class="required">*</span></div>
                <input type="password" name="repassword" />
            </div>
            <div class="rowadmin mb5">
                <div>Địa chỉ <span class="required">*</span></div>
                <input type="text" name="address" />
            </div>
            <div class="rowadmin mb5">
                <div>Email <span class="required">*</span></div>
                <input type="email" name="email" />
            </div>
            <div class="rowadmin mb5">
                <div>Số điện thoại <span class="required">*</span></div>
                <input type="text" name="phone" />
            </div>
            <div id="error-message" style="color: red; text-align: center;"></div>
            <div class="row mb5">
                <input type="submit" name="addcr" value="THÊM MỚI" onclick="return validateAccountInput()">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=clientlist">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>