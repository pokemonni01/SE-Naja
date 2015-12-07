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
<div class="basket">
	<div class="body-basket">
		<a>
		<label> สินค้าในตะกร้า </label>
		<?php
			$amount = $_SESSION['productInCart']['product_total'];
			$protype = sizeof($_SESSION['productInCart'])-1;
			echo '<label id="basket-detail">'.$amount.' ชิ้น '.$protype.' ชนิด</label>'
		?>
		</a>
	</div>
</div>