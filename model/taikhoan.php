<?php
function delete_tk($id)
{
    $sql = "DELETE FROM tbl_user WHERE id =" . $id;
    pdo_execute($sql);
}
function load_all_taikhoan()
{
    $sql = "SELECT * FROM tbl_user ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan_ad($username, $passwword,$email, $address, $tel)
{
    $sql = "INSERT INTO tbl_user (username,password,email,address,tel)
         VALUES ('$username','$passwword','$email', '$address', '$tel')";
    pdo_execute($sql);
}
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
function load_all_tk($kyw)
{
    $sql = "SELECT * FROM tbl_user WHERE 1";
    if ($kyw != "") {
        $sql .= " and username like '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY id DESC";
    $productlist = pdo_query($sql);
    return $productlist;
}
?>