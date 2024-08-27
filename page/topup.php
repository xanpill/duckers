<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style>
    /* hr{
        border-top: 3px solid #000;
    } */
    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    /* #card */

    .card-1 {
        background-color:#f3f3f3;   
        border-radius:3vh;
    }

    .card {
        background-color:#f3f3f3;   
        border-radius:3vh;
    }

    .truemoney {
        background-color:#fff;
        border:none;
        border-radius:2vh;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 2px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;

    }
    .truemoney:hover {
        background-color:#e8e8e8;
        color:#ececec;
    }
    
    .truemoney img {
        margin-top:0.1rem;
        padding:2px;
        margin-left:1.3rem;
    }
    .truemoney h6 {
        font-weight:600;
        color:#292929;
        float: left;
        margin-top:1.5rem;
    }
    .truemoney p {
        color:#afafaf;
        font-size:13px;
        margin-top:-0.5rem;
        float: left;
    }
    .topup_btn {
        background-color:#272727;
        border:none;
        padding:0.5rem;
    }
    .topup_btn:hover{
        background-color:#bd2424;
    }
    .fc {
        
        text-transform: uppercase;
	background: linear-gradient(to right, #8ab7e7 0%, #7287e7 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
    }

    .btn_modal {
        background: #0f0c29;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        border-radius:1vh;
        padding: 0.5rem 2rem;
        border:none;
    }

    .btn_modal:hover{
        color:#ffa600;
        background: #323232;
    }

    .ttcolor {
            text-transform: uppercase;
            background: linear-gradient(to right, #113c7d 0%, #1470a8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

</style>
           


<div class="container-fluid mt-3 p-0 " style="margin-bottom:8rem;"> 
<div class="container-sm p-2" data-aos="fade-left">
    

<center class="mt-2 mb-2">
    <span class="h4  ttcolor"><b>ช่องทางการชำระเงิน</b></span>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center mt-0">
            <li class="breadcrumb-item"><a style="text-decoration: none; color: #f0ab0c; font-size:13px;"> หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a style="text-decoration: none; color: #6C757D; font-size:13px;"> รายการทั้งหมด</a></li>

        </ol>
    </nav>


    


</center>

        <div class="container text-center mt-4">
            <div class="row">

            <!-- เริ่มต้น -->

                <div class="col-sm-4">
                    <div class="p-4">
                        <div class="w3-bar w3-black">

                        
                        <button class="w3-bar-item w3-button truemoney mb-2" onclick="openCity('truemoney')">
                            <img class="col-3" src="assets/icon/angpao.png" width="45" style="float: left;" alt="">
                            <h6>Truemoney อั่งเปา</h6>
                            <p>เติมเงินผ่านซองของขวัญ</p>
                        </button>

                        <button class="w3-bar-item w3-button truemoney mb-2"onclick="openCity('qrcode')">
                            <img class="col-3" src="assets/icon/slip.png"  width="30" style="float: left;" alt="">
                            <h6>เติมเงินผ่านธนาคาร</h6>
                            <p>ยืนยันสลิปด้วย QR-CODE</p>
                        </button>

                        <a href="?page=redeem"><button class="w3-bar-item w3-button truemoney mb-2">
                            <img class="col-3" src="assets/icon/code.png" width="30" style="float: left;" alt="">
                            <h6>Gift-Code Buzzer</h6>
                            <p>เติมเงินโดยใช้โค๊ดจากร้าน</p>
                        </button></a>
                        

                       


                        </div>
                    </div>
                </div>


                <div class="col-sm-8 mt-1">
                    <div class="card-1"  style="background-color:f9f9f9">
                        
                                <!-- true Money Angpao -->
                                    <div id="truemoney" class="w3-container city">

                                                <div class="ps-4 pe-4 pt-3" >
                                                   <!-- ค่าธรรมเนียม -->
                                                   <?php if ($config['fee'] == "on") { ?>
                                                        <div data-aos="fade-left" data-aos-duration="750">
                                                            <p class=" text-center"><b style="color:#e51812; font-size:13px; margin-bottom:0.1rem;">
                                                            <i class="fa-duotone fa-circle-xmark fa-fade" style="--fa-primary-color: #f10a0f; --fa-secondary-color: #6f0003;"></i> ค่าธรรมเนียม 2.9 %</b></p>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($config['fee'] == "off") { ?>
                                                        <div data-aos="fade-left" data-aos-duration="750">
                                                            <p class="text-center"><b style="color:#3dad09; font-size:13px; margin-bottom:0.1rem;">
                                                            <i class="fa-duotone fa-circle-check fa-fade" style="--fa-primary-color: #06b013; --fa-secondary-color: #05690d;"></i> ไม่มีค่าธรรมเนียม</b></p>
                                                        </div>
                                                    <?php } ?>
                                                     <!-- ค่าธรรมเนียม -->
                                                   
                                                </div>
                                                
                                                        <div class="input-group mb-2 pe-4 ps-4">
                                                          
                                                             <input type="text" id="link" class="form-control text-center mt-1" style="border-radius: 1vh;" placeholder="กรอกลิงค์ซองของขวัญที่นี่">
                                                        
                                                        </div>

                                                        <div class="pe-4 ps-4">

                                                        <button class="bg-main-gra btn mt-0 text-white w-100" id="topup_btn" style="border-radius: 1vh;" data-aos="fade-up" data-aos-duration="800"><i class="fa-duotone fa-circle-check fa-fade" style="--fa-primary-color: var(--main); --fa-secondary-color: var(--main);"> </i>ยืนยันการเติมเงิน</button>

                                                         
                                                            <center class="p-2">
                                                                <p class="m-2" style="font-size:13px; color:#3f3f3f;">หากกดทำรายการไม่ได้ ให้ทำการรีเซ็ตหน้าเว็บใหม่ครับ</p>
                                                            </center>

                                                            
                                                </div>

                                                <a href="?page=howto" class="btn">| วิธีการสร้างซองของขวัญ |</a>


                                            <center>
                                                <div id="capcha" class="g-recaptcha mt-4" data-theme="dark" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                            </center>


                                    </div>

                                    

                                    <!-- Scan QR CODE -->
                                    <div id="qrcode" class="w3-container city" style="display:none">
                                          <!-- QRCODE -->
                                    <div class="input-group mb-2 pe-4 ps-4">

                                </div>

                                    <div class="pe-4 ps-4 pb-4">
                                    <h6 class="mt-3 " style="color:#494949; font: size 13px;"><i class="fa-duotone fa-circle-xmark fa-fade" style="--fa-primary-color: var(--main); --fa-secondary-color: var(--main);"> </i> โปรดหลีกเลี่ยงการโอนเงิน <br>ช่วงเวลา 22.30 - 03.00 น. (ป้องกันความผิดพลาด)</h6>
                                
                                    <?php $bank = dd_q("SELECT * FROM bank WHERE id = 1")->fetch(PDO::FETCH_ASSOC); ?>
                                    <h5>

                                        <hr>
                                    <h5 class="mt-1 ttcolor">รายละเอียดบัญชี</h5>
                                    <img src="<?php echo $bank['upimg']; ?>" 
                                            style="border-radius:1vh; margin-bottom:1rem;" class="w-100" alt="">
                                     
                                        <h6 style="color:#494949;">ธนาคาร ไทยพาณิชย์: <?php echo $bank['bnum']; ?></span><br>
                                            ชื่อบัญชี : <?php echo $bank['fname']; ?>  &nbsp;<?php echo $bank['lname']; ?>

                                            <p class="text-danger" style="margin-top:1rem; margin-bottom:-1rem;">  (หากเกิน 3-5 นาที รบกวนแจ้งแอดมิน)</p><br>
                                        <hr>    


                                            <div class="input-group text-start mb-2">
                                    <input type="text"class="form-control text-center" value="<?php echo $bank['bnum']; ?>" id="myInput" disabled>

                                    <!-- Copy -->
                                    <button onclick="myFunction()" style="border:none; border-radius: 0 1vh 1vh 0;  background: linear-gradient(to right, #98beef 0%, #7287e7 100%);">&nbsp;
                                        <i class="fa-regular fa-link fa-fade fa-sm" style="color: #ffffff;"></i>
                                        <span style="color:#eeeeee"> คัดลอก</span> &nbsp;  
                                    </button>
                                    <!-- Copy -->

                                    <script>
                                        function myFunction() {
                                        var copyText = document.getElementById("myInput");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999); 
                                        document.execCommand("copy");
                                        navigator.clipboard.writeText(copyText.value);
                                        Swal.fire(
                                            'คัดลอกสำเร็จ',
                                            'หมายเลขบัญชีสำเร็จแล้ว',
                                            'success'
                                        )
                                        }


                                   
                                    </script>
                                    </h5>

                                <center>
                                <p class="text-danger">! โปรดตรวจสอบสลิปก่อนทำรายการ</p></b>
                                </center>
                                <div class="text-input">
                                <span style="color:#3dad09;">โปรดอัพไฟล์สลิปโอนเงิน</span>
                                <input type="file" class="form-control" id="upload" aria-label="Upload">
                                <img id="imageScanner" style="display: none;" src="#" alt="qr-code-scanner-online">
                                </div>
                                    </div>
                                </font>
                                
                            </div>


                        <center>
                            <div id="capcha" class="g-recaptcha mt-4" data-theme="dark" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                        </center>
                      
                      
                      <!-- END -->                          

        
            <!-- ปิดท้าย -->
            </div>
        </div>
    </div>      
</div>







<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

<!-- wallet ang -->

<script>
    $("#topup_btn").click(function() {

        var formData = new FormData();

        formData.append('link', $("#link").val());

        $.ajax({

            type: 'POST',

            url: 'system/topup.php',

            data: formData,

            contentType: false,

            processData: false,

        }).done(function(res) {

            result = res;

            Swal.fire({

                icon: 'success',

                title: 'สำเร็จ',

                text: result.message

            }).then(function() {

                window.location = "?page=<?php echo $_GET['page']; ?>";

            });

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

        // $("#save_btn").attr("data-id") <- id user

    });
</script>
<!-- End -->




<script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.js"></script>
<script>
    function File2Base64(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = (error) => reject(error);
        });
    }
    async function imageDataFromSource(source) {
        const image = Object.assign(new Image(), {
            src: source
        });
        await new Promise((resolve) => image.addEventListener('load', () => resolve()));
        const context = Object.assign(document.createElement('canvas'), {
            width: image.width,
            height: image.height,
        }).getContext('2d');
        context.imageSmoothingEnabled = false;
        context.drawImage(image, 0, 0);
        return context.getImageData(0, 0, image.width, image.height);
    }

    $(function() {
        $('#upload').change(function() {
            Swal.fire({
                icon: 'warning',
                title: 'โปรดรอสักครู่',
                text: "กำลังตรวจสอบ โปรดห้ามรีเฟรช",
                showConfirmButton: false,
            });
            const input = this;
            const url = $(this).val();
            const ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0] && (ext === "png" || ext === "jpeg" || ext === "jpg")) {
                const reader = new FileReader();
                reader.onload = async function(e) {
                    const URLBase64 = await File2Base64(input.files[0]);
                    const ImageData = await imageDataFromSource(URLBase64);
                    const code = jsQR(ImageData.data, ImageData.width, ImageData.height);
                    if (code && code.data) {
                        var qrcode = code.data;
                        console.log(qrcode);
                        var formData = new FormData();
                        formData.append('qrcode', qrcode);
                        $.ajax({
                            type: 'POST',
                            url: 'system/slip.php',
                            data: formData,
                            contentType: false,
                            processData: false,
                        }).done(function(res) {
                            result = res;
                            Swal.fire({
                                icon: 'success',
                                title: 'สำเร็จ',
                                text: result.message
                            }).then(function() {
                                window.location = "?page=profile&subpage=topuphis";
                            });
                        }).fail(function(jqXHR) {
                            console.log(jqXHR.responseText)
                            res = jqXHR.responseJSON;
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: res.message
                            }).then(function() {
                                window.location = "?page=topup";
                            });
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'สลิปไม่มี QR CODE',
                        }).then(function() {
                            window.location = "?page=topup";
                        });
                    }
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'อนุญาตเฉพาะนามสกุล PNG , JPEG และ JPG เท่านั้น โปรดเลือกใหม่',
                });
            }
        });
    });
    </script>

