<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "INSERT INTO tbl_binhluan (noidung,iduser,idpro,ngaybinhluan)
         VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function load_all_binhluan($idpro)
{

    if ($idpro > 0) {
        $sql = "SELECT tbl_binhluan.id,tbl_binhluan.idpro,tbl_binhluan.iduser,tbl_binhluan.noidung, tbl_binhluan.ngaybinhluan, tbl_user.email
    FROM tbl_binhluan 
    INNER JOIN tbl_user ON tbl_binhluan.iduser = tbl_user.id WHERE idpro='" . $idpro . "'";
    } else {
        $sql = "SELECT tbl_binhluan.id,tbl_binhluan.idpro,tbl_binhluan.iduser,tbl_binhluan.noidung, tbl_binhluan.ngaybinhluan, tbl_user.email
    FROM tbl_binhluan 
    INNER JOIN tbl_user ON tbl_binhluan.iduser = tbl_user.id";
    }

    $sql .= " ORDER BY tbl_binhluan.id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id)
{
    $sql = "DELETE FROM tbl_binhluan WHERE id =" . $id;
    pdo_execute($sql);
}
?>