

<?php
    if(isset($_POST['pay'])){
        if($_SESSION['customer_wallet'] >= $row_chitietacctt['chitietacctt_prices']) {
            $_SESSION['customer_wallet'] = $_SESSION['customer_wallet'] - $row_chitietacctt['chitietacctt_prices'];
            $walletNew = $_SESSION['customer_wallet'];
            $sql_update = mysqli_query($con,"UPDATE tbl_customer SET customer_wallet = '.$walletNew.'");
            echo '<script>alert("Mua thành công, bạn vào lịch sử giao dịch để xem thông tin nhé!") ; window.location ="./lsgd.php";</script>';
            
        }
        else {
            echo '<script>alert("Số dư của bạn không đủ để thực hiện giao dịch, vui lòng nạp thêm và thử lại nhé!"); window.location ="./naptien.php";</script>';
        }
    }
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
                <li class="my-wallet modal-info-item">Số dư của bạn : $<?php echo number_format( $_SESSION['customer_wallet']); ?> <span><img src="https://i.imgur.com/OPrMTdO.gif" alt=""></span></li>
            </ul>
        </div>
        <span class="span-btn">Bạn có chắc chắn mua?</span>
        <input type="submit" value="THANH TOÁN" class="pay-btn" name="pay">
    </form>
    </div>
</div>

