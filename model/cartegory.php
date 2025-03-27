<?php
function insert_cartegory($cartegory_name)
{
    $sql = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$cartegory_name')";
    pdo_execute($sql);
}
function delete_cartegory($cartegory_id)
{
    $sql = "DELETE FROM tbl_cartegory WHERE cartegory_id =" . $cartegory_id;
    pdo_execute($sql);
}
function load_all_cartegory()
{
    $sql = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC limit 0,10";
    $cartegorylist = pdo_query($sql);
    return $cartegorylist;
}
function load_one_cartegory($cartegory_id)
{
    $sql = "SELECT * FROM tbl_cartegory WHERE cartegory_id =" . $cartegory_id;
    $cartegoryupdate = pdo_query_one($sql);
    return $cartegoryupdate;
}
function update_cartegory($cartegory_name, $cartegory_id)
{
    $sql = "UPDATE tbl_cartegory SET cartegory_name = '" . $cartegory_name . "' WHERE cartegory_id =" . $cartegory_id;
    pdo_execute($sql);
}

?>