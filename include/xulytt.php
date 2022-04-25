  
                    <div class="col l-10 m-12 c-12">
                        <div class="home-product">
                            <div class="row margin-top-on-tablet">
                                <div class="col l-4 m-12 c-12">
                                        <div class="information">
                                            <form action="" method="post" enctype="multipart/form-data" class="form_ql">
                                                    <h1>THÊM TẦM TRUNG</h1>
                                                    <div class="user">

                                                        <p class="title__change">Tài khoản:</p>
                                                    <input type="text" name="tktt" placeholder="Nhập vào tài khoản..." class="input-change">
                                                    </div>


                                                    <div class="passnew">

                                                        <p class="title__change">Mật khẩu:</p>
                                                        <input type="text" name="mktt" placeholder="Nhập vào mật khẩu..." class="input-change">
                                                    </div>

                                                    <!-- <div class="passnew">

                                                        <p class="title__change">Mô tả:</p>
                                                    <input type="text" name="motatt" placeholder="Nhập vào mô tả..." class="input-change">
                                                    </div> -->

                                                    <div class="passnew">

                                                        <p class="title__change">Giá:</p>
                                                    <input type="text" name="giatt" placeholder="Nhập vào giá..." class="input-change">
                                                    </div>

                                                    <div class="passnew">

                                                        <p class="title__change">Server:</p>
                                                    <input type="text" name="svtt" placeholder="Nhập vào server..." class="input-change">
                                                    </div>

                                                    <div class="passnew">

                                                        <p class="title__change">Hành Tinh:</p>
                                                    <input type="text" name="httt" placeholder="Nhập vào hành tinh..." class="input-change">
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
                                                           
                                                            <input type="submit" name="addtt" value="Thực hiện" class="submit-change-btn">
                                        
                                                        </div>
                                                
                                            </form>        
                                        </div>
                                </div>  
                            <div class="col l-8 m-12 c-12">
                                <div class="information">
                                    <h1>QUẢN LÝ TẦM TRUNG</h1>
                                   
                                <?php
                                 if(isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                    }
                                    else {
                                        $page = 1;
                                    }

                                    $from = ($page - 1)  * 4;
                                    $sql_acctt = mysqli_query($con,"SELECT * FROM tbl_chitietacctt ORDER BY chitietacctt_id ASC LIMIT $from,4");
                                ?>
                                <table class="accss">
                                    <tr>
                                        <th>ID</th>
                                      
                                        <th>Giá</th>
                                        <th>Sever</th>
                                        <th>Hành Tinh</th>
                                        <th>Avatar</th>
                                        <th>Quản Lý</th>
                                    </tr>
                                <?php
                                    while($row_acctt = mysqli_fetch_array($sql_acctt)){
                        
                                ?>
                                    <tr>
                                        <td><?php echo $row_acctt['chitietacctt_id']; ?>|</td>
                                  
                                        <td><?php echo number_format($row_acctt['chitietacctt_prices']); ?></td>
                                        <td><?php echo $row_acctt['chitietacctt_sever']; ?></td>
                                        <td><?php echo $row_acctt['chitietacctt_planet']; ?></td>
                                        <td><img src="./uploads/<?php echo $row_acctt['chitietacctt_img']; ?>" height="100" width="150"></td>
                                        <td><a href="?quanly=acctt&xoatt=<?php echo $row_acctt['chitietacctt_id']; ?>">Xóa</a></td>
                                    </tr>
                                <?php }?>
                                </table>
                                <?php
                                    include("./include/pagination-tt.php");
                                ?>
                                </div>
                            </div> 

                            
                                
                        </div>
                    </div>

                    </div>
                </div>
            </div>
