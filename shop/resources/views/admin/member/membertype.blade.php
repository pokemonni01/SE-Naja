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
@include('admin.member.popUpAddNewMemberStatus')
<?php echo Form::open(array('url' => '/admin/removememberstatus/','class'=>'form-horizontal', 'method' => 'post')); ?>
<h1 class="page-header">จัดการสถานะสมาชิก <a class="btn btn-default"  href="#" data-toggle="modal" data-target="#basicModal1" role="button">เพิ่มสถานะสมาชิก +</a> <button type="submit" class="btn btn-danger">ลบสถานะสมาชิก</button> </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
      <th>รหัสสถานะสมาชิก</th>
      <th>ชื่อสถานะสมาชิก</th>
      <th>รายละเอียด</th>
    </tr>
  </thead>
  <tbody>

    <?php

    for($i=0;$i<sizeof($result);$i++){
      echo "<tr>";
      echo '<td><input type="checkbox" name="'.$result[$i]->status_id.'"/></td>';
      echo '<td>'.$result[$i]->status_id."</td>";
      echo "<td>".$result[$i]->status_name."</td>";
      echo "<td>".''."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
</form>
@stop