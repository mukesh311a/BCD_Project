<?php
	session_start();
	if(!$_SESSION['auth']){
		header('location: index.php');
	}
	else{
		if($_POST){
			include('connection.php');
			$user_id = $_SESSION['user_id'];
			$query = "SELECT COUNT(*) as count FROM image_data WHERE user_id = $user_id";
			$result  = mysqli_query($conn, $query);
			while($row=$result->fetch_assoc()){
				$count = $row['count'];
			}
			$count = $count + 1;
			echo $user_id;
			echo $count;
			$filename = $user_id."_".$count.".png";
			$filetmp = $_FILES['image']['tmp_name'];
			
			$filetype = $_FILES['image']['type'];

			
			$filepath = "user_images/".$filename;
			move_uploaded_file($filetmp, $filepath);
			date_default_timezone_set('Asia/Kolkata');
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO image_data VALUES (null, '$filename','','', '$time', $user_id)";
			$res = mysqli_query($conn, $sql);
			if($res){
				header("location: result.php");
			}
			else{ 
				echo "Data not entered";
			}
			
		}
	}
?>