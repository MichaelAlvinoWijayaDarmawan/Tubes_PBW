<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<div class="sidebar">
		<h2 href="index.html" class="sidebar_title"><a href="index.html">Delivery Service</a></h2>
		<ul>
			<li ><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
			<li class="accordion"><a href="#"><i class="fas fa-shopping-bag"></i>SHOP<i class="fas fa-chevron-down" style="float: right;"></i></a></li>
			<div class="panel">
				<ul class="accordion_list">
					<li><a href="catalog.html"><i class="fas fa-shopping-bag"></i>ALL ITEMS</a></li>
					<li><a href="catalog_new_arrival.html"><i class="fas fa-trophy"></i>NEW ARRIVAL</a></li>
					<li><a href="catalog_discount.html"><i class="fas fa-percent"></i>DISCOUNT</a></li>
					<li><a href="catalog_categories.html"><i class="fas fa-list-alt"></i>CATEGORIES</a></li>
				</ul>
			</div>
			<li ><a href="cart.html"><i class="fas fa-shopping-cart"></i>MY CART</a></li>
			<li class="active" style="position: fixed;bottom: 0;width: 225px;"><a href="login.html"><i class="fas fa-user"></i>SIGN IN</a></li>
			<li><a href="about.html"><i class="fas fa-info-circle"></i>ABOUT</a></li>
		</ul>
	</div>
	<?php echo $content; ?>
	<hr>
	<a href="index">Home</a> | <a href="#info">Info</a>
</body>
</html>