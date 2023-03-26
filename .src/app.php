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
                <li class="active"><a href="#text_data">Text Data</a></li>
                <li class=""><a href="#image_data">Image Data</a></li>
                <li class=""><a href="result.php#text_data">Results</a></li>
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
			<h2 class="ser-title">Enter Text Data</h2>
			<hr class="botm-line">
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="col-lg-12">
				<div class = "row" id="h13">
					<div class="col-md-12">
						<button class="btn btn-warning br-radius-zero" id = "m" >
							Mean Values 
							<i class="fa fa fa-angle-double-right"></i>
						</button>
						<button class="btn btn-default br-radius-zero" id = "s" >
							SE Values
							<i class="fa fa fa-angle-double-right"></i>
						</button>
						<button class="btn btn-default br-radius-zero" id = "w" >Worst Values</button>
					</div>
				</div>
				<hr>
				<div class="row">
					<?php 
					if(isset($_SESSION['invalid_text'])){
					  echo $_SESSION['invalid_text'];
					  $_SESSION['invalid_text'] = "";
					}
					?>
					<form method="post" action="text.php">
						<div class="col-lg-12" id = "mean">
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Area M:<input class="form-control br-radius-zero" type="text" name="area_m"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Radius:<input class="form-control br-radius-zero" type="text" name="radius_m"></label>             
								</div>
								<div class="col-md-4 form-group">
									<label>Perimeter:<input class="form-control br-radius-zero" type="text" name="perimeter_m"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Compactness:<input class="form-control br-radius-zero" type="text" name="compactness_m"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Concave points:<input class="form-control br-radius-zero" type="text" name="concave_points_m"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Concavity:<input class="form-control br-radius-zero" type="text" name="concavity_m"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Fractional Dimensional:<input class="form-control br-radius-zero" type="text" name="fractional_dimension_m"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Smoothness:<input class="form-control br-radius-zero" type="text" name="smoothness_m"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Symmetry:<input class="form-control br-radius-zero" type="text" name="symmetry_m"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Texture:<input class="form-control br-radius-zero" type="text" name="texture_m"></label>
								</div>
							</div> 
							<hr>
							<div class="col-md-12 form-group text-right">
								<label></label>
								<input type="button" class="btn  btn-form" value="Next" name="next1" id = "next1">
							</div>
						</div>
						<div class="col-lg-12" id = "se">
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Area:<input class="form-control br-radius-zero" type="text" name="area_se"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Radius:<input class="form-control br-radius-zero" type="text" name="radius_se"></label>  
								</div>
								<div class="col-md-4 form-group">
									<label>Perimeter:<input class="form-control br-radius-zero" type="text" name="perimeter_se"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Compactness:<input class="form-control br-radius-zero" type="text" name="compactness_se"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Concave points:<input class="form-control br-radius-zero" type="text" name="concave_points_se"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Concavity:<input class="form-control br-radius-zero" type="text" name="concavity_se"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Fractional Dimensional:<input class="form-control br-radius-zero" type="text" name="fractional_dimension_se"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Smoothness:<input class="form-control br-radius-zero" type="text" name="smoothness_se"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Symmetry:<input class="form-control br-radius-zero" type="text" name="symmetry_se"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Texture:<input class="form-control br-radius-zero" type="text" name="texture_se"></label>
								</div>
							</div>
							<hr>
							<div class="col-md-12 form-group text-right">
								<input type="button" class="btn  btn-form" value="Next" name="next2" id = "next2">
							</div>
						</div>
						<div class="col-lg-12" id = "worst">
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Area:<input class="form-control br-radius-zero" type="text" name="area_worst"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Radius:<input class="form-control br-radius-zero" type="text" name="radius_worst"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Perimeter:<input class="form-control br-radius-zero" type="text" name="perimeter_worst"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Compactness:<input class="form-control br-radius-zero" type="text" name="compactness_worst"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Concave points:<input class="form-control br-radius-zero" type="text" name="concave_points_worst"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Concavity:<input class="form-control br-radius-zero" type="text" name="concavity_worst"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Fractional Dimensional:<input class="form-control br-radius-zero" type="text" name="fractional_dimension_worst"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Smoothness:<input class="form-control br-radius-zero" type="text" name="smoothness_worst"></label>
								</div>
								<div class="col-md-4 form-group">
									<label>Symmetry:<input class="form-control br-radius-zero" type="text" name="symmetry_worst"></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label>Texture:<input class="form-control br-radius-zero" type="text" name="texture_worst"></label>
								</div>
							</div>
							<hr>
							<div class="col-md-12 form-group text-right">
								<input type="submit" class="btn  btn-form" value="Submit" name="submit" id = "submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	  </div>
    </div>
  </section>
  <!--/ banner-->
  <section id="image_data" class="section-padding">
    <div class="container">
      <div class="row">
		<div class="col-md-4 col-sm-4">
			<h2 class="ser-title">Upload Image</h2>
			<hr class="botm-line">
				<div class="con">
				  
				  <?php 
					if(isset($_SESSION['image-error'])){
					  echo "<div class='alert alert-danger'>".$_SESSION['image-error']."</div>";
					  unset($_SESSION['image-error']);
					}
				   ?>
				</div>
				<form method="post" action="image.php" enctype = "multipart/form-data">
				  <div id = "form-group">
					<input type="file" id="exampleInputFile" name = "image">
					<p class="help-block"></p>
				  </div>
				  <div class="form-group">
					<input type="submit" class="btn btn-form" value="Upload" name="submit" id = "submit">
				  </div>
				</form>
			</div>
		</div>
	</div>
  </section>	
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
              Designed by Pawan
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  

</body>

</html>
<script src="vendor/step_form/js/agency.min.js"></script>
<script type="text/javascript">
  $("#m").on('click', function() {
	$("#se").css('display','none');
	$("#worst").css('display','none');
	$("#mean").css('display','block');

	$("#s").removeClass('btn-warning');
	$("#w").removeClass('btn-warning');
	$("#m").removeClass('btn-default');
	
	$("#s").addClass('btn-default');
	$("#w").addClass('btn-default');
	$("#m").addClass('btn-warning');
  });
  $("#s, #next1").on('click', function() {
	$("#se").css('display','block');
	$("#worst").css('display','none');
	$("#mean").css('display','none');

	$("#s").removeClass('btn-default');
	$("#w").removeClass('btn-warning');
	$("#m").removeClass('btn-warning');
	
	$("#s").addClass('btn-warning');
	$("#w").addClass('btn-default');
	$("#m").addClass('btn-default');
  });
  $("#w, #next2").on('click', function() {
	$("#se").css('display','none');
	$("#worst").css('display','block');
	$("#mean").css('display','none');

	$("#s").removeClass('btn-warning');
	$("#w").removeClass('btn-default');
	$("#m").removeClass('btn-warning');
	
	$("#s").addClass('btn-default');
	$("#w").addClass('btn-warning');
	$("#m").addClass('btn-default');
  });
</script>
