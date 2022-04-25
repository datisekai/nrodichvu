<?php
    session_start();
    include('./db/connect.php');
?>

<?php 
    if(isset($_POST['submit'])) {
        $user = $_SESSION['login'];
       
        $pass_old  = md5($_POST['passold']);
        $pass_new = md5($_POST['passnew']);
      
        $rppass_new = md5($_POST['rppassnew']);
        if($pass_new == $rppass_new) {

            $sql_change = mysqli_query($con,"SELECT * FROM tbl_customer WHERE customer_user = '$user' AND customer_pass = '$pass_old'");
            $count = mysqli_num_rows($sql_change);
            if($count > 0)
            {
                $sql_update = mysqli_query($con, "UPDATE tbl_customer SET customer_pass = '$pass_new', customer_rppass ='$rppass_new' WHERE customer_user = '$user'");
                echo '<script>alert("Đổi mật khẩu thành công!")</script>';
            }
            else {
                echo '<script>alert("Sai mật khẩu cũ, vui lòng thử lại!")</script>';
            }
        }
        else {
            echo '<script>alert("Mật khẩu mới và nhập lại không chính xác, vui lòng thử lại!")</script>';
        }
    }
    if(isset($_SESSION['login']))
    {
        $user = $_SESSION['login'];
        $sql_login = mysqli_query($con, "SELECT * FROM tbl_customer WHERE customer_user = '$user'");
        $row_login = mysqli_fetch_array($sql_login);
    }
?>

<?php
    if(isset($_POST['cong'])){
        $userql = $_POST['user'];
        $moneyql = $_POST['sotiengd'];
        $sql_ql = mysqli_query($con, "SELECT * FROM tbl_customer WHERE customer_user ='$userql'");
        $row_ql = mysqli_fetch_array($sql_ql);
        $wallet_new = $moneyql + $row_ql['customer_wallet'];
        $count_ql = mysqli_num_rows($sql_ql);
        if($count_ql > 0){

            $sql_ql_congtien = mysqli_query($con, "UPDATE tbl_customer SET customer_wallet = '$wallet_new' WHERE customer_user ='$userql'");
            echo '<script>alert("Cộng tiền thành công!")</script>';
        }else {
            echo '<script>alert("Username không tồn tại!")</script>';
        }
    }
    else if(isset($_POST['tru'])){
        $userql = $_POST['user'];
        $moneyql = $_POST['sotiengd'];
        $sql_ql = mysqli_query($con, "SELECT * FROM tbl_customer WHERE customer_user ='$userql'");
        $row_ql = mysqli_fetch_array($sql_ql);
        $wallet_new = $row_ql['customer_wallet'] - $moneyql;
       
            $count_ql = mysqli_num_rows($sql_ql);
            if($count_ql>0)
            {
    
                $sql_ql_congtien = mysqli_query($con, "UPDATE tbl_customer SET customer_wallet = '$wallet_new' WHERE customer_user ='$userql'");
                echo '<script>alert("Trừ tiền thành công!")</script>';
            } else {
                echo '<script>alert("Username không tồn tại!")</script>';
            }
        
    }

    

?>



<?php
    if(isset($_GET['xoass']))
    {
        $id = $_GET['xoass'];
        $sql_delete  = mysqli_query($con,"DELETE FROM tbl_chitietaccss WHERE chitietaccss_id = '$id'");
        echo '<script>alert("Xóa thành công!"); window.location = "information.php?quanly=accss";</script>';
    }
?>



<?php
    if(isset($_GET['xoatt']))
    {
        $id = $_GET['xoatt'];
        $sql_delete  = mysqli_query($con,"DELETE FROM tbl_chitietacctt WHERE chitietacctt_id = '$id'");
        echo '<script>alert("Xóa thành công!"); window.location = "information.php?quanly=acctt";</script>';
    }
?>


<?php
    if(isset($_GET['xoavp']))
    {
        $id = $_GET['xoavp'];
        $sql_delete  = mysqli_query($con,"DELETE FROM tbl_chitietvp WHERE chitietvp_id = '$id'");
        echo '<script>alert("Xóa thành công!"); window.location = "information.php?quanly=vp";</script>';
    }
    
?>


<!-- Upload File Nick Sơ Sinh -->

<?php

