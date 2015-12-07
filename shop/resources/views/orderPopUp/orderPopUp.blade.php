

<style type="text/css">
.label-input {
    width: 140px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $(":input").change(function() {
        var productId = $(this).attr('proid');
        var value = $(this).val();
        $.ajax({
            type: "post",
            url: '/se/getproduct',
            data: { 'product_id': productId },
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
              }
          },
          success: function(data){
            console.log(data);
            var totalPrice = parseInt( data.product_price )*value;
            $("#total"+productId).text(totalPrice);
    }
    ,error:function(){ 
        alert("Download ข้อมูลผิดพลาด!!");
    }
});
    });
});

function clearBasket(){
    $.ajax({
            type: "post",
            url: '/se/clearBasket',
            //data: { 'product_id': productId },
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
              }
          },
          success: function(data){
            console.log(data);
            $('#basket-detail').text("0 ชิ้น 0 ชนิด");
            location.reload();
    }
    ,error:function(){ 
        alert("Download ข้อมูลผิดพลาด!!");
    }
});
}


</script>
<div class="modal fade" id="orderProductModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a ><img width="100" height="100" src="/SE/bootstrap/image/Jp/logo2.png" class="img-rounded"></a>
                <label style="font-size:12px;padding:30px" class="modal-title" id="myModalLabel">I Love Accessories :: ครบเครื่องเรื่องเครื่องประดับ ราคาถูก ::</label>
                <br ><img width="550" height="40" src="/SE/bootstrap/image/Jp/buy.png" class="img-rounded"></br>
            </div>
            <div class="modal-body">

                <?php echo Form::open(array('url' => '/admin/editproduct/','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
                <div class="form-group">
                    <?php 

                    ?>
                    <label style="font-size:16px;margin:10px" class="modal-title" id="myModalLabel">รายการสินค้า</label>  
                    <label style="font-size:12px;margin:10px" class="modal-title" id="myModalLabel">กรุณาตรวจสอบรายการสินค้าและเลือกวิธีการจัดส่ง จากนั้นคลิกปุ่ม "สั่งซื้อสินค้า" เพื่อไปขั้นตอนต่อไป</label> 
                    <table style="margin:10px" width="580" height="50" border="0" >
                        <tr>
                            <td bgcolor="#f76294" width="280">
                                <center>
                                    <label style="float:middle;font-size:16px;margin:10px" class="modal-title" id="myModalLabel">สินค้า </label>  
                                </center>
                            </td>
                            <td bgcolor="#f76294"width="100">
                                <center> 
                                    <label style="float:right;font-size:16px;margin:10px" class="modal-title" id="myModalLabel">ราคา</label> 
                                </center>
                            </td>
                            <td bgcolor="#f76294"width="100">
                                <center>
                                    <label style="float:right;font-size:16px;margin:10px" class="modal-title" id="myModalLabel">จำนวน</label>   
                                </center>
                            </td>
                            <td bgcolor="#f76294"width="100">
                                <center> 
                                    <label style="float:right;font-size:16px;margin:10px" class="modal-title" id="myModalLabel">ราคารวม</label>  
                                </center>
                            </td>
                        </tr>
                    </table>
                    <table style="margin:10px" width="580" height="50" border="0" >
                        <?php
                        $totalPrice = 0;
                        foreach($_SESSION['productInCart'] as $key => $value)
                        {
                            if($key == 'product_total')
                                continue;
                            $product = DB::table('product')->where('product_id',$key)->first();
                            echo '
                            <tr>
                            <td bgcolor="#ffffff" width="280">
                            <center>
                            <label style="float:middle;font-size:16px;margin:10px" class="modal-title" id="myModalLabel">
                            <img width="100" height="100" src="'.$product->product_imagePath.'" class="img-rounded" id=""/>
                            '.$product->product_name.'
                            </label>
                            </center>
                            </td>
                            <td bgcolor="#ffffff"width="100">
                            <center> 
                            <label style="float:right;font-size:16px;margin:10px" class="modal-title">'.$product->product_price.'</label> 
                            </center>
                            </td>
                            <td bgcolor="#ffffff"width="100">
                            <center>
                            <input type="number" id="num" class="form-control" name="product_remain" value="'.$value.'" placeholder="จำนวนสินค้า" proid="'.$product->product_id.'" disabled>
                            </center>
                            </td>
                            <td bgcolor="#ffffff"width="100">
                            <center> 
                            <label style="float:right;font-size:16px;margin:10px" class="totalPrice" id="total'.$product->product_id.'">'.($product->product_price*$value).'</label>  
                            </center>
                            </td>
                            </tr>';
                            $totalPrice += ($product->product_price*$value);
                        }

                        ?>
                    </table>

                </div>
            </div>
            <?php
            $amount = $_SESSION['productInCart']['product_total'];
            $protype = sizeof($_SESSION['productInCart'])-1;
            $_SESSION['totalPrice'] = $totalPrice
            ?>
            <div class="modal-footer">
                <label style="float:left;font-size:12px;margin:10px" class="modal-title" id="total">สรุปรายการสินค้า</label> 
                <label style="float:left;font-size:12px;margin:10px" class="modal-title" id="order" ><?php echo $amount; ?></label>  
                <label style="float:left;font-size:12px;margin:10px" class="modal-title" id="total">รายการ</label>  
                <label style="float:left;font-size:12px;margin:10px" class="modal-title" id="peice" ><?php echo $protype; ?></label>  
                <label style="float:left;font-size:12px;margin:10px" class="modal-title" id="total">ชิ้น</label> 
                <label style="float:right;font-size:12px;margin:10px" class="modal-title" id="total">บาท</label>  
                <label style="float:right;font-size:12px;margin:10px" class="modal-title" id="peice" ><?php echo $totalPrice; ?></label>    
                <label style="float:right;font-size:12px;margin:10px" class="modal-title" id="total">ราคาทั้งหมด</label>  
            </form>
        </div>
        <div class="modal-footer">
            <label style="float:left;font-size:12px;margin:10px" class="modal-title" id="total">วิธีการจัดส่งสินค้า จัดส่งโดยรถของทางบริษัท(ฟรี)</label> 
            <label style="float:right;font-size:12px;margin:10px" class="modal-title" id="total">บาท</label> 
            <label style="float:right;font-size:12px;margin:10px" class="modal-title" id="total"><?php echo $totalPrice; ?></label>  
            <label style="float:right;font-size:12px;margin:10px" class="modal-title" id="total">+ 0 บาท</label>   
        </div>
        <div class="modal-footer">
            <?php
                if($amount!=0)
                    echo '<a class="btn btn-default" id="nextt" href="#" data-dismiss="modal" data-toggle="modal" data-target="#orderProductModal2" role="button" >สั่งซื้อสินค้า</a>';
            ?>
            <button type="button" id="backk" class="btn btn-default" data-dismiss="modal" onclick="clearBasket();" >ล้างตะกร้า</button>
            <button type="button" id="backk" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        </form>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#nextt").click(function(e){
        run
    });
    
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

