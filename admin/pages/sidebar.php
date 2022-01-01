<div id="sidebar"><div id="sidebar-wrapper">
			
			<h1 id="sidebar-title"><a href="#">Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				 <h4> <a href="signout.php" title="Sign Out">Sign Out</a></h4>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				
				
				<li> 
					<a href="index.php" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Sản phẩm
					</a>
					<ul>
						<li><a  href="index.php">List sản phẩm</a></li>
						<li><a  href="insert.php">Thêm sản phẩm</a></li> <!-- Add class "current" to sub menu items also -->
						
					</ul>
				</li>
				
				<li>
					<a href="loaiSP.php" class="nav-top-item">
						Loại sản phẩm
					</a>
					<ul>
						<li><a href="loaiSP.php">List loại</a></li>
						<li><a href="insertLoai.php">Thêm loại</a></li>
					</ul>
				</li>
				
				<li>
					<a href="NhanVien.php" class="nav-top-item">
						Nhân viên  
					</a>
					<ul>
						<li><a href="NhanVien.php">List nhân viên</a></li>
						<li><a href="insertNV.php">Thêm nhân viên</a></li>
						
					</ul>
				</li>
				<li>
					<a href="KhachHang.php" class="nav-top-item">
						Khách hàng 
					</a>
					<ul>
						<li><a href="KhachHang.php">List khách hàng</a></li>
						
					</ul>
				</li>
				<li>
					<a href="#" class="nav-top-item">
						Phiếu nhập xuất  
					</a>
					<ul>
						<li><a href="PhieuNhap.php">List phiếu nhập</a></li>
						<li><a href="insertPN.php">Thêm phiếu nhập</a></li>
						<li><a href="PhieuXuat.php">List phiếu xuất</a></li>
						<li><a href="insertPX.php">Thêm phiếu xuất</a></li>
					</ul>
				</li>
				
				
				
				
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div>