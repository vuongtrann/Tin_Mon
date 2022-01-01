<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
if (!isset($_SESSION)) session_start();

    $email ='a';
    $masp = isset($_GET['masp']) ? $_GET['masp'] : '';
    $soluong = isset($_GET['soluong']) ? $_GET['soluong'] : '';

    $sql = 'select * from sanpham ';
    $tamn = $objPDO->prepare($sql);
    $a = [$masp];
    $tamn->execute($a);
    $sanpham = $tamn->fetch(PDO::FETCH_OBJ);

    $sql = 'select * from giohang';
    $tamn = $objPDO->prepare($sql);
    $tamn->execute();
    $data = $tamn->fetchAll(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MaSP == $masp && $v->Email==$email) {
            echo '<script language="javascript">';
            echo 'alert("Sản phẩm đã có !")';
            echo '</script>';
            header("refresh:0.5;url=index.php");
            exit;
        }
    }

    $sql = 'insert into giohang(MaSP, TenSP, SoLuong, Gia, Email) values(?,?,?,?,?)';
    $c = [$masp, $sanpham->TenSP, $soluong, $sanpham->Gia, $email];
    $tam = $objPDO->prepare($sql);
    $tam->execute($c);
    // print_r($c);
    header('location:check_out.php');
?>
