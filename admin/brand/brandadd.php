<script type="text/javascript">
function validateBrandInput() {
    var brandName = document.forms["brandForm"]["brand_name"].value;
    if (brandName == "") {
        document.getElementById("error-message").innerText = "Vui lòng nhập tên thương hiệu";
        return false;
    }
}
</script>

<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI THƯƠNG HIỆU</h1>
    </div>
    <div class="row frmcontent">
        <form name="brandForm" action="index.php?act=brandadd" method="post">
            <!-- <div class="row mb">
                Mã thương hiệu <br>
                <input type="text" name="" disabled />
            </div> -->
            <div class="rowadmin mb5">
                <div>Tên thương hiệu <span class="required">*</span></div>
                <input type="text" name="brand_name" />
            </div>
            <div id="error-message" style="color: red; text-align: center;"></div>
            <div class="form-actions">
                <input type="submit" name="addcr" value="THÊM MỚI" onclick="return validateBrandInput()">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=brandlist">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
