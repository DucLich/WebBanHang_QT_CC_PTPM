<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($cartegorylist as $cartegory) {
                    extract($cartegory);
                    $cartegoryupdate = "index.php?act=cartegoryupdate&cartegory_id=" . $cartegory_id;
                    $cartegorydelete = "index.php?act=cartegorydelete&cartegory_id=" . $cartegory_id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $cartegory_id . '</td>
                    <td>' . $cartegory_name . '</td>
                    <td> <a href="' . $cartegoryupdate . '"><input type="button" value="Sửa"></a> <a href="' . $cartegorydelete . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=cartegoryadd">
                <input type="button" value="Nhập thêm">
        </div>
    </div>
</div>