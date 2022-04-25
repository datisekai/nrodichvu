<?php
	session_start();
	include_once('./db/connect.php');
?>

<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="./include/style.css">
	<!-- <link rel="stylesheet" href="./assets/js/modal-pay.js"> -->
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<style>
		

			.content{
				margin-top: 100px;
				background-color: #0B1727;
				color: white;
			}
			.content_img img{
					width: 80%;
				}
				.modal__pay-content{
				top: 20%;
				right: 30%;
				/* transform: translate(75%,10%); */
				position: fixed;
				width: 40%;
				padding-bottom: 20px;
				height: auto;
				text-align: center;
				background-color: white;
				z-index: 12;
				border-radius: 10px;
				
				}
		
		@media (min-width: 740px) and (max-width: 1023px) {

			.content_img img{
				width: 80%;
			}
			.modal__pay-content{
				top: 10%;
				right: 20%;
				/* transform: translate(75%,10%); */
				position: fixed;
				width: 60%;
				padding-bottom: 20px;
				text-align: center;
				background-color: white;
				z-index: 12;
				border-radius: 10px;
				height: auto;
				
				}
		}

		@media (max-width: 740px){
			.pay-btn{
				
				padding: 10px 20px;
				border:  none;
				font-size: 14px;
				margin-left: 16px;
				background-color: #42BB2E;
				}
			.content_img img{
				width: 100%;
			}
			.content_info {
			margin-top: 20px;
			display: flex;
			justify-content: space-around;
			border: 1px solid #FE9400;
			height: 150px;
			align-items: center;
			flex-direction: column;
			}
			.content_price {
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				border: 1px solid #FE9400;
				height: 150px;
				align-items: center;
			}
			.modal__pay-content{
				top: 20%;
				right: 10%;
				/* transform: translate(75%,10%); */
				position: fixed;
				width: 80%;
				padding-bottom: 20px;
				height: auto;
				text-align: center;
				background-color: white;
				z-index: 12;
				border-radius: 10px;
				
				}
				.modal-confirm-heading {
    font-size: 20px;
    font-family: sans-serif;
    font-weight: 700;
    line-height: 1.5;
}
		}
	</style>
	<div class="main">
	<?php	
       include('./include/header.php');
	  
	   
    ?>

       <div class="content">

       		<?php
				if(isset($_GET['quanly']) && isset($_GET['id'])) {
					$tam = $_GET['quanly'];
					$tam2 = $_GET['id'];
				}
				else {
					$tam = '';
					$tam2 = '';
				}
				if($tam == 'chitietactt' && $tam2 = '1') {
					
					include('./infor/chitietacctt.php');
					
				} 

                if($tam == 'chitietacss' && $tam2 = '2') {
					include('./infor/chitietaccss.php');
				} 

                if($tam == 'chitietvp' && $tam2 = '3') {
					include('./infor/chitietvp.php');
				} 
			
			?>

       </div> 
	   <?php
            include('./include/footer.php');
        ?>
	</div>
</body>
</html>	

