 
                    <div class="col l-10 m-12 c-12">
                        <div class="home-product">
                            <div class="row">
                            
                               <div class="information">
                                <h1>THÔNG TIN TÀI KHOẢN</h1>
                                   <ul class="list-info">
                                       <li class="list-info-item">ID của bạn: <span>#<?php echo $_SESSION['customer_id']; ?></span></li>
                                       <li class="list-info-item">Tên tài khoản: <span><?php echo $_SESSION['login']; ?></span></li>
                                       <li class="list-info-item">Mật khẩu: <a href="information.php?quanly=doimatkhau">Đổi mật khẩu</a></li>
                                       <li class="list-info-item">Số dư: $<span><?php echo number_format($row_login['customer_wallet']); ?></span></li>
                                       <li class="list-info-item">Level: <span><?php echo $_SESSION['customer_level']; ?></span></li>
                                   </ul>
                               </div>
                                
                             
                        </div>
                    </div>

                    </div>
                </div>
            </div>
