<style>
    .modal{
        position: relative;
        display: block;
        width: 100%;
    }

    .modal-overlay{
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0,0,0,0.3);
        z-index: 11;
        /* display: none; */
        /* display: none; */
    }

    .modal-content{
        transform: translate(75%,40%);
        position: fixed;
        width: 40%;
   
        text-align: center;
        background-color: white;
        z-index: 12;
        border-radius: 10px;
        /* display: none; */
        animation: trandown ease 0.5s;
        
    }

    @keyframes trandown{
        from {
            transform: translate(75%, -1500px);
        }
        to {
            transform: translate(75%,40%);
        }
    }
    .modal-header{
        margin-top: 16px;
        padding: 16px 32px;
        font-size: 22px;
        color: red;
        font-family: sans-serif;
    }

    .modal-header p{
        margin-top: 30px;
        font-family: sans-serif;
    }

    .modal-body{
        
        padding: 8px 16px;
        list-style: none;
        margin-bottom: 20px;
    }

    .modal-body__list{
        margin-top: 20px;
        list-style: none;
        font-size: 18px;
    }

    .modal-body__list-item{
        padding: 8px 16px;
        margin-top: 8px;
        font-family: sans-serif;
        font-weight: 600;

    }

    .button-close{
       margin-bottom: 16px;
       right: 10%;
       bottom: 1%;
       position: absolute;
    }

    .active {
        display: none;
    }

    .btn-close{
        padding: 8px 16px;
        float: right;
        margin: 8px 16px;
        border: none;
        font-family: sans-serif;
        font-weight: 300;
    }

    .btn-close:hover{
        cursor: pointer;
        opacity: 0.5;
    }

    .modal-time{
        margin-top: 16px    ;
    }

    .ti-close{
        position: absolute;
        right: 15px;
        top: 15px;
        font-size: 20px;
    }
    @media (max-width: 739px){
        
    .modal-content{
        transform: translate(6%,20%);
        position: fixed;
        width: 90%;
     
        text-align: center;
        background-color: white;
        z-index: 12;
        border-radius: 10px;
        /* display: none; */
        animation: trandown ease 0.5s;
        
    }
    .modal-body__list-item {
    line-height: 1.5;
    padding: 8px 4px;
    margin-top: 8px;
    font-family: sans-serif;
    font-weight: 600;
}
.modal-body__list {
    /* margin-top: 20px; */
    list-style: none;
    font-size: 18px;
}
.modal-header {
    margin-top: 16px;
    padding: 16px 32px 0px 32px;
    font-size: 22px;
    color: red;
    font-family: sans-serif;
}
@keyframes trandown{
        from {
            transform: translate(7%, -1500px);
        }
        to {
            transform: translate(7%,26%);
        }
    }
    }
    @media (min-width: 740px) and (max-width: 1023px) {
    .modal-content {
    transform: translate(30%,10%);
    position: fixed;
    width: 65%;

    text-align: center;
    background-color: white;
    z-index: 12;
    border-radius: 10px;
    /* display: none; */
    animation: trandown ease 0.5s;
}
.modal-body__list-item {
    line-height: 1.3;
    padding: 8px 4px;
    margin-top: 8px;
    font-family: sans-serif;
    font-weight: 600;
}
@keyframes trandown{
        from {
            transform: translate(30%, -1500px);
        }
        to {
            transform: translate(30%,10%);
        }
    }
    }
</style>

<div class="modal">
    <div class="modal-overlay"></div>
        <div class="modal-content">
            <i class="btn-x-close ti-close"></i>
            <div class="modal-header">
                <h2 class="modal-heading">THÔNG BÁO</h2>
                <h4 class="modal-time"><?php echo date('D, d/m/Y'); ?></h4>
                <p>NRODICHVU.XYZ <span><img src="https://i.imgur.com/OPrMTdO.gif" alt=""></span></p>
            </div>
        
            <div class="modal-body">
                <ul class="modal-body__list">
                <li class="modal-body__list-item">Đây chỉ là web demo sau một khóa học PHP <span><img src="https://i.imgur.com/X9NCMbX.gif" alt="new"></span></li>
                    <li class="modal-body__list-item">Khi đăng kí tài khoản mới sẽ có $200.000 để có thể test mua <span><img src="https://i.imgur.com/X9NCMbX.gif" alt="new"></span></li>
                    <li class="modal-body__list-item">Thanks mọi người đã xem !!! <span><img src="https://i.imgur.com/X9NCMbX.gif" alt="new"></span></li>
                    <li class="modal-body__list-item">FB: <a href="https://www.facebook.com/datisekai" target="_blank" style="color:blue;">Thành Đạt</a></li>
                </ul>
            </div>
            <input type="button" value="ĐÓNG" class="btn-close">
            
        </div>
        
</div>

<script>
    var modalOverlay =  document.querySelector('.modal-overlay');
    var modal = document.querySelector('.modal')
    var modalBtn = document.querySelector('.btn-close');
    var modalBtnX = document.querySelector('.btn-x-close');
    modalBtn.addEventListener('click', function() {
        modal.classList.add('active');
    });

    modalOverlay.addEventListener('click', function() {
        modal.classList.add('active');
    });

    modalBtnX.addEventListener('click', function() {
        modal.classList.add('active');
    });
    
</script>