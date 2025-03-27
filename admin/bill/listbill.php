<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post" class="menu2">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="GO">
        <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>
    </form>
    <div class="row frmcontent mb">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill["bill_name"] . '
                    <br> ' . $bill["bill_email"] . '
                    <br> ' . $bill["bill_address"] . '
                    <br> ' . $bill["bill_tel"];
                    $countsp = load_all_cart_count($bill["id"]);
                    $ttdh = get_ttdh($bill['bill_status']);
                    echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>DAM.' . $bill['id'] . '</td>
                    <td>' . $kh . '</td>
                    <td><strong>' . $countsp . '</strong></td>
                    <td>' . $bill['total'] . '</td>
                    <td>' . $ttdh . '</td>
                    <td>' . $bill['ngaydathang'] . '</td>
                    <td><input type="button" value="Xóa"></td>
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