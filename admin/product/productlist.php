<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="" method="post" class="menu2">
        <input type="text" name="kyw">
        <select name="cartegory_id">
            <option value="0">Tất cả</option>
            <?php
            foreach ($cartegorylist as $cartegory) {
                extract($cartegory);
                echo '<option value=' . $cartegory_id . '>' . $cartegory_name . '</option>';
            }
            ?>

        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent mb">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Thương hiệu</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php
                foreach ($productlist as $product) {
                    extract($product);
                    $productupdate = "index.php?act=suasp&product_id=" . $product_id;
                    $productdelete = "index.php?act=productdelete&product_id=" . $product_id;
                    $productimg_path = "uploads/$product_img";
                    if (is_file($productimg_path)) {
                        $product_img = "<img src=' " . $productimg_path . " ' height='80'>";
                    } else {
                        $product_img = "no photo";
                    }
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $product_id . '</td>
                    <td>' . $cartegory_id . '</td>
                    <td>' . $brand_id . '</td>
                    <td>' . $product_name . '</td>
                    <td>' . $product_price . '</td>
                    <td>' . $product_img . '</td>
                    <td>' . $product_view . '</td>
                    <td> <a href="' . $productupdate . '"><input type="button" value="Sửa"></a> <a href="' . $productdelete . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=productadd">
                <input type="button" value="Nhập thêm">
        </div>
    </div>
</div>