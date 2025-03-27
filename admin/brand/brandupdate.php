<?php
if (is_array($brandupdate)) {
    extract($brandupdate);
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT THƯƠNG HIỆU</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatebrand" method="post">
            <div class="row mb">
                Mã Thương hiệu <br>
                <input type="text" name="maloai" disabled />
            </div>
            <div class="row mb">
                Tên Thương hiệu </br>
                <input type="text" name="brand_name" spellcheck="false" value="<?php
                if (isset($brand_name) && ($brand_name != ""))
                    echo $brand_name;
                ?>" />
            </div>
            <div class="row mb">
                <input type="hidden" name="brand_id" value="<?php
                if (isset($brand_id) && ($brand_id > 0))
                    echo $brand_id;
                ?>">
                <input type="submit" name="brandupdate" value="Cập nhật">
                <input type="reset" value="Nhập lại">
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
</div>