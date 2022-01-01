<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
$m=isset($_GET['manv'])?$_GET['manv']:'';
if($m !='')
{ 
    $de=false;
    $sql='select * from nhanvien';
    $objStatament= $objPDO->prepare($sql);
    $objStatament->execute();
    $data=$objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach($data as $v)
    {
        if($v->MaNV==$m)
        {
           
            
            $de=true;
           
            break;
           
        }

    }

    if($de==false)
    {
        $sql="delete from nhanvien where MaNV= ?";
        $a=[$m];
        $tam=$objPDO->prepare($sql);
        $tam->execute($a);
        header('location:NhanVien.php');
    }
    else{
        
       
        echo '<script language="javascript">';
            echo 'alert("Không thể xóa mã khi có sản phẩm")';
            echo '</script>';
            header( "refresh:1;url=NhanVien.php" );
    }
    
    

}
