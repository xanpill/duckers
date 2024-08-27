<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../a_func.php';

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

        if (
            $_POST['id'] != "" AND $_POST['product'] != "" AND $_POST['img'] != "" AND
            $_POST['price_default'] != "" AND $_POST['price'] != "" AND $_POST['vip_price'] != "" AND $_POST['des'] != "" AND $_POST['c_type'] != ""
        ) {
            $_POST['price'] = preg_replace('~\R~u', "\n", $_POST['price']);
            $q_1 = dd_q('SELECT * FROM users WHERE id = ? AND rank = 1 ', [$_SESSION['id']]);
            if ($q_1->rowCount() >= 1) {
                $insert = dd_q("UPDATE apipeam_product SET product = ? , img = ? , price_default = ? , price = ? , vip_price = ? , des = ? , c_type = ? WHERE id = ? ", [
                    $_POST['product'],
                    $_POST['img'],
                    $_POST['price_default'],
                    $_POST['price'],
                    $_POST['vip_price'],
                    $_POST['des'],
                    $_POST['c_type'],
                    $_POST['id'],
                ]);
                if($insert){
                    dd_return(true, "บันทึกสำเร็จ");
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
