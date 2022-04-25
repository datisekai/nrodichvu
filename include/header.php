
<?php
    if(isset($_GET['login'])) {
        $dangxuat = $_GET['login'];
    }
    else {
        $dangxuat = '';
    }

    if ($dangxuat == 'dangxuat') {
        session_destroy();
        header("Location: index.php");
    }
?>    

<?php
    if(isset($_SESSION['login']))
    {
        $user = $_SESSION['login'];
        $sql_login = mysqli_query($con, "SELECT * FROM tbl_customer WHERE customer_user = '$user'");
        $row_login = mysqli_fetch_array($sql_login);
    }
?>

    <!-- MENU -->


    <!-- END MENU -->
<style>
    /* PC */
@media (min-width: 1024px) {

    .header {
    height: 100px;
    background-color: #0B1727;
    display: flex;
    align-items: center;
    position: fixed;
    width: 100%;
    box-shadow: 0 2px 4px rgb(0 0 0 / 20%);
    border-bottom: 1px solid #027ACF;
    top: 0;
    z-index: 10;
}
    .hide-pc {
        display: none;
    }

    .header_navbar-btn,
    .header__form_btn{
        display: none;
    }

    .nav__menu{
        display: none;
    }

    .nav__form{
        display: none;
    }
    .slides {
        margin-top: 100px;
        height: 300px;
    }

    .container-home {
        margin-top: 0;
    }

    .container-home h1{
        margin: 0;
        
    }
}

/* Tablet */

@media (min-width: 740px) and (max-width: 1023px) {
    .hide-tablet{
        display: none;
    }

    .header {
    height: 100px;
    background-color: #0B1727;
    display: flex;
    align-items: center;
    position: fixed;
    width: 100%;
    box-shadow: 0 2px 4px rgb(0 0 0 / 20%);
    border-bottom: 1px solid #027ACF;
    top: 0;
    z-index: 10;
}
    .header__navbar{
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;   
    }


    .header__navbar-logo{
        flex: 3;
    }

    
    .header__logo{
        width: 200px; 
        margin: 0;
        margin-right: 20px;
    }


    .header__form_btn{
        flex: 1;
    }

    .menu-btn{
        font-size: 28px;
        padding: 2px;
      
        color: #42B92B;
        border-radius: 5px;
    }
    .header_navbar-btn{
        flex: 1;
    }

    .header_navbar-btn:hover{
        cursor: pointer;
        opacity: 0.6;
    }

    .form-btn{
        padding: 8px 16px;
        font-size: 14px;
        border-radius: 5px;
        background-color: transparent;
        border: 2px solid #42B92B;
        font-family: sans-serif;
        color: #42B92B;
        text-decoration: none;
        text-overflow: ellipsis;
    }

    .nav__overlay,
    .form__overlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0,0,0,0.3);
        z-index: 11;
       display: block;
    }

    .nav__menu{
        position: relative;
        display: none;
    }

    .nav__menu-form{
        position: fixed;
        width: 30%;
        height: 100%;
        background-color: #0B1727;
        z-index: 12;
        top: 0;
    }

    .nav__menu-form-list{
        margin-top: 80px;
    }

    .nav__menu-form-list-item{
        padding: 12px 16px;
        font-size: 18px;
        font-family: sans-serif;
        list-style: none;
    }

    .nav__menu-form-list-item-separate{
        content: "";
        border-bottom: 1px solid #ccc;
        width: 100%;
    }

    .nav__menu-form-list-item-a{
        text-decoration: none;
        color: #FE9400;
        font-weight: 600;
    }

    .active5 {
        display: block;
    }

    .nav__form{
        position: relative;
        display: none;
     
    }

    .active1 {
        display: block;
    }

    .form-btn:hover{
        cursor: pointer;
        opacity: 0.6;
    }
}

/* Mobile */

