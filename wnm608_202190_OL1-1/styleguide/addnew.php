
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
				<li><a href="productadmin.php">PRODUCT LIST</a></li>
					<li><a href="addnew.php">ADD NEW PRODUCT</a></li>
			</ul>
			</nav>
		</div>
	</header>


	<div class="container">
			

<div class='card soft'><form method="post" action="productadmin.php">
	<h2>ADD PRODUCT</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">NAME</label>
		<input class="form-input" name="product-name" id ="product-name" type="text" value="PITC HOODIE" placeholder="Enter the Product Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-price">PRICE</label>
		<input class="form-input" name="product-price" id ="product-price" type="Number" min="0" max="1000" step="0.01" value="120.00" placeholder="Enter the Product Price">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-category">CATEGORY</label>
		<input class="form-input" name="product-category" id ="product-category" type="text" value="CLOTHING" placeholder="Enter the Product Category">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-description">DESCRIPTION</label>
		<textarea class="form-input" name="product-description" id ="product-description"placeholder="Enter the Product Description">Everyone needs a good hoodie. Soft, naturally breathable fabric makes this one just that much better.</textarea>
	</div>
	<div class="form-control">
		<label class="form-label" for="product-thumbnail">THUMBNAIL</label>
		<input class="form-input" name="product-thumbnail" id ="product-thumbnail" type="text" value="../img/hoodie2.png" placeholder="Enter the Product Thumbnail">
	</div>
		<div class="form-control">
		<label class="form-label" for="product-images">OTHER IMAGES</label>
		<input class="form-input" name="product-images" id ="product-thumbnail" type="text" value="../img/hoodie2.png" placeholder="Enter the Product Images">
	</div>
	<div class="form-control">
		<input class="form-button" type="submit" value="SAVE CHANGES">
	</div>
		
</form> </div> 
		
	</div>
</body>	
