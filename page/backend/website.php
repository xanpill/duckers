<style>
    .ff {
        text-transform: uppercase;
            background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
    }
    .bg-from {
        background-color:#f3f3f3; 
        border:none;
        padding:0.5rem 1.5rem;
        margin-top:0.5rem;
        border-radius:1vh;
    }
</style>




<div class="container-sm mt-2 col-12 col-lg-8 border-2  p-4 rounded">
    <center>
        <h3 class="ff">&nbsp;<i class="fa-duotone fa-list-check fa-fade"></i>&nbsp;จัดการป๊อบอัพโชว์</h3>
    </center>
            <div class="container-sm mt-2 border-2  p-2 mb-0 rounded">
            <div class="row justify-content-between">
                    <div class="mb-2 col">
                        <div class="text-center">
                            <p class="m-0 text-secondary">รูป <span class="text-danger">*</span></p>
                            <input type="text" class="form-control bg-from form-control-color w-100" id="bganuuou" value="<?php echo $config['bg_ann']; ?>">
                        </div>
                    </div>
                <div class="mb-2 col">
                    <div class="text-center">
                        <p class="m-0 text-secondary">ข้อความ <span class="text-danger">*</span></p>
                        <input type="text" class="form-control bg-from form-control-color w-100" id="txanuuou" value="<?php echo $config['tx_ann']; ?>">
                    </div>
                </div>
            </div>
 </div>
 </div>



<div class="container-sm mt-0 border-2 p-4 mb-4 rounded" >
    <center>
        <h3 class="ff">&nbsp;<i class="fa-duotone fa-list-check fa-fade"></i>&nbsp;จัดการเว็บไซต์</h3>
    </center>

    <div class="col-lg-6 m-auto">
        
        <div class="mb-2 mt-2">
            <p class="m-0 text-secondary ">ชื่อเว็บไซต์ <span class="text-danger">*</span></p>
            <input type="text" id="site_name" class="form-control bg-from" value="<?php echo $config['name']; ?>">
        </div>


            <div class="mb-2 col">
                <p class="m-0 text-secondary ">โลโก้เว็บ <span class="text-danger">*</span></p>
                <input type="text" id="site_logo" class="form-control bg-from" value="<?php echo $config['logo']; ?>">
            </div>
            
        <div class="mb-2">
            <p class="m-0 text-secondary ">เกี่ยวกับเว็บ<span class="text-danger">*</span></p>
            <input type="text" id="site_des" class="form-control bg-from" value="<?php echo $config['des']; ?>">
        </div>
        
        <div class="mb-2">
            <p class="m-0 text-secondary ">ภาพพื้นหลัง<span class="text-danger">*</span></p>
            <input type="text" id="site_bg" class="form-control bg-from" value="<?php echo $config['bg']; ?>">
        </div>
        
        <div class="row justify-content-between">
            <div class="mb-5 col">
                <div class="text-center">
                    <p class="m-0 text-secondary">สีหลักของเว็บไซต์ <span class="text-danger">*</span></p>
                    <input type="color" class="form-control bg-from form-control-color w-100" id="site_main_color" value="<?php echo $config['main_color']; ?>">
                </div>
            </div>
            <div class="mb-5 col">
                <div class="text-center">
                    <p class="m-0 text-secondary">สีรองของเว็บไซต์ <span class="text-danger">*</span></p>
                    <input type="color" class="form-control bg-from form-control-color w-100" id="site_sec_color" value="<?php echo $config['sec_color']; ?>">
                </div>
            </div>
        </div>

        <div class="mb-2">
            <p class="m-0 text-secondary ">Webhook Line (Token) <span class="text-danger">*</span></p>
            <input type="text" id="webhook_dc" class="form-control bg-from" value="<?php echo $config['webhook_dc']; ?>">
        </div>


        <!-- caontact -->
        <div class="row justify-content-between">
            <div class="mb-2">
                <p class="m-0 text-secondary ">ช่องทางการติดต่อเฟสบุ๊ค (ลิงค์) <span class="text-danger">*</span></p>
                <input type="text" id="site_contact" class="form-control bg-from" value="<?php echo $config['contact']; ?>">
            </div>
           
        </div>
        
        
        <div class="mb-2 ">
            <p class="m-0 text-secondary ">ข้อความประกาศ <span class="text-danger">*</span></p>
            <textarea id="ann" rows="10" class="form-control bg-from"><?php echo $config['ann']; ?></textarea>
        </div>

        <!-- phone angpao -->
        <div class="mb-2 ">
            <p class="m-0 text-secondary ">เบอร์รับเงิน (TrueWallet) <span class="text-danger">*</span></p>
            <input type="text" id="site_phone" class="form-control  bg-from" value="<?php echo $config['wallet']; ?>">
        </div>
        <div class="mb-2 ">
            <input class="form-check-input" type="checkbox" value="1" id="pc" <?php if ($config['fee'] == "on") {
                                                                                    echo "checked";
                                                                                } ?>>
            <label class="form-check-label mb-2" for="pc">
                ค่าธรรมเนียม เก็บ 2.9% ไม่เกิน 10 บาท
            </label>
        </div>
        <!-- phone angpao -->

        <div class="mb-2">
            <button class=" w-100 tblu-1" id="btn_regis" 
            style="background-color:#background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);">บันทึกข้อมูล</button>
        </div>

        <!-- END -->
        <style>
            .tblu-1 {
                border:none;
                padding:0.5rem;
                border-radius:1vh;
                color:#f4f4f4;
                background: linear-gradient(to right, #d51f1f 0%, #ff9f00 100%);
        }
           
        </style>
    
    </div>
</div>

<script type="text/javascript">
    $("#insert_btn").click(function() {
        var formData = new FormData();
        formData.append('s_count', $("#s_count").val());
        formData.append('m_count', $("#m_count").val());
        formData.append('b_count', $("#b_count").val());
        $.ajax({
            type: 'POST',
            url: 'system/backend/static_udpate.php',
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
    $("#open_insert").click(function() {
        const myModal = new bootstrap.Modal('#product_insert', {
            keyboard: false
        })
        myModal.show();
    });
    $("#btn_regis").click(function(e) {
        e.preventDefault();
        var check;
        if ($('#pc').is(':checked')) {
            check = "on";
        } else {
            check = "off";
        }
        var formData = new FormData();
        formData.append('name', $("#site_name").val());
        formData.append('bg', $("#site_bg").val());
        formData.append('phone', $("#site_phone").val());
        formData.append('main_color', $("#site_main_color").val());
        formData.append('logo', $("#site_logo").val());
        formData.append('sec_color', $("#site_sec_color").val());
        formData.append('contact', $("#site_contact").val());
        formData.append('des', $("#site_des").val());
        formData.append('ann', $("#ann").val());
        formData.append('webhook_dc', $("#webhook_dc").val());
        formData.append('fee', check);
        formData.append('bg_ann', $("#bganuuou").val());
        formData.append('tx_ann', $("#txanuuou").val());
        $('#btn_regis').attr('disabled', 'disabled');
        $.ajax({
            type: 'POST',
            url: 'system/backend/website.php',
            data: formData,
            contentType: false,
            processData: false,
        }).done(function(res) {
            result = res;
            console.log(result);
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
            $('#btn_regis').removeAttr('disabled');
        });
    });
</script>