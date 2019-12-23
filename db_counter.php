<?php  

		include("config.php");

//-- Fetching numbers by record types --//


	// Total Count
		$sql = "SELECT COUNT(id) FROM records";

   		$result = pg_query($con,$sql);
    	$total = pg_fetch_row($result);


    // Beauty Parlour count
		$sql = "SELECT COUNT(id) FROM records WHERE type='Beauty Parlour' ";

   		$result = pg_query($con,$sql);
    	$Beauty_Parlour = pg_fetch_row($result);


    // Car_Decorator Count
		$sql = "SELECT COUNT(id) FROM records WHERE type='Car Decorator' ";

   		$result = pg_query($con,$sql);
    	$Car_Decorator = pg_fetch_row($result);


    // Event Organiser Count
		$sql = "SELECT COUNT(id) FROM records WHERE type='Event Organiser' ";

   		$result = pg_query($con,$sql);
    	$Event_Organiser = pg_fetch_row($result);


    // Music_System
		$sql = "SELECT COUNT(id) FROM records WHERE type='Music System' ";

   		$result = pg_query($con,$sql);
    	$Music_System = pg_fetch_row($result);

    // Garden_Planner
		$sql = "SELECT COUNT(id) FROM records WHERE type='Garden Planner' ";

   		$result = pg_query($con,$sql);
    	$Garden_Planner = pg_fetch_row($result);

    // Room_Designer Count
		$sql = "SELECT COUNT(id) FROM records WHERE type='Room Designer' ";

   		$result = pg_query($con,$sql);
    	$Room_Designer = pg_fetch_row($result);

    // Painter Count
		$sql = "SELECT COUNT(id) FROM records WHERE type='Painter' ";

   		$result = pg_query($con,$sql);
    	$Painter = pg_fetch_row($result);

    // Internet_Provider Count
		$sql = "SELECT COUNT(id) FROM records WHERE type='Internet Provider' ";

   		$result = pg_query($con,$sql);
    	$Internet_Provider = pg_fetch_row($result);

    




    //-- Display Counters --//

     /* 
     	echo "<br>Total records in database : " . $total[0] . "<br>";

    	echo "<br>Type1 records in database : " . $Type1[0];
    	echo "<br>Type2 records in database : " . $Type2[0];
    	echo "<br>Type3 records in database : " . $Type3[0];
    	echo "<br>Type4 records in database : " . $Type4[0];
    	echo "<br>Type5 records in database : " . $Type5[0];
    	echo "<br>Type6 records in database : " . $Type6[0];
    	echo "<br>Type7 records in database : " . $Type7[0];
    	echo "<br>Type8 records in database : " . $Type8[0];
    	echo "<br>Type9 records in database : " . $Type9[0];
    	echo "<br>Type10 records in database : " . $Type10[0]; 
    */



?>