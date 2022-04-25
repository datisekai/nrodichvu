<style>
    .ftco-section bg-light{
            height: 40px;
            display: block;
            width: 100%;
            position: relative;
    }

    .container-pagi{
        font-size: 20px;
        font-family: sans-serif;
    }

    .col-md-12{
        margin-top: 28px;
        transform: translateX(125%);
    }

    .pagination-link{
    }

    .pagination-link a{
        text-decoration: none;
        padding: 4px 8px;
        color: black;
        border: 1px solid red;
        border-radius: 15px;

    }

    .pagination-link a:hover{
        color: white;
        cursor: pointer;
        opacity: 0.5;
        background-color: #42B92B;
    }

  
</style>



<section class="ftco-section" id="paginations">
			<div class="container-pagi">
				<div class="row">
					<div class="col-md-12">
					  <div class="pagination-link">
					  	<a href="information.php?quanly=acctt&page=<?php 
                          if($page < 2) {
                              echo $page;
                          }
                          else {
                                echo $page - 1;
                          }
                          ?>">&laquo;</a>
                            <a class="active" href="?quanly=acctt&page=1">1</a>
                            <a href="information.php?quanly=acctt&page=2">2</a>
                            <a href="information.php?quanly=acctt&page=3">3</a>
                            <a href="information.php?quanly=acctt&page=<?php echo $page + 1; ?>">&raquo;</a>
					  </div>
					</div>
				</div>
			</div>
	  </section>

     
	  <!-- - - - - -end- - - - -  -->