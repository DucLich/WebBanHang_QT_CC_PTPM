<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent frmdsloai">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>SỐ LƯỢNG ĐẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = load_all_cart_count($bill['id']);
                            echo '<tr>
                            <td>DAM.' . $bill['id'] . '</td>
                            <td>' . $bill['ngaydathang'] . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $bill['total'] . '</td>
                            <td>' . $ttdh . '</td>
                        </tr>';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>