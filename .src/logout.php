<?php
  // If the user is logged in, delete the session vars to log them out
	  session_start();
	  if (isset($_SESSION['auth'])) {
	  	$_SESSION['auth'] = false;
	  	session_destroy();
	  	session_start();
		header('location: index.php');
	}	
	else{
		header('location: index.php');
	}
?>