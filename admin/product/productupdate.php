<?php
if (is_array($productupdate)) {
    extract($productupdate);
}
$productimg_path = "uploads/" . $product_img;
if (is_file($productimg_path)) {
    $img = "<img src=' " . $productimg_path . " ' height='80'>";
} else {
    $img = "no photo";
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updateproduct" method="post" enctype="multipart/form-data">
            <div class="row mb">
                <select name="cartegory_id">
                    <option value="0">Tất cả</option>
                    <?php
                    foreach ($cartegorylist as $cartegory) {
                        extract($cartegory);
                        if ($cartegory_id == $cartegory_id)
                            $s = "selected";
                        else
                            $s = "";
                        echo '<option value=' . $cartegory_id . '' . $s . '>' . $cartegory_name . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="row mb">
                Thương hiệu<br>
                <select name="brand_id">
                    <?php
                    foreach ($brandlist as $brand) {
                        extract($brand);
                        echo '<option value=' . $brand_id . '>' . $brand_name . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="row mb">
                Tên sản phẩm </br>
                <input type="text" name="name" value="<?php echo $product_name ?>" />
            </div>
            <div class="row mb">
                Giá <br>
                <input type="text" name="price" value="<?php echo $product_price ?>" />
            </div>
            <div class="row mb">
                Hình ảnh </br>
                <input type="file" name="img" />
                <?php echo $img ?>
            </div>
            <div class="row mb">
                Mô tả <br>
                <textarea name="desc" id="" cols="30" rows="10"><?php echo $product_desc ?></textarea>
            </div>
            <div class="row mb">
                <input type="hidden" name="id" value="<?php
                if (isset($product_id) && ($product_id > 0))
                    echo $product_id;
                ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=productlist">
                    <input type="button" value="DANH SÁCH">
                </a>
            </div>
        </form>