<?php
function insert_taikhoan($email, $username, $passwword)
{
    $sql = "INSERT INTO tbl_user (email,username,password)
         VALUES ('$email','$username','$passwword')";
    pdo_execute($sql);
}
function checkuser($username, $passwword)c
{
    $sql = "SELECT * FROM tbl_user WHERE username ='" . $username . "'AND password = '" . $passwword . "'";
    $product = pdo_query_one($sql);
    return $product;
}
function update_taikhoan($id, $email, $address, $tel, $username, $password)
{
    $sql = "UPDATE tbl_user SET email = '" . $email . "',
    address = '" . $address . "',
    tel = '" . $tel . "',
    username = '" . $username . "',
    password = '" . $password . "' WHERE id =" . $id;
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT * FROM tbl_user WHERE email ='" . $email . "'";
    $product = pdo_query_one($sql);
    return $product;
}

?>