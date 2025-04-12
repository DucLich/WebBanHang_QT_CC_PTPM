<?php
session_start();
include 'model/pdo.php'; // Kết nối PDO
include 'model/user.php'; // Tệp chứa các hàm

// Lấy danh sách tài khoản
$listtaikhoan = load_all_taikhoan();

// Kiểm tra dữ liệu
if ($listtaikhoan === false) {
    echo "Đã xảy ra lỗi khi lấy danh sách tài khoản.";
} elseif (empty($listtaikhoan)) {
    $listtaikhoan = []; // Gán mảng rỗng nếu không có dữ liệu
}
?>

<!-- Phần HTML của bạn ở đây -->
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã TK</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
                <?php if (empty($listtaikhoan)) : ?>
                    <tr>
                        <td colspan="9">Không có tài khoản nào.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($listtaikhoan as $taikhoan) : ?>
                        <?php extract($taikhoan); ?>
                        <tr>
                            <td><input type="checkbox" name="selected_accounts[]" value="<?= $id ?>"></td>
                            <td><?= htmlspecialchars($id) ?></td>
                            <td><?= htmlspecialchars($username) ?></td>
                            <td>********</td>
                            <td><?= htmlspecialchars($email) ?></td>
                            <td><?= htmlspecialchars($address) ?></td>
                            <td><?= htmlspecialchars($tel) ?></td>
                            <td><?= htmlspecialchars($role) ?></td>
                            <td><a href="<?= htmlspecialchars($xoatk) ?>"><input type="button" value="Xóa"></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
        <div class="row mb">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=cartegoryadd">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </div>
</div>