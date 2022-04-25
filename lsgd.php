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
    <title>LỊCH SỬ</title>
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
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
           
            }

        h1 {
            font-family: sans-serif;
            text-align: center;
            color: white;
        }


        th {
            padding: 12px 32px 12px 32px;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 600;
            min-width: 200px;
        }

        td {
            text-align: center;
            font-size: 14px;
            font-family: sans-serif;
        }

        .tk__done-table{
            background-color: #F3F7F9 ;
            padding: 16px 16px 32px 16px;
        }

        .category{
            margin-top: 130px;
        }

        .tk__done{
            margin-top: 130px;
      
            overflow-x: auto;
        }

        .menu-not-pc{
            margin-top: 130px;
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
        @media (min-width: 740px) and (max-width: 1023px){
            .tk__done{
            margin-top: 0;
          
            overflow-x: auto;
        }
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
        .tk__done{
            margin-top: 0;
          
            overflow-x: auto;
        }
        .menu-not-pc{
            margin-top: 120px;
            margin-bottom: 12px;
    
        }
        .container{
            margin-top: 100px;
        }
        .hide-mobile{
            display: none;
        }
        }
        .main{
            position: relative;
            min-height: 100vh;
            background-color: #0B1727;
        }
        .note-mobile{
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 600;
    padding: 8px 4px;
}
    </style>
    <div class="main">
    <?php 
            include('./include/header.php');
            include('./include/historygd.php');
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                if($id == 1)
                {
                   include('./include/lstamtrung.php');
                }
                if($id == 2)
                {
                    include('./include/lsss.php');
                }
                if($id == 3)
                {
                    include('./include/lsvp.php');
                }
                
            }
        ?>
        <?php
            include('./include/footer_not_scroll.php');
        ?>
    </div>
</body>
</html>