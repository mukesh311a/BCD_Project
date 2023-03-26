<?php
	session_start();
	if(!$_SESSION['auth']){
		header('location: index.php');

	}	
	else{
		if($_POST){
			include('connection.php');
			$_SESSION['error_text'] = '';
			$big=0;
			include('connection.php');
			$area_m = $_POST['area_m'];
			$radius_m = $_POST['radius_m'];
			$perimeter_m = $_POST['perimeter_m'];
			$compactness_m = $_POST['compactness_m'];
			$concave_points_m = $_POST['concave_points_m'];
			$concavity_m = $_POST['concavity_m'];
			$fractional_dimension_m = $_POST['fractional_dimension_m'];
			$smoothness_m = $_POST['smoothness_m'];
			$symmetry_m = $_POST['symmetry_m'];
			$texture_m = $_POST['texture_m'];

			$area_se = $_POST['area_se'];
			$radius_se = $_POST['radius_se'];
			$perimeter_se = $_POST['perimeter_se'];
			$compactness_se = $_POST['compactness_se'];
			$concave_points_se = $_POST['concave_points_se'];
			$concavity_se = $_POST['concavity_se'];
			$fractional_dimension_se = $_POST['fractional_dimension_se'];
			$smoothness_se = $_POST['smoothness_se'];
			$symmetry_se = $_POST['symmetry_se'];
			$texture_se = $_POST['texture_se'];

			$area_worst = $_POST['area_worst'];
			$radius_worst = $_POST['radius_worst'];
			$perimeter_worst = $_POST['perimeter_worst'];
			$compactness_worst = $_POST['compactness_worst'];
			$concave_points_worst = $_POST['concave_points_worst'];
			$concavity_worst = $_POST['concavity_worst'];
			$fractional_dimension_worst = $_POST['fractional_dimension_worst'];
			$smoothness_worst = $_POST['smoothness_worst'];
			$symmetry_worst = $_POST['symmetry_worst'];
			$texture_worst = $_POST['texture_worst'];
			$user_id = $_SESSION['user_id'];
			if(!preg_match("/^[0-9.]*$/",$area_m) || !preg_match("/^[0-9.]*$/",$radius_m) || !preg_match("/^[0-9.]*$/",$perimeter_m) || !preg_match("/^[0-9.]*$/",$compactness_m) || !preg_match("/^[0-9.]*$/",$concave_points_m) || !preg_match("/^[0-9.]*$/",$concavity_m) || !preg_match("/^[0-9.]*$/",$fractional_dimension_m) || !preg_match("/^[0-9.]*$/",$smoothness_m) || !preg_match("/^[0-9.]*$/",$symmetry_m) || !preg_match("/^[0-9.]*$/",$texture_m) || !preg_match("/^[0-9.]*$/",$area_se) || !preg_match("/^[0-9.]*$/",$radius_se) || !preg_match("/^[0-9.]*$/",$perimeter_se) || !preg_match("/^[0-9.]*$/",$compactness_se) || !preg_match("/^[0-9.]*$/",$concave_points_se) || !preg_match("/^[0-9.]*$/",$concavity_se) || !preg_match("/^[0-9.]*$/",$fractional_dimension_se) || !preg_match("/^[0-9.]*$/",$smoothness_se) || !preg_match("/^[0-9.]*$/",$symmetry_se) || !preg_match("/^[0-9.]*$/",$texture_se) || !preg_match("/^[0-9.]*$/",$area_worst) || !preg_match("/^[0-9.]*$/",$radius_worst) || !preg_match("/^[0-9.]*$/",$perimeter_worst) || !preg_match("/^[0-9.]*$/",$compactness_worst) || !preg_match("/^[0-9.]*$/",$concave_points_worst) || !preg_match("/^[0-9.]*$/",$concavity_worst) || !preg_match("/^[0-9.]*$/",$fractional_dimension_worst) || !preg_match("/^[0-9.]*$/",$smoothness_worst) || !preg_match("/^[0-9.]*$/",$symmetry_worst) || !preg_match("/^[0-9.]*$/",$texture_worst)){
				$big++;
				$_SESSION['invalid_text'] = "Invalid data";

			}
			


			
			if($big == 0){

				date_default_timezone_set('Asia/Kolkata');
				$time = date('Y-m-d H:i:s');
	
				#$query = "INSERT INTO patient_data VALUES ($area_m,$radius_m,$texture_m,$perimeter_m,$area_m,$smoothness_m,$compactness_m,$concavity_m,$concave_points_m,$symmetry_m,$fractional_dimension_m,$radius_se,$texture_se,$perimeter_se,$area_se,$smoothness_se,$compactness_se,$concavity_se,$concave_points_se,$symmetry_se,$fractional_dimension_se,$radius_worst,$texture_worst,$perimeter_worst,$area_worst,$smoothness_worst,$compactness_worst,$concavity_worst,$concave_points_worst,$symmetry_worst,$fractional_dimension_worst,$smoothness_worst,$symmetry_worst,'$time',$user_id)";
				
				$query = "INSERT INTO patient_data VALUES (null,$radius_m,$texture_m,$perimeter_m,$area_m,$smoothness_m,$compactness_m,$concavity_m,$concave_points_m,$symmetry_m,$fractional_dimension_m,$radius_se,$texture_se,$perimeter_se,$area_se,$smoothness_se,$compactness_se,$concavity_se,$concave_points_se,$symmetry_se,$fractional_dimension_se,$radius_worst,$texture_worst,$perimeter_worst,$area_worst,$smoothness_worst,$compactness_worst,$concavity_worst,$concave_points_worst,$symmetry_worst,$fractional_dimension_worst,null,null,'$time',$user_id)";
				#$res = $conn->query("SELECT VERSION()");


				$res = mysqli_query($conn,$query);
				if ( false===$res ) {
					printf("error: %s\n", mysqli_error($conn));
				  }
				  else {
					#if($_GET['f']=="image")
						$_GET["f"]="text";
						include("python.php");


					#header("location: result.php");
				  }

			
				}
			}
			else{
				header('location: app.php#text_data');
			}
			
		}
	
?>