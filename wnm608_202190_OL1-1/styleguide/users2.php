<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Admin Page</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="../css/storetheme.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../lib/css/styleguide.css">
</head>
<body>

<header class="navbar">
		<div class="container display-flex">
			<div class="flext-none">
				<h1>User Admin</h1>
			</div>	
			<div class="flex-stretch"></div>
			<nav class="navbar nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="users.php">User List</a>
					</li>
					</ul> >


	</nav>
		</div>
	</header>
	
<div class="container">

	
		<div class="card soft">
			
			<nav class="nav nav-crumbs">
	<ul> <!--href="admin/users.php"-->
		<li><a href="users.php" class="round-btn">Back</a></li>
	</ul>
</nav>
<form>
	<div>
		<label for="" class="form-label">Name</label>
		<input type="text" value="Gevi Star" placeholder="Name" class="form-input">
	</div>
	<div>
		<label for="" class="form-label">Type</label>
		<input type="text" value="Work" placeholder="Type" class="form-input">
	</div>
	<div>
		<label for="" class="form-label">Email</label>
		<input type="text" value="gevi@gmail.com" placeholder="Email" class="form-input">
	</div>
	<div>
		<label for="" class="form-label">Classes</label>
		<input type="text" value="453-351-4683" placeholder="Classes" class="form-input">
	</div>
	<div class="form-control">
		<input type="submit" value="SUBMIT" class="form-button">
	</div>
		
</form>


<!--
<div>
	<h2>Gevi Star</h2>
	<div>
		<strong>Type</strong>
		<span>Work</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>gevi@gmail.com</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>453-351-4683</span>
	</div>
</div>
-->		</div>
	</div>

</body>
</html>