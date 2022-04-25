<?php
	function login() {
		if (!empty($_POST)) {
			$username = $_POST["username"];
			$pass = $_POST["password"];
		
		//MYSQL
		
		$connect = new mysqli("localhost", "root", "", "php_basic");
	   mysqli_set_charset($connect,"utf8");
	   	if($connect->connect_error){
	   		var_dump($connect->connect_error);
	      	die();
		   } 
		$query = "SELECT * FROM ACCOUNT WHERE USERNAME='".$username."' AND PASSWORD='".$pass."'";
		$result = mysqli_query($connect, $query);
        $data = array();
        while($row = mysqli_fetch_array($result, 1)){
           $data [] = $row;
         }

		require_once("mysql_close.php");
		if($data != null && count($data)>0){
            	header("Location: welcome.php");
            }

		}
	}
?>