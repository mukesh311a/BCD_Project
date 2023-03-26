<?php
	session_start();
	// echo "hi";
	if($_POST){
		$_SESSION['invalid'] = "";
		if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password1']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['age'])){
			// echo "here";
			include('connection.php');
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$pass1 = $_POST['password1'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$age = $_POST['age'];
			$flag = false;
			$big = 0;
			if(!preg_match("/^[a-zA-Z0-9]*$/",$user)){
				$_SESSION['invalid'] .= "Username Should include digits and alphabets. ";
				$big++;
			}
			if (!preg_match("/^[ A-Za-z ]+$/",$fname)) {
	             
	            $_SESSION['invalid'] .= "Name should only have alphabets. ";
	            $big++;
	        }
	        if (!preg_match("/^[ A-Za-z ]+$/",$lname)) {
	             
	            $_SESSION['invalid'] .= "Name should only have alphabets. ";
	            $big++;
	        }
			if(!preg_match("/^[a-zA-Z0-9@!# ]*$/",$pass)){
				$_SESSION['invalid'] .= "Password Should include digits and alphabets and Special Characters(@!#). ";
				$big++;
			}
			if(!preg_match("/^[a-zA-Z0-9@!# ]*$/",$pass)){
				$_SESSION['invalid'] .= "Password Should include digits and alphabets and (@!#). ";
				$big++;
			}
			if (!preg_match("/^[0-9]*$/",$age)) {
	             $_SESSION['invalid'] .="Age should be a valid number"; 
	             $big++;
	        }
	        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$_SESSION['invalid'] .= "Invalid Email ID";
				$big++;
			}
			if($big == 0){
				if($pass != $pass1){
					$flag = true;
					$_SESSION['error_signup'] = "Passwords do not match";
					header('location:  index.php#account');
				}
				else{
					include("connection.php");
					$checkquery = "SELECT username FROM user WHERE username = '$user'";
					$checkres = $conn->query($checkquery);
					// if(!$checkres)
						// echo $conn->error;
					
					if(mysqli_num_rows($checkres) > 0){
						$_SESSION['error_signup'] = "User already exists";
						header('location: index.php#account');
					}
					else{
						$pass = md5($pass);
						$query = "INSERT INTO user VALUES (null,'$email','$user','$pass','$dob',$age,'$fname','$lname')";
						$res  = mysqli_query($conn, $query) or die(mysqli_error($conn));
						$user_id = mysqli_insert_id($conn);

						if($res){
							echo "User added successfully";
							$_SESSION['auth'] = true;
							$_SESSION['user_id'] = $user_id;
			    			$_SESSION['fname'] = $fname;
			    			$_SESSION['lname'] = $lname;
							header('location: app.php');
						}	
					}
				}	
			}
			else{
				header('location: index.php#account');
			}
				
		}
		else{
			$_SESSION['invalid'] = "Please fill all the fields";
			echo "string";
			header('location: index.php#account');
		}
	}
		
		

	
?>