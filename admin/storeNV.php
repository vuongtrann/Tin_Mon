<?php

include './dbconect/pdo.php';
$m = isset($_POST['manv']) ? $_POST['manv'] : '';
$mq = isset($_POST['maquyen']) ? $_POST['maquyen'] : '';
$t = isset($_POST['ten']) ? $_POST['ten'] : '';
$g = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : '';
$n = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
$cm = isset($_POST['cmnd']) ? $_POST['cmnd'] : '';
$s = isset($_POST['sdt']) ? $_POST['sdt'] : '';

if ($m != '') {
    $de = false;
    $sql = 'select * from nhanvien';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach ($data as $v) {
        if ($v->MaNV == $m) {
            $de = true;
            break;
        }
    }
    if ($de == false) {
        $sql = "insert into nhanvien(MaNV , MaQuyen, TenNV, GioiTinh, NgaySinh, CMND, SDTNV) 
                    values(?, ?, ?, ?, ?, ?, ?)";
        $a = [$m, $mq, $t, $g, $n, $cm, $s];
        $objStatement = $objPDO->prepare($sql); //return B
        $objStatement->execute($a); //ket qua truy p

        header('location:NhanVien.php');
    }else{
        echo '<script language="javascript">';
        echo 'alert("Không thể thêm - nhân viên đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=NhanVien.php");
    }
}
