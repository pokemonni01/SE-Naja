@extends('mainlayout.backend')

@section('title', 'Page Title')
@section('content')
<h1 class="page-header">จัดการสินค้า <a class="btn btn-default"  href="#" data-toggle="modal" data-target="#basicModal" role="button">เพิ่มสินค้าใหม่ +</a></h1>
 @include('admin.stock.popUpAddNewProduct')
 <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></th>
      <th>ชื่อสินค้า</th>
      <th>รหัส SKU</th>
      <th>ราคา</th>
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