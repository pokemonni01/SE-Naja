@extends('mainlayout.adminpage')

@section('title', 'Product Type')
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
@include('admin.product-type.popUpAddNewProductType')
<?php echo Form::open(array('url' => '/admin/removeproducttype/','class'=>'form-horizontal', 'method' => 'post')); ?>
<h1 class="page-header">จัดการประเภทสินค้า <a class="btn btn-default"  href="#" data-toggle="modal" data-target="#basicModal1" role="button">เพิ่มประเภทสินค้า +</a> <button type="submit" class="btn btn-danger">ลบประเภทสินค้าที่เลือก</button> </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
      <th>รหัสประเภทสินค้า</th>
      <th>ชื่อประเภทสินค้า</th>
      <th>รายละเอียด</th>
    </tr>
  </thead>
  <tbody>

    <?php

    for($i=0;$i<sizeof($result);$i++){
      echo "<tr>";
      echo '<td><input type="checkbox" name="'.$result[$i]->type_id.'"/></td>';
      echo '<td>'.$result[$i]->type_id."</td>";
      echo "<td>".$result[$i]->type_name."</td>";
      echo "<td>".''."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
</form>
@stop