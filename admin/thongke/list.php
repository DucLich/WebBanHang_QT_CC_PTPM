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
if (!empty($listthongke) && (is_array($listthongke) || is_object($listthongke))) {
    foreach ($listthongke as $tk) {
        extract($tk);
        echo '<tr>
            <td>' . htmlspecialchars($madm) . '</td>
            <td>' . htmlspecialchars($tendm) . '</td>
            <td>' . htmlspecialchars($countsp) . '</td>
            <td>' . htmlspecialchars($maxprice) . '</td>
            <td>' . htmlspecialchars($minprice) . '</td>
            <td>' . htmlspecialchars($avgprice) . '</td>
        </tr>';
    }
} else {
    echo '<tr><td colspan="6">Không có dữ liệu để hiển thị.</td></tr>';
}
?>
            </table>
        </div>
        <div class="row mb"><a href=""></a>
        </div>
    </div>
</div>