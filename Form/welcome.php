<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .table_data{
            width: 60%;
            margin: 20px auto;
        }

        .table_data-list{
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
    <center>
        WELLCOME TO DATISEKAI.COM
    </center>

     <table class="table_data">
        <tr>
            <td class="table_data-list">ID</td>
            <td class="table_data-list">USERNAME</td>
            <td class="table_data-list">PASSWORD</td>
            <td class="table_data-list">REPEATPWD</td>
        </tr>
        <tbody>
            <?php

        //ket noi
        $connect = new mysqli("localhost", "root", "", "php_basic");
            mysqli_set_charset($connect,"utf8");
            if($connect->connect_error){
                var_dump($connect->connect_error);
                die();
            } 
        //lay data
        $query = "SELECT * FROM ACCOUNT";
        $result = mysqli_query($connect, $query);
        $data = array();

        while($row = mysqli_fetch_array($result, 1)){
           $data [] = $row;
         }
        require_once("mysql_close.php");

        for($i=0;$i<count($data);$i++){
           echo ' <tr>
            <td class="table_data-list">'.$i.'</td>
            <td class="table_data-list">'.$data[$i]["USERNAME"].'</td>
            <td class="table_data-list">'.$data[$i]["PASSWORD"].'</td>
            <td class="table_data-list">'.$data[$i]["REPEATPWD"].'</td>
        </tr>';
        }
    ?>
        </tbody>
    </table>
</body>
</html>