<?php 
include './dbconect/pdo.php';
$m = isset($_POST['masp'])?$_POST['masp']:'';
$t = isset($_POST['ten'])?$_POST['ten']:'';
$g = isset($_POST['gia'])?$_POST['gia']:0;
$mt = isset($_POST['mota'])?$_POST['mota']:'';
$maloai =  isset($_POST['loai'])?$_POST['loai']:'';
$h ='';
if ($m==''){ header('location:index.php'); exit;}
// if (isset($_FILES['hinh']))
// {
//     if ($_FILES['hinh']['error']==0) //ok
//     {
//         $h = $_FILES['hinh']['name'];
//         move_uploaded_file($_FILES['hinh']['tmp_name'], "img/product/$h");
//     }
// }

$h=$_FILES['hinh'];
$img_name="./img/product/".$h['name'];
move_uploaded_file($h["tmp_name"],$img_name);
$sql="update sanpham set MaLoai=?, TenSP=?, Hinh=?, GiaBan=?, mota=?  where MaSP=?  ";
$a =[$maloai , $t, $img_name, $g, $mt, $m];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van

// echo "<pre>Da them $n dong";
// echo $sql ;

header('location:index.php');

