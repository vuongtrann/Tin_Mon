<?php
include './dbconect/pdo.php';
$m = isset($_POST['maphieunhap']) ? $_POST['maphieunhap'] : '';
$ma = isset($_POST['masp']) ? $_POST['masp'] : '';
$mn = isset($_POST['manv']) ? $_POST['manv'] : '';
$s = isset($_POST['soluong']) ? $_POST['soluong'] : '';
$g = isset($_POST['dongia']) ? $_POST['dongia'] : '';
$n = isset($_POST['ngay']) ? $_POST['ngay'] : '';
$tg = isset($_POST['tonggia']) ? $_POST['tonggia'] : '';

if ($m != '') {
    $de = false;
    $sql = 'select * from phieunhapkho';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MaPhieuNhap == $m) {
            $de = true;
            break;
        }
    }
    if ($de == false) {
        $sql = "insert into phieunhapkho(MaPhieuNhap, MaSP, MaNV, SoLuong, DonGia, NgayNhap, TongGia) 
                    values('$m', '$ma', '$mn', '$s', '$g', '$n', '$tg')";

        $a = [$m, $ma, $mn, $s, $g, $n, $tg];
        $objStatement = $objPDO->prepare($sql); //return B
        $objStatement->execute(); //ket qua truy van
        header('location:PhieuNhap.php');
    }else {
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - Phiếu nhập đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=PhieuNhap.php");
    }
}
