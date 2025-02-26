<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/image/banner1.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/image/banner2.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/image/banner3.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($productnew as $product) {
                extract($product);
                $linksp = "index.php?act=productct&product_id=" . $product_id;
                $hinh = $img_path . $product_img;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11) || ($i == 14)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }

                echo '<div class="boxsp ' . $mr . '">
                <div class="row mb10 img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt="" /></a></div>
                <p>$' . $product_price . '</p>
                <div class="row mb10 prosl ">
                <table>
                <tr>
                <td><a href="' . $linksp . '">' . $product_name . '</a></td>
                <td style="border: 1px solid #000;">' . $product_soluong . '</td>
                </tr>
                </table></div>
                <div class="row mb10 btnaddtocart">
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="' . $product_id . '">
                        <input type="hidden" name="name" value="' . $product_name . '">
                        <input type="hidden" name="img" value="' . $product_img . '">
                        <input type="hidden" name="price" value="' . $product_price . '">
                        <input class="bcrcart" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>';
                $i += 1;
            }
            ?>
            <!-- <div class="boxsp mr">
                <div class="row img"><img src="admin/uploads/ao2_VT.png" alt="" /></div>
                <p>30$</p>
                <a href="">Quan</a>
            </div> !-->
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>