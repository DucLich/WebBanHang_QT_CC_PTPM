<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($oneproduct);
            ?>
            <div class="boxtitle"><?= $product_name ?></div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $product_img;
                echo '<div class="row mb spct"><img src="' . $img . ' "></div>';
                echo $product_desc;
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="row boxcontent">
                <iframe src="view/binhluan/binhluanform.php?idpro=<?= $id ?>" frameborder="0" width="100%"
                    height="300px"></iframe>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                foreach ($product_cungloai as $product_cl) {
                    extract($product_cl);
                    $linksp = "index.php?act=productct&product_id=" . $product_id;
                    echo '<li><a href="' . $linksp . '">' . $product_name . '</a></li>';
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