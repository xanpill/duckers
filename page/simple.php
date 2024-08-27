

<!-- Start -->
<style>
    .shops {
        padding: 20px;
        border-radius: 1vh;
    }

    .shops-body {
        position: relative;
        color: #fff;
        font-weight: 600;
        height: 100%;
    }

    .shops-body>.shops-img {
        width: 100%;
        height: 100%;
        border-radius: 1vh;
        transition: all .5s ease;
    }

    .shops-body>.shops-img:hover {
        transform: scale(1.035);
    }

    .shops-body>.shops-text-center {
        position: absolute;
        top: 80%;
        left: 20%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .5s ease;
    }

    .shops-body:hover>.shops-text-center {
        left: 50%;
        opacity: 1;
        font-size: 30px;
        padding: 0 20px;
        border-radius: 2vh;
        background-color: var(--main);
    }
</style>
<style>
   .img-anim {
        position: relative;
        text-align: center;
        overflow: hidden;
        border-radius: 1vh;
    }

    .img-anim img {
        width: 100%;
        height: auto;
        margin-left: auto;
    }

    .img-anim>img {
        background-size: cover;
        background-position: center;
        transition: all 0.3s ease;
    }

    .img-anim>div.bg {
        position: absolute;
        z-index: 2;
        opacity: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(1, 1, 1, 0.3);
        transition: all 0.3s ease;
    }

    .img-anim>div.text {
        position: absolute;
        z-index: 3;
        top: 50%;
        left: 30%;
        opacity: 0;
        color: #fff;
        font-size: 20px;
        border-bottom: 1px solid transparent;
        border-image: linear-gradient(to right, #d53535,#ff8b00);
        border-image-slice: 1;
        transform: translate(-50%, -50%);
        transition: all 0.3s ease;
    }

    .img-anim:hover>img {
        transform: scale(1.1);
    }

    .img-anim:hover>div {
        opacity: 1;
    }

    .img-anim:hover>div.text {
        top: 80%;
        opacity: 1;
    }

    .content {
        height: auto;
        transition: all .5s ease;
    }

    
    .font-bold {
        font-weight: 700;
    }
    .font-semibold {
        font-weight: 600;
    }  
    .border-hov {
        border: 1px solid #ccc;
        transition: 0.3s ease-in-out;
    }

    #font-color-cs {
    text-transform: uppercase;
	background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
  }

    .tx-box2 {
                padding:0.8rem;
                color:#62ac58;
                font-size:12px;
                background-color:#0ab20a0a;
                border-radius:5px;
                border: solid 0.5px #4ca73f;

            }
    .tx-box2:hover {
         color: #fff;
                text-transform: uppercase;
                font-weight: 500;
                background: linear-gradient(to right,#1A2317 10%, #56714D 30%, #C3FFAE 60% , #0E150F 98% , #1A2317 100%) ;
                
                background-size: auto auto;
                background-clip: border-box;
                background-size: 200% auto;
                color: #fff;
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: textclip 2.5s linear infinite;
                display: inline-block;
        
    }
   

</style>

<div class="container col-lg-12 mb-2" style="margin-top:1rem;" >  


                                                                       <!-- text เลื่อน ประกาศ -->
                                    <div class="mt-1 mb-1">
                                        <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-card text-light btn" style="box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px; background-color:#f7f7f7;">
                                                            <span style="color:#031026; font-size:13px;"><i class='bx bxs-party'></i>
                                                            &nbsp;ประกาศ 📢
                                                        </span>
                                                    </div>

                                                <marquee class="form-control bg-card ms-1 btn " style="background: #f7f7f7; color:#474646; border-radius:0.5vh; font-size:13px; font-family:'kanit'">
                                    </div>

                                                <?php echo $config['ann']; ?>
                                                </marquee>
                                        </div>
                                    </div> 
 </div> 


<div class="container-fluid col-lg-12 mt-1 p-0 w-100">
        <div class="container pt-0 pb-0 m-cent">
            <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel" style="border-radius: 1vh; border:none;">
                <div class="carousel-inner" style="border-radius: 1vh;">
                    <?php
                    $active = false;
                    $find = dd_q("SELECT * FROM carousel");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div class="carousel-item <?php if (!$active) {
                                                        echo "active";
                                                        $active = true;
                                                    } ?>">
                            <img src="<?php echo $row['link'] ?>" class="d-block w-100" alt="..." style="border-radius: 1vh; ">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    


    



    <!-- Model -->
