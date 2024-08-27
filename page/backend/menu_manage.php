<style>
    .ff {
        text-transform: uppercase;
            background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
    }
/* CD MANU */
    .cd {
        color:#474747;
    }
    .cd:hover {
        color:#f3950c;
    }

/* BG-CD MANU */
    .bg-cd {
        background-color:#0e0f13
    }
    
/* CD-1 drop manu */
    .cd-1 {
        color:#e7e7e7;
        filter: drop-shadow(10px 10px 30px red) invert(15%);
    }
    .cd-1:hover {
            text-transform: uppercase;
            background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
    }

 
</style>            
            <div class=" pt-2 col-lg-12" style="display: flex; justify-content: center;" >
                <nav class="navbar navbar-expand-lg me-4 ms-4" >
                        <div class="container-fluid">
                            <a class="navbar-brand ff" href="#">จัดการหลังบ้าน</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-duotone fa-diagram-cells fa-fade p-1" style="--fa-primary-color: #df8811; --fa-secondary-color: #df8811;"></i>
                            
                            </button>

                            <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 150px;">
                               
                                <li class="nav-item">
                                    <a class="nav-link cd" aria-current="page" href="?page=backend">ผลรวมร้านค้า</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active cd" aria-current="page" href="?page=website">ตั้งค่าเว็บไซต์</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active cd" aria-current="page" href="?page=apibyshop">ตั่งค่า Key API </a>
                                </li>
                                

                                <li class="nav-item">
                                    <a class="nav-link active cd" aria-current="page" href="?page=carousel_manage">จัดการรูปภาพสไลด์</a>
                                </li>


                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cd" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    จัดการการเติมเงิน
                                </a>
                                    <ul class="dropdown-menu bg-cd">
                                        <li><a class="dropdown-item cd-1" href="?page=slip_manage">จัดการธนาคาร</a></li>
                                        <li><a class="dropdown-item cd-1" href="?page=code_manage">จัดการโค้ด</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cd" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    จัดการร้านค้า
                                </a>
                                    <ul class="dropdown-menu bg-cd">
                                        <li><a class="dropdown-item cd-1" href="?page=product_manage">จัดการสินค้า</a></li>
                                        <li><a class="dropdown-item cd-1" href="?page=category_manage">จัดการหมวดหมู่</a></li>
                                        <li><a class="dropdown-item cd-1" href="?page=user_edit">จัดการสมาชิก</a></li>
                                        <a class="dropdown-item cd-1" href="?page=recom_manage">สินค้าแนะนำ แสดงหน้าแรก</a>
                                    </ul>
                                </li>


                              
                                <li class="nav-item mt-1">
                                    
                                </li>

                               


                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cd" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ประวัติทั้งหมด
                                </a>
                                    <ul class="dropdown-menu bg-cd">
                                        <li><a class="dropdown-item cd-1" href="?page=backend_buy_history">ประวัติการสั่งซื้อแอพ</a></li>
                                        <li><a class="dropdown-item cd-1" href="?page=backend_topup_history">ประวัติการเติมเงิน</a></li>
                                    </ul>
                                </li>

                            </ul>
                            
                            </div>
                        </div>
                 </nav>
                 </div>

                <?php
                if (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend") {
                    require_once('page/backend/dashboard.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "user_edit") {
                    require_once('page/backend/user_edit.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "category_manage") {
                    require_once('page/backend/category.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "product_manage") {
                    require_once('page/backend/product.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "stock_manage" && $_GET['id'] != "") {
                    require_once('page/backend/stock.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "code_manage") {
                    require_once('page/backend/code_manage.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "slip_manage") {
                    require_once('page/backend/slip_manage.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_buy_historyapi") {
                    require_once('page/backend/buy_historyapi.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_buy_history") {
                    require_once('page/backend/buy_history.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_topup_history") {
                    require_once('page/backend/topup_history.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "website") {
                    require_once('page/backend/website.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "carousel_manage") {
                    require_once('page/backend/carousel_manage.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "recom_manage") {
                    require_once('page/backend/recom_manage.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "crecom_manage") {
                    require_once('page/backend/crecom_manage.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "ccom_manage") {
                    require_once('page/backend/ccom_manage.php');
                }elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "apibyshop") {
                    require_once('page/backend/apibyshop.php');
                    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "my_order") {
                    require_once('page/backend/my_order.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order") {
                    require_once('page/backend/order.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order_success") {
                    require_once('page/backend/order_success.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order_unsuccess") {
                    require_once('page/backend/order_unsuccess.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order_temp") {
                    require_once('page/backend/order_temp.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_manage") {
                    require_once('page/backend/service_manage.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_manage_main") {
                    require_once('page/backend/service_manage_main.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_manage_cate") {
                    require_once('page/backend/service_manage_cate.php');
                } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_his") {
                    require_once('page/backend/service_his.php');
                }elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "apibyshop_his") {
                    require_once('page/backend/apibyshop_his.php');

                }
                ?>
            </div>          
        </div>
    </div>
</div>