<?php

if($n==1){
	?>

<div class="content-box">
				
				<div class="content-box-header">
					
					<h3>Danh sách sản phẩm</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Forms</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						<table>
							
							<thead>
								<tr>
								   
								   <th>Mã Sản Phẩm</th>
								   <th>Mã Loại</th>
								   <th>Tên Sản Phẩm</th>
								   <th>Hình</th>
								   <th>Mô tả</th>
								   <th>Giá Sản Phẩm</th>
								   
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						
							<tbody>
								<?php

                                foreach($data as $v){
                                    ?>
                                        <tr>
                                        
                                            <td><?php echo $v->MaSP ?></td>
                                            <td><?php echo $v->MaLoai ?></a></td>
                                            <td><?php echo $v->TenSP ?></td>
											<td><img src='./img/product/<?php echo $v->Hinh ?>' width="80px" heigh="40px" ></td>
											<td><?php echo $v->mota ?></td>
											<td><?php echo $v->GiaBan ?></td>
                                            <td>
                                                <!-- Icons -->
                                                <a href="./edit.php?masp=<?php echo $v->MaSP ?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                                <a href="./delete.php?masp=<?php echo $v->MaSP ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                                
                                            </td>
								        </tr>
                                    <?php
                                }
                                ?>

								
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
				 <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>
<?php
}else if($n==2){
	?>
             <div class="content-box">
				
				<div class="content-box-header">
					
					<h3>Loại sản phẩm</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Forms</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<table>
							
							<thead>
								<tr>
							
								   <th>Mã Loại</th>
								   <th>Tên Loại</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						
							<tbody>
								<?php

                                foreach($dataMaLoai as $v){
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $v->MaLoai ?></td>
                                            <td><?php echo $v->TenLoai ?></a></td>
                                            
                                            <td>
                                                <!-- Icons -->
                                                <a href="./editLoai.php?maloai=<?php echo $v->MaLoai ?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                                <a href="./deleteLoai.php?maloai=<?php echo $v->MaLoai ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                            </td>
								        </tr>
                                    <?php
                                }
                                ?>

								
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					 <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>
	<?php
}
else if ($n==3){

	?>
            <div class="content-box">
				
				<div class="content-box-header">
					
					<h3>Danh sách nhân viên</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Forms</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<table>
							
							<thead>
								<tr>
								   
								   <th>Mã nhân viên</th>
								   <th>Mã quyền</th>
								   <th>Tên nhân viên</th>
								   <th>Giới tính</th>
								   <th>Ngày sinh</th>
								   <th>Chứng minh</th>
								   <th>Số điện thoại</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						
							<tbody>
								<?php

                                foreach($dataMaNV as $v){
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $v->MaNV ?></td>
                                            <td><?php echo $v->MaQuyen ?></a></td>
                                            <td><?php echo $v->TenNV ?></a></td>
											<td><?php echo $v->GioiTinh ?></a></td>
											<td><?php echo $v->NgaySinh ?></a></td>
											<td><?php echo $v->CMND ?></a></td>
											<td><?php echo $v->SDTNV ?></a></td>
                                            <td>
                                                <!-- Icons -->
                                                <a href="./editNV.php?manv=<?php echo $v->MaNV?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                                <a href="./deleteNV.php?manv=<?php echo $v->MaNV ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                            </td>
								        </tr>
                                    <?php
                                }
                                ?>

								
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>
	<?php
}
else if ($n==4){
?>


		<div class="content-box">
			
			<div class="content-box-header">
				
				<h3>Danh sách khách hàng</h3>
				
				<ul class="content-box-tabs">
					<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
					<li><a href="#tab2">Forms</a></li>
				</ul>
				
				<div class="clear"></div>
				
			</div> <!-- End .content-box-header -->
			
			<div class="content-box-content">
				
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					
					<table>
						
						<thead>
							<tr>
							   
							   <th>Mã khách hàng</th>
							   
							   <th>Tên khách hàng</th>
							   
							   <th>Mật khẩu</th>
							   
							</tr>
							
						</thead>
					 
						<tfoot>
							<tr>
								<td colspan="6">
									<div class="bulk-actions align-left">
										<select name="dropdown">
											<option value="option1">Choose an action...</option>
											<option value="option2">Edit</option>
											<option value="option3">Delete</option>
										</select>
										<a class="button" href="#">Apply to selected</a>
									</div>
									
									<div class="pagination">
										<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
										<a href="#" class="number" title="1">1</a>
										<a href="#" class="number" title="2">2</a>
										<a href="#" class="number current" title="3">3</a>
										<a href="#" class="number" title="4">4</a>
										<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
									</div> <!-- End .pagination -->
									<div class="clear"></div>
								</td>
							</tr>
						</tfoot>
					
						<tbody>
							<?php

							foreach($data as $v){
								?>
									<tr>
										
										<td><?php echo $v->MaKH ?></td>
										<td><?php echo $v->TenKH ?></a></td>
										<td><?php echo $v->Matkhau ?></a></td>
										
										<td>
											<!-- Icons -->
											<a href="./editKH.php?makh=<?php echo $v->MaKH?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
											<a href="./deleteKH.php?makh=<?php echo $v->MaKH ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										</td>
									</tr>
								<?php
							}
							?>

							
							
						</tbody>
						
					</table>
					
				</div> <!-- End #tab1 -->
				
				<!-- End #tab2 -->        
				
			</div> <!-- End .content-box-content -->
			
		</div>
<?php
}else if ($n==5){
?>



		<div class="content-box">
			
			<div class="content-box-header">
				
				<h3>Phiếu nhập</h3>
				
				<ul class="content-box-tabs">
					<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
					<li><a href="#tab2">Forms</a></li>
				</ul>
				
				<div class="clear"></div>
				
			</div> <!-- End .content-box-header -->
			
			<div class="content-box-content">
				
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					
					<table>
						
						<thead>
							<tr>
							   
							   <th>Mã phiếu nhập</th>
							   <th>Mã sản phẩm </th>
							   <th>Mã nhân viên</th>
							   <th>Số lượng</th>
							   <th>Đơn giá</th>
							   <th>Ngày nhập </th>
							   <th>Tổng giá</th>
							</tr>
							
						</thead>
					 
						<tfoot>
							<tr>
								<td colspan="6">
									<div class="bulk-actions align-left">
										<select name="dropdown">
											<option value="option1">Choose an action...</option>
											<option value="option2">Edit</option>
											<option value="option3">Delete</option>
										</select>
										<a class="button" href="#">Apply to selected</a>
									</div>
									
									<div class="pagination">
										<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
										<a href="#" class="number" title="1">1</a>
										<a href="#" class="number" title="2">2</a>
										<a href="#" class="number current" title="3">3</a>
										<a href="#" class="number" title="4">4</a>
										<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
									</div> <!-- End .pagination -->
									<div class="clear"></div>
								</td>
							</tr>
						</tfoot>
					
						<tbody>
							<?php

							foreach($dataN as $v){
								?>
									<tr>
										
										<td><?php echo $v->MaPhieuNhap ?></td>
										<td><?php echo $v->MaSP ?></a></td>
										<td><?php echo $v->MaNV ?></a></td>
										<td><?php echo $v->SoLuong ?></a></td>
										<td><?php echo $v->DonGia ?></a></td>
										<td><?php echo $v->NgayNhap ?></a></td>
										<td><?php echo $v->TongGia ?></a></td>
										<td>
											<!-- Icons -->
											<a href="./editPN.php?maphieunhap=<?php echo $v->MaPhieuNhap?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
											<a href="./deletePN.php?maphieunhap=<?php echo $v->MaPhieuNhap ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										</td>
									</tr>
								<?php
							}
							?>

							
							
						</tbody>
						
					</table>
					
				</div> <!-- End #tab1 -->
				
				<!-- End #tab2 -->        
				
			</div> <!-- End .content-box-content -->
			
		</div>
<?php
}
else{
?>




		<div class="content-box">
			
			<div class="content-box-header">
				
				<h3>Phiếu xuất</h3>
				
				<ul class="content-box-tabs">
					<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
					<li><a href="#tab2">Forms</a></li>
				</ul>
				
				<div class="clear"></div>
				
			</div> <!-- End .content-box-header -->
			
			<div class="content-box-content">
				
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					
					<table>
						
						<thead>
							<tr>
							   
							   <th>Mã phiếu Xuất</th>
							   <th>Mã sản phẩm </th>
							   <th>Mã nhân viên</th>
							   <th>Số lượng</th>
							   <th>Đơn giá</th>
							   <th>Ngày nhập </th>
							   <th>Tổng giá</th>
							</tr>
							
						</thead>
					 
						<tfoot>
							<tr>
								<td colspan="6">
									<div class="bulk-actions align-left">
										<select name="dropdown">
											<option value="option1">Choose an action...</option>
											<option value="option2">Edit</option>
											<option value="option3">Delete</option>
										</select>
										<a class="button" href="#">Apply to selected</a>
									</div>
									
									<div class="pagination">
										<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
										<a href="#" class="number" title="1">1</a>
										<a href="#" class="number" title="2">2</a>
										<a href="#" class="number current" title="3">3</a>
										<a href="#" class="number" title="4">4</a>
										<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
									</div> <!-- End .pagination -->
									<div class="clear"></div>
								</td>
							</tr>
						</tfoot>
					
						<tbody>
							<?php

							foreach($dataX as $v){
								?>
									<tr>
										
										<td><?php echo $v->MaPhieuXuat ?></td>
										<td><?php echo $v->MaSP ?></a></td>
										<td><?php echo $v->MaNV ?></a></td>
										<td><?php echo $v->SoLuong ?></a></td>
										<td><?php echo $v->DonGia ?></a></td>
										<td><?php echo $v->NgayXuat ?></a></td>
										<td><?php echo $v->TongGia ?></a></td>
										<td>
											<!-- Icons -->
											<a href="./editPX.php?maphieuxuat=<?php echo $v->MaPhieuXuat?>"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
											<a href="./deletePX.php?maphieuxuat=<?php echo $v->MaPhieuXuat ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										</td>
									</tr>
								<?php
							}
							?>

							
							
						</tbody>
						
					</table>
					
				</div> <!-- End #tab1 -->
				
				<!-- End #tab2 -->        
				
			</div> <!-- End .content-box-content -->
			
		</div>
<?php
}
?>