<div id="myModal" class="modal fade " tabindex="-1" >
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:2vh;"> 
          
            <div class="modal-body bg_c" style="border-radius:1.5vh;">
                <button type="button" class="btn-close cs" data-bs-dismiss="modal" aria-label="Close"> 
            </button>    
                <img src="<?php echo $config['bg_ann']; ?>"
                 width="100%" style="border-radius:6px;" alt="">

                 <center class="mt-3 mb-3">
                    <p class="h5" style="font-size:18px;"><?php echo $config['tx_ann']; ?></p>
                 </center>


                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">ปิด <i class="fa-regular fa-xmark"></i></button>
                <a href="<?php echo $config['contact']; ?>"><button type="button" class="btn btn-white me-2">Facebook <img src="/img/messenger.png" width="16px"></button></a>

                <a href="?page=topup"><button type="button" class="bg-cus btn btn-primary cs">เติมเงินเลย <i class="fa-regular fa-dollar-sign fa-beat-fade"></i></i></button></a>



            </div>
            </div>
        </div>
    </div>
    
    <style>    
        .bg_c {
            background-color: #f6f6f6
        }
        .cs {
            font-size:13px;
            margin-bottom:0.5rem;
            float:right;
        }
    </style>




    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v19.0&appId=1193705631514661" nonce="jGgcU8zk"></script>







