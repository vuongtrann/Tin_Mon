<section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sản phẩm</h1>
                </div>
            </div>
            <div class="row  ">
            
                
                    <?php
					$flag=0;
					foreach($data as $v)
					{
						if($flag==16)
						{
							break;
						}
						else{
					?>
                    
                    <div class="col-12 col-md-4 mb-4">
                
                        <div class="card h-100">
                        <a href="shop-single.php?MaSP=<?php echo $v->MaSP?>" class="card-img-top">
                            <img src="./admin/img/product/<?php echo $v->Hinh ?>"  alt="..." width="414px" height="250px">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right" ><?php echo $v->GiaBan ?>VNĐ</li>
                            </ul>
                            <a href="shop-single.php?MaSP=<?php echo $v->MaSP?>" class="h2 text-decoration-none text-dark" >
                            <h6 class="h2 text-decoration-none text-dark"><?php echo $v->TenSP?></h6>
                        </a>

                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                    </div>
                    <?php 
                    $flag ++;
                        }
                }
                
                ?>
              
        </div>
    </section>