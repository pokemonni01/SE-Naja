<style type="text/css">
.basket {
	background-size: contain;
	background-image: url('/SE/shop/storage/app/image/home/basket/basket.png');
	background-repeat: no-repeat;
	background-position: center;
	width: 210px;
	height: 160px;
	z-index: 10;  
	position: fixed;  
	right: 0;  
	top: 0;
	margin: 5px;
	border-style: none;
}

.body-basket{
	margin-left: 40%;
	margin-top: 25%; 
	font-size: 18px;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $(".editProduct").click(function() {
      var productId = $(this).text();
      $.ajax({
        type: "post",
        url: 'getproduct',
        data: { 'product_id': productId },
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
      },
      success: function(data){
        console.log(data);
        $("#edit-product-show-image").attr('src',data.product_imagePath);
        $("#edit-product-image").attr('src',data.product_ImagePath);
        $("#edit-product-id").val(data.product_id);
        $("#edit-product-id-hidden").val(data.product_id);
        $("#edit-product-name").val(data.product_name);
            //$("#edit-product-type").val(data.product_id);
            $("#edit-product-price").val(data.product_price);
            $("#edit-product-remain").val(data.product_remain);
            $("#edit-product-detail").val(data.product_detail);
        }
        ,error:function(){ 
            alert("Download ข้อมูลผิดพลาด!!");
        }
    });
  });

});

function reloadBasket(){
	$.ajax({
        type: "post",
        url: '/se/getproductinbasket',
        //data: { 'product_id': productId },
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
      },
      success: function(data){
        console.log(data);
        //$("#orderProductModal").load("active.phps");
        }
        ,error:function(){ 
            alert("Download ข้อมูลผิดพลาด!!");
        }
    });
}
</script>
<div class="basket">
	<div class="body-basket">
		<a  data-toggle="modal" data-target="#orderProductModal"  role="button" onclick="reloadBasket();" >
		<label> สินค้าในตะกร้า </label>
		<?php
			$amount = $_SESSION['productInCart']['product_total'];
			$protype = sizeof($_SESSION['productInCart'])-1;
			echo '<label id="basket-detail">'.$amount.' ชิ้น '.$protype.' ชนิด</label>'
		?>
		</a>
	</div>
</div>
@include('orderPopUp.orderPopup')
	@include('orderPopUp.orderPopup2')
	@include('orderPopUp.orderPopup3')
	@include('orderPopUp.orderPopup4')