
<style>
    .bb {
        margin-top:-6rem;
    }
</style>
<div class="container-fluid bb p-0 col-lg-10 col-10" style="background-color:#f3f3f3;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; border-radius:1vh;">
    <div class="container-sm m-auto p-2 pt-0 aos-init aos-animate" data-aos="zoom-in">


        <div class="container-fluid ps-3 pe-3 pb-3" style="border-radius:1vh;">
        
        <div class="p-2">
            <h5 class="m-0"><h5 class=" mb-2 mt-2" style="color:#464646;">
            <i class="fa-duotone fa-clock-rotate-left fa-spin fa-spin-reverse" style="--fa-primary-color: #e3e3e3; font-size:14px; --fa-secondary-color: #15ed10;"></i>
             ประวัติการสั่งซื้อ</h5>
             <p style="font-size:14px; color:#1e4da6;">ของคุณ : <span><?php echo htmlspecialchars(strtoupper($user['username'])); ?></span></p>
        </div>

       
        <div class="m-0" >
            
        
            <div class="table-responsive">
                <table class="table " id="table" >
                    <thead >
                    <tr >
                        <th scope="col "  style="color:#1e4da6;" class="text-center" class="sorting sorting_asc">#</th>
                        <th scope="col" class="ps-5 text-center" style="color:#1e4da6;">รายการ</th>
                        <th scope="col" class="ps-5 text-center" style="color:#1e4da6;">สินค้า</th>
                        <th scope="col" class="ps-5 text-center" style="color:#1e4da6;">จำนวนเงิน</th>
                        <th scope="col" class="text-center"      style="color:#1e4da6;">วันที่</th>
                    </tr>
                    </thead>
                    <tbody style="color:#2c2c2c;">
                        <?php 
                            $q = dd_q("SELECT * FROM boxlog WHERE uid = ? ORDER BY id DESC ", [$_SESSION['id']]);
                            $i = 1;
                            while($row = $q->fetch(PDO::FETCH_ASSOC)){
                                
                        ?>


                            <tr>
                                <th scope="row" class="text-center" style="color:#464646">         <?php echo number_format($i);?></th>
                                <td style="color:#464646; font-size:13px;" >                       <?php echo htmlspecialchars($row['category']);?></td>
                                <td style="color:#464646; font-size:13px;">                        <?php echo ($row['prize_name']);?></td>
                                <td class="text-center" style=" color:#464646; font-size:13px;"><?php echo number_format($row['price']); ?></td>
                                <td class="text-center" style="color:#464646; font-size:13px;">    <?php echo htmlspecialchars($row['date']);?></td>
                            </tr>
                        <?php
                                $i++;
                            }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>


        </div>


    </div>
</div>

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>

