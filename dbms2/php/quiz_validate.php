<?php 

session_start();

if(isset($_SESSION['loggedin']))
	{
		header('Location: ../quiz_page.php');
	}
	else{
		echo "alert(you can't take quiz without login in  );";
		header('Location: ../login.php');
	}
 ?>
