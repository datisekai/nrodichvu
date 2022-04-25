 
                    <div class="col l-10 m-12 c-12">
                        <div class="home-product">
                        <div class="menu-not-pc hide-pc">
                                <ul class="menu-not-pc_list">
                                    <li class="menu-not-pc-item"><a href="naptien.php?id=1" class="menu-not-pc-item-link">NẠP MOMO</a></li>
                                    <li class="menu-not-pc-item"><a href="naptien.php?id=2" class="menu-not-pc-item-link">NẠP TSR</a></li>
                                    <li class="menu-not-pc-item"><a href="naptien.php?id=3" class="menu-not-pc-item-link">NẠP AZCARD</a></li>                              
                                    <li class="menu-not-pc-item"><a href="naptien.php?id=4" class="menu-not-pc-item-link">NẠP ATM</a></li>                              
                                </ul>
                            </div>
                            <div class="row">
                                <div class="naptien">
                                    <div class="note">
                                        <p class="note__noidung">
                                        <li>HÃY BẤM COPY VÀ CHUYỂN KHOẢN ĐÚNG NỘI DUNG ( PHẠT PHÍ 10% SỐ TIỀN NẾU CHUYỂN SAI NỘI DUNG )</li>
                                        <li>TRƯỜNG HỢP QUÁ 10P KHÔNG NHẬN ĐƯỢC TIỀN HÃY INBOX ADMIN HỖ TRỢ</li>
                                        </p>
                                    </div>

                                    <div class="noidungck">  
                                        <h2>NỘI DUNG CHUYỂN KHOẢN</h2>       
                                        <input type="text" value="naptsr <?php echo $_SESSION['login']; ?>" id="myInput" class="inputck">
                                        <button onclick="myFunction()" class="btn-ck">Copy text</button>
                                    </div>

                                    <div class="infotk">
                                        <div class="vidientu">
                                            VÍ ĐIỆN TỬ: <h3>THẺ SIÊU RẺ</h3>
                                        </div>

                                        <div class="sotk">
                                            SỐ TÀI KHOẢN:
                                            <input type="text" value="0886249022" id="myInput" class="inputsotk">
                                            <button onclick="myFunction()" class="btnsotk">Copy text</button>
                                        </div>

                                        <div class="chutk">
                                            CHỦ TÀI KHOẢN: <h3>Datisekai - AD6 AZCARD</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="history hide-mobile">
                                    <table class="history__gd">
                                        <tr>
                                            <th>ID</th>
                                            <th>MÃ GD</th>
                                            <th>SỐ TIỀN</th>
                                            <th>THỜI GIAN</th>
                                            <th>TRẠNG THÁI</th>
                                        </tr>

                                        <tr>
                                            <td>#1</td>
                                            <td>T6132EFC909EF0</td>
                                            <td>+100000</td>
                                            <td>2021-09-04 11:02:40</td>
                                            <td>OKE</td>
                                        </tr>
                                    </table>
                                </div>
                             
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <script>
                function myFunction() {
                   
                    var copyText = document.getElementById("myInput");
                    copyText.select();
                    copyText.setSelectionRange(0, 99999); 
                    navigator.clipboard.writeText(copyText.value);
                    alert("Copied the text: " + copyText.value);
                }
            </script>