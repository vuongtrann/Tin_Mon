<?php
include './dbconect/pdo.php';
$m = isset($_POST['maloai']) ? $_POST['maloai'] : '';
$t = isset($_POST['tenloai']) ? $_POST['tenloai'] : '';

if ($m!='') {
    $de = false;
    $sql = 'select * from loaisanpham';
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
        $sql = "insert into loaisanpham(MaLoai, TenLoai) 
                    values('$m','$t')";

        $a = [$m, $t];
        $objStatement = $objPDO->prepare($sql); //return B
        $objStatement->execute(); //ket qua truy van
        header('location:loaiSP.php');
    }else{
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Loại sản phẩm đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=loaiSP.php");
    }
} 

