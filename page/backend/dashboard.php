<?php
$f = dd_q("SELECT * FROM setting");
$dt = $f->fetch(PDO::FETCH_ASSOC);
$keyapip = $dt['keyapipeamsub'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://peamsub24hr.online/api/money',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array('apikey: ' . $keyapip ),
));

$response = curl_exec($curl);
$peamsub = json_decode($response);
curl_close($curl);
?>
<?php 
    //topup by day
    date_default_timezone_set("Asia/Bangkok");
    $midnight = strtotime("today 00:00");
    $date_day =  date('Y-m-d H:i:s', $midnight);
    $q_1 = dd_q("SELECT sum(amount) AS total FROM topup_his WHERE date > ?",[$date_day]);
    $day = $q_1->fetch(PDO::FETCH_ASSOC);
    if($day["total"] == null){
        $day["total"] = "0.00";
    }
    // topup by month
    date_default_timezone_set("Asia/Bangkok");
    $midnight = strtotime("today 00:00");
    $date_month =  date('Y-m-01 H:i:s', $midnight);
    $q_2 = dd_q("SELECT sum(amount) AS total FROM topup_his WHERE date > ?",[$date_month]);
    $month = $q_2->fetch(PDO::FETCH_ASSOC);
    if($month["total"] == null){
        $month["total"] = "0.00";
    }
    // topup all
    $q_3 = dd_q("SELECT sum(amount) AS total FROM topup_his ");
    $topup = $q_3->fetch(PDO::FETCH_ASSOC);
    if($topup["total"] == null){
        $topup["total"] = "0.00";
    }
    //shop by day
    $q_4 = dd_q("SELECT id FROM boxlog WHERE date > ?",[$date_day]);
    $box_day = $q_4->rowCount();
    // shop by month
    $q_5 = dd_q("SELECT id FROM boxlog WHERE date > ?",[$date_month]);
    $box_month = $q_5->rowCount();
    // shop by all
    $q_6 = dd_q("SELECT id FROM boxlog");
    $box_all = $q_6->rowCount();

?>

<style>
    .ff {
        text-transform: uppercase;
            background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
    }

    .boxcard {
        background-color:#f3f3f3;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;  
        border-radius: 10px;">
             
    }
    @media only screen and (max-width: 600px)
        {
            .fsm {
              font-size:13px;  
            }
        }
          
    
</style>


<div class="container-sm mt-0 shadow-sm p-4 mb-4" >
    <center>
        <h3 class="ff"><i class="fa-regular fa-chart-line"></i>&nbsp;ผลสรุป ร้านค้า</h3>
    </center>

    
    <div class="row jusify-content-between  mt-4">
        
		
		<div class="col-lg-12 mb-2">
                
                <div class="container-fluid boxcard p-4">
                <center>
                    <h1 class="td"><?php echo $topup["total"];?>฿</h1>
                    <h5 class="text-dark fsm">การเติมเงินทั้งหมด</h5>
                </center>
            </div>
            </div>
		
        <div class="col-lg-4 col-6 mb-2">
             <div class="container-fluid boxcard p-4">
                <center>
                    <h1 class="td"><?php echo $box_day;?></h1>
                    <h5 class="text-dark fsm">การซื้อสินค้าวันนี้</h5>
                </center>
            </div>
        </div>

        <div class="col-lg-4 col-6 mb-2">
            <div class="container-fluid boxcard p-4">
                <center>
                    <h1 class="td"><?php echo $day["total"];?>฿</h1>
                    <h5 class="text-dark fsm">ยอดการเติมในวันนี้</h5>
                </center>
            </div>
        </div>

        <div class="col-lg-4 col-6  mb-2">
            <div class="container-fluid boxcard p-4">
                <center>
                    <h1 class="td"><?php echo $box_month;?></h1>
                    <h5 class="text-dark fsm">การซื้อสินค้าเดือนนี้</h5>
                </center>
            </div>
        </div>
        
        <div class="col-lg-6 col-6 mb-2">
            <div class="container-fluid boxcard p-4 ">
                <center>
                    <h1 class="td "><?php echo $month["total"];?>฿</h1>
                    <h5 class="text-dark fsm">การเติมเงินเดือนนี้</h5>
                </center>
            </div>
        </div> 
        
        <div class="col-lg-6 col-12 mb-2">
             <div class="container-fluid boxcard p-4"><center>
                    <h1 class="td"><?php echo $box_all;?></h1>
                    <h5 class="text-dark fsm">การซื้อสินค้าทั้งหมด</h5>
                </center>
            </div>
        </div>

    
     
    </div>
    
    <style>
        .td {
            color:#84ade8
        }
    </style>


         
<!-- New DD -->
<style>
    /* demo */
    .cooo {
            font-size:16px;
            color:#ffffff;
            background-color:#57874e;
        }

        
        .card {
            background-color: rgb( 51, 86, 56 );
            background: linear-gradient(to top right, rgb( 40, 52, 37 ), rgb( 20, 50, 13 ));
            background: -webkit-linear-gradient(to top right, rgb(  40, 52, 37  ), rgb( 20, 50, 13 ));
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid rgb( 135, 185, 124 );
            }
    .title {
        color:#f4f4f4;
    }
    .button {
        text-decoration: none;
    }
    .title-2 {
        color:#66be60;
        font-size:13px;

    }
    .button-text {
        font-size:13px;
        color:#f8f8f8;
       
    }
    .fb {
        font-size:13px;
        color:#da482e;
    }
    .contect_admin {
        background-color:#3f4c3f;
        text-decoration: none;
        font-size:13px;
        color:#79c479;
    }
    .contect_admin:hover {
        border: solid 1px #61dd61;
        color:#61dd61;
    }
    .img_profile {
        border-radius:100%;
        border: solid 1px #61dd61;
        float:right;
    }
</style>
<div class="container-sm mt-0 shadow-sm p-4 mb-4" >
    <script>
            // Set the date we're counting down to
            var countDownDate = new Date("March 15, 2025 00:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
           /*  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000); */
                
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "  วัน  "; /* + hours + " ชั่วโมง   "
            + minutes + " นาที "; */
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
            }, 1000);
            </script>

    <!-- New DD -->    
    