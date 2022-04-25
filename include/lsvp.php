<?php
    if(isset($_SESSION['login']))
    {
        $user = $_SESSION['login'];
        $sql_lsgd = mysqli_query($con, "SELECT * FROM tbl_lsgd WHERE lsgd_userkh = '$user' AND lsgd_type = 'VẬT PHẨM'");

    }

?>
                    <div class="col l-10 m-12 c-12">
                        <div class="home-product">
                        <div class="menu-not-pc hide-pc">
                                <ul class="menu-not-pc_list">
                                    <li class="menu-not-pc-item"><a href="lsgd.php?id=1" class="menu-not-pc-item-link">TẦM TRUNG</a></li>
                                    <li class="menu-not-pc-item"><a href="lsgd.php?id=2" class="menu-not-pc-item-link">SƠ SINH</a></li>
                                    <li class="menu-not-pc-item"><a href="lsgd.php?id=3" class="menu-not-pc-item-link">VẬT PHẨM</a></li>                              
                                </ul>
                            </div>
                            <div class="row">
                                <div class="tk__done">
                                    <h1>VẬT PHẨM ĐÃ MUA</h1>
                            
                                    <table class="tk__done-table">
                                        <tr>
                                            <th>ID</th>
                                            <th class="hide-mobile">NGƯỜI BÁN</th>
                                            <th>LOẠI</th>
                                            <th>TÀI KHOẢN</th>
                                            <th>MẬT KHẨU</th>
                                            <th>TRẠNG THÁI</th>
                                        </tr>

                                        <?php
                                        
                                        while ($row_lsgd = mysqli_fetch_array($sql_lsgd)) {
                                        ?>
                                        <tr>
                                            <td>#<?php echo $row_lsgd['lsgd_id']; ?></td>
                                            <td class="hide-mobile">Datisekai</td>
                                            <td><?php echo $row_lsgd['lsgd_type']; ?></td>
                                            <td><?php echo $row_lsgd['lsgd_tk']; ?></td>
                                            <td><?php echo $row_lsgd['lsgd_mk']; ?></td>
                                            <td>OKE</td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                             
                        </div>
                    </div>

                    </div>
                </div>
            </div>
          