<div class="container-sm p-3 mt-3 col-lg-10" data-aos="fade-left" style="margin-top:-0.5rem;">     
<center>
            <div class="col-12 col-lg-12 mb-3" style="border-radius: 1vh;">
                <div class="d-flex justify-content-between">
                    <div class="text-center text-lg-start">
                      
                        <h2 class="h5 fw-bolder m-0">แอพพรีเมียม </h2>  
                        <a href="?page=premiumapp" class="btn mb-1" style="text-decoration:none; font-size:10px; background-color:#f1f1f1; padding:0.1rem 0.5rem; border-radius:0.5vh; color:#04111a;">
                        ดูเพิ่มเติม
                        </a> 

                    </div>
                </div>
            </div>
        </center>

        <!-- ส่วนที่เพิ่มรูปภาพใต้หมวดหมู่แอพพรีเมี่ยม -->
        <center>
            <!-- ส่วนของปุ่มภาพแอพพรีเมี่ยม -->
            <div class="d-flex justify-content-center">
                <div class="col-6 col-lg-6 mb-3 text-center text-lg-start">
                    <a href="?page=premiumapp">
                    <img src="/img/DKBannerNew.gif" alt="DK Banner" style="width:100%; max-width: 600px; border-radius: 1vh;">
                    </a>
                </div>
                <!-- ส่วนของปุ่มภาพหมวดหมู่สินค้าอื่นๆ -->
                <div class="col-6 col-lg-6 mb-3 text-center text-lg-start">
                    <a href="?page=shop">
                    <img src="/img/DKBannerNew.gif" alt="New Image" style="width:100%; max-width: 600px; border-radius: 1vh;">
                    </a>
                </div>
            </div>
        </center>

        <center>
            <div class="col-12 col-lg-12 mb-3" style="border-radius: 1vh;">
                <div class="d-flex justify-content-between">
                    <div class="text-center text-lg-start">
                      
                        <h2 class="h5 fw-bolder m-0">สินค้าของเรา </h2>  
                        <a href="?page=shop" class="btn mb-1" style="text-decoration:none; font-size:10px; background-color:#f1f1f1; padding:0.1rem 0.5rem; border-radius:0.5vh; color:#04111a;">
                        ดูเพิ่มเติม
                        </a> 

                    </div>
                </div>
            </div>
        </center>

        <hr>




            <style>
                .cc {
                    width: 100%;
                    max-width: 250px;
                }

                @media only screen and (max-width: 1000px) {
                    .cc {
                        width: 100%;
                        max-width: 100vh;
                    }
                }
            </style>



            <div class="row justify-content-center justify-content-lg-start">

                 <?php
                $check = dd_q("SELECT * FROM recom WHERE recom_1 != 0 AND recom_2 != 0 AND recom_3 != 0 AND recom_4 != 0 AND recom_5 != 0 AND recom_6 != 0 AND recom_7 != 0 AND recom_8 != 0 AND recom_9 != 0 AND recom_10 != 0");
                if ($check->rowCount() == 1) {
                    $data = $check->fetch(PDO::FETCH_ASSOC);
                    for ($i = 1; $i <= 10; $i++) {
                        $recom = "recom_" . $i;
                        $find = dd_q("SELECT * FROM box_product WHERE id = ? ", [$data[$recom]]);
                        $row = $find->fetch(PDO::FETCH_ASSOC);
                        $stock = dd_q("SELECT * FROM box_stock WHERE p_id = ? ", [$row["id"]]);
                        $count = $stock->rowCount();
                        if ($count  == NULL) {
                            $count = 0;
                        }
                ?>


                       <div class="col-6 col-lg-3 mb-4 px-1" data-aos="zoom-in">

                        <div class="card-anim-main p-1" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px; background-color:#f7f7f7; box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px; border-radius:1vh; ">                                                                  
                                <div class="p-0">                                   
                                    <a href="?page=buy&id=<?= $row['id'] ?>"></a>
                                        <div class="view overlay">
                                            


                                            <center>
                                                <a href="?page=buy&id=<?= $row['id'] ?>">
                                                    <img class="img-fluid mb-1 hv-img" src="<?php echo htmlspecialchars($row["img"]); ?>" style="border-radius: 1vh 1vh 0 0; width: 100%; max-width: 100vh;">
                                                </a>
                                            </center>

                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>

                                        <div class="card-body p-2 pt-2 pb-1">
                                            <h5 class="text-strongest mb-2 mt-1 fs-6" style="word-wrap: break-word; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color:#5d5d5d;"><?php echo htmlspecialchars($row["name"]); ?></h5>   
                                            
                                            <p style="color:#868686; margin-bottom:-0.5rem; font-size:10px;">ราคาสินค้า</p>
                                            
                                            <div class="d-flex justify-content-between mt-1">
                                                <p class="text-main  align-self-center mb-2"> <strong style="color:#f0ab0c;font-size:16px;"><?php echo number_format($row['price_vip']); ?> ฿ </strong> 
                                                 <del style="color:#C4C3C3;">
                                                 <strong style="color:#767676;font-size:12px;"><?php echo number_format($row['price']); ?>฿</strong></del>
                                                
                                                     <div>
                                                </div>
                                            </div>

                                            <span style="font-size:14px;">
                                                เหลืออยู่ <code><?= $count ?></code> ชิ้น
                                            </span>

                                                    <span>
                                                        <?php
                                                            if($count == "0"){
                                                                echo "<p class='' style='width: fit-content; color:#e81313; font-size:10px; background-color: #e8131042; padding: 1px 6px; border-radius:0.5vh;'>สินค้าหมด <i class='fa-sharp fa-light fa-xmark'></i></p>";
                                                            }else{
                                                                echo "<p class='' style='width: fit-content; color:#5f8ab3; font-size:10px; font-weight:500; background-color: #b3daff; padding: 1px 6px;; border-radius:0.5vh;'> <?= $count ?> <i class='fa-regular fa-check'></i></p>";
                                                            }
                                                        ?>
                                                    </span>
                                                    

                                        <center>
                                        <a href="?page=buy&id=<?= $row['id'] ?>">
                                                    <button class="bg-cus text-white w-100 mb-2 bbbbb mt-1" style="border-radius: 1vh;" onclick="tobuy(<?php echo $row['id'] ?>, '<?php echo htmlspecialchars($row['name']); ?>', '<?= $count ?>')">
                                                        <i class="fa-duotone fa-bag-shopping"></i> &nbsp;สั่งซื้อสินค้า 
                                                    </button>
                                                    </a>
                                                                             
                                        </center>

                                        <style>
                                        @media only screen and (max-width: 600px) {
                                            .bbbbb {
                                                width:100%;

                                            }

                                        }
                                        </style>            

                                    </div>
                                </div>
                            </div>
                        </div>
                    

                      <?php
                    }
                } else {
                    ?>
                    <?php
                    $find = dd_q("SELECT * FROM box_product ORDER BY id DESC LIMIT 4");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                        $stock = dd_q("SELECT * FROM box_stock WHERE p_id = ? ", [$row["id"]]);
                        $count = $stock->rowCount();
                        if ($count  == NULL) {
                            $count = 0;
                        }
                    ?>
                        
                    
                        <div class="col-6 col-lg-3 mb-4" data-aos="zoom-in">

                        <div class="card-anim-main  border-ys shadow p-1" style="border-radius: 1vh; height: fit-content; background-color:#000000; box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">                                                                  
                                <div class="p-0">                                   
                                    <a href="?page=buy&id=<?= $row['id'] ?>">
                                        <div class="view overlay">
                                            
                                            <center>
                                        
                                                <img class="img-fluid mb-1" src="<?php echo htmlspecialchars($row["img"]); ?>" style="border-radius: 1vh 1vh 0 0; width: 100%; max-width: 100vh;">
                                            </center>

                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                        </div>

                                        <div class="card-body p-2 pt-2 pb-1">
                                            <h5 class="  text-strongest mb-2 mt-1 fs-6" style="word-wrap: break-word; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color:#d5d5d5;"><?php echo htmlspecialchars($row["name"]); ?></h5>   
                                            
                                            <p style="color:#868686; margin-bottom:-0.5rem; font-size:10px;">ราคาสินค้า</p>
                                            
                                            <div class="d-flex justify-content-between">
<p class="text-main  align-self-center mb-2"> <del style="color:#C4C3C3;"><strong style="color:#C4C3C3;font-size:15px;"><?php echo number_format($row['price']); ?>฿</strong></del> <strong style="color:#f0ab0c;font-size:22px;"><?php echo number_format($row['price_vip']); ?> ฿ </strong> 
                                                
                                                
                                                
                                                
                                                // <i class="fa-light fa-arrow-pointer fa-fade"></i>
                                                </p>                                              
                                                
                                                <span>
                                                    <?php
                                                        if($count == "0"){
                                                            echo "<p class='mt-2 ' style='width: fit-content; color:#e81313; font-size:10px; background-color: #e8131042; padding: 1px 6px; border-radius:1vh;'>สินค้าหมด</p>"
                                                            ;
                                                        }else{
                                                            echo "<p class='mt-2' style='width: fit-content; color:#26180d; font-size:10px; font-weight:500; background-color: #ff9e00; padding: 1px 4px;; border-radius:1vh;'>พร้อมจำหน่าย</p>";
                                                        }
                                                    ?>
                                                    </span>


                                               
                                            </div>

                                            <div class="row">
                                                <div class="col">                                    <a href="?page=buy&id=<?= $row['id'] ?>">
										
                                                    <button class=" text-white mt-2 mb-2 " style="border-radius: 1vh;" onclick="tobuy(<?php echo $row['id'] ?>, '<?php echo htmlspecialchars($row['name']); ?>', '<?= $count ?>')">
                                                        <i class="fa-duotone fa-bag-shopping"></i> &nbsp;สั่งซื้อสินค้า 
                                                    </button>
                                                    </a>
                                                </div>
                                                
                                                <div lass="col">
                                                    <button class=" mt-1 mb-1 " style="border-radius: 5vh; font-size:14px;">
                                                        <span class="w-100 text-secondary mt-4 mb-4" onclick="detail(<?php echo $row['id']; ?>)">
                                                        <i class="fa-duotone fa-circle-info fa-fade" style="--fa-primary-color: #0ea501; --fa-secondary-color: #0ea501;"></i>&nbsp;รายละเอียด</span>
                                                    </button>
                                                </div>
                                            </div>



                                    </div>
                                </div>
                            </div>
                      </div>
                    <?php } ?>
                <?php
                }
                ?>
            </div>



 





