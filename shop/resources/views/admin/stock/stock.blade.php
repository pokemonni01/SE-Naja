@extends('mainlayout.backend')

@section('title', 'Page Title')
@section('content')
<style type="text/css">
    table {
      table-layout: auto;
      border-collapse: collapse;
      width: 100%;
    }
    table td {
      
    }
    table td.absorbing-column {
      width: 100%;
}
</style>
<h1 class="page-header">จัดการสินค้า <a class="btn btn-default"  href="#" data-toggle="modal" data-target="#basicModal" role="button">เพิ่มสินค้าใหม่ +</a></h1>
 @include('admin.stock.popUpAddNewProduct')
 <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
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
      //$pos = strpos($result[$i]->product_ImagePath, '/shop');
      //substr($result[$i]->product_ImagePath,$pos);
      echo "<tr>";
      echo "<td>".($i+1)."</td>";
      echo '<td width="120px">'.'<img src="'.$result[$i]->product_ImagePath.'"class="img-thumbnail"></td>';
      echo "<td>".$result[$i]->product_id."</td>";
      echo "<td>".$result[$i]->product_name."</td>";
      echo "<td>".$result[$i]->product_type."</td>";
      echo "<td>".$result[$i]->product_price."</td>";
      echo "<td>".$result[$i]->product_remain."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>
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