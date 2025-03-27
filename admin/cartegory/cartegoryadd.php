<script type="text/javascript">
    function validateInput() {
        var categoryName = document.forms["categoryForm"]["cartegory_name"].value;
        if (categoryName == "") {
            document.getElementById("error-message").innerText = "Vui lòng nhập tên loại sản phẩm";
            return false;
        } else {
            document.getElementById("error-message").innerText = "";
        }
    }
</script>

<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form name="categoryForm" action="index.php?act=cartegoryadd" method="post">
            <div class="rowadmin mb5">
                Tên loại sản phẩm </br>
                <input type="text" name="cartegory_name" />
            </div>
            <div id="error-message" style="color: red; text-align: center;"></div> <!-- Thêm phần tử cho thông báo -->
            <div class="form-actions">
                <input type="submit" name="addcr" value="THÊM MỚI" onclick="return validateInput()">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=cartegorylist">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <!-- <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo "<span style='color: green;'>$thongbao</span>";
            }
            ?> -->
        </form>
    </div>
</div>