<?php 
include './dbconect/pdo.php';

$sql='select * from phieunhapkho';
$objStatement= $objPDO->prepare($sql);
$objStatement->execute();
$dataN = $objStatement->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Admin</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="resources/scripts/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		<?php  include './pages/sidebar.php' ?>
		 <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			
			
			<div class="clear"></div> <!-- End .clear -->
			 <!-- Start Content Box -->
			 <form action="storePN.php" method="post" enctype="multipart/form-data">
              <table class="table"  border=1>
                 
                  <tbody>
				  <tr>
								<td>Mã phiếu nhập</td>
								<td><input type="text" name="maphieunhap" ></td>
							</tr>
					  <tr>
					  <tr>
								<td>Mã sản phẩm</td>
								<td>
								<select name="masp" id="">
										<?php 
										foreach($dataN as $r)
										{
											?>
											<option value="<?php echo $r->MaSP ?>"><?php echo $r->MaSP ?></option>
											<?php
										}
										?>
								</select>
								</td>
							</tr>
					  <tr>
					  <tr>
								<td>Mã nhân viên</td>
								<td>
								<select name="manv" id="">
										<?php 
										foreach($dataN as $r)
										{
											?>
											<option value="<?php echo $r->MaNV ?>"><?php echo $r->MaNV ?></option>
											<?php
										}
										?>
								</select>
								</td>
							</tr>
					  <tr>
					  <tr>
                         <td scope="row"> Số lượng</td>
                          <td><input type="number" name="soluong" ></td>
					  </tr>
					  <tr>
                         <td scope="row"> Đơn giá</td>
                          <td><input type="number" name="dongia" ></td>
					  </tr>
					  <tr>
                         <td scope="row"> Ngày nhập</td>
                          <td><input type="date" name="ngay" ></td>
					  </tr>
					  <tr>
                         <td scope="row"> Tổng giá</td>
                          <td><input type="text" name="tonggia" ></td>
                      </tr>
                  </tbody> 
              </table>
        <input type="submit" value="Insert">

    </form>
			 <!-- End .content-box -->
			
			
			<!-- Start Notifications -->
			
			
			<!-- End Notifications -->
			
		
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
