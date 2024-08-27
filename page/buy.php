<!-- PhotoSwipe CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css">

<?php
if ($_GET['id'] != '') {
    $pdshop = dd_q("SELECT * FROM box_product WHERE id = ? LIMIT 1", [$_GET['id']]);
    if ($pdshop->rowCount() != 0) {
        $row_1 = $pdshop->fetch(PDO::FETCH_ASSOC);
        $count = dd_q("SELECT * FROM box_stock WHERE p_id = ?", [$row_1['id']])->rowCount();
?>
        <div class="container mt-3 mb-3">
            <div class="container-sm">
                <div class="<?php echo $bg?>p-3" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px; border-radius:1vh;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-flex justify-content-center mt-3">
                            <li class="breadcrumb-item"><a href="?page=shop" style="text-decoration: none; color: #6C757D;"> สินค้าทั้งหมด</a></li>
                            <li class="breadcrumb-item"><a href="?page=shop&category=<?= htmlspecialchars($row_1['c_type']) ?>" style="text-decoration: none; color: #6C757D;"> <?= htmlspecialchars($row_1['c_type']) ?></a></li>
                            <li class="breadcrumb-item" aria-current="page" style="color: var(--font)"><?= htmlspecialchars($row_1['name']) ?></li>

                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-lg-6 p-3" >
                            <div class="d-flex justify-content-center">
                                 
                            <div id="carouselExampleIndicators" class="carousel slide gallery" data-bs-ride="carousel" >


                    <div class="carousel-inner" style="border-radius:1rem" >

                        <div class="carousel-item gallery-item active" data-pswp-uid="1">
                            <img src="<?= htmlspecialchars($row_1['img']) ?>" class="d-block w-100" alt="Image 1">
                        </div>
                        
                    </div>
                </div>
            </div>







<div class="d-flex justify-content-center mt-3">
                                 
                            <div id="carouselExampleIndicators" class="carousel slide gallery" data-bs-ride="carousel">


                    <div class="carousel-inner" style="display:none;">

                        <div class="carousel-item gallery-item active" data-pswp-uid="1">
                            <img src="<?= htmlspecialchars($row_1['img']) ?>" width="50px" alt="Image 1">
                        </div>
                       
                    </div>
                </div>
            </div>




            
                        </div>






                        <div class="col-12 col-lg-6 p-3 ">
                            <div class="<?php echo $bg?> p-3 rounded">

                                <h3 class="ttcolor" style="text-decoration: none;">ชื่อสินค้า : <b><?= htmlspecialchars($row_1['name']) ?><b></h3>

                                <div class="row mt-2" style="color:#8e8e8e">
                                    <!-- รายละเอียด -->
                                    <div class="col-auto  mb-2 mt-2 p-2 pe-3 ps-3" >รายละเอียดสินค้า <i class="fa-duotone fa-circle-exclamation fa-fade"></i></div>
                                    <br>

                                    
                                    
                                    

                                                            
                                    <style>
                                        .btn-dark-des {
                                            font-weight:300;
                                            background-color:#222322;
                                            padding: 0.4rem 0.8rem;
                                            border-radius:8px;
                                        }
                                        .frominput-product {
                                            background-color:#f9f9f9;
                                            border:none;
                                            color:#404040
                                        }
                                        .minus {
                                            background-color:#2e2e2e;
                                            border:none;
                                            color:#e3e3e3
                                        }
                                        .plus {
                                            background-color:#2e2e2e;
                                            border:none;
                                            color:#e3e3e3
                                        }
                                        .box-price {
                                            color:#484848;
                                            border: solid 1px #bce1ff; 
                                            border-radius:8px;
                                            background-color:#f9f9f9
                                        }
                                        .box-price:hover {
                                            color:#484848;
                                            border: solid 1px #bce1ff; 
                                            border-radius:8px;
                                            background-color:#b4dfff
                                        }

                                        .box-price-1 {
                                            border-radius:8px;
                                            background: linear-gradient(to right, #93cfef 0%, #93a8ef 100%);
                                        }
                                        .connect{
                                            text-align:center;
                                            font-size:12px;
                                            font-weight:300;
                                            border-radius:0.5vh;
                                            color:#515151;
                                            text-decoration:none;
                                        }
                                        .connect:hover{
                                            color:#72add8;
                                            background-color:#d4edff;
                                        }
                                    </style>


                                    <!-- รายละเอียดของสินค้า -->
                                    <h5 class="text-secondary" style="word-wrap: break-word; white-space:pre-wrap; font-size:16px; font-weight:200;"><?= htmlspecialchars($row_1['des']) ?></h5>

                                    <b>
                                        <p class="mt-3" style="font-size:14px; color:#3e3e3e; font-weight:300;">
                                            <span class=" ttcolor">⚠ คำเตือน :</span>
                                            ระบบมีโอกาสเกิดข้อผิดพลาดได้ทุกเมื่อ <br>
                                            โปรดอัดคลิปวีดิโอก่อนทำการซื้อสินค้าเพื่อเป็นหลักฐาน
                                            หากไม่มีหลักฐานในการยืนยัน
                                            ทางร้านขอสงวนสิทธิ์รับผิดชอบต่อความเสียหายที่เกิดขึ้น <i class="fa-duotone fa-shield-xmark fa-fade" style="--fa-primary-color: #dc141a; --fa-secondary-color: #dc141a;"></i></b>
                                        </p> <span style="font-size:13px; font-weight:300">By : <?php echo $config['name']; ?></span> 
                                        &nbsp;
                            
                                    <!-- ราคาสินค้า -->
                                    <div class="mt-4  p-2">
                                        <div class="d-flex justify-content-between pe-2 ps-2">
                                            <div style="font-weight:300; color:#373737;">ราคา
                                                <strong>
                                                    <del style="color:#da3636; font-weight:300;">
                                                        <?= $row_1['price'] ?>฿
                                                    </del>
                                                </strong>
                                            </div>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between pe-2 ps-2">
                                            <div>
                                                <span class="m-0 align-self-center" style="font-weight:300; color:#373737"> 
                                                <i class="fa-duotone fa-tag fa-shake"></i> ลดราคาเหลือเพียง<strong style="color:#f0ab0c;font-size:20px;">
                                                <?php echo number_format($row_1['price_vip']); ?> ฿ </strong>  บาท / ชิ้น</span>
                                            </div>
                                        </div>
                                    </div>
                                    


                                    <!-- จำนวนสินค้าที่ต้องการ -->
                                    <div class=" mt-4" style="text-align:right">จำนวนสินค้าที่ต้องการ <i class="fa-duotone fa-circle-plus"></i></div>

                                    <div class="d-grid mt-2">



                                    

                                        <div class="input-group">
                                           <!--  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="minus input-group-text rounded-start rounded-0">-</button>
 -->
                                            <input class="form-control text-center quantity frominput-product" id="b_count" min="0"

                                                name="quantity" value="1" >

                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="plus input-group-text  rounded-end rounded-0" style="font-weight:300; font-size:12px; color:#727272; background-color:#f9f9f9;">
                                                ระบุจำนวนสินค้า
                                            </button>
                                            <button class="btn w-40 p-2 box-price-1 text-white" id="shop-btn" onclick="buybox()" data-id="<?= $row_1['id'] ?>" data-name="<?= $row_1['name'] ?>" data-price="<?= $row_1['price'] ?>"> สั่งซื้อสินค้า</button>
                            
                                        </div>
                                    </div>
                                    

                                    <!-- <div class="mb-2">
                                        <input type="number" id="b_count" class="form-control text-center" value="1">
                                    </div> -->

                                


                            </div>


                            <center>
                            <p class="mt-3" style="font-size:13px; color:#444444; font-weight:300"><i class="fa-duotone fa-circle-exclamation fa-fade fa-sm" style="--fa-primary-color: #e22126; --fa-secondary-color: #e22126;"></i>
                             อ่านให้ครบก่อนสั่งซื้อ หากซื้อแล้วถือว่าท่านยินยอม ทางเราจะไม่มีการคืนเงินทุกกรณี </p>
                             <a href="<?php echo $config["contact"]; ?>" class="connect box-price p-2 pe-3 ps-3">ติดต่อแอดมิน <i class="fa-duotone fa-comment"></i></a>
                             <a href="<?php echo $config["contact"]; ?>" class="connect box-price p-2 pe-3 ps-3">พบเจอปัญหา <i class="fa-duotone fa-triangle-exclamation fa-fade" style="--fa-primary-color: #e39e40; --fa-secondary-color: #e39e40;"></i></a>
                            </center>
                            
                              

                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "<script>window.location.href = '?page=shop';</script>";
    }
} else {
    echo "<script>window.location.href = '?page=shop';</script>";
}
?>





<style>
    .ttcolor {
    
	    text-transform: uppercase;
		background: linear-gradient(to right, #ff4040 0%, #ff9e00 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
</style>





<!-- PhotoSwipe HTML structure -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>



<!-- PhotoSwipe JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>

<!-- Initialize PhotoSwipe -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var galleryElements = document.querySelectorAll('.gallery-item');

    galleryElements.forEach(function (element) {
        element.addEventListener('click', function (event) {
            event.preventDefault();

            var items = [{
                src: element.querySelector('img').getAttribute('src'),
                w: element.querySelector('img').naturalWidth,
                h: element.querySelector('img').naturalHeight
            }];

            var options = {
                index: 0,
                shareEl: false
            };
            var gallery = new PhotoSwipe(document.querySelector('.pswp'), PhotoSwipeUI_Default, items, options);
            gallery.init();
        });
    });
});
</script>


<style>
    .group {
  display: flex;
  line-height: 30px;
  align-items: center;
  position: relative;
  max-width: 200px;
}

.input {
  width: 100%;
  height: 45px;
  line-height: 30px;
  padding: 0 5rem;
  padding-left: 3rem;
  border: 2px solid transparent;
  border-radius: 10px;
  outline: none;
  background-color: #f8fafc;
  color: #0d0c22;
  transition: .5s ease;
}

.input::placeholder {
  color: #94a3b8;
}

.input:focus, input:hover {
  outline: none;
  border-color: rgba(129, 140, 248);
  background-color: #fff;
  box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
}

.icon {
  position: absolute;
  left: 1rem;
  fill: none;
  width: 1rem;
  height: 1rem;
}
</style>