if(isset($_POST["addss"])) {
    if(isset($_FILES['fileToUpload'])) {

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          $uploadOk = 1;
        } else {
          $uploadOk = 0;
        }
          $target_dir = "uploads/";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if (file_exists($target_file)) {
              $uploadOk = 0;
            }
            if ($_FILES["fileToUpload"]["size"] > 500000) {
              $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              $uploadOk = 0;
            }
            if ($uploadOk == 0) {
            } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "đã được upload thành công";
              } else {
                echo "Lỗi, Không thể upload ảnh!";
              }
            }
    }


      if(!empty($_POST['giass']) && !empty($_POST['svss']) && !empty($_POST['htss']) && !empty($_POST['tkss']) && !empty($_POST['mkss']))
      {

          $prices = $_POST['giass'];
          $sever =  $_POST['svss'];
          $planet = $_POST['htss'];
          $avatar = $_FILES["fileToUpload"]["name"];
          $user = $_POST['tkss'];
          $pass = $_POST['mkss'];
          $sql_insert = mysqli_query($con,"INSERT INTO tbl_chitietaccss(chitietaccss_prices,chitietaccss_sever,chitietaccss_planet,chitietaccss_img,chitietaccss_user,chitietaccss_pass) VALUES ('$prices','$sever','$planet','$avatar','$user','$pass')");

          if(isset($_FILES['fileToUploads'])){
            $files = $_FILES["fileToUploads"];
            $file_names = $files["name"];
            foreach($file_names as $key => $value){
                move_uploaded_file($files["tmp_name"][$key], "uploads/" . $value);
            }
           
                foreach($file_names as $key => $value) {

                    $sql_insert_img = mysqli_query($con,"INSERT INTO tbl_uploads(uploads_type, uploads_user_of_type,uploads_img) VALUE ('SƠ SINH','$user','$value')");
                }
        }

          echo '<script>alert("Thêm thành công!"); window.location = "information.php?quanly=accss";</script>';
      } else {
        echo '<script>alert("Thêm thất bại, không được để trống!!"); window.location = "information.php?quanly=accss";</script>';
    } 
}


?>
<!-- UPLOAD nick tầm trung -->
<?php

if(isset($_POST["addtt"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        echo "Lỗi, Ảnh đã tồn tại!";
        $uploadOk = 0;
      }
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Lỗi, Ảnh quá lớn!";
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Lỗi, Chỉ cho phép JPG, JPEG, PNG, GIF!";
        $uploadOk = 0;
      }
      if ($uploadOk == 0) {
        echo "Lỗi, Không thể upload ảnh!";
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "đã được upload thành công";
        } else {
          echo "Lỗi, Không thể upload ảnh!";
        }
      }
      if(!empty($_POST['giatt']) && !empty($_POST['svtt']) && !empty($_POST['httt']) && !empty($_POST['tktt']) && !empty($_POST['mktt']))
      {

      
        $prices = $_POST['giatt'];
        $sever =  $_POST['svtt'];
        $planet = $_POST['httt'];
        $avatar = $_FILES["fileToUpload"]["name"];
        $user = $_POST['tktt'];
        $pass = $_POST['mktt'];
        $sql_insert = mysqli_query($con,"INSERT INTO tbl_chitietacctt(chitietacctt_prices,chitietacctt_sever,chitietacctt_planet,chitietacctt_img,chitietacctt_user,chitietacctt_pass) VALUES ('$prices','$sever','$planet','$avatar','$user','$pass')");
        if(isset($_FILES['fileToUploads'])){
            $files = $_FILES["fileToUploads"];
            $file_names = $files["name"];
            foreach($file_names as $key => $value){
                move_uploaded_file($files["tmp_name"][$key], "uploads/" . $value);
            }
           
                foreach($file_names as $key => $value) {

                    $sql_insert_img = mysqli_query($con,"INSERT INTO tbl_uploads(uploads_type, uploads_user_of_type,uploads_img) VALUE ('TẦM TRUNG','$user','$value')");
                }
        }
        echo '<script>alert("Thêm thành công!"); window.location = "information.php?quanly=acctt";</script>';
      } else {
        echo '<script>alert("Thêm thất bại, không được để trống!!"); window.location = "information.php?quanly=acctt";</script>';
    } 
}
?>

<!-- Upload Vật Phẩm -->

<?php

