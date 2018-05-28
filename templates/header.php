<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Person</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary text-center">
		<div class="container">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="/list">List</a>
			</div>
		</div>
	</nav>
<?php ob_get_flush(); ?>