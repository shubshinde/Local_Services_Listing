<head>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/cascade.css">
</head>

<?php 

	include("../config.php");
	session_start();
	
    $email=$_POST['form-email'];
	$pass=$_POST['form-pass'];
        

    $qry="select email, pass from login where email='$email' AND pass='$pass'";
    
	
	$run=pg_query($con,$qry);
        $row=pg_fetch_assoc($run);

    	if($row>1)
		{	
			$_SESSION['login']=$email;

			header("Refresh:0; ../dashboard.php");
		}
	else //warning
	{
		header("Refresh:2; ../login.php");

		echo '<center><div class="cust-warning">';
			echo"Email and Password Does Not Match";
		echo "</div>";

		echo"<center><br><br> <b>redirecting</b>...";

	}
 ?>   




 <style type="text/css">
 	.cust-warning{
		width: 330px;
		padding: 5px 5px;
		background-color: pink;
		margin-top: 100px;
	}
 </style>