<div class="container-sm  m-cent  p-4 pt-2 pb-2 " style="border-radius: 1vh;">
<div class="container-sm col-lg-10"

    <?php
        $boxlog = dd_q("SELECT * FROM users");
        $m_count = $boxlog->rowCount() + $static['m_count'];

        $boxlog = dd_q("SELECT * FROM category");
        $c_count = $boxlog->rowCount() + $static['c_count'];

        $boxlog = dd_q("SELECT * FROM box_stock");
        $s_count = $boxlog->rowCount() + $static['s_count'];

        $boxlog = dd_q("SELECT * FROM boxlog");
        $b_count = $boxlog->rowCount() + $static['b_count'];

        $boxlog = dd_q("SELECT * FROM box_product");
        $p_count = $boxlog->rowCount() + $static['p_count'];


        ?>
        
        <div class="mb-1 w-100">
            <div class="row">

                <div class="col-6 col-lg-3 pe-3 mb-1" >
                <div class="mb-2  container-sm count-only mb-lg-0 p-3 pe-0 ps-0 " style="border-radius:1vh; ">
                        <div class="box-shop border-ys " >
                            <span class="text-main" id="count" style="font-size: 28px;" data-target="<?php echo $m_count; ?>"></span>
                            <span style="font-size: 13px; color:#ffae00;">&nbsp;คน</span>
                            <h5 style="font-size: 18px; color:#646464">ผู้ใช้ทั้งหมด</h5>
                            <img src="/img/user.png" alt="สมาชิก">
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 pe-3 mb-1">
                <div class="mb-2 container-sm count-only mb-lg-0 p-3 pe-0 ps-0 " style="border-radius:1vh">
                        <div class="box-shop border-ys ">
                            <span class="text-main" id="count" style="font-size: 28px;" data-target="<?php echo $c_count; ?>"></span>
                            <span style="font-size: 13px; color:#ffae00;">&nbsp;หมวดหมู่</span>
                            <h5 style="font-size: 18px; color:#646464">รายการ</h5>
                            <img src="/img/list.png" alt="สมาชิก">
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 pe-3 mb-1">
                <div class="mb-2 container-sm count-only mb-lg-0 p-3 pe-0 ps-0 " style="border-radius:1vh">
                        <div class="box-shop border-ys ">
                            <span class="text-main" id="count" style="font-size: 28px;" data-target="<?php echo $p_count; ?>"></span>
                            <span style="font-size: 13px; color:#ffae00;">&nbsp;รายการ</span>
                            <h5 style="font-size: 18px; color:#646464">สินค้าทั้งหมด</h5>
                            <img src="/img/box.png" alt="สมาชิก">
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 pe-3 mb-1">
                <div class="mb-2 container-sm count-only mb-lg-0 p-3 pe-0 ps-0 " style="border-radius:1vh">
                        <div class="box-shop border-ys ">
                            <span class="text-main" id="count" style="font-size: 28px;" data-target="<?php echo $b_count; ?>"></span>
                            <span style="font-size: 13px; color:#ffae00;">&nbsp;ชิ้น</span>
                            <h5 style="font-size: 18px; color:#646464">ขายแล้ว</h5>
                            <img src="/img/check.png" alt="สมาชิก">
                        </div>
                    </div>
                </div>

                <style>
                .box-shop {            
                    border-radius:2vh;
                    padding:0.8rem;
                    background-color:#fafafa;
                    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
                }
                .box-shop img {
                    width:79px;
                    float:right;
                    margin-top:-2.5rem;
                    
                    
                }
                .box-shop img:hover {
                    filter: grayscale(100%);
                }
                @media only screen and (max-width: 600px){
                    .box-shop img {
                        margin-top:-6rem;
                        width:45px;
                        filter: blur(50px);
                    }
                    .box-shop img:hover {
                        display:none;
                }
                }
                
                </style>
            </div>
        </div>
    </div>

    <!-- END -->






    
