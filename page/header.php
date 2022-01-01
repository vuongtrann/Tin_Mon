<?php
if (!isset($_SESSION)) session_start();

$sql = 'select * FROM loaisanpham ';
$objStatament = $objPDO->prepare($sql);
$objStatament->execute();
$dataLoai = $objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
            Trinx
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#">Danh mục sản phẩm</a>
                            <div class="dropdown-content">

                                <?php
                                $flag = 0;
                                foreach ($dataLoai as $l) {
                                ?>
                                    <a href="listloai.php?MaLoai=<?php echo $l->MaLoai ?>"><?php echo $l->TenLoai ?></a>
                                    
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>

            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <form class="input-group" action="search.php" method="get">
                        <input name="kw" type="text" class="form-control"  placeholder="Tìm kiếm.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                        <div class="input-group-text">
                            <input type="submit" class="fa fa-fw fa-search"></input>
                        </div>
                    </form>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                </a>
                <div class="custom_menu">
                    <ul>
                        <div class="login_menu">
                            <ul>
                                <?php
                                if (isset($_SESSION['user'])) {
                                ?>
                                    <a href="logout.php" text-decoration: none>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="padding_10">Đăng xuất</span>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa " aria-hidden="true"></i>
                                    <span class="padding_10">Xin chào : </span></span>
                                <?php


                                } else {
                                ?>
                                    <a href="login.php" text-decoration: none>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="padding_10">Đăng nhập</span>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="register.php" text-decoration: none>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="padding_10">Đăng Ký</span>
                                    </a>
                                <?php

                                }
                                ?>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $sql = 'select * from khachhang where MaKH =?';
                                    $a = [$_SESSION['user']];
                                    $tam = $objPDO->prepare($sql);
                                    $tam->execute($a);
                                    $data1 = $tam->fetch(PDO::FETCH_OBJ);
                                    echo $data1->TenKH;
                                }

                                ?>

                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>

<style>
    /* Style The Dropdown Button */
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>