@media (max-width: 740px) {
    .hide-mobile {
        display: none;
    }

    .header {
    height: 100px;
    background-color: #0B1727;
    display: flex;
    align-items: center;
    position: fixed;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0,0,0,0,3);
    z-index: 10;
    border-bottom: 1px solid #027ACF;
}

  
    .header__navbar{
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center; 
        height: 100%;  
    }


    .header__navbar-logo{
        flex: 3;
        margin-right: 6px;
    }

    
    .header__logo{
        width: 180px; 
        margin: 0;
       
    }


    .header__form_btn{
        flex: 1;
    }

    .menu-btn{
        font-size: 24px;
        padding: 2px;
        /* border: 2px solid #42B92B; */
        color: #42B92B;
        border-radius: 5px;
    }
    .header_navbar-btn{
        flex: 1;
        margin: 0;
        padding: 0;
        
    }

    .header_navbar-btn:hover{
        cursor: pointer;
        opacity: 0.6;
    }

    .form-btn{
        overflow: hidden;
        white-space: nowrap;
        padding: 4px 4px;
        font-size: 12px;
        border-radius: 5px;
        background-color: transparent;
        border: 2px solid #42B92B;
        font-family: sans-serif;
        color: #42B92B;
        text-decoration: none;
        text-overflow: ellipsis;
    }

    .nav__overlay,
    .form__overlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0,0,0,0.3);
        z-index: 11;
       display: block;
    }

    .nav__menu{
        position: relative;
        display: none;
    }

    .nav__menu-form{
        position: fixed;
        width: 60%;
        height: 100%;
        background-color: #0B1727;
        z-index: 12;
        box-shadow: 0 5px 0px 0px rgba(0,0,0,0,3);
        top: 0;
    }

    .nav__menu-form-list{
        margin-top: 100px;
    }

    .nav__menu-form-list-item{
        padding: 12px 16px;
        font-size: 18px;
        font-family: sans-serif;
        list-style: none;
        overflow: hidden;
        outline: none;
        white-space: nowrap;
        text-overflow: ellipsis;

    }

    .nav__menu-form-list-item-separate{
        content: "";
        border-bottom: 1px solid #ccc;
        width: 100%;
    }

    .nav__menu-form-list-item-a{
        text-decoration: none;
        color: #FE9400;
        font-weight: 600;
    }

    .active5 {
        display: block;
    }

    .nav__form{
        position: relative;
        display: none;
     
    }

    .active1 {
        display: block;
    }

    .form-btn:hover{
        cursor: pointer;
        opacity: 0.6;
    }

    .slides {
        margin-top: 100px;
        height: 200px;
    }
    }

