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
                                    $sql_chitietvp = mysqli_query($con,"SELECT * FROM tbl_chitietvp ORDER BY chitietvp_id ASC LIMIT $from,6");
                                    while ($row_chitietvp = mysqli_fetch_array($sql_chitietvp)) {
                                ?>
                                    <div class="col l-4 m-6 c-12">
                                        <a class="home-product-item" href="acc.php?quanly=chitietvp&id=<?php echo $row_chitietvp['chitietvp_id'];  ?>">
                                            <div class="home-product-item__img">
                                                <img src="./uploads/<?php echo $row_chitietvp['chitietvp_img']; ?>" class="product_img">
                                            </div>
                                            <h4 class="home-product-item__name">
                                                <i class="ti-bookmark">
                                                    <span class="product-item__name">VẬT PHẨM</span></i>
                                                
                                            </h4>
                                            <div class="product-item-list">
                                                <div class="home-product-item__sever">
                                                    <i class="ti-unlock"></i>
                                                    <span class="product-sever">Sever:<?php echo $row_chitietvp['chitietvp_sever']; ?></span>
                                                </div>
                                                <div class="home-product-item__planet">
                                                    <i class="ti-desktop">
                                                        <span class="product-planet">Hành Tinh: <?php echo $row_chitietvp['chitietvp_planet']; ?></span>
                                                    </i>
                                                </div>
                                            </div>

                                            <div class="product-item-list">
                                                <div class="home-product-item__type">
                                                    <i class="ti-shopping-cart-full"></i>
                                                    <span class="product-type">Loại Đồ: <?php echo $row_chitietvp['chitietvp_type']; ?></span>
                                                </div>
    
                                            </div>
                                            
                                
                                            <div class="home-product-item__price">
                                                <div class="product-item__price-prices">

                                                    <i class="ti-wallet">
                                                    <span class="product-price"><?php echo $row_chitietvp['chitietvp_prices']; ?> VND</span>    
                                                    </i>
                                                </div>
                                                <div class="product-item__price-chitiet">
                                                    <input type="button" value="CHI TIẾT" class="product-item__price-button">
                                                </div>
                                            </div>
    
                                            <div class="home-product-item__favourite">
                                                <i class="home-product-item__favourite-icon ti-flag">
                                                <span class="product-id">

                                                    #<?php echo $row_chitietvp['chitietvp_id']; ?></i>
                                                </span>    
                                            </div>                                         
                                        </a>                                
                                    </div>

                                <?php
                                    }
                                ?>