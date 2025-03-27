<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH CÁC THƯƠNG HIỆU</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Thương hiệu</th>
                    <th>Tên Thương hiệu</th>
                    <th></th>
                </tr>
                <?php
                foreach ($brandlist as $brand) {
                    extract($brand);
                    $brandupdate = "index.php?act=brandupdate&brand_id=" . $brand_id;
                    $branddelete = "index.php?act=branddelete&brand_id=" . $brand_id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $brand_id . '</td>
                    <td>' . $brand_name . '</td>
                    <td> <a href="' . $brandupdate . '"><input type="button" value="Sửa"></a> <a href="' . $branddelete . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=brandadd">
                <input type="button" value="Nhập thêm">
        </div>
    </div>
</div>