</style>
    <div class="nav__menu">
        <div class="nav__overlay"></div>
        <div class="nav__menu-form">
            <ul class="nav__menu-form-list">
                <li class="nav__menu-form-list-item-separate"></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate "><a href="index.php" class="nav__menu-form-list-item-a">> TRANG CHỦ</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="<?php
                            if(isset($_SESSION['login']))
                            echo "naptien.php?id=1";
                            else {
                                echo "./Form/login-form.php";
                            }
                            ?>" class="nav__menu-form-list-item-a">> NẠP TIỀN</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="<?php
                            if(isset($_SESSION['login']))
                            echo "lsgd.php?id=1";
                            else {
                                echo "./Form/login-form.php";
                            }
                            ?>" class="nav__menu-form-list-item-a">> LỊCH SỬ</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="<?php
                            if(isset($_SESSION['login']))
                            echo "modfree.php";
                            else {
                                echo "./Form/login-form.php";
                            }
                            ?>" class="nav__menu-form-list-item-a">> MOD FREE</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="https://www.facebook.com/datisekai/" target="_blank" class="nav__menu-form-list-item-a">> LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>

    <div class="nav__form">
        <div class="form__overlay"></div>
        <div class="nav__menu-form">
            <ul class="nav__menu-form-list">
            <?php
            if (isset($_SESSION['login'])) {
            ?>
                <li class="nav__menu-form-list-item-separate"></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate "><a href="#" class="nav__menu-form-list-item-a">> SỐ DƯ: $<?php echo number_format($row_login['customer_wallet']); ?></a></li>
                <?php
                if($row_login['customer_level'] == 1) {
                ?>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php" class="nav__menu-form-list-item-a">> THÔNG TIN</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php?quanly=accss" class="nav__menu-form-list-item-a">> QLTK SS</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php?quanly=acctt" class="nav__menu-form-list-item-a">> QLTK TT</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php?quanly=vp" class="nav__menu-form-list-item-a">> QLTK VP</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php?quanly=congtien" class="nav__menu-form-list-item-a">> CỘNG TIỀN</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php?quanly=doimatkhau" class="nav__menu-form-list-item-a">> ĐỔI MẬT KHẨU</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="?login=dangxuat" class="nav__menu-form-list-item-a">> ĐĂNG XUẤT</a></li>
                <?php
                } else {
                ?>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php" class="nav__menu-form-list-item-a">> THÔNG TIN</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="information.php?quanly=doimatkhau" class="nav__menu-form-list-item-a">> ĐỔI MẬT KHẨU</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="?login=dangxuat" class="nav__menu-form-list-item-a">> ĐĂNG XUẤT</a></li>

                <?php
                }
                ?>
            <?php } else { ?>
                <li class="nav__menu-form-list-item-separate"></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate "><a href="./Form/login-form.php" class="nav__menu-form-list-item-a">> ĐĂNG NHẬP</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="./Form/index.php" class="nav__menu-form-list-item-a">> ĐĂNG KÝ</a></li>
                <li class="nav__menu-form-list-item nav__menu-form-list-item-separate"><a href="https://www.facebook.com/datisekai" target="_blank" class="nav__menu-form-list-item-a">> LIÊN HỆ</a></li>

                
            <?php
            }
            ?>
            </ul>
        </div>
    </div>
    <header class="header">
                    <div class="grid wide">
                <nav class="header__navbar">
                    <ul class="header_navbar-btn">
                        <i class="menu-btn ti-menu"></i>
                    </ul>
                    <ul class="header__navbar-logo">
                        <img src="https://i.imgur.com/m9g0BHc.png" class="header__logo">
                    </ul>
                    <ul class="header__form_btn">
                        <?php
                        if(isset($_SESSION['login'])) {
                        ?>         
                        <button class="form-btn"><i class="ti-user"></i> <?php echo $_SESSION['login']; ?></a>
                        <?php } else { ?>
                      <button class="form-btn"><i class="ti-user"></i>Tài khoản</button>
                        <?php
                    
                         }
                    ?>
                    </ul>
                    <ul class="header__navbar-help hide-tablet hide-mobile">
                         <li class="header__navbar-item">
                            <a href="index.php" class="header__navbar-item-link">
                                TRANG CHỦ
                            </a>
                        </li>

                        <li class="header__navbar-item">
                            <a href="<?php
                            if(isset($_SESSION['login']))
                            echo "naptien.php?id=1";
                            else {
                                echo "./Form/login-form.php";
                            }
                            ?>" class="header__navbar-item-link">
                                NẠP TIỀN
                            </a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="<?php
                            if(isset($_SESSION['login']))
                            echo "lsgd.php?id=1";
                            else {
                                echo "./Form/login-form.php";
                            }
                            ?>" class="header__navbar-item-link">
                              LỊCH SỬ
                            </a>
                        </li>

                        <li class="header__navbar-item" >
                            <a href="<?php
                            if(isset($_SESSION['login']))
                            echo "modfree.php";
                            else {
                                echo "./Form/login-form.php";
                            }
                            ?>" class="header__navbar-item-link">
                              MOD FREE
                            </a>
                        </li>

                        <li class="header__navbar-item">
                            <a href="https://www.facebook.com/datisekai/" class="header__navbar-item-link">
                               
                               LIÊN HỆ
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-form hide-tablet hide-mobile" >
                        <!-- No User -->
                        <?php
                             if(isset($_SESSION['login'])) {
                        ?>
                        
                        <li class="header-has-login header__navbar-item-log header__navbar-item-link--up">
                            <a href="information.php" class="header__navbar-item-link-log header__navbar-item-link--strong">
                             <i class="log-heading-icon ti-user"> </i>
                                <span  class="log-heading"><?php echo  $_SESSION['login']; ?> - $<?php echo number_format($row_login['customer_wallet']); ?></span>
                            </a>
                            </li>
                        <li class="header-has-register header__navbar-item-log header__navbar-item-link--up">
                            <a href="?login=dangxuat" class="header__navbar-item-link-log header__navbar-item-link--strong">
                                 <i class="log-heading-icon ti-power-off"> </i>
                                <span class="log-heading">ĐĂNG XUẤT</span>
                            </a>
                        </li>
                        
                    <?php
                            } else {

                            
                    ?>
                        
                        <li class="header-login header__navbar-item-log header__navbar-item-link--up">
                            <a href="./Form/login-form.php" class="header__navbar-item-link-log header__navbar-item-link--strong">
                             <i class="log-heading-icon ti-direction"> </i>
                                <span  class="log-heading">ĐĂNG NHẬP</span>
                            </a>
                        </li>
                        <li class="header-register header__navbar-item-log header__navbar-item-link--up">
                            <a href="./Form/index.php" class="header__navbar-item-link-log header__navbar-item-link--strong">
                                 <i class="log-heading-icon ti-key"> </i>
                                <span class="log-heading">ĐĂNG KÝ</span>
                            </a>
                        </li>
                    <?php
                            }
                    ?>
                    </ul>
                </nav>
            </div>
        </header>

     <script>
         var header_navbar_btn = document.querySelector('.header_navbar-btn');
         var nav__menu = document.querySelector('.nav__menu');
         var nav__overlay = document.querySelector('.nav__overlay');
         var nav__form = document.querySelector('.nav__form');
         var btn__form = document.querySelector('.form-btn');
         var form__overlay = document.querySelector('.form__overlay');

         header_navbar_btn.addEventListener('click', function(){
            nav__menu.classList.add('active5');
         });

         nav__overlay.addEventListener('click', function(){
            nav__menu.classList.remove('active5');
         });

         btn__form.addEventListener('click', function(){
            nav__form.classList.add('active1');
         });

         form__overlay.addEventListener('click', function(){
            nav__form.classList.remove('active1');
         });

        
     </script>