<?php
    session_start();
    include('./db/connect.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NẠP TIỀN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" type="text/css" href="./include/style.css">
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        .main{
            position: relative;
            min-height: 100vh;
            padding-bottom: 80px;
            background-color: #0B1727;
        }
        .note {
            font-size: 14px;
            font-family: sans-serif;
            line-height: 2.5rem;
            color: white;
        }
        


        .noidungck {

            padding: 16px;
            width: 100%;

        }

        .inputck {
            background-color: #F3F7F9;
            border: none;
            width: 50%;
            font-weight: 300;
            font-size: 20px;
            padding: 8px 16px;
            font-family: sans-serif;
            border-radius: 5px;
        }

        .btn-ck {
            padding: 8px 16px;
            font-size: 20px;
            font-family: sans-serif;
            border: none;
            background-color: #42B92B;
            color: white;
            border-radius: 5px;
        }

        .btn-ck:hover{
            cursor: pointer;
            opacity: 0.6    ;
        }

        .naptien{
            margin-left: 50px;
            margin-top: 30px;
        }
        .category{
            margin-top: 130px;
        }
        .vidientu,.chutk{
            display: flex;
            font-size: 20px;
            font-family: sans-serif;
            padding: 16px;
            white-space: nowrap;
        }

        h3{
            margin-left: 8px;
            color: red;
            font-weight: 500;
        }

        .chutk {
            display: flex;
        }

        .sotk{
            font-size: 20px;
            font-weight: 500;
            font-family: sans-serif;
            padding: 4px 16px 0 16px;
        }

        .inputsotk {
            
            border: none;
            width: 50%;
            font-weight: 300;
            font-size: 20px;
            padding: 4px 8px;
            font-family: sans-serif;
            border-radius: 5px;
        }

        .btnsotk {
            padding: 4px 8px;
            font-size: 20px;
            font-family: sans-serif;
            border: none;
            background-color: #42B92B;
            color: white;
            border-radius: 5px;
        }

        .btnsotk:hover {
            cursor: pointer;
            opacity: 0.6;
        }

        .infotk{
            background-color: #F3F7F9;
        }

        .noidungck h2 {
            padding: 0px 0px 8px 0px;
            font-family: sans-serif;
            color: white;
        }

        .history{
           
            margin-top: 16px;
            margin-left: 50px;
            padding: 16px 16px 32px 32px;
            background-color: #F3F7F9 ;
            white-space: nowrap;
           
        }

        th {
            padding: 12px 32px 12px 32px;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 500;
         
        }

        td {
            text-align: center;
            font-size: 14px;
            font-family: sans-serif;
        }
        .menu-not-pc{
            margin-top: 130px;
        }

        .menu-not-pc_list{
            
            display: flex;
            justify-content: space-between;
            list-style: none;
            white-space: nowrap;
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
            text-shadow: 1px 1px #f8fe06;}

            .naptien{
                margin-top: 100px;
            }
            @media (min-width: 740px) and (max-width: 1023px){
                .naptien{
                margin-top: 30px;
            }
            }
        @media (max-width: 740px) {
            .hide-mobile{
                display: none;
            }

            .inputsotk {
                
                border: none;
                width: 35%;
                font-weight: 300;
                font-size: 20px;
                padding: 4px 8px;
                font-family: sans-serif;
                border-radius: 5px;
            }
            .menu-not-pc-item-link {
    font-size: 1.4rem;
    text-decoration: none;
    color: white;
    padding: 10px 12px;
    display: block;
    position: relative;
    background-color: #FE9400;
    border-radius: 5px;
    font-family: monospace;
    text-align: center;
    text-shadow: 1px 1px #f8fe06;
}

.naptien {
    margin-left: 10px;
    margin-top: 30px;
}
.vidientu, .chutk {
    display: flex;
    font-size: 13px;
    font-family: sans-serif;
    padding: 16px;
    white-space: nowrap;
}
.sotk {
    font-size: 13px;
    font-weight: 500;
    font-family: sans-serif;
    padding: 4px 16px 0 16px;
}
        }
    </style>
    <div class="main">
        
        <?php 
            include('./include/header.php');
            include('./include/listgd.php');

            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                if($id == 1)
                {
                    include('./include/napmomo.php');
                }
                if($id == 2)
                {
                    include('./include/naptsr.php');
                }
                if($id == 3)
                {
                    include('./include/napazcard.php');
                }
                if($id == 4)
                {
                    include('./include/napatm.php');
                }
            }
            include('./include/footer_not_scroll.php');
        ?>
    </div>
</body>
</html>