 
                    <div class="col l-10 m-12 c-12">
                        <div class="home-product">
                            <div class="row margin-top-on-tablet">
                                <div class="col l-4 m-12 c-12">
                                        <div class="information"> 
                                            <form action="" method="post" enctype="multipart/form-data" class="form_ql">
                                                    <h1>THÊM VẬT PHẨM</h1>
                                                    <div class="user">

                                                        <p class="title__change">Tài khoản:</p>
                                                    <input type="text" name="tkvp" placeholder="Nhập vào tài khoản..." class="input-change">
                                                    </div>


                                                    <div class="passnew">

                                                        <p class="title__change">Mật khẩu:</p>
                                                        <input type="text" name="mkvp" placeholder="Nhập vào mật khẩu..." class="input-change">
                                                    </div>
                                                      
                                                    <div class="passnew">

                                                        <p class="title__change">Loại:</p>
                                                        <input type="text" name="typevp" placeholder="Nhập vào loại..." class="input-change">
                                                        </div>

                                                    <div class="passnew">

                                                        <p class="title__change">Giá:</p>
                                                    <input type="text" name="giavp" placeholder="Nhập vào giá..." class="input-change">
                                                    </div>

                                                    <div class="passnew">

                                                        <p class="title__change">Server:</p>
                                                    <input type="text" name="svvp" placeholder="Nhập vào server..." class="input-change">
                                                    </div>

                                                    <div class="passnew">

                                                        <p class="title__change">Hành Tinh:</p>
                                                    <input type="text" name="htvp" placeholder="Nhập vào hành tinh..." class="input-change">
                                                    </div>

                                                    <div class="passnew">

                                                        <p class="title__change">Avatar:</p>
                                                        <input type="file" name="fileToUpload" class="input-upload">
                                                                                                        
                                                    </div>
                                                    
                                                    <div class="passnew">
                                                        <p class="title__change">Hình ảnh mô tả:</p>
                                                        <input type="file" name="fileToUploads[]" class="input-upload" multiple="multiple">  
                                                    </div>
                                                    


                                                        <div class="submit-change-congtien">
                                                           
                                                            <input type="submit" name="addvp" value="Thực hiện" class="submit-change-btn">
                                        
                                                        </div>
                                                
                                            </form>        
                                        </div>
                                </div>  
                            <div class="col l-8 m-12 c-12">
                                <div class="information">
                                    <h1>QUẢN LÝ VẬT PHẨM</h1>
                                  
                                <?php
                                 if(isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                    }
                                    else {
                                        $page = 1;
                                    }

                                    $from = ($page - 1)  * 4;
                                    $sql_vp = mysqli_query($con,"SELECT * FROM tbl_chitietvp ORDER BY chitietvp_id ASC LIMIT $from,4");
                                ?>
                                <table class="accss">
                                    <tr>
                                        <th>ID</th>
                                        <th>Loại</th>
                                        <th>Giá</th>
                                        <th>Sever</th>
                                        <th>Hành Tinh</th>
                                        <th>Link ảnh</th>
                                        <th>Quản Lý</th>
                                    </tr>
                                <?php
                                    while($row_vp = mysqli_fetch_array($sql_vp)){
                        
                                ?>
                                    <tr>
                                        <td><?php echo $row_vp['chitietvp_id']; ?>|</td>
                                        <td><?php echo $row_vp['chitietvp_sever']; ?></td>
                                        <td><?php echo number_format($row_vp['chitietvp_prices']); ?></td>
                                        <td><?php echo $row_vp['chitietvp_sever']; ?></td>
                                        <td><?php echo $row_vp['chitietvp_planet']; ?></td>
                                        <td><img src="./uploads/<?php echo $row_vp['chitietvp_img']; ?>" height="100" width="150"></td>
                                        <td><a href="?quanly=vp&xoavp=<?php echo $row_vp['chitietvp_id']; ?>">Xóa</a></td>
                                    </tr>
                                <?php }?>
                                </table>
                                <?php
                                    include("./include/pagination-vp.php");
                                ?>
                                </div>
                            </div> 

                            
                                
                        </div>
                    </div>

                    </div>
                </div>
            </div>