if(isset($_POST["addvp"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        echo "Lỗi, Ảnh đã tồn tại!";
        $uploadOk = 0;
      }
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Lỗi, Ảnh quá lớn!";
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Lỗi, Chỉ cho phép JPG, JPEG, PNG, GIF!";
        $uploadOk = 0;
      }
      if ($uploadOk == 0) {
        echo "Lỗi, Không thể upload ảnh!";
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "đã được upload thành công";
        } else {
          echo "Lỗi, Không thể upload ảnh!";
        }
      }
      if(!empty($_POST['typevp']) && !empty($_POST['giavp']) && !empty($_POST['svvp']) && !empty($_POST['htvp']) && !empty($_POST['tkvp']) && !empty($_POST['mkvp']))
      {
            $type = $_POST['typevp'];
            $prices = $_POST['giavp'];
            $sever =  $_POST['svvp'];
            $planet = $_POST['htvp'];
            $avatar = $_FILES["fileToUpload"]["name"];
            $user = $_POST['tkvp'];
            $pass = $_POST['mkvp'];
            $sql_insert = mysqli_query($con,"INSERT INTO tbl_chitietvp(chitietvp_type,chitietvp_prices,chitietvp_sever,chitietvp_planet,chitietvp_img,chitietvp_user,chitietvp_pass) VALUES ('$type','$prices','$sever','$planet','$avatar','$user','$pass')");
            if(isset($_FILES['fileToUploads'])){
                $files = $_FILES["fileToUploads"];
                $file_names = $files["name"];
                foreach($file_names as $key => $value){
                    move_uploaded_file($files["tmp_name"][$key], "uploads/" . $value);
                }
               
                    foreach($file_names as $key => $value) {
    
                        $sql_insert_img = mysqli_query($con,"INSERT INTO tbl_uploads(uploads_type, uploads_user_of_type,uploads_img) VALUE ('VẬT PHẨM','$user','$value')");
                    }
            }
            echo '<script>alert("Thêm thành công!"); window.location = "information.php?quanly=vp";</script>';
      } else {
        echo '<script>alert("Thêm thất bại, không được để trống!!"); window.location = "information.php?quanly=vp";</script>';
    } 
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        if(isset($_GET['quanly'])) {
            $menu = $_GET['quanly'];
            if($menu == "accss") {
                echo "QLTK SƠ SINH";
            }
            if($menu == "acctt") {
                echo "QLTK TẦM TRUNG";
            }
            if($menu == "vp") {
                echo "QLTK VẬT PHẨM";
            }
            if($menu == "congtien") {
                echo "QLTK KHÁCH HÀNG";
            }
            if($menu == "doimatkhau") {
                echo "ĐỔI MẬT KHẨU";
            }
        }
        else {
            echo "THÔNG TIN TÀI KHOẢN";
        }
    
    
    ?>
    </title>
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
        table.accss {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%; 
            }
        .information{
            font-family: sans-serif;
            display: block;
            margin: 20px auto;
            background-color: #F3F7F9;
            padding: 32px 48px;
            border-radius: 10px;
            margin-top: 130px;
            padding-bottom: 80px;
            overflow-x: auto;
        

        }

        h1 {
            text-align: center;
            white-space: nowrap;
        }

        .list-info {
            margin-top: 30px;
        }   

        .list-info-item {
            font-size: 16px;
            font-family: sans-serif;
            padding: 8px 0px 8px 0px;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        span {
            font-weight: 600;
        }

        .title__change{
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 520;
            padding: 8px 0px 8px 0px;
        }

        .input-change{
            padding: 8px 16px;
            font-size: 14px;
            font-family: sans-serif;
        }

        .input-upload{
            padding: 8px 0px;
            font-size: 14px;
            font-family: sans-serif;
        }

        .user {
            margin-top: 20px;
        }

        .passold, .passnew, .rppassnew {
            margin-top: 8px;
        }

        .submit-change{
            margin-top: 16px;
            text-align: center;
        }

        .submit-change-congtien{
            margin-top: 16px;
        }

        .submit-change-btn:hover {
            cursor: pointer;
            opacity: 0.6;
        }

        .submit-change-btn {
            font-size: 16px;
            border: none;
            background-color: #42B92B;
            padding: 8px 16px;
            border-radius: 5px;
            color: white;
            font-family: sans-serif;
        }

     

        .submit-change-btn-tru:hover {
            cursor: pointer;
            opacity: 0.6;
        }

        .submit-change-btn-tru{
            font-size: 16px;
            border: none;
            background-color: #FE2700;
            padding: 8px 16px;
            border-radius: 5px;
            color: white;
            font-family: sans-serif;
        }

        th {
            padding: 16px;
            font-size: 16px;
            min-width: 80px;
        }

        td {
            text-align: center;
            font-family: sans-serif;
            font-size: 14px;
        }

        .limiter-home-img{
            width: 50%;
            height: 50%;
        }

        .category{
            margin-top: 130px;
        }

      
        .main{
            position: relative;
            min-height: 100vh;
            background-color: #0B1727;
        }
        @media (min-width: 740px) and (max-width: 1023px) {
            .form_ql{
                text-align: center;
            }
          
        }

        @media (max-width: 739px) {
            .form_ql{
                text-align: center;
            }
            .accss {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%; 
            }
            .information{
                font-family: sans-serif;
                display: block;
                margin: 20px auto;
                background-color: #F3F7F9;
                padding: 32px 48px;
                border-radius: 10px;
                margin-top: 130px;
                overflow-x: auto;
                margin-bottom: 100px;
            }
            th {
                min-width: 100px;
            }
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
            if(isset($_GET['quanly'])) {
                $quanly = $_GET['quanly'];
                if($quanly == "doimatkhau") {
                    include('./include/changepass.php');
                }
                elseif($quanly == "congtien") {
                    include('./include/congtien.php');
                }
                elseif($quanly == "accss") {
                    include('./include/xulyss.php');
                }
                elseif($quanly == "acctt") {
                    include('./include/xulytt.php');
                }
                elseif($quanly == "vp") {
                    include('./include/xulyvp.php');
                }
            }
            else {

                include('./include/info.php');
            }
        ?>
         <?php
            include('./include/footer_not_scroll.php');
        ?>
    </div>
</body>
</html>