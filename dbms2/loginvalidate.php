<?php 
 session_start();
function isLoggedin()
{
	if($_SESSION['loggedin'] = TRUE)
	{
		return true;
	}
	else{
		return false;
	}
}
 ?>