<?php
session_start();
error_reporting(0);
require_once("system/a_func.php");
if (isset($_SESSION['id'])) {
    $q1 = dd_q("SELECT * FROM users WHERE id = ? LIMIT 1", [$_SESSION['id']]);
    if ($q1->rowCount() == 1) {
        $user = $q1->fetch(PDO::FETCH_ASSOC);
    } else {
        session_destroy();
        $_GET['page'] = "login";
    }
}
$get_static = dd_q("SELECT * FROM static");
$static = $get_static->fetch(PDO::FETCH_ASSOC);
// $config["pri_color"]   = "#FF2B2B";
// $config["sec_color"]  = "#9A0D0D";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['name']; ?></title>
    <meta property="og:title" content="<?php echo $config['name']; ?> | Homepage">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?php echo $config['name']; ?>">
    <meta property="og:image" content="<?php echo $config['logo']; ?>">
    <meta property="og:description" content="<?php echo $config['des']; ?>">

    

    <link rel="icon" type="image/png" sizes="16x16"  href="./img/DKlogoStroke.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

  
    <link rel="stylesheet" href="system/css/second.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- <link rel="stylesheet" href="system/gshake/css/box.css"> -->
    <link href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="assets/owl/dist/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/owl/dist/assets/owl.theme.default.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Kanit&display=swap" rel="stylesheet">
    <style>
        :root {
            --main: <?php echo $config["main_color"]; ?>;
            --sub: <?php echo $config["sec_color"]; ?>;
            --sub-opa-50: <?php echo $config["main_color"]; ?>80;
            --sub-opa-25: <?php echo $config["main_color"]; ?>;
        }
    </style>
    <link rel="stylesheet" href="system/css/option.css">
    <style>
        .owl-items {
            max-width: 220px;
            max-height: 220px;

        }

        .owl-items img {
            border-radius: 25px !important;
            animation: glow 2s infinite ease-in-out;
        }

        body {
                background-image: url('<?= $config['bg'] ?>');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                overflow-x: hidden;
        }
        
    </style>
</head>

<body style="background-image: url(<?php echo $config["bg"]; ?>)"> <!-- #111015!important; -->
    

