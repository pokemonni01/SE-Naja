<style type="text/css">
    .label-input {
        width: 140px;
    }
</style>
<div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">เพิ่มสินค้าใหม่</h4>
            </div>
            <div class="modal-body">
                <center>
                    <?php echo Form::open(array('url' => '/admin/addnewproduct/','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                              <img src="/se/shop/storage/app/image/stock/noImage.png" class="img-thumbnail">
                          </div>
                          <input type="file" id="exampleInputFile" name="product_ImagePath">
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">รหัสสินค้า</label>
                        <input type="text" class="form-control" name="product_id" placeholder="รหัสสินค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="product_name" placeholder="ชื่อสินค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">ประเภทสินค้า</label>
                        <select class="form-control" name="product_type">
                          <?php
                            $size = sizeof($pType);
                            for($i=0;$i<$size;$i++){
                                echo '<option value="'.$pType[$i]->type_id.'">';
                                echo $pType[$i]->type_name;
                                echo "</option>";
                            }
                          ?>
                      </select>
                  </div>
              </div>

              <div class="form-group">
                <div class="form-inline">
                    <label for="exampleInputEmail1" class="label-input">ราคา</label>
                    <input type="number" class="form-control" name="product_price" placeholder="ราคาสินค้า">
                </div>
            </div>

            <div class="form-group">
                <div class="form-inline">
                    <label for="exampleInputEmail1" class="label-input">จำนวน</label>
                    <input type="number" class="form-control" name="product_remain" placeholder="จำนวนสินค้า">
                </div>
            </div>

            <div class="form-group">
                <div class="form-inline">
                    <label class="label-input">รายละเอียดสินค้า</label>
                    <textarea class="form-control" rows="5" name="product_detail"> </textarea>                
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