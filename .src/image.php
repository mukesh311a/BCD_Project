<?php
#include('connection.php');
	session_start();
	if(!$_SESSION['auth']){
		#header('location: index.php');
	}
	else{
		if($_POST){
			include('connection.php');
			$user_id = $_SESSION['user_id'];
			$query = "SELECT COUNT(*) as count FROM image_data WHERE user_id = $user_id";
			$result  = mysqli_query($conn, $query);
			while($row=$result->fetch_assoc()){
				$count = $row['count'];
				#echo $count;
			}
			$count = $count + 1;
			#echo $count;
		
			$filename = $user_id."_".$count.".png";
			
			$filetmp = $_FILES['image']['tmp_name'];
			
			$filetype = $_FILES['image']['type'];

			#echo $filetype;

			#echo $filetmp;
			
			$filepath = "user_images/".$filename;
			
			move_uploaded_file($filetmp, $filepath);
			date_default_timezone_set('Asia/Kolkata');
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO image_data VALUES (null, '$filename','', null, '$time', $user_id)";

			#INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country) VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');

			#$res = $conn->query($sql);
			
			
			$conn = mysqli_connect("mysql_db", "root", "root", "weislabc_bcd");
			$res = mysqli_query($conn, $sql);
			
			if ( false===$res ) {
				printf("error: %s\n", mysqli_error($conn));
			  }
			  else {
				header("location: result.php");
			  }
	
			
		}
	}
?>