<div class="container col-11 mt-5 mb-3">

<div class="promotext">
    <div class="headtext">
        <h4 style="color:#44464d; font-weight:600;">โปรโมชั่น - ข่าวสาร
        <a class="promo btn " href="?page=promotions">
             ดูข่าวสารเพิ่มเติม <i class="fa-light fa-angle-right fa-fade"></i>
        </a>
        </h4>
        <p style="color:#44464d; font-size: 13px; margin-top:-0.5rem;">Promotions and News</p>
        
    </div>
</div>
    
<div class="row">

    <div class="col-md-4 mb-4">
        <a href="?page=newpost" class="imgpost-a">
            <div class="imgpost">
                <img src="/img/promo/product.png" class="img-hv" width="100%" alt="">
            </div>
            <div class="span-post mt-3">
                <span class="text2">แนะนำสำหรับคุณ</span> 
                <span class="text3">2024-07-21 14:13:45</span>
            </div>
                <h3 class="heading mt-2">Dedazen-Store เปิดให้บริการแล้ววันนี้ ลุยกันเล้ยย</h3>
            <div class="mt-1"> 
                <span class="text1">โพสต์โดย : BakiHuam 
                
                </span> 
            </div>
        </a>
    </div>


    <div class="col-md-4 mb-4">
        <a href="?page=newpost" class="imgpost-a">
            <div class="imgpost">
                <img src="/img/promo/product.png" class="img-hv" width="100%" alt="">
            </div>
            <div class="span-post mt-3">
                <span class="text2">แนะนำสำหรับคุณ</span> 
                <span class="text3">2024-07-21 14:13:45</span>
            </div>
                <h3 class="heading mt-2">Dedazen-Store เปิดให้บริการแล้ววันนี้ ลุยกันเล้ยย</h3>
            <div class="mt-1"> 
                <span class="text1">โพสต์โดย : BakiHuam 
                
                </span> 
            </div>
        </a>
    </div>


    <div class="col-md-4 mb-4">
        <a href="?page=newpost" class="imgpost-a">
            <div class="imgpost">
                <img src="/img/promo/product.png" class="img-hv" width="100%" alt="">
            </div>
            <div class="span-post mt-3">
                <span class="text2">แนะนำสำหรับคุณ</span> 
                <span class="text3">2024-07-21 14:13:45</span>
            </div>
                <h3 class="heading mt-2">Dedazen-Store เปิดให้บริการแล้ววันนี้ ลุยกันเล้ยย</h3>
            <div class="mt-1"> 
                <span class="text1">โพสต์โดย : BakiHuam 
                
                </span> 
            </div>
        </a>
    </div>

   
