<style>
    .form-control{
        border: 0;
        border-bottom: 2px solid var(--main);
        background-color: transparent;
    }
    .bb {
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; border-radius:1vh;
        background-color:#f3f3f3;
        margin-top:-5rem;
        padding:2rem;
        padding-bottom:3rem;
        border-radius:1vh;

    }
    .text-bss {
        text-transform: uppercase;
        background: linear-gradient(to right, #606ea2 0%, #a0caff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration:none
    }
    .savebtn {
        color:#f3f3f3;
        background: linear-gradient(to right, #606ea2 0%, #a0caff 100%);
        border:none;
        padding:0.4rem 1rem;
        border-radius:1vh;
    }
    .ht {
        float:left;
        color:#464646;
    }



</style>
<div class="container-fluid bb col-10" >
    <div class="col-lg-6" style="margin: 0% auto;">
    <center><h2 class="text-bss mt-1 pb-2 mb-3">&nbsp;เปลี่ยนรหัสผ่าน</h2></center>
    <div class="d-grid gap2">

        <center class="mb-3">
            <label for="exampleFormControlInput1" class="form-label ht">รหัสผ่านเก่า</label>
            <br>
            <input type="password" class="btn border w-100" id="o_pass" placeholder="รหัสผ่านเก่า" style="color: #000">
        </center>

        <center class="mb-3">
            <label for="exampleFormControlInput1" class="form-label ht">รหัสผ่านใหม่</label>
            <br>
            <input type="password" class="btn border w-100" id="pass" placeholder="รหัสผ่านใหม่" style="color: #000">
        </center>

        <center class="mb-3">
            <label for="exampleFormControlInput1" class="form-label ht">รหัสผ่านใหม่อีกครั้ง</label>
            <br>
            <input type="password" class="btn border w-100" id="pass2" placeholder="รหัสผ่านใหม่อีกครั้ง" style="color: #000">
        </center>

        <button id="btn_regis" class="savebtn">
            <i class="fa-regular fa-key-skeleton fa-fade fa-xs" style="color: #ee262c;"></i>&nbsp;ยืนยันการเปลี่ยน</button>
    </div>
</div>

    <script type="text/javascript">

        $("#btn_regis").click(function(e) {
            e.preventDefault();
            var formData = new FormData();
            formData.append('o_pass', $("#o_pass").val() );
            formData.append('pass'  , $("#pass").val() );
            formData.append('pass2' , $("#pass2").val());
            $('#btn_regis').attr('disabled', 'disabled');
            $.ajax({
                type: 'POST',
                url: 'system/changepass.php',
                data:formData,
                contentType: false,
                processData: false,   
            }).done(function(res){
                
                result = res;
                console.log(result);
                if(res.status == "success"){
                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: result.message
                    }).then(function() {
                            window.location = "?page=profile";
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
</div>