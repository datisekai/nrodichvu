<?php
	function register() {
		if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repeatpwd = md5($_POST['repeatpwd']);
		
		//MYSQL 


			$connect = new mysqli("localhost", "root", "", "php_basic");
            mysqli_set_charset($connect,"utf8");
            if($connect->connect_error){
                var_dump($connect->connect_error);
                die();
            } 

		$query = "INSERT INTO tbl_customer(customer_user, customer_pass, customer_rppass) VALUES('$username','$password','$repeatpwd')";
		mysqli_query($connect, $query); 

		require_once('mysql_close.php');

		header("Location: login-form.php");
		}
	}
?>