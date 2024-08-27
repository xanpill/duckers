

<style>
    .form-control{
        font-family: "Inter", sans-serif;
        border: none;
        border-bottom: 3px solid var(--main);
        border-radius: 0px;
    }
    .tc {
            text-transform: uppercase;
            background: linear-gradient(to right, #4e4e4e 0%, #8abdff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
    }
    .fsh {
        font-size:16px;
        color:#8597d8;
    }
    .bb {
        color:#595a5c;
        background-color:#cdcfd1;
        border:none;
    }
    
</style>
<div class="container-fluid p-0 mt-4 ">
    <div class="container-sm m-cent  ps-4 pe-4" style=" margin-bottom: 4em!important;">
        <div class="container-fluid p-4 shadow-sm ">
                <div class="col-lg-6 m-cent pt-4" style="margin-bottom: 4em!important;">
                    <div>

                    <h1 class="tc" style="font-size: 26px;">LOGIN</h1>
                    <h1 class="fsh" ><?php echo $config['name']; ?></h1></span>
                    
                    


                    </div>
                    <br>
                    <div class="container-fluid ps-0 pe-0 " style="margin-top:-1rem;" >
                        <div class="col-lg-8 m-cent">
                            <div class=" mb-3">
                                    <label class="mb-2" >ชื่อผู้ใช้</label>
                                    <br>
                                    <input type="text" style="font-size:14px;" class="bb form-control-lg  w-100 text-or"  id="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class=" mb-3">
                                    <label class="mb-2">รหัสผ่าน</label>
                                    <br>
                                    <input type="password" style="font-size:14px;" class="bb form-control-lg  w-100  text-or" id="pass" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <center>
                                    <div id="capcha" class="g-recaptcha mt-4" data-theme="light" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                </center>
                                <br>
                                <button class="btn bg-main   text-white  ps-4 pe-4  pt-2 pb-2 w-100 d-inline" id="btn_regis" ><i class="fa-solid fa-arrow-right"></i>&nbsp;เข้าสู่ระบบ</button>
                                
                                <center>
                                    
                                    <p class="text-secondary  mt-2"   ><a href="?page=register" class="text-secondary" style="text-decoration: none;">
                                    <span>ยังไม่เคยใช้งาน?&nbsp; | </span>&nbsp;สมัครสมาชิก</a></p></center>
                                    <p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>
<script type="text/javascript">

    var onloadCallback = function() {
    grecaptcha.render('capcha', {
        'sitekey' : '<?php echo $conf['sitekey'];?>'
    });
    };
    $("#btn_regis").click(function(e) {
          e.preventDefault();
          var formData = new FormData();
          formData.append('user', $("#user").val());
          formData.append('pass', $("#pass").val());
          captcha = grecaptcha.getResponse();
          formData.append('captcha', captcha);
          $('#btn_regis').attr('disabled', 'disabled');
          $.ajax({
              type: 'POST',
              url: 'system/login.php',
              data:formData,
              contentType: false,
              processData: false,
          }).done(function(res){
              
              result = res;
              console.log(result);
              grecaptcha.reset();
              if(res.status == "success"){
                  Swal.fire({
                      icon: 'success',
                      title: 'สำเร็จ',
                      text: result.message
                  }).then(function() {
                          window.location = "?page=home";
                  });
              }
              if(res.status == "fail"){
                  Swal.fire({
                      icon: 'error',
                      title: 'ผิดพลาด',
                      text: result.message
                  });
                  $('#btn_regis').removeAttr('disabled');
              }
          }).fail(function(jqXHR){
              console.log(jqXHR);
            //   res = jqXHR.responseJSON;
              grecaptcha.reset();
              Swal.fire({
                  icon: 'error',
                  title: 'เกิดข้อผิดพลาด',
                  text: res.message
              })
              //console.clear();
              $('#btn_regis').removeAttr('disabled');
          });
    });
    $(function(){
        function rescaleCaptcha(){
            var width = $('.g-recaptcha').parent().width();
            var scale;
            if (width < 302) {
            scale = width / 302;
            } else{
            scale = 1.0; 
            }

            $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('transform-origin', '0 0');
            $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
        }

    rescaleCaptcha();
    $( window ).resize(function() { rescaleCaptcha(); });

    });
</script>




  
