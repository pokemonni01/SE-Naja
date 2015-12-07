<script type="text/javascript">
  $(document).ready(function(){
    $(".editProduct").click(function() {
      var productId = $(this).text();
      $.ajax({
        type: "post",
        url: 'getproduct',
        data: { 'product_id': productId },
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
      },
      success: function(data){
        console.log(data);
        $("#edit-product-show-image").attr('src',data.product_imagePath);
        $("#edit-product-image").attr('src',data.product_ImagePath);
        $("#edit-product-id").val(data.product_id);
        $("#edit-product-id-hidden").val(data.product_id);
        $("#edit-product-name").val(data.product_name);
            //$("#edit-product-type").val(data.product_id);
            $("#edit-product-price").val(data.product_price);
            $("#edit-product-remain").val(data.product_remain);
            $("#edit-product-detail").val(data.product_detail);
        }
        ,error:function(){ 
            alert("Download ข้อมูลผิดพลาด!!");
        }
    });
  });

});
</script>
<style type="text/css">
    .label-input {
        width: 140px;
    }
</style>
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">แก้ไขสินค้า</h4>
            </div>
            <div class="modal-body">
                <center>
                    <?php echo Form::open(array('url' => '/admin/editproduct/','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                              <img src="/se/shop/storage/app/image/stock/noImage.png" class="img-thumbnail" id="edit-product-show-image">
                          </div>
                          <input type="file" id="edit-product-image" name="product_ImagePath">
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">รหัสสินค้า</label>
                        <input type="text" class="form-control" id="edit-product-id" disabled>
                        <input type="hidden" class="form-control" name="product_id" id="edit-product-id-hidden">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="product_name" placeholder="ชื่อสินค้า" id="edit-product-name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">ประเภทสินค้า</label>
                        <div class="btn-group">
                          <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              ประเภทสินค้า <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-inline">
                    <label for="exampleInputEmail1" class="label-input">ราคา</label>
                    <input type="number" class="form-control" name="product_price" placeholder="ราคาสินค้า" id="edit-product-price">
                </div>
            </div>

            <div class="form-group">
                <div class="form-inline">
                    <label for="exampleInputEmail1" class="label-input">จำนวน</label>
                    <input type="number" class="form-control" name="product_remain" placeholder="จำนวนสินค้า" id="edit-product-remain">
                </div>
            </div>

            <div class="form-group">
                <div class="form-inline">
                    <label class="label-input">รายละเอียดสินค้า</label>
                    <textarea class="form-control" rows="5" name="product_detail" id="edit-product-detail"> </textarea>                
                </div>
            </div>
        </div>
    </center>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">ยืนยัน</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
    </form>
</div>
</div>
</div>
</div>