<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
$kw = isset($_GET['kw']) ? $_GET['kw'] : '';

$sql = "select * from sanpham where TenSP like '%$kw%' ";
// $a = ["%$kw%"];
$objStatament = $objPDO->prepare($sql);
$objStatament->execute();
$dataA = $objStatament->fetchALL(PDO::FETCH_OBJ);
if ($dataA == NULL) {
    echo '<script language="javascript">';
    echo 'alert("Không có sản phẩm phù hợp !")';
    echo '</script>';
    header("refresh:0.05;url=index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trinx Shop </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->

    <?php
    include "page/header.php"
    ?>
    <!-- Close Header -->

    <!-- Modal -->
    <?php include"searchmodal.php" ?>



    <!-- Start Banner Hero -->
    <?php include "page/banner.php" ?>
    <!-- End Banner Hero -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sản phẩm</h1>
                </div>
            </div>
            <div class="row  ">


                <?php

                foreach ($dataA as $v) {

                ?>

                    <div class="col-12 col-md-4 mb-4">

                        <div class="card h-100">
                            <a href="shop-single.php?MaSP=<?php echo $v->MaSP ?>" class="card-img-top">
                                <img src="./admin/img/product/<?php echo $v->Hinh ?>" alt="..." width="414px" height="250px">
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
                                    <li class="text-muted text-right"><?php echo $v->GiaBan ?>VNĐ</li>
                                </ul>
                                <a href="shop-single.php?MaSP=<?php echo $v->MaSP ?>" class="h2 text-decoration-none text-dark">
                                    <h6 class="h2 text-decoration-none text-dark"><?php echo $v->TenSP ?></h6>
                                </a>

                                <p class="text-muted">Reviews (24)</p>
                            </div>
                        </div>
                    </div>
                <?php


                }

                ?>

            </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <?php include "page/footer.php" ?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>