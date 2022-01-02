<?php
include './dbconect/pdo.php';
$m = isset($_POST['maphieuxuat']) ? $_POST['maphieuxuat'] : '';
$ma = isset($_POST['masp']) ? $_POST['masp'] : '';
$mn = isset($_POST['manv']) ? $_POST['manv'] : '';
$s = isset($_POST['soluong']) ? $_POST['soluong'] : '';
$g = isset($_POST['dongia']) ? $_POST['dongia'] : '';
$n = isset($_POST['ngay']) ? $_POST['ngay'] : '';
$tg = isset($_POST['tonggia']) ? $_POST['tonggia'] : '';

if ($m != '') {
    $de = false;
    $sql = 'select * from phieuxuatkho';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MaPhieuXuat == $m) {
            $de = true;
            break;
        }
    }
    if ($de == false) {
        $sql = "insert into phieuxuatkho(MaPhieuXuat, MaSP, MaNV, SoLuong, DonGia, NgayXuat, TongGia) 
        values('$m', '$ma', '$mn', '$s', '$g', '$n', '$tg')";

        $a = [$m, $ma, $mn, $s, $g, $n, $tg];
        $objStatement = $objPDO->prepare($sql); //return B
        $objStatement->execute(); //ket qua truy van
        header('location:PhieuXuat.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Phiếu xuất đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=PhieuXuat.php");
    }
}
