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
    <title>MOD FREE</title>
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
    padding: 16px;
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

.tk__done{
    margin-top: 130px;
    
    overflow-x: auto;
}
.category{
    margin-top: 130px;
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
            include('./include/listinfo.php');
            include('./include/listmod.php');   
            include('./include/footer_not_scroll.php');
        ?>
    </div>
</body>
</html>