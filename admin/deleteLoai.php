<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
$m = isset($_GET['maloai']) ? $_GET['maloai'] : '';
if ($m != '') {
    $de = false;
    $sql = 'select * from sanpham';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MaLoai == $m) {


            $de = true;

            break;
        }
    }

    if ($de == false) {
        $sql = "delete from loaisanpham where MaLoai=?";
        $a = [$m];
        $tam = $objPDO->prepare($sql);
        $tam->execute($a);
        header('location:loaiSP.php');
    } else {


        echo '<script language="javascript">';
        echo 'alert("Không thể xóa mã khi có sản phẩm")';
        echo '</script>';
        header("refresh:0.5;url=loaiSP.php");
    }
}
