@extends('mainlayout.adminpage')

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
<?php echo Form::open(array('url' => '/admin/removeproduct/','class'=>'form-horizontal', 'method' => 'post')); ?>
<h1 class="page-header">จัดการสมาชิก <a class="btn btn-default"  href="#" data-toggle="modal" data-target="#basicModal1" role="button">เพิ่มสมาชิกใหม่ +</a> <button type="submit" class="btn btn-danger">ลบสมาชิก</button> </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
      <!-- <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></th> -->
      <th>รหัสสมาชิก</th>
      <th>Username</th>
      <th>ชื่อ</th>
      <th>นามสกุล</th>
      <th>สถานะ</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>

    <?php

    for($i=0;$i<sizeof($result);$i++){
      echo "<tr>";
      echo '<td><input type="checkbox" name="'.$result[$i]->member_id.'"/></td>';
      //echo '<td width="120px">'.'<img src="'.$result[$i]->product_image.'"class="img-thumbnail"></td>';
      echo '<td> <a href="#" data-toggle="modal" data-target="#editProductModal" class="editProduct">'.$result[$i]->member_id."</a></td>";
      echo "<td>".$result[$i]->member_username."</td>";
      //echo "<td>".$result[$i]->member_password."</td>";
      echo "<td>".$result[$i]->member_name."</td>";
      //echo "<td>".$pType[$i]->type_name.'('.$result[$i]->product_type.')'."</td>";
      echo "<td>".$result[$i]->member_lastname."</td>";
      echo "<td>".$result[$i]->member_status."</td>";
      echo "<td>".$result[$i]->member_email."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
</form>
@stop