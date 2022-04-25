<?php
    session_start();
    include('./db/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRODICHVU.COM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <!-- <link rel="stylesheet" href="./include/css/style.css"> -->
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        @media (min-width: 740px) and (max-width: 1023px){
            .container{
            margin-top: 80px;
        }
        }
        .menu-not-pc{
            margin-top: 50px;
            margin-bottom: 12px;
    
        }

        .menu-not-pc_list{
            
            display: flex;
            justify-content: space-between;
            list-style: none;
        }

        .menu-not-pc-item-link{
            font-size: 1.8rem;
            text-decoration: none;
            color: white;
            padding: 14px 40px;
            display: block;
            position: relative;
            background-color: #FE9400;
            border-radius: 5px;
            font-family: monospace;
            text-align: center;
        text-shadow: 1px 1px #f8fe06;
        
        }
        @media (max-width: 739px) {
            .menu-not-pc-item-link{
            font-size: 1.8rem;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-decoration: none;
            color: white;
            padding: 14px 14px;
            display: block;
            position: relative;
            background-color: #FE9400;
            border-radius: 5px;
            font-family: monospace;
            text-align: center;
        text-shadow: 1px 1px #f8fe06;
                
        }
        .menu-not-pc{
            margin-top: 0;
            margin-bottom: 12px;
    
        }
        .container{
            margin-top: 100px;
        }
        }
    </style>
    <div class="main">
        <?php
            include('./include/header.php');
        ?>

        <div class="container">
            <div class="grid wide">

                <div class="row">
                    
                    <div class="col l-2 m-0 c-0">
                            
                            <nav class="category">
                                <h3 class="category__heading">
                                    <i class="category__heading-icon ti-menu-alt"></i>
                                    Danh Mục
                                </h3>
                                <ul class="category-list">
                                
                                    <li class="category-item">
                                        <a href="category.php?quanly=danhmucsanpham&id=1&page=1" class="category-item__link" value="">TẦM TRUNG</a>
                                    </li>

                                    <li class="category-item">
                                        <a href="category.php?quanly=danhmucsanpham&id=2&page=1" class="category-item__link" value="">SƠ SINH</a>
                                    </li>

                                    <li class="category-item">
                                        <a href="category.php?quanly=danhmucsanpham&id=3&page=1" class="category-item__link" value="">SHOP ĐỒ</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    
                    <div class="col l-10 m-12 c-12">
                        <div class="home-product">
                            <div class="menu-not-pc hide-pc">
                                <ul class="menu-not-pc_list">
                                    <li class="menu-not-pc-item"><a href="category.php?quanly=danhmucsanpham&id=1&page=1" class="menu-not-pc-item-link">TẦM TRUNG</a></li>
                                    <li class="menu-not-pc-item"><a href="category.php?quanly=danhmucsanpham&id=2&page=1" class="menu-not-pc-item-link">SƠ SINH</a></li>
                                    <li class="menu-not-pc-item"><a href="category.php?quanly=danhmucsanpham&id=3&page=1" class="menu-not-pc-item-link">VẬT PHẨM</a></li>                              
                                </ul>
                            </div>
                            <div class="row">
                                    <?php
                                        if(isset($_GET['quanly']) && isset($_GET['id'])) {
                                            $tam = $_GET['quanly'];
                                            $id = $_GET['id'];
                                
                                        }
                                        else {
                                            $tam = '';
                                            $id = '';
                                        }
                                        if($tam == 'danhmucsanpham' && $id=='1') {
                                            include('./main/tamtrung.php');
                                            // include('./include/pagination.php');
                                        }
                                        elseif($tam == 'danhmucsanpham' && $id=='2') {
                                            include('./main/sosinh.php');
                                        }
                                        elseif($tam == 'danhmucsanpham' && $id=='3') {
                                            include('./main/shopdo.php');
                                        }



                                    ?>
                        </div>
                            <?php
                                include('./include/pagination.php');
                            ?>

                    </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
            include('./include/footer.php');
        ?>
        
    </div>
    
</body>
</html>