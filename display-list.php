<?php
	include('config.php');

	$type_fetched = $_POST['type_value'];
?>

<head>
	<title>Display Records</title>

	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/cascade.css">

</head>


<body>

	<nav class="navbar" role="navigation" aria-label="main navigation">
	    <div class="navbar-brand ">
	        <a class="navbar-item" href="index.php">
	          <big class="">
	       		 <strong>LSL</strong>
	      	  </big>
	        </a>
	    </div>
	</nav>



	<section class="hero is-light">
	  <div class="hero-body">
	    <div class="container">
	      <center>
	      	<h1 class="title">
	       		<?php include('image_loader.php'); ?>
	      	</h1>
	      </center>
	    </div>
	  </div>
	</section>

<br><br>

	<div class="is-centered ok container is-mobile">

<?php

	$sql = "SELECT * FROM records WHERE type='$type_fetched' ";
	$result = pg_query($con,$sql);



	if ($result>=0) {

    	while($row = pg_fetch_row($result)) {

    		$line_count++;

			echo "<div class='card is-centered cust-tile'>";

				echo "<div class='tile-sr'><b class='cust-p'>".$line_count."</b></div>";

				echo "<div class='tile-items columns'>";
						echo "<div class='t-name'>".$row[1]."</div>";

						echo "<div class='t-phone'>".$row[2]."</div>";

						echo "<div class='t-address'>".$row[3]."</div>";
				echo "</div>";

			echo "</div>";

		 }


	}



	?>




</div>
