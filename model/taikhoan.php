<?php
function insert_taikhoan($email, $username, $passwword)
{
    $sql = "INSERT INTO tbl_user (email,username,password)
         VALUES ('$email','$username','$passwword')";
    pdo_execute($sql);
}
function checkuser($username, $passwword)
{
    $sql = "SELECT * FROM tbl_user WHERE username ='" . $username . "'AND password = '" . $passwword . "'";
    $product = pdo_query_one($sql);
    return $product;
}

?>