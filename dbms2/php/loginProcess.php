<?php 
		include_once "databseConnection.php";

		session_start();

		// $emailfield = $_POST['loginemail'];

		// $passfield =  $_POST['loginpassword'];

		// $sql = "SELECT email,instiname,phone_no FROM newsignup where email = '$emailfield' 
		// 													   AND password = '$passfield ";
		// $result = $db_conn->query($sql);

		if(isset($_POST['signin'])){
			$loginEmail = $_POST['loginemail'];
			$loginPassword = $_POST['loginpassword'];

			$sql = "SELECT email,user_type FROM profile where email = '$loginEmail' 											AND password = '$loginPassword' ";

			if($db_conn->query($sql)){
				$result = $db_conn->query($sql);
				while($row = $result->fetch_assoc()) {
    				$_SESSION['loggedinUser'] = $row['email'];
    				$_SESSION['user_type'] = $row['user_type'];
				}
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['loggedinUser'] = $loginEmail;
				header('Location: ../home.php');
			}else{
				echo "no record found";
			}

			//echo "number of rows: " . $result->num_row;
			// echo $loginEmail, $loginPassword;
			// header('../home.php');
    			
}
 ?>