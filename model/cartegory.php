<?php
function load_all_cartegory()
{
    $sql = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC limit 0,10";
    $cartegorylist = pdo_query($sql);
    return $cartegorylist;
}
?>