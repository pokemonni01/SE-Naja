

<style type="text/css">
    .label-input {
        width: 140px;
    }
</style>
<div class="modal fade" id="orderProductModal4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a ><img width="100" height="100" src="/SE/bootstrap/image/Jp/logo2.png" class="img-rounded"></a>
                <label style="font-size:12px;padding:30px" class="modal-title" id="myModalLabel">I Love Accessories :: ครบเครื่องเรื่องเครื่องประดับ ราคาถูก ::</label>
                <br ><img width="550" height="40" src="/SE/bootstrap/image/Jp/buy4.png" class="img-rounded"></br>
            </div>
            <div class="modal-body">
                
                    <?php echo Form::open(array('url' => '/admin/editproduct/','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
                    <div class="form-group">
                    
                    <label style="font-size:16px;margin:10px" class="modal-title" id="myModalLabel">รายการสินค้า</label>  
                    <label style="font-size:12px;margin:10px" class="modal-title" id="myModalLabel">กรุณาตรวจสอบรายการสินค้าและเลือกวิธีการจัดส่ง จากนั้นคลิกปุ่ม "สั่งซื้อสินค้า" เพื่อไปขั้นตอนต่อไป</label> 
                    <table style="margin:10px" width="580" height="50" border="0" >
                        <tr>
                            <td bgcolor="#F8BBD0" width="280">
                                <table  width="580" height="100" border="0" >
                                    <tr>
                                        <td bgcolor="#F8BBD0" width="580">
                                            <a ><img width="584" src="/SE/bootstrap/image/Jp/finish.png" ></a>
                                            <center>
                                            <br><label style="float:middle;font-size:12px;" class="modal-title" id="myModalLabel">สั่งสินค้าเสร็จสมบูรณ์ </label></br>
                                            <label style="float:middle;font-size:12px;" class="modal-title" id="myModalLabel">รายการสั่งซื้อของคุณคือ  </label>  
                                            <label style="float:middle;font-size:12px;" class="modal-title" id="myModalLabel">2136  </label>
                                            </center>  
                                        </td>
                                    </tr>
                                </table>
                                <table  style="margin:2px" width="580" height="50" border="0" >
                                    <tr  >
                                        <td style="margin:0px" bgcolor="#EC407A" width="193">
                                            <table  style="margin:2px" width="190" height="190" border="0" >
                                            <td style="margin:3px" bgcolor="#F8BBD0" width="193">
                                            <center>
                                            <br><label style="float:middle;font-size:14px;" class="modal-title" id="myModalLabel">จำนวนเงินที่ต้องชำระ  </label></br>
                                            <label style="color:#00BCD4;float:middle;font-size:14px;" class="modal-title" id="myModalLabel">{{ number_format($_SESSION['totalPrice'], 2, '.',',') }}</label>
                                            <label style="color:#00BCD4;float:middle;font-size:14px;" class="modal-title" id="myModalLabel">บาท </label>
                                            </center>
                                            </td>
                                            </table>
                                        </td>
                                        <td style="margin:0px" bgcolor="#EC407A"width="193">
                                            <table  style="margin:1px" width="190" height="190" border="0" >
                                            <td style="margin:3px" bgcolor="#F8BBD0" width="193">
                                            <center>
                                            <br><label style="float:middle;font-size:14px;" class="modal-title" id="myModalLabel">ชำระค่าสินค้าและแจ้งชำระภายหลัง  </label></br>
                                            <label style="color:#D81B60;loat:middle;font-size:14px;" class="modal-title" id="myModalLabel">1215.112.1121  </label>
                                            </center>
                                            </td>
                                            </table>
                                        </td>
                                        <td style="margin:0px" bgcolor="#EC407A"width="193">
                                            <table  style="margin:2px" width="190" height="190" border="0" >
                                            <td style="margin:3px" bgcolor="#F8BBD0" width="193">
                                            <center>
                                            <br><label style="float:middle;font-size:14px;" class="modal-title" id="myModalLabel">ระยะเวลาร้านเตรียมสินค้า  </label></br>
                                            <label style="color:#B71C1C;float:middle;font-size:14px;" class="modal-title" id="myModalLabel">5  </label>
                                            <label style="color:#B71C1C;float:middle;font-size:14px;" class="modal-title" id="myModalLabel">วันทำการ  </label>
                                            </center>
                                            </td>
                                            </table>
                                        </td>
                                    </tr> 
                                </table>                           
                            </td>
                        </tr>
                    </table>


                    </div>
            </div>
                <div class="modal-footer">
                
                <button type="button" class="btn btn-default" data-dismiss="modal">เสร็จสิ้น</button>
            </form>
             </div>
</div>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

