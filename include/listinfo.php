<div class="grid wide">
    <div class="row">
        <div class="col l-2 m-0 c-0">
                                <nav class="category">
                                    <h3 class="category__heading">
                                        <i class="category__heading-icon ti-menu-alt"></i>
                                        MENU
                                    </h3>
                                    <ul class="category-list">
        
                                       <?php
                                            if($_SESSION['customer_level'] == 0) {

                                       ?>
                                       <li class="category-item">
                                            <a href="information.php" class="category-item__link" value="">THÔNG TIN</a>
                                        </li>
                                        <li class="category-item">
                                            <a href="naptien.php" class="category-item__link" value="">NẠP TIỀN</a>
                                        </li>
                                        <li class="category-item">
                                            <a href="lsgd.php" class="category-item__link" value="">LỊCH SỬ</a>
                                        </li>
                                        <li class="category-item">
                                            <a href="modfree.php" class="category-item__link" value="">MOD FREE</a>
                                        </li>

                                        <li class="category-item">
                                            <a href="information.php?quanly=doimatkhau" class="category-item__link" value="">ĐỔI MK</a>
                                        </li>
                                        
                                        <li class="category-item">
                                            <a href="nhttps://www.facebook.com/datisekai/" class="category-item__link" value="">LIÊN HỆ</a>
                                        </li>

                                        <li class="category-item">
                                            <a href="index.php?login=dangxuat" class="category-item__link" value="">ĐĂNG XUẤT</a>
                                        </li>
                                    
                                        <?php } else if ($_SESSION['customer_level'] == 1)   { ?>

                                            <li class="category-item">
                                            <a href="information.php" class="category-item__link" value="">THÔNG TIN</a>
                                        </li>
                                            <li class="category-item">
                                            <a href="information.php?quanly=accss" class="category-item__link" value="">QLTK SS</a>
                                        </li>
                                        <li class="category-item">
                                            <a href="information.php?quanly=acctt" class="category-item__link" value="">QLTK TT</a>
                                        </li>
                                        <li class="category-item">
                                            <a href="information.php?quanly=vp" class="category-item__link" value="">QLTK VP</a>
                                        </li>

                                        <li class="category-item">
                                            <a href="information.php?quanly=congtien" class="category-item__link" value="">CỘNG TIỀN</a>
                                        </li>   

                                        <li class="category-item">
                                            <a href="information.php?quanly=doimatkhau" class="category-item__link" value="">ĐỔI MK</a>
                                        </li>

                     

                                        

                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>

