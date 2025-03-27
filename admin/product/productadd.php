<script type="text/javascript">
function validateProductInput() {
    var productName = document.forms["productForm"]["product_name"].value;
    var productPrice = document.forms["productForm"]["product_price"].value;
    //var productImg = document.forms["productForm"]["product_img"].value;

    let isValid = true;

if (productName.length < 10) {
    document.getElementById("error-product-name").innerText = "Tên sản phẩm không được ít hơn 10 ký tự.";
    isValid = false;
} else if (productName.length > 20) {
    document.getElementById("error-product-name").innerText = "Tên sản phẩm không được quá 20 ký tự.";
    document.getElementById("product_name").value = "";
    isValid = false;
}
else{
  document.getElementById("error-product-name").innerText = "";
}

if (productPrice == "") {
    document.getElementById("error-product-price").innerText = "Vui lòng nhập giá của sản phẩm.";
    isValid = false;
} else if (productPrice <= 0) {
    document.getElementById("error-product-price").innerText = "Giá sản phẩm không được âm.";
    document.getElementById("product_price1").value = "";
    isValid = false;
} else if (!/^\d+$/.test(productPrice)) {
    document.getElementById("error-product-price").innerText = "Giá sản phẩm không được chứa ký tự.";
    document.getElementById("product_price1").value = "";
    isValid = false;
}
else{
  document.getElementById("error-product-price").innerText = "";
}

// if (productImg == "") {
//     document.getElementById("error-product-img").innerText = "Vui lòng nhập chọn ảnh cho sản phẩm.";
//     isValid = false;
// }
// else{
//   document.getElementById("error-product-img").innerText = "";
// }
if (isValid) {
        alert("Thêm thành công");
    }
return isValid;
}
</script>

<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form name="productForm" action="index.php?act=productadd" method="post" enctype="multipart/form-data">
            <div class="rowadmin mb mb5">
                <div>Tên loại sản phẩm <span class="required">*</span></div>
                <select class="shad2" name="cartegory_id">
                    <?php
                    foreach ($cartegorylist as $cartegory) {
                        extract($cartegory);
                        echo '<option value=' . $cartegory_id . '>' . $cartegory_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="rowadmin mb mb5">
                <div>Tên thương hiệu <span class="required">*</span></div>
                <select class="shad2" name="brand_id">
                    <?php
                    foreach ($brandlist as $brand) {
                        extract($brand);
                        echo '<option value=' . $brand_id . '>' . $brand_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="rowadmin mb5">
                <div>Tên sản phẩm <span class="required">*</span></div>
                <input class="shad2" type="text" name="p
                roduct_name" id="product_name"/>
                <br>
            </div>
            <div class="mb10" id="error-product-name" style="color: red; text-align: center;"></div>
            <div class="rowadmin mb mb5">
                <div>Giá sản phẩm <span class="required">*</span></div>
                <input class="shad2" type="text" name="product_price" id="product_price1" />
                <br>
            </div>
            <div class="mb10" id="error-product-price" style="color: red; text-align: center;"></div>
            <div class="row mb5">
                Hình ảnh </br>  
                <input type="file" name="product_img" />
                <div id="error-product-img" style="color: red;"></div>
            </div>
            <div class="mb10" id="error-product-img" style="color: red; text-align: center;"></div>
            <div class="row mb5">
                Mô tả <br>
                <textarea class="shad2 mb5" name="product_desc" id="" cols="44" rows="10"></textarea>
            </div>
            <div class="row  mb5">
                <input class="shad2" type="submit" name="add" value="THÊM MỚI" onclick="return validateProductInput()">
                <input class="shad2" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=productlist">
                    <input class="shad2" type="button" value="DANH SÁCH">
                </a>
                <div class="mb10" id="success-product-img" style="color: red; text-align: center;"></div>
            </div>
        </form>
    </div>
</div>