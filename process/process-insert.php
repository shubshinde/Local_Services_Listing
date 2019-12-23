<head>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/cascade.css">
</head>

<?php
	include("../config.php");

	session_start();
	
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$type=$_POST['type'];

        
	function CountId($con) 
	{
    	$sql = "SELECT COUNT(id) FROM records";

   		$result = pg_query($con,$sql);
    	$rows = pg_fetch_row($result);
		    		
		return $rows[0];
	}

	$id = CountId($con)+1;
	
	$q = "select name,contact FROM records WHERE name='$name' AND contact='$contact'";
	$r = pg_query($con,$q);
	$num =  pg_num_rows($r);
	
	if($num == 1)
	{	
		header("Refresh:2; ../insert.php");
		echo "<h3>Name and Contact already Registered!!</h3>";	
	}
	
	else
	{	
		
		$q = "insert into records values($id,'$name','$contact','$address','$type')";

		$res = pg_query($con,	$q);

		echo"Successfully Registered!";	

		header("refresh:1; ../insert.php");	
	
	
	}
	
?>