</div>









   <!-- con-->
    <div class="p-4 container justify-content-md-center ">
        <div class="row">


            <center>
                <h5 class="h5"><?php echo $config['name']; ?></h5>
            </center>

                             <center> 
							   
							   <div class="fb-page" data-href="<?php echo $config['contact']; ?>" data-tabs="timeline" data-width="" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
								   <blockquote cite="<?php echo $config['contact']; ?>" class="fb-xfbml-parse-ignore">
									   <a href="<?php echo $config['contact']; ?>"> <?php echo $config['name']; ?></a>
								   </blockquote>
							   </div>
							   
							   
						   </center>

        </div>
    </div>





           
        </div>
    </div>



    <div class="container-fluid p-4">

                        <center class="mt-1 mb-3">
                            <span class="h4  "><b>คำถามที่พบบ่อย</b></span>
                        </center>


         <div class="container-sm  ps-4 pe-4">
          <div class="container-fluid p-0">
           <div class="col-lg-7 m-auto">
                          
            <div class="accordion" id="accordionExample" >
              <div class="accordion-item" style="background-color:#f9f9f9">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" style="background-color:#f9f9f9; color:#3b3b3b" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ระบบโอนเงินอัตโนมัติคืออะไร
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="color:#8e8e8e; font-size:14px;">
                    <strong style="color:#1470a8;">คือระบบชำระเงินออนไลน์</strong> ที่สามารถตรวจสอบการชำระเงินจากลูกค้าได้อย่างรวดเร็วแม่นยำ ไม่ต้องรอคนมาดำเนินการ <code style="color:#f58b0a;">BY:ADMIN</code>
                  </div>
                </div>
              </div>


              <div class="accordion-item" style="background-color:#f9f9f9">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" style="background-color:#f9f9f9; color:#3b3b3b" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ซื้อแล้วได้รับของจริงไหม?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="color:#8e8e8e; font-size:14px;">
                    <strong style="color:#1470a8;">แน่นอนครับ ว่าได้รับสินค้า 100%</strong> ทางเราส่งสินค้าจริง มีสินค้า 100% ตามที่สต๊อกของไว้ หากลูกค้าไม่ได้รับของหรือสินค้าใดๆ สามารถติดต่อแอดมินเพื่อรับเงินคืนได้เลยครับ  <code style="color:#f58b0a;">BY:ADMIN</code>
                  </div>
                </div>
              </div>

              
              <div class="accordion-item" style="background-color:#f9f9f9">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" style="background-color:#f9f9f9; color:#3b3b3b" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    เติมเงินแล้ว เครดิตเข้าทันทีรึป่าว?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="color:#8e8e8e; font-size:14px;">
                  <strong style="color:#1470a8;">เงินเข้าทันที</strong> หลังลูกค้าชำระครับ <code style="color:#f58b0a;">BY:ADMIN</code>
                  </div>
                </div>
              </div>
            </div>
             
             
             
    
             

        </div>
            
            
    </div>
