@extends('home')
@section('content')

<?php
    $watch = DB::table('product')->where('product_type','T00')->get();
    $ring = DB::table('product')->where('product_type','T01')->get();
    ?>
<center><h1>ประเภทสินค้า</h1>
</center>
<table width="240" border="0"style="float:center">
<br>
<center>
    <a href="/se/watchchoosesex" ><img src="/SE/bootstrap/image/Jp/clocksort.jpg" width="700" height="180" style="margin:20px;float:center;"></a>
    <tr><a href="/se/categoryall/T01"><img src="/SE/bootstrap/image/Jp/ringsort.jpg" width="700" height="180" style="margin:20px;float:center;"></a></tr>
    <tr><a href="categoryall/allproduct"><img src="/SE/bootstrap/image/Jp/earring.jpg" width="700" height="180" style="margin:20px;float:center;" ></a></tr>
    <tr><a href="categoryall/allproduct"><img src="/SE/bootstrap/image/Jp/kamlai.jpg" width="700" height="180" style="margin:20px;float:center;" ></a></tr>
    <tr><a href="categoryall/allproduct"><img src="/SE/bootstrap/image/Jp/gip.jpg" width="700" height="180" style="margin:20px;float:center;" ></a></tr>
    <tr><a href="categoryall/allproduct"><img src="/SE/bootstrap/image/Jp/hair.jpg" width="700" height="180" style="margin:20px;float:center;" ></a></tr>
</center>
</table>
@stop