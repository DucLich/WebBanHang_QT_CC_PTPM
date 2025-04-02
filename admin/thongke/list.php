<div class="row">
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb frmdsloai">
            <table>
                <tr>
                    <th>MÃ LOẠI</th>
                    <th>LOẠI SẢN PHẨM</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                    <td>' . $madm . '</td>
                    <td>' . $tendm . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $maxprice . '</td>
                    <td>' . $minprice . '</td>
                    <td>' . $avgprice . '</td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb"><a href=""></a>
        </div>
    </div>
</div>