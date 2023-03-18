<?php 
session_start();
if(!$_SESSION['auth']){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Breast Cancer Detection</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  
	<link href="vendor/step_form/css/agency.min.css" rel="stylesheet">
    <style type="text/css">
	#se, #worst{
	  display: none;
	}
	</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner1" class="banner1">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#">
				<!--<img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;">-->
				<span style="color:#FFF">Breast Cancer</span> Detection
				</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="app.php#text_data">Text Data</a></li>
                <li class=""><a href="app.php#image_data">Image Data</a></li>
                <li class="active"><a href="#text_data">Results</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
					</ul>
				</li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
	  <div id="text_data" class="container" style="padding-top:200px;">
      <div class="row">
		<div class="col-md-4 col-sm-4">
			<h2 class="ser-title">Result</h2>
			<hr class="botm-line">
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="col-lg-12">
				<div class="row">
					<div class="res">
					<?php 
					  include("connection.php");

					  $user_id = $_SESSION['user_id'];
					  $query = "SELECT diagnosis, confidence_score, timestamp FROM image_data WHERE user_id = $user_id";
					  $result = mysqli_query($conn, $query);
					  if(mysqli_num_rows($result) > 0){
						?>
						<table class="table table-hover">
						  <h4>Image Data Results</h4>
						  <tr>
							<th>Time Stamp</th>
							<th>Diagnosis</th>
							<th>Confidence Score</th>
						  </tr>
						  <?php 
							while($row=$result->fetch_assoc()){
							  echo "<tr>";
							  echo "<td>".$row['timestamp']."</td>";
							  echo "<td>".$row['diagnosis']."</td>";
							  echo "<td>".$row['confidence_score']."</td>";
							  echo "</tr>";
							}
						  ?>
						  <tr>
							
						  </tr>
						</table>
						<?php 
					  }
					?>
					</div>
					<div class="res">
					<?php 
					  $user_id = $_SESSION['user_id'];
					  $query1 = "SELECT diagnosis, time FROM patient_data WHERE user_id = $user_id";
					  $result1 = mysqli_query($conn, $query1);
					  if(mysqli_num_rows($result1) > 0){
						?>
						<table class="table table-hover">
						  <h4>Text Data Results</h4>
						  <tr>
							<th>Time Stamp</th>
							<th>Diagnosis</th>
						  </tr>
						  <?php 
							while($row=$result1->fetch_assoc()){
							  echo "<tr>";
							  echo "<td>".$row['time']."</td>";
							  echo "<td>".$row['diagnosis']."</td>";
							  echo "</tr>";
							}
						  ?>
						  <tr>
							
						  </tr>
						</table>
						<?php 
					  }
					?>
					</div>
					<h5>Please Refresh the page if the result is not visible</h5>
				</div>
			</div>
		</div>
	  </div>
    </div>
  </section>
  <!--/ banner-->	
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Our aim is to solve and tackle problems in one's life and use science and technology to overcome them and suggest innovative solutions to make the world better.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.php"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="index.php#service"><i class="fa fa-circle"></i>Feature</a></li>
                <li><a href="index.php#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Breast Cancer Detection. All Rights Reserved
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
              -->
              Designed by BioInFolks
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  

</body>

</html>
