@extends('mainlayout.backend')

@section('title', 'Manage Stock')
@section('content')
<style type="text/css">

</style>
<script type="text/javascript">
  $(document).ready(function(){

    $("#checkAll").click(function() {
      $('input:checkbox').not(this).prop('checked', this.checked);
    });

    $.ajaxSetup({
   headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')}
});

  });
</script>
@include('admin.stock.popUpAddNewProduct')
@include('admin.stock.popUpEditProduct')
<?php echo Form::open(array('url' => '/admin/removeproduct/','class'=>'form-horizontal', 'method' => 'post')); ?>
<h1 class="page-header">จัดการสินค้า <a class="btn btn-default"  href="#" data-toggle="modal" data-target="#basicModal1" role="button">เพิ่มสินค้าใหม่ +</a> <button type="submit" class="btn btn-danger">ลบสินค้าที่เลือก</button> </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
      <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></th>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ประเภทสินค้า</th>
      <th>ราคา</th>
      <th>จำนวน</th>
    </tr>
  </thead>
  <tbody>

    <?php

    for($i=0;$i<sizeof($result);$i++){
      echo "<tr>";
      echo '<td><input type="checkbox" name="'.$result[$i]->product_id.'"/></td>';
      echo '<td width="120px">'.'<img src="'.$result[$i]->product_imagePath.'"class="img-thumbnail"></td>';
      echo '<td> <a href="#" data-toggle="modal" data-target="#editProductModal" class="editProduct">'.$result[$i]->product_id."</a></td>";
      echo "<td>".$result[$i]->product_name."</td>";
      echo "<td>".$pType[$i]->type_name.'('.$result[$i]->product_type.')'."</td>";
      echo "<td>".$result[$i]->product_price."</td>";
      echo "<td>".$result[$i]->product_remain."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
</form>
@stop
<?php /*
@extends('mainlayout.backend')

@section('title', 'Page Title')
@section('content')
      <h1 class="page-header">จัดการสินค้า <a class="btn btn-default" href="#" role="button">เพิ่มสินค้าใหม่ +</a></h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Name</th>
                  <th>Lastname</th>
                </tr>
              </thead>
              <tbody>
                
                  <?php
                    for($i=0;$i<2;$i++){
                      echo "<tr>";
                      echo "<td>".$i."</td>";
                      echo "<td>".$result[$i]->C_username."</td>";
                      echo "<td>".$result[$i]->C_password."</td>";
                      echo "<td>".$result[$i]->C_name."</td>";
                      echo "<td>".$result[$i]->C_lastname."</td>";
                      echo "</tr>";
                    }
                  ?>
              </tbody>
            </table>
          </div>
          @stop */?>