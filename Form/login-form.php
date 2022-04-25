<?php
        session_start();
        include_once('../db/connect.php');
?>
<?php
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
		if ( !preg_match('/^[a-z\d]{5,20}$/i',$_POST['username']) ) {
			echo '<script>alert("Username từ 5-20 kí tự và không sử dụng kí tự đặc biệt!");</script>';
		} else {

			if ($username == '' || $password == '') {
				echo '<p class="check-admin_login">Username or Password incorrect</p>';
			}
			else {
				$sql_select_customer = mysqli_query($con,"SELECT * FROM tbl_customer WHERE customer_user = '$username' AND customer_pass = '$password' LIMIT 1");
				$count = mysqli_num_rows($sql_select_customer);
				$row_dangnhap = mysqli_fetch_array($sql_select_customer);
				if ($count >0 ) {
					$_SESSION['login'] = $row_dangnhap['customer_user'];
					$_SESSION['customer_id'] = $row_dangnhap['customer_id'];
					$_SESSION['customer_wallet'] = $row_dangnhap['customer_wallet'];
					$_SESSION['customer_level'] =  $row_dangnhap['customer_level'];
					header('Location: ../index.php');
				}
				else {
					echo '<script>alert("Username or Password không chính xác!!!")</script>';
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
<!--===============================================================================================-->
<link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<body>
	<style>
        .check-admin_login{
            text-align: center;
            background-color: green;
            color: white;
            font-size: 30px;
            font-family: sans-serif;
        }
        .login-btn{
            background-color: green
        }

        .login-btn:hover{
            cursor: pointer;
            background-color: red;
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
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title p-b-12">
						ĐĂNG NHẬP
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="login-btn-login wrap-login100-form-btn">
							<input type="submit" value="ĐĂNG NHẬP" class="login-btn login100-form-btn" name="login">
						</div>
					</div>
					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							HOẶC
						</span>

						<a href="index.php" class="txt2">
							ĐĂNG KÝ
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