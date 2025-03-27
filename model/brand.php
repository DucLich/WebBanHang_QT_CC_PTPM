<?php
function insert_brand($brand_name)
{
    $sql = "INSERT INTO tbl_brand (brand_name) VALUES ('$brand_name')";
    pdo_execute($sql);
}
function delete_brand($brand_id)
{
    $sql = "DELETE FROM tbl_brand WHERE brand_id =" . $brand_id;
    pdo_execute($sql);
}
function load_all_brand()
{
    $sql = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
    $brandlist = pdo_query($sql);
    return $brandlist;
}
function load_one_brand($brand_id)
{
    $sql = "SELECT * FROM tbl_brand WHERE brand_id =" . $brand_id;
    $brandupdate = pdo_query_one($sql);
    return $brandupdate;
}
function update_brand($brand_name, $brand_id)
{
    $sql = "UPDATE tbl_brand SET brand_name = '" . $brand_name . "' WHERE brand_id =" . $brand_id;
    pdo_execute($sql);
}
?>