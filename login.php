<?php 
	session_start();
	if($_POST){
		include('connection.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$big = 0;
		$_SESSION['invalid'] = '';
		if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
			$_SESSION['invalid'] .= "Username Should include digits and alphabets. ";
			$big++;
		}
		if(!preg_match("/^[a-zA-Z0-9@!# ]*$/",$password)){
			$_SESSION['invalid'] .= "Password Should include digits and alphabets and Special Characters(@!#). ";
			$big++;
		}
		if($big == 0){
			$query = "SELECT user_id, fname, lname FROM user WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['auth'] = true;
				while($row=$result->fetch_assoc()){
	    			$user_id = $row['user_id'];
	    			$fname = $row['fname'];
	    			$lname = $row['lname'];
	    			$_SESSION['user_id'] = $user_id;
	    			$_SESSION['fname'] = $fname;
	    			$_SESSION['lname'] = $lname;
	    		}
				header('location: app.php');
			}
			else{
				$_SESSION['error_login'] = "Wrong username or password";
				header('location: index.php');

			}
		}
		else{
			header('location: index.php#account');
		}
		
	}
?>