<nav class="navbar navbar-dark navbar-expand-lg m-0 shadow-sm mb-0" style="background-color:#f9f9f9" >
             <div class="container-sm col-lg-8 col-12 " style="background-color:#f9f9f9">

                <a class="navbar-brand " href="/?page=home"><img src="<?= $config['logo'] ?>" height="80px" width="auto"></a>


                
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <i class="fa-light fa-diagram-cells fa-fade" style="color: #3f4247;"></i>
                    </button>

                    <div class="offcanvas offcanvas-end text-bg-dark  ps-2 pe-5" style="margin-right:-5rem; background-color:#f9f9f9" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                      
                        <div class="offcanvas-header  mt-2 text-center">

                       <img src="<?php echo $config['logo']; ?>" class="offcanva" width="150px" id="offcanvasDarkLabel" >
                          
                        <button type="button" class="btn-close btn-close-dark me-4 pe-5" data-bs-dismiss="offcanvas" aria-label="Close" style="font-size:14px;"></button>
                          
                          
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 p-2">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" style="font-size:14px; color:#636363; font-weight: bold;" href="/?page=home" >หน้าหลัก</a>
                            </li>

                            

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" style="font-size:14px ; color:#636363;" href="/?page=topup">เติมเงิน</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" style="font-size:14px ; color:#636363;" href="/?page=shop" rel="">ร้านค้า</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" style="font-size:14px ; color:#636363;" href="/?page=premiumapp" rel="">แอพพรีเมียม</a>
                            </li>


                           





                           
                            <li class="nav-item dropdown  btn-log-0">
                                            <a class="nav-link dropdown-toggle" style="font-size:14px ; color:#636363;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ติดต่อเรา</a>
                                    
                                            <ul class="dropdown-menu dropdown-menu-dark me-4">
                                                <li>
                                                    <a class="dropdown-item mb-1" style="font-size:14px" href="<?php echo $config["contact"]; ?>">
                                                        <i class="fa-brands fa-square-facebook" style="color: #74b5ff;"></i>&nbsp; Facebook</a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item mb-1" style="font-size:14px" href="https://line.me/ti/p/r7s4vvnL6H">
                                                    <i class="fa-brands fa-line" style="color: #63E6BE;"></i>&nbsp; Line</a>
                                                </li>
                                                
                                             
                                            </ul>
                                        

                            </li>






                        </ul>

                        <style>
                            @media only screen and (max-width: 600px) {
                                            
                                                    .btn-log-1 {
                                                    border-radius:1vh;
                                                    padding:0.2rem 0.5rem;
                                                    margin-right:2.5rem;
                                                    text-align: center;
                                                }
                                            }
                        </style>

                                    <?php
                                    if (!isset($_SESSION['id'])) {
                                    ?>
                                        <ul class="navbar-nav mb-2 mt-2 col-lg-0 ">
                                            <li class="nav-item mb-2 btn-log">
                                                <a class="nav-link  align-self-center" 
                                                style="color:#6992c1; padding: 0.2rem 0.5rem; font-size:14px;"
                                                aria-current="page" href="?page=login">
                                                <i class="fa-light fa-right-to-bracket"></i>&nbsp; เข้าสู่ระบบ</a>
                                            </li>

                                            <style>
                                                .btn-log {
                                                    background-color:#c8e2ff;
                                                    border-radius:0.4vh;
                                                    padding:0.2rem 0.5rem;
                                                }
                                                .btn-log:hover {
                                                    background-color:#9bcaff;
                                                }
                                                .btn-log-1 {
                                                    border-radius:1vh;
                                                    padding:0.2rem 0.5rem;
                                                }

                                                @media only screen and (max-width: 600px) {
                                                    .btn-log {
                                                    background-color:#1e1e1e;
                                                    border-radius:1vh;
                                                    padding:0.2rem 0.5rem;
                                                    margin-right:2.5rem;
                                                    text-align: center;

                                                }
                                                    .btn-log:hover {
                                                    background-color:#932828;
                                                }
                                                        .btn-log-1 {
                                                    border-radius:1vh;
                                                    padding:0.2rem 0.5rem;
                                                    margin-right:2.5rem;
                                                    text-align: center;
                                                }
                                                }

                                            </style>

                                            <li class="nav-item mb-2 btn-log-1">
                                                <a class="nav-link "
                                                style="border-radius:1vh; padding: 0.2rem 0.5rem;  font-size:14px; color:#636363;"
                                                aria-current="page" href="?page=register">
                                                <i class="fa-light fa-user-plus"></i> สมัครสมาชิก</a>
                                            </li>
                                        </ul>
                                    <?php
                                    } else {
                                    ?>
            
                                        <ul class="navbar-nav me-5 mt-2 mb-lg-0 ">
                                            <li class="nav-item dropdown" style="list-style: none;">
                                            
                                                <a class="nav-link active" style="font-size:14px; color:#636363;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#343434;">
                                                <i class="fa-solid fa-user-vneck-hair"></i> &nbsp;:&nbsp; โปร์ไฟล์ของฉัน
                                                </a>

                                                    <ul class="dropdown-menu shadow-sm p-2 me-3 ms-3 pt-2 pb-2 text-white" style="border-radius: 1vh; background-color:#2a2a2a;" aria-labelledby="navbarDropdown">

                                                        <li>
                                                        <a class="dropdown-item mb-1 disabled  text-center" ><small>
                                                            &nbsp;&nbsp;ชื่อผู้ใช้ :<?php echo htmlspecialchars($user["username"]); ?></small></a>
                                                        </li>

                                                        <a class="dropdown-item mb-1 disabled  text-center" ><small>
                                                            <i class="fa-duotone fa-circle-dollar" style="--fa-primary-color: #d8a301; --fa-secondary-color: #fefaf1;"></i>&nbsp;&nbsp;เครดิต : <?php echo $user["point"]; ?>
                                                        </small>
                                                        </a>

                                                        <li>
                                                        <a class="dropdown-item mb-1 disabled  text-center" ><small>
                                                            &nbsp;&nbsp;ยอดเติมสะสม : <?php echo $user["total"]; ?></small></a>
                                                        </li>
                                                    </li>
                                                        
                                                    
                                                    <div class="dropdown-divider text-white"></div>

                                                    <li ><a class="dropdown-item tout mb-1 text-white" href="?page=profile&subpage=cpass"><small>
                                                       <i class="fa-duotone fa-lock text-main fa-fade"></i> &nbsp;&nbsp;เปลี่ยนรหัสผ่าน</small></a></li>
                                                       
                                                   
                                                    <!-- ประวัติการสั่งซื้อ -->
                                                    <li><a class="dropdown-item tout mb-1 text-white" href="?page=profile&subpage=topuphis"><small>
                                                    <i class="fa-duotone text-main fa-clock-rotate-left fa-spin fa-spin-reverse"></i> &nbsp;&nbsp;ประวัติการเติมเงิน</small></a></li>
                                                    
                                                    <li><a class="dropdown-item tout mb-1 text-white" href="?page=profile&subpage=buyhis"><small>
                                                    <i class="fa-duotone text-main fa-clock-rotate-left fa-spin fa-spin-reverse"></i> &nbsp;&nbsp;ประวัติการสั่งซื้อแอพ</small></a></li>
                                                    <!-- ประวัติการสั่งซื้อ -->

                                                    <?php
                                                    if ($user["rank"] == "1") {
                                                    ?>
                                                    <li><a class="dropdown-item mb-1" href="?page=backend" style="color:#2e90ec" ><small><i class="fa-regular fa-pen-to-square"></i> &nbsp;จัดการร้านค้า [แอดมิน]</small></a></li>
                                                    <li><a class="dropdown-item mb-1" href="?page=help" style="color:#2e90ec" ><small><i class="fa-regular fa-question"></i> &nbsp;ช่วยเหลือสำหรับแอดมินมือใหม่</small></a></li>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="dropdown-divider"></div>

                                                    <li>
                                                        <a class="dropdown-item tout mb-2 text-center text-white" href="?page=logout">
                                                            <small>
                                                                <i class="fa-duotone fa-right-to-bracket"></i>&nbsp;ออกจากระบบ
                                                            </small></a>

                                                            <style>
                                                                 .tout {
                                                                    color:#ffffff;
                                                                 }
                                                                .tout:hover {
                                                                    color:#f75555;
                                                                    background-color:#171616;
                                                                }
                                                              
                                                            </style>
                                                    </li>
                                                
                                                </ul>
                                            </li>
                                        </ul>
                                    <?php
                                    }
                                ?>
                        
                        </div>
                    </div>
                </div>
            </nav>





    

   <?php
    function admin($user)
    {
        if (isset($_SESSION['id']) && $user["rank"] == "1") {
            return true;
        } else {
            return false;
        }
    }
    if (isset($_GET['page']) && $_GET['page'] == "menu") {
        require_once('page/simple.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == "login" && !isset($_SESSION['id'])) {
        require_once('page/login.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == "logout" && isset($_SESSION['id'])) {
        session_destroy();
        echo "<script>window.location.href = '';</script>";
    } elseif (isset($_GET['page']) && $_GET['page'] == "profile" && isset($_SESSION['id'])) {
        require_once('page/profile.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == "topup") {
        if (isset($_SESSION['id'])) {
            require_once('page/topup.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "redeem") {
        if (isset($_SESSION['id'])) {
            require_once('page/redeem.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "id") {
        if (isset($_SESSION['id'])) {
            require_once('page/id.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "gp") {
        if (isset($_SESSION['id'])) {
            require_once('page/gp.php');
        } else {
            require_once('page/login.php');
        }
            } elseif (isset($_GET['page']) && $_GET['page'] == "service") {
        if (isset($_SESSION['id'])) {
            require_once('page/service.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "service_buy") {
        if (isset($_SESSION['id'])) {
            require_once('page/service_buy.php');
        } else {
            require_once('page/login.php');
        }
    
    } elseif (isset($_GET['page']) && $_GET['page'] == "product" && isset($_GET['id'])) {
        if (isset($_SESSION['id'])) {
            require_once('page/product.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "slidebloxfruit") {
        if (isset($_SESSION['id'])) {
            require_once('page/csgo_1.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "id_p" && isset($_GET['id'])) {
        if (isset($_SESSION['id'])) {
            require_once('page/id_p.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "shop") {
        if (isset($_SESSION['id'])) {
            require_once('page/shop.php');
        } else {
            require_once('page/shop.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "help") {
        if (isset($_SESSION['id'])) {
            require_once('page/help.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "premiumapp") {
        if (isset($_SESSION['id'])) {
            require_once('page/premiumapp.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "howto") {
        if (isset($_SESSION['id'])) {
            require_once('page/howto.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "buyapp") {
        if (isset($_SESSION['id'])) {
            require_once('page/buyapp.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "newpost") {
        if (isset($_SESSION['id'])) {
            require_once('page/promo/newpost.php');
        } else {
            require_once('page/newpost.php');
        }

    } elseif (isset($_GET['page']) && $_GET['page'] == "buy") {
        if (isset($_SESSION['id'])) {
            require_once('page/buy.php');
        } else {
            require_once('page/login.php');
        }

    } elseif (isset($_GET['page']) && $_GET['page'] == "question") {
        if (isset($_SESSION['id'])) {
            require_once('page/question.php');
        } else {
            require_once('page/login.php');
        }

    } elseif (isset($_GET['page']) && $_GET['page'] == "my_premiumapp") {
        if (isset($_SESSION['id'])) {
            require_once('page/myapp.php');
        } else {
            require_once('page/login.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == "register" && !isset($_SESSION['id'])) {
        require_once('page/register.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "user_edit") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "product_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "stock_manage" && $_GET['id'] != "") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "code_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "slip_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_buy_historyapi") {
        require_once('page/backend/menu_manage.php');
	} elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "product_managepeamsub") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "category_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_buy_history") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "backend_topup_history") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "carousel_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "recom_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "my_order") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order_success") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order_unsuccess") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "order_temp") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_manage") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_manage_cate") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_manage_main") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "service_his") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "crecom_manage") {
        require_once('page/backend/menu_manage.plohp');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "ccom_manage") {
        require_once('page/backend/menu_manage.plohp');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "website") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "apibyshop") {
        require_once('page/backend/menu_manage.php');
    } elseif (admin($user) && isset($_GET['page']) && $_GET['page'] == "apibyshop_his") {
        require_once('page/backend/menu_manage.php');
    } else {
        require_once('page/simple.php');
    }
    ?>

    
    <div class="modal fade" id="buy_count" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="modal_title"><i class="fa-duotone fa-cart-shopping-fast"></i>&nbsp;&nbsp;สั่งซื้อสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                
                <div class="modal-body p-3 pb-2">
                    <div class="mb-2">
                        <p class="mb-1 text-secondary">จำนวนที่ต้องการสั่งซื้อ<span class="text-danger">*</span></p>
                        <input type="number" id="b_count" class="form-control text-center" value="1">
                    </div>
                    <div class="d-flex justify-content-between pe-2 ps-2 mt-2">
                        <!-- <span class="m-0 align-self-center">คงเหลือ <code id="s"><?php echo $count; ?></code> ชิ้น </span> -->
                        

                        <a href="<?php echo $config["contact"]; ?>" style="text-decoration:none">
                            <span class="m-0 bb-ex" style=" font-size:13px; color: #4b6d4b; padding: 3.5px 8px; border-radius: 6px; background-color:#bdd6bd; font-weight:300"><b>
                                <span id="b">
                                <img class="mb-1" width="18px" src="https://cdn.discordapp.com/attachments/1170981715506892801/1209759124947210261/logodedazen.png?ex=65e816fb&is=65d5a1fb&hm=f1c0f6f5916a4f6e996a94308e3b900073e4b4e621efe482df23de5efd852f79&"></i> 
                                Ducker Shop</b>
                            </span>
                        <a/>   
                        
                        <span class="m-0" style=" font-size:13px; color: white; padding: 3.5px 8px; border-radius: 1vh; background-color:#ff918a; font-weight:300"><b>
                            <span id="b">
                            <i class="fa-solid fa-circle-exclamation fa-bounce fa-sm" style="color: #e4292e;"></i> ไม่มีการคืนเงินทุกกรณี</b>
                        </span>

                       


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="shop-btn" class="btn w-100 shopbtn" onclick="buybox()" data-id="" data-name="">
                    <i class="fa-duotone fa-bag-shopping fa-fade"></i>&nbsp;&nbsp;สั่งซื้อตอนนี้</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-back pt-2 pb-2 mt-3">
        <center>    
            <p class="text-white mb-1" style="font-weight:300; font-size:13px;"><strong style="color:#646464">สงวนสิทธิ์ <i class="fa-regular fa-copyright"></i>&nbsp; 2024
            <a href="https://m.me/DuckerChat" class="tblu">Ducker Shop </a>, All right reserved (ทางร้านเป็นเพียงตัวแทนจำหน่ายแอพพรีเมี่ยมเท่านั้น ไม่มีส่วนเกี่ยวข้องกับองค์กรหรือบุคคลใดๆ)</strong></p>
            <a class="tbbg" href="<?php echo $config["contact"]; ?>">ติดต่อสอบถาม / แจ้งปัญหา</a>
        </center>
    </div>

    <style>
        .shopbtn {
            border-radius:1vh;
            background-color: #e34343; 
            color: #fff;
        }
        .shopbtn:hover{
            background-color: #560000; 
            color: #fff;
            filter: drop-shadow(8px 8px 20px red) invert(15%);
        }
        .tblu {
            text-transform: uppercase;
            background: linear-gradient(to right, #6072bc 0%, #85b2e6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
        }
        .tbbg {
            text-decoration:none;
            font-size:13px;
            color:#4d4d4d;
        }
        .tbbg:hover{
            text-transform: uppercase;
            background: linear-gradient(to right, #85b2e6 0%, #bd85e6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>



    <script>
        function tobuy(id, name, s, b) {
            $("#modal_title").html('<i class="fa-duotone fa-cart-shopping-fast"></i>&nbsp;&nbsp;' + name);
            $("#shop-btn").attr("data-id", id);
            $("#shop-btn").attr("data-name", name);
            $("#s").html(s);
            $("#b").html(b);
            const myModal = new bootstrap.Modal('#buy_count ', {
                keyboard: false
            })
            myModal.show();
        }

        function detail(id) {
            var formData = new FormData();
            formData.append('id', id);

            $.ajax({
                type: 'POST',
                url: 'system/call/product_detail.php',
                data: formData,
                contentType: false,
                processData: false,
            }).done(function(res) {
                $("#p_img").attr("src", res.img);
                $("#p_name").html(res.name);
                $("#p_des").html(res.des);
                const myModal = new bootstrap.Modal('#product_detail', {
                    keyboard: false
                })
                myModal.show();
            }).fail(function(jqXHR) {
                console.log(jqXHR);
                res = jqXHR.responseJSON;
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: res.message
                })
                //console.clear();
            });
        }
    </script>


    <script>
        async function shake_alert(status, result) {
            if (status) {
                if (result.salt == "prize") {
                    // await GShake();
                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: result.message
                    }).then(function() {
                        window.location = "?page=profile&subpage=buyhis";
                    });
                } else {
                    await GShake();
                    Swal.fire({
                        icon: 'error',
                        title: 'เสียใจด้วย',
                        text: result.message
                    });
                }
            } else {
                if (result.salt == "salt") {
                    // await GShake();
                    Swal.fire({
                        icon: 'error',
                        title: 'เสียใจด้วย',
                        text: result.message
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ผิดพลาด',
                        text: result.message
                    });
                }
            }
        }

        function buybox() {
            var name = $("#shop-btn").attr("data-name");
            var formData = new FormData();
            formData.append('id', $("#shop-btn").attr("data-id"));
            formData.append('count', $("#b_count").val());
            Swal.fire({
                title: 'ยืนยันการสั่งซื้อ?',
                text: "ยืนยันที่จะซื้อ " + name + " หรือไม่",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3b2e69',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: 'system/buybox.php',
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $('#btn_buyid').attr('disabled', 'disabled');
                            $('#btn_buyid').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>รอสักครู่...');
                        },
                    }).done(function(res) {
                        console.log(res)
                        result = res;
                        // await GShake();
                        shake_alert(true, result);
                        console.clear();
                        $('#btn_buyid').html('<i class="fas fa-shopping-cart mr-1"></i>สั่งซื้อสินค้า');
                        $('#btn_buyid').removeAttr('disabled');
                    }).fail(function(jqXHR) {
                        console.log(jqXHR)
                        res = jqXHR.responseJSON;
                        shake_alert(false, res);

                        $('#btn_buyid').html('<i class="fas fa-shopping-cart mr-1"></i>สั่งซื้อสินค้า');
                        $('#btn_buyid').removeAttr('disabled');
                    });
                }
            })
        }
    </script>
    <script>
        AOS.init();
        // var options = {
        //     strings: [`<?php //echo $s_info['des']; ?>`],
        //     typeSpeed: 40,
        //     color: "#fff"
        // };
        // var typed = new Typed('#typing', options);
    </script>
</body>

</html>