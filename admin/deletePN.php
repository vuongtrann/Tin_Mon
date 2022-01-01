<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
$m=isset($_GET['maphieunhap'])?$_GET['maphieunhap']:'';
if($m !='')
{ 
    $de=false;
    $sql='select * from phieunhapkho';
$objStatament= $objPDO->prepare($sql);
$objStatament->execute();
$data=$objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach($data as $v)
    {
        if($v->MaPhieuNhap==$m)
        {
           
            
            $de=true;
           
            break;
           
        }

    }

    if($de==false)
    {
        $sql="delete from phieunhapkho where MaPhieuNhap=?";
        $a=[$m];
        $tam=$objPDO->prepare($sql);
        $tam->execute($a);
        header('location:PhieuNhap.php');
    }
    else{
        
       
        echo '<script language="javascript">';
            echo 'alert("Không thể xóa mã khi có sản phẩm")';
            echo '</script>';
            header( "refresh:0.5;url=PhieuNhap.php" );
    }
    
    

}