</div>
  
 


    <style>
                
                .headtext {
                    color: #f9f9f9;
                }

                .promotions {
                }
                .promo {
                    text-decoration: none;
                    color: #484a51;
                    border-radius: 5vh;
                    border: solid 1px #e7e7e7;
                    font-size: 10px;
                }
                .imgpost-a {
                    text-decoration: none;
                }
                .imgpost-a:hover{
                    text-decoration: none;
                }
                .imgpost {
                    overflow: hidden;
                    border-radius: 0.5vh;

                }
                .img-hv:hover {
                    transition: transform 2s ease-in-out;
                    transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                }
                .heading {
                    color: #373737;
                    font-weight:400;
                    font-size: 18px;
                }
                .text1 {
                    font-size: 14px;
                    color: #44464d;
                }
                .text2 {
                    background-color: #ff8b00;
                    color: #f9f9f9;
                    padding: 0.2rem 0.5rem;
                    border-radius: 50px;
                    font-size: 11px;
                }
                .text3 {
                    background-color: #f8f8f8;
                    color: #757575;
                    border: solid 1px #dadada;
                    padding: 0.2rem 0.5rem;
                    border-radius: 50px;
                    font-size: 11px;
                }
        .af:hover {
            filter: drop-shadow(5px 5px 10px #000000) invert(5%);
        }
        .app_pre{
            border-radius:1vh;
            
        }
        .pfont {
            color:#c8c8c8;
            font-size:13px;
        }
            .h5 {
            text-align: center;}
            .h5 {
                color: #fff;
                font-size: 24px;
                text-transform: uppercase;
                font-weight: 400;
                background: linear-gradient(to right,#9ea0a3 10%, #4d5d6b 30%, #363c45 60% , #babcbf 98% , #f7f9fc 100%) ;
                
                background-size: auto auto;
                background-clip: border-box;
                background-size: 200% auto;
                color: #fff;
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: textclip 2.5s linear infinite;
                display: inline-block;
            }

                @keyframes textclip {
                    to {
                        background-position: 200% center;
                    }
                }
            </style>
    <!-- END -->








                <style>
                    /* สีปุ่มสั่งซื้อ */
                    .bg-cus {
                            font-size:14px;
                            padding : 0.5rem 1rem;
                            border:none;
                            background: linear-gradient(to right, #717275 0%, #010617 100%);
                    }
                    /* สีปุ่มเวลาเลื่อนเมาส์ */
                    .bg-cus:hover{
                        background: linear-gradient(to right, #113c7d 0%, #1470a8 100%);
                    }
                    /* สีปุ่มรายละเอียด */
                    .bg-tt {
                        color:#c7c7c7;
                        background-color:#131313;
                    }

                    .bg-cus_1{
                            font-size:13px;
                            padding : 0.5rem 1rem;
                            border:none;
                            background: linear-gradient(to right, #d32e2e 0%, #2b2b2b 100%);
                    }
                   
                </style>
    


<!-- </div> -->


    <style>
        .connect{
            background-color:#a9aef9;
            font-size:12px;
            padding: 0.2rem 0.8rem;
            border-radius:0.5vh;
            color:#43488e;
            text-decoration:none;
        }
        .connect:hover{
            color:#a2a8f7;
            background-color:#313562;
        }
        .bb-but:hover{
            color:#ff6e6e;
        }
        .ttcolor {
            text-transform: uppercase;
            /* The above code is setting the background of an element to a linear gradient that starts
            with a color of #ff4040 at the left side and transitions to a color of #ff9e00 at the
            right side. */
            background: linear-gradient(to right, #ff4040 0%, #ff9e00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>










    <!-- </div>-->
   <div id="fb-root"></div>

    <!-- Your ปลั๊กอินแชท code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104229291378232");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
 <!-- Your ปลั๊กอินแชท code -->



       <script>
        $(document).ready(function(){
    $("#myModal").modal('show');
        });
    </script>



  

    <script src="system/js/countup.js"></script>
</div>
</div>
</div>
</div>