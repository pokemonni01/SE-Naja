

<style type="text/css">
    .label-input {
        width: 140px;
    }
</style>
<div class="modal fade" id="orderProductModal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a ><img width="100" height="100" src="/SE/bootstrap/image/Jp/logo2.png" class="img-rounded"></a>
                <label style="font-size:12px;padding:30px" class="modal-title" id="myModalLabel">I Love Accessories :: ครบเครื่องเรื่องเครื่องประดับ ราคาถูก ::</label>
                <br ><img width="550" height="40" src="/SE/bootstrap/image/Jp/buy3.png" class="img-rounded"></br>
            </div>
            <div class="modal-body">
                
                    <?php echo Form::open(array('url' => '/admin/editproduct/','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
                    <?php
                        $userId = $_SESSION['member_id'];
                        $user = DB::table('member')->where('member_id', $userId)->first();
                    ?>
                    <div class="form-group">
                    
                        <label style="font-size:16px;margin:10px" class="modal-title" id="myModalLabel">ตรวจสอบรายการสั่งซื้อ</label>  
                        <label style="font-size:12px;margin:10px" class="modal-title" id="myModalLabel">กรุณาตรวจสอบรายการสินค้าและข้อมูลการจัดส่งว่าถูกต้องครบถ้วน "ยืนยันการสั่งสินค้า"</label> 
                        <table style="margin:10px" width="580" height="50" border="0" >
                            <tr>
                                <label style="font-size:16px;padding:10px" class="modal-title" id="myModalLabel">ที่อยู่สำหรับจัดส่ง</label>
                                        <td bgcolor="#ffffff" width="180">
                                            <br><label style="font-size:12px;color:#9E9E9E" class="modal-title" id="myModalLabel">ชื่อสุกล :</label></br>
                                            <br><label style="font-size:12px;color:#9E9E9E" class="modal-title" id="myModalLabel">ที่อยู่ผู้รับ :</label></br>
                                            <br><label style="font-size:12px;color:#9E9E9E" class="modal-title" id="myModalLabel">เบอร์โทรศัพท์ผู้รับ :</label></br>
                                            <br><label style="font-size:12px;color:#9E9E9E" class="modal-title" id="myModalLabel">อีเมลผู้ซื้อ :</label></br>
                                        </td>
                                        <td bgcolor="#ffffff" width="400">
                                            <br><label style="font-size:12px;color:#000000" class="modal-title" id="myModalLabel">คุณ {{$user->member_name}}   {{$user->member_lastname}}</label></br>
                                            <br><label style="font-size:12px;color:#000000" class="modal-title" id="myModalLabel">{{$user->member_address}}</label></br>
                                            <br><label style="font-size:12px;color:#000000" class="modal-title" id="myModalLabel">{{$user->member_telephone}}</label></br>
                                            <br><label style="font-size:12px;color:#000000" class="modal-title" id="myModalLabel">{{$user->member_email}}</label></br>
                                        </td> 
                            </tr>
                        </table>
                    </div>
            </div>
    <div class="modal-footer">
        <a class="btn btn-default" id="nextt" href="#" data-dismiss="modal" data-toggle="modal" data-target="#orderProductModal4" role="button" >ยืนยันการสั่งสินค้า</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
    </form>
    </div>
</div>
</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

