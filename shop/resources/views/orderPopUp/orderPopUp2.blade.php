

<style type="text/css">
    .label-input {
        width: 140px;
    }
</style>
<div class="modal fade" id="orderProductModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a ><img width="100" height="100" src="/SE/bootstrap/image/Jp/logo2.png" class="img-rounded"></a>
                <label style="font-size:12px;padding:30px" class="modal-title" id="myModalLabel">I Love Accessories :: ครบเครื่องเรื่องเครื่องประดับ ราคาถูก ::</label>
                <br ><img width="550" height="40" src="/SE/bootstrap/image/Jp/buy2.png" class="img-rounded"></br>
            </div>
            <div class="modal-body">
                
                    <?php echo Form::open(array('url' => '/admin/editproduct/','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
                    <?php
                        $userId = $_SESSION['member_id'];
                        $user = DB::table('member')->where('member_id', $userId)->first();
                    ?>
                    <div class="form-group">
                    
                    <label style="font-size:16px;margin:10px" class="modal-title" id="myModalLabel">ที่อยู่ในการจัดส่ง</label>  
                    <label style="font-size:12px;margin:10px" class="modal-title" id="myModalLabel">กรุณากรอกรายละเอียดและที่อยู่ในการจัดส่งสินค้าให้ครบถ้วน เพื่อคงามมั่นใจในการส่งสินค้าถึงปลายทาง</label> 
                    <table style="margin:10px" width="580"  border="0" >
                        <tr>
                            <td bgcolor="#ffffff" width="380" align="left" valign="top" >
                                <table style="margin:5px" width="380" height="60" border="0" >
                                    <tr>
                                        <td bgcolor="#e0dddd" width="380">
                                        <label style="font-size:20px;margin:10px;color:#000000" class="modal-title" id="myModalLabel"> ข้อมูลที่อยู่</label>
                                        </td>
                                    </tr>
                                </table>
                                <table style="margin:5px" width="380"  border="0" >
                                    <tr>
                                        <td bgcolor="#ffffff" width="380">
                                        <br><label style="font-size:12px;padding:5px;color:#9E9E9E" class="modal-title" id="myModalLabel">ชื่อสกุลผู้รับ :</label></br>
                                        <label style="font-size:12px;padding:5px;color:#000000" class="modal-title" id="myModalLabel">คุณ {{$user->member_name}} {{$user->member_lastname}}</label>
                                        <br><label style="font-size:12px;padding:5px;color:#9E9E9E" class="modal-title" id="myModalLabel">ที่อยู่ผู้รับ :</label></br>
                                        <label style="font-size:12px;padding:5px;color:#000000" class="modal-title" id="myModalLabel">{{$user->member_address}} </label>
                                        <br><label style="font-size:12px;padding:5px;color:#9E9E9E" class="modal-title" id="myModalLabel">ข้อมูลผู้ซื้อสินค้า(สำหรับิดต่อ/แจ้งเตือน) :</label></br>
                                        <label style="font-size:12px;padding:5px;color:#000000" class="modal-title" id="myModalLabel">{{$user->member_email}}</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td bgcolor="#e0dddd"width="200" align="left" valign="top">
                                <table style="margin:2px" width="185" height="60" border="0" >
                                    <tr>
                                        <td bgcolor="#ffffff" width="185">
                                        <label style="font-size:14px;margin:3px;color:#000000" class="modal-title" id="myModalLabel">สรุปรายการสินค้า</label>
                                        </td>
                                    </tr>
                                </table>
                                <table style="margin:2px" width="185" height="60" border="0" >
                                    <tr>
                                        <td bgcolor="#ffffff" width="185">
                                            <?php
                                                foreach($_SESSION['productInCart'] as $key => $value)
                                                {
                                                    if($key == 'product_total')
                                                        continue;
                                                    $product = DB::table('product')->where('product_id',$key)->first();
                                                    echo '<br><label style="font-size:12px;padding:5px;color:#000000" class="modal-title" id="myModalLabel">'.$product->product_name.' <label style="float:right;">'.$value.'ชิ้น</label></label></br>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                                <table style="margin:2px" width="185" height="60" border="0" >
                                    <tr>
                                        <td bgcolor="#ffffff" width="185">
                                        <label style="font-size:12px;margin:3px;color:#000000" class="modal-title" id="myModalLabel">ค่จัดส่งสินค้า</label>
                                        <label style="float:right;font-size:12px;margin:5px;color:#000000" class="modal-title" id="myModalLabel">บาท</label>
                                        <label style="float:right;font-size:12px;margin:5px;color:#000000" class="modal-title" id="myModalLabel">0</label>
                                        </td>
                                    </tr>
                                </table> 
                                <table style="margin:2px" width="185" height="60" border="0" >
                                    <tr>
                                        <td bgcolor="#e0dddd" width="185">
                                        <label style="font-size:12px;margin:3px;color:#000000" class="modal-title" id="myModalLabel">ราคารวมทั้งหมด</label>
                                        <label style="float:right;font-size:12px;margin:5px;color:#000000" class="modal-title" id="myModalLabel">บาท</label>
                                        <label style="float:right;font-size:12px;margin:5px;color:#000000" class="modal-title" id="myModalLabel">{{$_SESSION['totalPrice']}}</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>     
                        </tr>
                    </table>

                    </div>
            </div>
    
    <div class="modal-footer">
        <a class="btn btn-default" id="nextt" href="#" data-dismiss="modal" data-toggle="modal" data-target="#orderProductModal3" role="button" >สั่งซื้อสินค้า</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
    </form>
    </div>
</div>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

