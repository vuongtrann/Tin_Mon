<?php
include './dbconect/pdo.php';
$sql = "select * from khachhang ";
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$data1 = $objStatement->fetch(PDO::FETCH_OBJ);
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
    <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5"><img src="assets/image/S2.jpg" width="590px" height="400px"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Đăng ký tài khoản !</h1>
                    </div>
                    <form class="user" action="add_register.php" method="post">
                        <div class="form-group ">
                            <!-- <div class="col-sm-6 mb-3 mb-sm-0"> -->
                                <input name="TenKH" type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Họ tên">
                            <!-- </div> -->
                            <!-- <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name">
                            </div> -->
                        </div>
                        <div class="form-group">
                            <input name="MaKH" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Địa chỉ email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="MKhau" minlength="6" type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Mật khẩu">
                            </div>
                            <div class="col-sm-6">
                                <input name="MKhau" minlength="6" type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>
                        <input type="submit"  value="Đăng ký tài khoản">
                            
                        </input>
                        
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="#">Quên mật khẩu?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login.php">Đã có tài khoản ? Đăng nhập !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
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