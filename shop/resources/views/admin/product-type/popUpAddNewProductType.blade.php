<style type="text/css">
    .label-input {
        width: 140px;
    }
</style>
<div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">เพิ่มประเภทสินค้าใหม่</h4>
            </div>
            <div class="modal-body">
                <center>
                    <?php echo Form::open(array('url' => '/admin/addnewproducttype/','class'=>'form-horizontal', 'method' => 'post')); ?>
                   <div class="form-group">
                <div class="form-inline">
                    <label for="exampleInputEmail1" class="label-input">รหัสประเภท</label>
                    <input type="text" class="form-control" name="productType_id" placeholder="รหัสสินค้า">
                </div>
            </div>

                  <div class="form-group">
                    <div class="form-inline">
                        <label for="exampleInputEmail1" class="label-input">ชื่อประเภท</label>
                        <input type="text" class="form-control" name="productType_name" placeholder="ชื่อสินค้า">
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