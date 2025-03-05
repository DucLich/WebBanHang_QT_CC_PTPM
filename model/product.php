<?php
function insert_product($product_name, $cartegory_id, $brand_id, $product_price, $product_desc, $product_img)
{
    $sql = "INSERT INTO tbl_product (
        product_name,
        cartegory_id,
        brand_id,
        product_price,
        product_desc,
        product_img)
         VALUES (
            '$product_name',
            '$cartegory_id',
            '$brand_id',
            '$product_price',
            '$product_desc',
            '$product_img')";
    pdo_execute($sql);
}
function delete_product($product_id)
{
    $sql = "DELETE FROM tbl_product WHERE product_id =" . $product_id;
    pdo_execute($sql);
}
function load_all_product_home()
{
    $sql = "SELECT * FROM tbl_product WHERE 1 ORDER BY product_id DESC limit 0,9 ";
    $productlist = pdo_query($sql);
    return $productlist;
}
function load_all_product_top10()
{
    $sql = "SELECT * FROM tbl_product WHERE 1 ORDER BY product_view DESC limit 0,10 ";
    $productlist = pdo_query($sql);
    return $productlist;
}
function load_all_product($kyw, $cartegory_id)
{
    $sql = "SELECT * FROM tbl_product WHERE 1";
    if ($kyw != "") {
        $sql .= " and product_name like '%" . $kyw . "%'";
    }
    if ($cartegory_id > 0) {
        $sql .= " and cartegory_id = $cartegory_id";
    }
    $sql .= " ORDER BY product_id DESC";
    $productlist = pdo_query($sql);
    return $productlist;
}
function load_one_product($product_id)
{
    $sql = "SELECT * FROM tbl_product WHERE product_id =" . $product_id;
    $product = pdo_query_one($sql);
    return $product;
}
function load_name_cartegory($cartegory_id)
{
    if ($cartegory_id > 0) {
        $sql = "SELECT * FROM tbl_cartegory WHERE cartegory_id =" . $cartegory_id;
        $cartegory = pdo_query_one($sql);
        extract($cartegory);
        return $cartegory_name;
    } else {
        return "";
    }
}
function load_product_cungloai($product_id, $cartegory_id)
{
    $sql = "SELECT * FROM tbl_product WHERE cartegory_id =" . $cartegory_id . " AND product_id <>" . $product_id;
    $productlist = pdo_query($sql);
    return $productlist;
}
function update_product($product_name, $product_id, $cartegory_id, $brand_id, $product_price, $product_desc, $product_img)
{
    if ($product_img != "")
        $sql = "UPDATE tbl_product SET product_name = '" . $product_name . "',
    cartegory_id = '" . $cartegory_id . "',
    brand_id = '" . $brand_id . "',
    product_price = '" . $product_price . "',
    product_desc = '" . $product_desc . "',
    product_img = '" . $product_img . "' WHERE product_id =" . $product_id;
    else
        $sql = "UPDATE tbl_product SET product_name = '" . $product_name . "',
    cartegory_id = '" . $cartegory_id . "',
    brand_id = '" . $brand_id . "',
    product_price = '" . $product_price . "',
    product_desc = '" . $product_desc . "' WHERE product_id =" . $product_id;
    pdo_execute($sql);
}
?>