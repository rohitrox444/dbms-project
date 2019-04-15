<?php 
		include_once "databseConnection.php";

		if(isset($_POST['signup'])){

 		$signEmail = $_POST['signemail'];
 		$signPassword = $_POST['signpassword'];
 		$instiName = $_POST['instiname'];
 		$phoneNo = $_POST['phoneno'];
 		$updates = $_POST['signupdates'];

 		$query = "INSERT INTO newsignup(email,password,instiname,phone_no,updates) VALUES('$signEmail','$signPassword','$instiName','$phoneNo','$updates')";
 		if($db_conn->query($query));

 		echo "Yeah it worked";
 		}else{
 			echo "oopps it failed";
 		}	
 ?>