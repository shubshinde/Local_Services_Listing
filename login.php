<?php 

		
			echo $_SESSION['login'];

?>

<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/cascade.css">
</head>


<body>

	<section class="hero is-light">
	  <div class="hero-body">
	    <div class="container">
	      <center>
	      	<h1 class="title">
	       		 Login
	      	</h1>
	      </center>
	    </div>
	  </div>
	</section>

<br><br>

	<form class="box form container login-form" method="POST" action="process/process-login.php">
		<center>
		
		<h2>Login as Admin</h2>
		
		<br>

		<input class="input" type="email" name="form-email" placeholder="Email :" required="true">
		<br><br>

		<input class="input" type="password" name="form-pass" placeholder="Password :" required="true">
		<br><br>

		
		<button class="button is-success" type="submit">Login</button>

	</form>

		

</body>