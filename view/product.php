<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM <strong><?= $name ?></strong></div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dsproduct as $product) {
                    extract($product);
                    $linksp = "index.php?act=productct&product_id=" . $product_id;
                    $hinh = $img_path . $product_img;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11) || ($i == 14)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="boxsp ' . $mr . '">
                <div class="row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt="" /></a></div>
                <p>$' . $product_price . '</p>
                <div class="row prosl ">
                <table>
                <tr>
                <td><a href="' . $linksp . '">' . $product_name . '</a></td>
                <td style="border: 1px solid #000;">' . $product_soluong . '</td>
                </tr>
                </table></div>
                <div class="row btnaddtocart">
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="' . $product_id . '">
                        <input type="hidden" name="name" value="' . $product_name . '">
                        <input type="hidden" name="img" value="' . $product_img . '">
                        <input type="hidden" name="price" value="' . $product_price . '">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>