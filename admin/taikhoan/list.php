<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <form action="index.php?act=tracuutk" method="post" class="frm">
        <input type="text" name="kyw">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã TK</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $role . '</td>
                    <td></a> <a href="' . $xoatk . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=Themtaikhoan">
                <input type="button" value="Thêm tài khoản mới">
        </div>
    </div>
</div>