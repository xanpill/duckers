<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../../a_func.php';

    function dd_return($status, $message) {
        $json = ['message' => $message];
        if ($status) {
            http_response_code(200);
            die(json_encode($json));
        }else{
            http_response_code(400);
            die(json_encode($json));
        }
    }

    //////////////////////////////////////////////////////////////////////////

    header('Content-Type: application/json; charset=utf-8;');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['id'])) {

        if ($_POST['id'] != "") {
            $q_1 = dd_q('SELECT * FROM users WHERE id = ? AND rank = 1 ', [$_SESSION['id']]);
            if ($q_1->rowCount() >= 1) {
                $get_user = dd_q("SELECT *  FROM box_product WHERE id = ? ", [$_POST['id']]);
                if($get_user->rowCount() == 1){
                    $row = $get_user->fetch(PDO::FETCH_ASSOC);
                    $data = [
                        "name" => $row['name'],
                        "price" => $row['price'],
                        "price_vip" => $row['price_vip'],
                        "img" => $row['img'],
                        "img_2" => $row['img_2'],
                        "img_3" => $row['img_3'],
                        "img_4" => $row['img_4'],
                        "img_5" => $row['img_5'],
                        "img_6" => $row['img_6'],
                        "img_7" => $row['img_7'],
                        "img_8" => $row['img_8'],
                        "img_9" => $row['img_9'],
                        "img_10" => $row['img_10'],
                        "type" => $row['type'],
                        "c_type" => $row['c_type'],
                        "des" => $row['des'],
                    ];
                    http_response_code(200);
                    die(json_encode($data));
                }else{
                    dd_return(false, "SQL ผิดพลาด");
                }
            }else{
                dd_return(false, "เซสชั่นผิดพลาด โปรดล็อกอินใหม่");
                session_destroy();
            }
        }else{
            dd_return(false, "กรุณากรอกข้อมูลให้ครบ");
        }
        }else{
        dd_return(false, "เข้าสู่ระบบก่อน");
        }
    }else{
        dd_return(false, "Method '{$_SERVER['REQUEST_METHOD']}' not allowed!");
    }
?>
