

<?php	
	include("config.php");
	include("nav-bar.php");

	include("db_counter.php");


	session_start();

	if(!isset($_SESSION['login']))
	{
		header("Refresh:0; login.php");
		die();
	}

	
	
?>

<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/cascade.css">
</head>


<body>

	<div class="admin-info">
		<small>
			<small>
				<?php echo $_SESSION['login'] ?>
			</small>
		</small>
	</div>

<br><br>

<center>

	<div class="container is-mobile">

			<div class="card total-tile is-mobile">
	  			<h3>
	  				<big>Total <big><b><?php echo $total[0]; ?></b></big> Records in Database</big> 
	  			</h3>
	  			<p>
	  				<a href="display-all.php">view all records</a>
	  			</p>
	  		</div>
	  	
	  		<br><br><br>

	  	<div class="dash-panel columns is-multiline is-mobile">

			
			<div class="box dash-box">
				
				Beauty Parlours
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Beauty_Parlour[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>

			<div class="box dash-box">
				
				Car Decorators
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Car_Decorator[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>

			<div class="box dash-box">
				
				Event Organisers
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Event_Organiser[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>

			<div class="box dash-box">
				
				Music Systems
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Music_System[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>	

			<div class="box dash-box">
				
				Garden Planners
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Garden_Planner[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>	

			<div class="box dash-box">
				
				Room Designers
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Room_Designer[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>	

			<div class="box dash-box">
				
				Painters
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Painter[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>	

			<div class="box dash-box">
				
				Internet Providers
				
				<br><br>
				
				<div class="">
					<big>
						<strong>
							<big><?php echo $Internet_Provider[0]; ?></big>
						</strong>
					</big>
				</div>

			</div>	

			

		
			
		</div>
	</div>



	<style type="text/css">

		.dash-box{
			height: 130px;
			width: 200px;
			margin-left: 25px;
			margin-top: 10px;
			background-color: #eee;
			box-shadow: 5px 5px #ccc;

		}

		.total-tile{
			padding: 5px 5px;
			width: 300px;
		}


	</style>

</body>

</html>