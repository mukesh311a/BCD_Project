<?php session_start(); ?>
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
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
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
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Feature</a></li>
                <li class=""><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <!--<img src="img/logo.png" class="img-responsive">-->
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare at your Finger!!</h1>
              <p>"BCD is an web-server that helps patients and clinicians see how different treatments for early invasive breast cancer might improve survival rates."</p>
			  <p><i>-BCD Tool</i></p>
              <a href="#contact" class="btn btn-appoint">Breast Cancer Prediction system</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="account" class="section-padding bg-info">
    <div class="container">
      <div class="row">
		<div class="col-md-4 col-sm-4">
			<h2 class="ser-title">Login/Register</h2>
			<hr class="botm-line">
			<p>Your Best Protection to cancer is Early Detection. Check Yourself to Protect Yourself.</p>
			<p>Signup/login with us to check yourself and join us in our fight against cancer.</p>
			<br>
		</div>
		<div class="col-md-8 col-sm-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#login_form">Login</a></li>
				<li><a data-toggle="tab" href="#signup_form">Sign Up</a></li>
			</ul>

			<div class="tab-content" style="margin-top:10px;">
				<?php
				if(isset($_SESSION['error_login'])){
					echo "<div class='alert alert-danger'>Wrong username or password</div>";
					unset($_SESSION['error_login']);
				}
				if(isset($_SESSION['error_signup'])){
					echo "<div class='alert alert-danger'>".$_SESSION['error_signup']."</div>";
					unset($_SESSION['error_signup']);
				}
				
				if(isset($_SESSION['invalid'])){
					echo "<div class='alert alert-danger'>".$_SESSION['invalid']."</div>";
					unset($_SESSION['invalid']);
				}
				?>
				<div id="login_form" class="tab-pane fade in active">
					<form action="login.php" method="post" role="form" class="contactForm1">
					  <div class="form-group">
						<input type="text" name="username" class="form-control br-radius-zero" id="l_username" placeholder="Login Id" data-rule="required" data-msg="Please enter username" />
						<div class="validation"></div>
					  </div>
					  <div class="form-group">
						<input type="password" class="form-control br-radius-zero" name="password" id="l_password" placeholder="Password" data-rule="required" data-msg="Please enter password" />
						<div class="validation"></div>
					  </div>
					  <div class="form-action">
						<button type="submit" class="btn btn-form">Login</button>
					  </div>
					</form>
				</div>
				<div id="signup_form" class="tab-pane fade">
					<form action="signup.php" method="post" role="form">
					  <div class="row">
						<div class="form-group col-md-6">
							<input type="text" name="fname" class="form-control br-radius-zero" id="fname" placeholder="First Name" data-rule="required" data-msg="Please enter a first name" />
							<div class="validation"></div>
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="lname" class="form-control br-radius-zero" id="lname" placeholder="Last Name" data-rule="required" data-msg="Please enter a last name" />
							<div class="validation"></div>
						</div>
					  </div>
					  <div class="form-group">
						<input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
						<div class="validation"></div>
					  </div>
					  <div class="form-group">
						<div class='input-group'>
							<input type="date" class="form-control br-radius-zero" name="dob" id="dob" placeholder="Date of Birth" data-rule="required" data-msg="Please enter a valid date of birth">
							<div class="input-group-addon">
								<span class="fa fa-calendar"></span>
							</div>
						</div>
						<div class="validation"></div>
					  </div>
					  <div class="form-group">
						<input type="number" class="form-control br-radius-zero" name="age" id="age" placeholder="Age" data-rule="required" data-msg="Please enter age" />
						<div class="validation"></div>
					  </div>
					  <div class="form-group">
						<input type="text" class="form-control br-radius-zero" name="username" id="username" placeholder="Username" data-rule="required" data-msg="Please enter username" />
						<div class="validation"></div>
					  </div>
					  <div class="row">
						<div class="form-group col-md-6">
							<input type="password" class="form-control br-radius-zero" name="password" id="password" placeholder="Password" data-rule="required" data-msg="Please enter a valid password" />
							<div class="validation"></div>
						</div>	
						<div class="form-group col-md-6">
							<input type="password" class="form-control br-radius-zero" name="password1" id="password1" placeholder="Re-Enter Password" data-rule="required" data-msg="Please enter a valid password" />
							<div class="validation"></div>
						</div>	
					  </div>
					  <div class="form-action">
						<button type="submit" class="btn btn-form">Sign Up</button>
					  </div>
					</form>
				</div>
			</div>
		</div>
	  </div>
	</div>
  </section>	
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Features</h2>
          <hr class="botm-line">
          <p>Why Us?This features would let you know more about our software and web application.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-bullseye"></i>
            </div>
            <div class="icon-info">
              <h4>Accurate Results</h4>
              <p>The result reports generated are accurate and with the aim of confidence score as high as possible.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-laptop"></i>
            </div>
            <div class="icon-info">
              <h4>Available on Different Platforms</h4>
              <p>Available on all Android, Windows, OS X and other platforms.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="icon-info">
              <h4>User-friendly</h4>
              <p>Easy to use and view results by users.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-lock"></i>
            </div>
            <div class="icon-info">
              <h4>Web Security</h4>
              <p>User account and details are secured and well-protected.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-hand-peace-o "></i>
            </div>
            <div class="icon-info">
              <h4>Dual-input mode</h4>
              <p>Users can either insert patient details in the form of text input or upload an image.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Medical assurance</h4>
              <p>Serves as a double verfication/check application for medical professionals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <!--<section id="help" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Donate Us</h3>
              <p>Apun ko donate karneka ho toh idhar click maaro. </p>
              <a href="#contact" class="medi-info-btn">Contact</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
			<div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Datasets</h3>
              <p>Apun ko donate karneka ho toh idhar click maaro. </p>
              <a href="#contact" class="medi-info-btn">Contact</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
               <h3>Datasets</h3>
              <p>Apun ko donate karneka ho toh idhar click maaro. </p>
              <a href="#contact" class="medi-info-btn">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--cta-->
  <!--about-->
  <!--<section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medilap <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--/ about-->
  <!--doctor team-->
  <!--<section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Our Amazing Team</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="thumbnail">
            <img src="img/team/1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Saurabh Makwana</h3>
              <p>Lead Designer</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="thumbnail">
            <img src="img/team/2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Raj Nandu</h3>
              <p>Lead Deep Learning Expert and Web Developer</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="thumbnail">
            <img src="img/team/3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Satyajeet Kamble</h3>
              <p>Deep Learning Expert</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--/ doctor team-->
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Our aim is to solve and tackle problems in one's life and use science and technology to overcome them and suggest innovative solutions to make the world better
          <p class="text-right text-primary"><i>— Breast Cancer Detection</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Awesome Street<br> Good Country, City 17022</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>123456789</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
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
              Designed by BioInFolk
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  

</body>

</html>
