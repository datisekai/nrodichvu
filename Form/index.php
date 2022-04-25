
<?php
    include('../db/connect.php');
?>

<?php
    if(isset($_POST['register'])) {
			if ( !preg_match('/^[a-z\d]{5,20}$/i',$_POST['username']) ) {
				echo '<script>alert("Username từ 5-20 kí tự và không sử dụng kí tự đặc biệt!");</script>';
					} else {
							$username = $_POST['username'];
							$password =	md5($_POST['password']);
							$rppass = md5($_POST['repeatpwd']);
							if(!empty($username) && !empty($password) && !empty($rppass)) {
								if ($password == $rppass) {
				
									$sql_check = mysqli_query($con,"SELECT * FROM tbl_customer WHERE customer_user = '".$username."'");
									if(mysqli_num_rows($sql_check) > 0) {
										echo '<script>alert("Username của bạn đã được sử dụng, hãy đổi username khác và đăng kí lại nhé!");</script>';
									} else {
										$sql_insert = mysqli_query($con,"INSERT INTO tbl_customer(customer_user,customer_pass,customer_rppass,customer_level,customer_wallet) VALUES ('$username','$password','$rppass','1','200000')");
										echo '<script>alert("Đăng kí thành công, vui lòng đăng nhập. Bạn nhớ note kĩ user và password nhé!!!"); window.location ="login-form.php";</script>';
									}
								} else {
									echo '<script>alert("Password và Repeat Password không trùng khớp, bạn xem lại nhé");</script>';
								}	
							}
		
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>NRODICHVU</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
<!--===============================================================================================-->
</head>
<body>
	<style>
		.login-btn{
            background-color: red;
        }

        .login-btn:hover{
            cursor: pointer;
            background-color: green;
            opacity: 0.6;
        }
	</style>
	<div class="limiter">
		
		<div class="container-login100" style="background-image: url('https://wallpaperaccess.com/full/1132988.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<div class="limiter-home">
					<a href="../index.php">
						<img src="https://i.imgur.com/m9g0BHc.png" alt="" class="limiter-home-img">
					</a>
				</div>
				<form class="login100-form validate-form" method="POST" action="index.php">
					<span class="login100-form-title p-b-12">
						ĐĂNG KÝ 
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username không được để trống!!!">
						<span class="label-input100">Username (Username từ 5 - 20 kí tự)</span>
						<input class="input100" type="text" name="username" placeholder="Nhập username ">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password không được để trống!!!">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Nhập password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Nhập lại password không được để trống!!!">
						<span class="label-input100">Nhập lại Password</span>
						<input class="input100" type="password" name="repeatpwd" placeholder="Nhập lại mật khẩu">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="login-btn-login wrap-login100-form-btn">
							<input type="submit" value="ĐĂNG KÝ" class="login-btn login100-form-btn" name="register">
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							HOẶC
						</span>

						<a href="login-form.php" class="txt2">
							ĐĂNG NHẬP
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<?php
	
	include('../include/footer.php');
	
	?>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>