
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PITC</title>

	

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css">
<link rel="stylesheet" type="text/css" href="../css/storetheme.css">
<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css">
<link rel="stylesheet" type="text/css" href="../lib/css/custom.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

	<script src="js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/productlist.js"></script>

</head>
<body>
	

	
<header class="navbar">
		<div class="container display-flex">
			<div class="flext-none">
				<h1>PROJECT IN THE CITY</h1>
			</div>	
			<div class="flex-stretch"></div>
			<nav class="navbar nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="product_list.php">SHOP</a></li>
					<li><a href="shoppingbag.php">SHOPPING BAG</a></li>
				</ul>
			</nav>
		</div>
	</header>

	


	<div class="container">
			<h2>PRODUCT LIST</h2>

			<div class="productsearchbar">
				<form class="searchbar" id="product-search">
					<input type="search" placeholder="SEARCH" >
				</form>
			</div>

						<div class="form-control">
				<div class="card soft">
					<div class="display-flex">
						<div class="flex-stretch display-flex">
							<div class="flex-none sort">
								<button data-filter="category" data-value="" type="button" class="form-button">ALL CATEGORIES</button>
							</div>
							<div class="flex-none sort">
								<button data-filter="category" data-value="accessories" type="button" class="form-button ">ACCESSORIES</button>
							</div>
							<div class="flex-none sort">
								<button data-filter="category" data-value="clothing" type="button" class="form-button">CLOTHING</button>
							</div>
						</div>
				
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Latest arrivals</option>
									<option value="2">Trending</option>
									<option value="3">Price: Low to hight</option>
									<option value="4">Price: High to low</option>
								</select>
							</div>
						</div>	
					</div>	
				</div>	
			</div>

			<div class='productlist grid gap'>
<a class="col-xs-12 col-md-4" href="product_item.php?id=12">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="../img/hoodie.png" alt="">
		</div>
		<figcaption class="flex-none">
			<div>PITC HOODIE</div>	
			<div>&dollar;120</div>

		</figcaption>
	</figure>
</a>


<a class="col-xs-12 col-md-4" href="product_item.php?id=11">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="../img/tshirt.png" alt="">
		</div>
		<figcaption class="flex-none">
			<div>PITC TSHIRT</div>	
			<div>&dollar;90</div>

		</figcaption>
	</figure>
</a>


<a class="col-xs-12 col-md-4" href="product_item.php?id=10">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="../img/tumbler.png" alt="">
		</div>
		<figcaption class="flex-none">
			<div>PITC TUMBLER</div>	
			<div>&dollar;25</div>

		</figcaption>
	</figure>
</a>


<a class="col-xs-12 col-md-4" href="product_item.php?id=9">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="../img/cap.png" alt="">
		</div>
		<figcaption class="flex-none">
			<div>PITC CAP</div>	
			<div>&dollar;45</div>

		</figcaption>
	</figure>
</a>


<a class="col-xs-12 col-md-4" href="product_item.php?id=8">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="../img/candle.png" alt="">
		</div>
		<figcaption class="flex-none">
			<div>PITC CANDLE</div>	
			<div>&dollar;25</div>

		</figcaption>
	</figure>
</a>


<a class="col-xs-12 col-md-4" href="product_item.php?id=7">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="../img/phone.png" alt="">
		</div>
		<figcaption class="flex-none">
			<div>PITC IPHONE 12 CASE</div>	
			<div>&dollar;20</div>

		</figcaption>
	</figure>
</a>


</div>


	</div>


	<br>
	<br>
	<br>

</body>
</html>