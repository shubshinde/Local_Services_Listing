<?php 
	include('config.php');
	include("nav-bar.php");

	session_start();

	if(!isset($_SESSION['login']))
	{
		header("Refresh:0; login.php");
		die();
	}
?>

<head>
	<title>View all Records</title>

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
	       		 All Records in Database
	      	</h1>
	      </center>
	    </div>
	  </div>
	</section>

	<br>	

	<div class="is-centered ok container is-mobile">
		
<?php 

	$sql = "SELECT * FROM records";
	$result = pg_query($con,$sql);

	

	if ($result>=0) {

    	while($row = pg_fetch_row($result)) {
    	
    		$count++;

			echo "<div class='card is-centered cust-tile'>";

				echo "<div class='tile-sr'><b class='cust-p'>".$count."</b></div>";
				
				echo "<div class='tile-items columns'>";
						echo "<div class='t-name'>".$row[1]."</div>";
						
						echo "<div class='t-phone'>".$row[2]."</div>";
						
						echo "<div class='t-address'>".$row[3]."</div>";
				echo "</div>";

			echo "</div>";
      		
		 } 
		
		
	} 
	
	else {
		    echo "0 results";
	}

	echo "</div>";

	?>
	
	


</div>

