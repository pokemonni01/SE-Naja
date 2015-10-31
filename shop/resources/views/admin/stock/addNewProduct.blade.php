@extends('mainlayout.backend')

@section('title', 'เพิ่มสินค้าใหม่')
@section('content')
<h1 class="page-header">เพิ่มสินค้าใหม่</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2 control-label">รูปสินค้า</label>
    <div class="col-sm-10">
      <img src="#" alt="..." class="img-rounded" id="productImage">
      <input type="file" id="productImageInput">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2 control-label">ชื่อสินค้า</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ชื่อสินค้า">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2 control-label">รหัสสินค้า</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="รหัสสินค้า SKU">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2 control-label">ราคาสินค้า</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ราคาสินค้า">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2 control-label">รายละเอียด</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3"  placeholder="รายละเอียดสินค้า"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop