<?php	
	include("config.php");

	session_start();

	if(!isset($_SESSION['login']))
	{
		header("Refresh:0; login.php");
		
		die();
	}
	
?>

<html>

<head>
	<title>Insert New Record</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/cascade.css">
</head>


<body>

<header class="hero">
	
</header>

<br><br><br>

	<form class="form container insert-form" method="POST" action="process/process-insert.php">
		<center>

		<h2>
			<big>
				<strong>Insert New Record</strong>
			</big>
		</h2>

		<br>

		<input class="input" type="text" name="name" placeholder="Name : " required="true">
		<br><br>

		<input class="input" type="text" name="contact" placeholder="Contact number : " required="true">
		<br><br>

		<input class="input" type="text" name="address" placeholder="Address :" required="true">
		<br><br>

		<select class="input" name="type" required="true">
			<option hidden="true">Category : </option>
			<option>Beauty Parlour</option>
			<option>Car Decorator</option>
			<option>Event Organiser</option>
			<option>Music System</option>
			<option>Garden Planner</option>
			<option>Room Designer</option>
			<option>Painter</option>
			<option>Internet Provider</option>
		</select>

		<br><br>
		
		<button class="button is-success" type="submit">Insert</button>

	</form>

		<br><br><br><br>

		<a href="dashboard.php">Dashboard</a>


<style type="text/css">
	
	.button.is-success{
		color: #333;
	}

</style>

</body>