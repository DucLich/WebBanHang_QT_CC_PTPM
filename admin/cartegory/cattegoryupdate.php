<?php
if (is_array($cartegoryupdate)) {
    extract($cartegoryupdate);
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatecartegory" method="post">
            <div class="row mb">
                Mã loại <br>
                <input type="text" name="maloai" disabled />
            </div>
            <div class="row mb">
                Tên loại </br>
                <input type="text" name="cartegory_name" value="<?php
                if (isset($cartegory_name) && ($cartegory_name != ""))
                    echo $cartegory_name;
                ?>" />
            </div>
            <div class="row mb">
                <input type="hidden" name="cartegory_id" value="<?php
                if (isset($cartegory_id) && ($cartegory_id > 0))
                    echo $cartegory_id;
                ?>">
                <input type="submit" name="cartegoryupdate" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=cartegorylist">
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