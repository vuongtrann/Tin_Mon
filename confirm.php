<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
if(!isset($_SESSION)) session_start();
 $u=isset($_POST['makh'])?$_POST['makh']:'';
 $p=isset($_POST['mk'])?$_POST['mk']:'';
$sql="select * from khachhang";
$objStatament=$objPDO->prepare($sql);
$objStatament->execute();
$data=$objStatament->fetchALL(PDO::FETCH_OBJ);
foreach($data as $v){
    if($u==$v->MaKH && $p==$v->Matkhau){
        $_SESSION['user']=$u;
        header('location:index.php');
        
        exit;
    }
    
}
echo '<script language="javascript">'; 
echo 'alert("Khách hàng không tồn tại !")';
           
    echo '</script>';
    header( "refresh:0.5;url=login.php" );
