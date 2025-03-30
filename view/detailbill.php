<div class="row">
    <div class="row mb">
        <div class="boxtrai mr">
            <?php
            if (isset($bill) & (is_array($bill))) {
                extract($bill);
            }
            ?>
            <!-- <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <div class="row boxcontent" style="text-align: center;">
                    <li>-Mã đơn hàng : DAM.<?= $bill['id'] ?></li>
                    <li>-Ngày đặt hàng:<?= $bill['ngaydathang'] ?></li>
                    <li>-Tổng đơn hàng:<?= $bill['total'] ?></li>
                    <li>-Phương thức thanh toán:<?= $bill['bill_pttt'] ?></li>
                </div>
            </div> -->
            <div class="row mb">
                <div class="boxtitle">CHI TIẾT HÀNG ĐÃ ĐẶT</div>
                <div class="row boxcontent frmdsloai">
                    <table>
                        <tr>
                            <?php
                            bill_chi_tiet($billct);
                            ?>
                    </table>
                </div>
            </div>
        </div>
        <div>
            <div class="boxphai">
                <?php
                include "view/boxright.php";
                ?>
            </div>
        </div>
    </div>
</div>
</div>