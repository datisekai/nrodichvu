 
  <?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
      $sql_chitietacctt = mysqli_query($con,"SELECT * FROM tbl_chitietacctt WHERE chitietacctt_id='$id'");
    //   while ($row_chitietacctt = mysqli_fetch_array($sql_chitietacctt)) {
		$row_chitietacctt = mysqli_fetch_array($sql_chitietacctt)
		
		
   ?>
   <?php
	if(isset($_SESSION['login']))
    {
        $user = $_SESSION['login'];
        $sql_login = mysqli_query($con, "SELECT * FROM tbl_customer WHERE customer_user = '$user'");
        $row_login = mysqli_fetch_array($sql_login);
    }
   ?>
 		 	<div class="content_price">
       			<div class="content_price-id">
       				<span><i class="ti-save-alt"></i> MS: #<?php echo $row_chitietacctt['chitietacctt_id']; ?></span>
       			</div>

       			<div class="content_price-prices">
       				<i class="ti-wallet"></i>
       				<span><?php echo number_format($row_chitietacctt['chitietacctt_prices'], 0, ' ','.'); ?> VNĐ</span>
       			</div>

       			<button class="content_price-btn">MUA NGAY</button>
       		</div>

       		<div class="content_info">
       			<div class="content_info-hanhtinh">
       				<i class="ti-rocket"></i>
       				<span>Hành tinh: <?php echo $row_chitietacctt['chitietacctt_planet']; ?></span>
       			</div>

       			<div class="content_info-sever">
       				<i class="ti-shine"></i>
       				<span>Sever:<?php echo $row_chitietacctt['chitietacctt_sever']; ?> </span>
       			</div>

       			<div class="content_info-dangki">
       				<i class="ti-settings"></i>
       				<span>Đăng Kí: Ảo</span>
       			</div>
			</div>
			<?php
				$user_tt = $row_chitietacctt['chitietacctt_user'];
				$sql_show = mysqli_query($con,"SELECT * FROM tbl_uploads WHERE uploads_user_of_type = '$user_tt' AND uploads_type = 'TẦM TRUNG'");
				while ($row_show = mysqli_fetch_array($sql_show)) {
				
				?>
			<div class="content_img">
				<img src="./uploads/<?php echo $row_show['uploads_img']; ?>" alt="" class="content_img-list">
			</div>
			<?php
				}
			?>
			<?php
			if(isset($row_chitietacctt['chitietacctt_id'])) {

				if(isset($_POST['pay'])){
					if($row_login['customer_wallet'] >= $row_chitietacctt['chitietacctt_prices']) {
						$row_login['customer_wallet'] = $row_login['customer_wallet'] - $row_chitietacctt['chitietacctt_prices'];
						$walletNew = $row_login['customer_wallet'];
						$usersession = $_SESSION['login'];
						$deleteID = $row_chitietacctt['chitietacctt_id'];
						$usertt = $row_chitietacctt['chitietacctt_user'];
						$passtt = $row_chitietacctt['chitietacctt_pass'];
						$img_tt = "./uploads/" . $row_chitietacctt['chitietacctt_img'];
						$sql_update = mysqli_query($con,"UPDATE tbl_customer SET customer_wallet = '$walletNew' WHERE customer_user = '$usersession'");
						echo '<script>alert("Mua thành công, bạn vào lịch sử giao dịch để xem thông tin nhé!") ; window.location ="lsgd.php?id=1";</script>';
						$sql_lsgd = mysqli_query($con,"INSERT INTO tbl_lsgd(lsgd_userkh, lsgd_type, lsgd_tk, lsgd_mk) VALUE ('$usersession', 'TẦM TRUNG', '$usertt', '$passtt')");
						// $sql_delete  = mysqli_query($con,"DELETE FROM tbl_chitietacctt WHERE chitietacctt_id = '$deleteID'");
						// unlink($img_tt);
						// $user_tt = $row_chitietacctt['chitietacctt_user'];
						// $sql_show = mysqli_query($con,"SELECT * FROM tbl_uploads WHERE uploads_user_of_type = '$user_tt' AND uploads_type = 'TẦM TRUNG'");
						// while ($row_show = mysqli_fetch_array($sql_show)) {
						// 	$img_des = "./uploads/" . $row_show['uploads_img'];
						// 	$sql_delete_show  = mysqli_query($con,"DELETE FROM tbl_uploads WHERE uploads_user_of_type = '$user_tt' AND uploads_type ='TẦM TRUNG'");
						// 	unlink($img_des);
						// }
					}
					else {
						echo '<script>alert("Số dư của bạn không đủ để thực hiện giao dịch, vui lòng nạp thêm và thử lại nhé!"); window.location ="naptien.php?id=1";</script>';
					}
				}
			} else {
				echo '<script>alert("Acc đã bán!!"); window.location ="index.php";</script>';
			}

			?>

	  <?php
         if(isset($_SESSION['login'])) {
      ?>
			<div class="modal__pay">
				<div class="modal__pay-overlay"></div>
				<div class="modal__pay-content">
					<div class="modal-confirm">
						<h3 class="modal-confirm-heading">Bạn muốn mua tài khoản này?</h3>
						<i class="btn-close ti-close"></i>
					</div>

					<div class="modal-instruct">HƯỚNG DẪN NẠP TIỀN <a href="#" class="modal-instruct-link">TẠI ĐÂY</a><span><img src="https://i.imgur.com/X9NCMbX.gif" alt="new"></span></div>
				<form action="" method="post">

					<div class="modal-info">
						<h4 class="modal-info-heading">Thông tin tài khoản #<?php echo $row_chitietacctt['chitietacctt_id']; ?></h4>
						<ul class="modal-info-list">
						
							<li class="modal-info-item modal-info-item-separate">Hành tinh :<?php echo $row_chitietacctt['chitietacctt_planet']; ?></li>
							<li class="modal-info-item modal-info-item-separate">Sever :<?php echo $row_chitietacctt['chitietacctt_sever']; ?></li>
							<li class="modal-info-item modal-info-item-separate">Giá : <?php echo number_format($row_chitietacctt['chitietacctt_prices'], 0, ' ',','); ?>VNĐ</li>
							<li class="my-wallet modal-info-item">Số dư của bạn : $<?php echo number_format($row_login['customer_wallet']); ?> <span><img src="https://i.imgur.com/OPrMTdO.gif" alt=""></span></li>
						</ul>
					</div>
					
					<input type="submit" value="THANH TOÁN" class="pay-btn" name="pay">
				</form>
				</div>
			</div>
<script>
	
                var modalClose =  document.querySelector('.btn-close');
				var modalPay =   document.querySelector('.modal__pay');
				var modalPayoverlay =  document.querySelector('.modal__pay-overlay');
				var modalBuyNow =  document.querySelector('.content_price-btn');
				modalBuyNow.addEventListener('click', function(){
					modalPay.classList.add('btnbuynow-active');
				});

				modalClose.addEventListener('click', function(){
					modalPay.classList.remove('btnbuynow-active');
				});

				modalPayoverlay.addEventListener('click', function(){
					modalPay.classList.remove('btnbuynow-active');
				});

			

			
</script>
	<?php
		} else {
	?>

	<script>
		
		var modalClose =  document.querySelector('.btn-close');
				var modalPay =   document.querySelector('.modal__pay');
				var modalPayoverlay =  document.querySelector('.modal__pay-overlay');
				var modalBuyNow =  document.querySelector('.content_price-btn');
				modalBuyNow.addEventListener('click', function(){
					location.href = "./Form/login-form.php";
				});
	</script>
<?php
	  }
?>

<?php
	//   }
?>

