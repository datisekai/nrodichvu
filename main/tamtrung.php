 <?php
    include_once('./db/connect.php');
 ?>
                                <?php
                                    if(isset($_GET['page'])) {
                                        $page = $_GET['page'];
                                    }
                                    else {
                                        $page = 1;
                                    }

                                    $from = ($page - 1)  * 6;
                                    $sql_chitietacctt = mysqli_query($con,"SELECT * FROM tbl_chitietacctt ORDER BY chitietacctt_id ASC LIMIT $from,6");
                                    while ($row_chitietacctt = mysqli_fetch_array($sql_chitietacctt)) {
                                ?>
                                    <div class="col l-4 m-6 c-12">
                                        <a class="home-product-item" href="acc.php?quanly=chitietactt&id=<?php echo $row_chitietacctt['chitietacctt_id'];  ?>">
                                            <div class="home-product-item__img">
                                                <img src="./uploads/<?php echo $row_chitietacctt['chitietacctt_img']; ?>" class="product_img">
                                            </div>
                                            <h4 class="home-product-item__name">
                                                <i class="ti-bookmark">
                                                    <span class="product-item__name"><?php  echo 'TẦM TRUNG'; ?></span></i>
                                                
                                            </h4>
                                            <div class="product-item-list">
                                                <div class="home-product-item__sever">
                                                    <i class="ti-unlock"></i>
                                                    <span class="product-sever">Sever:<?php echo $row_chitietacctt['chitietacctt_sever']; ?></span>
                                                </div>
                                                <div class="home-product-item__planet">
                                                    <i class="ti-desktop">
                                                        <span class="product-planet">Hành Tinh: <?php echo $row_chitietacctt['chitietacctt_planet']; ?></span>
                                                    </i>
                                                </div>
                                            </div>
                                
                                            <div class="home-product-item__price">
                                                <div class="product-item__price-prices">

                                                    <i class="ti-wallet">
                                                    <span class="product-price"><?php echo $row_chitietacctt['chitietacctt_prices']; ?> VND</span>    
                                                    </i>
                                                </div>
                                                <div class="product-item__price-chitiet">
                                                    <input type="button" value="CHI TIẾT" class="product-item__price-button">
                                                </div>
                                            </div>
    
                                            <div class="home-product-item__favourite">
                                                <i class="home-product-item__favourite-icon ti-flag">
                                                <span class="product-id">

                                                    #<?php echo $row_chitietacctt['chitietacctt_id']; ?></i>
                                                </span>    
                                            </div>                                         
                                        </a>                                
                                    </div>
                                        
                                <?php
                                    }
                                ?>