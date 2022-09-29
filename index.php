
<?php
ini_set('display_errors', '1'); 
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ikuelogbon Tomiwa Samuel Personal Portfolio</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- ========== Start Stylesheet ========== -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/flaticon-set.css" rel="stylesheet">
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<!-- ========== End Stylesheet ========== -->
  
</head>

<body id="bdy" class="scroll-style" >		
	<!-- Start header data-bs-toggle="dropdown"
    ============================================= -->
    <header class="header">
		<div class="main-navigation">
			<nav id="navbar_top" class="navbar navbar-expand-lg">
				<div class="container">
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="ti-menu-alt"></i></span>
					</button>
					<div class="collapse navbar-collapse justify-content-center" id="main_nav">
						<ul id="top-menu" class="navbar-nav v-card-menu">
							<li class="nav-item">
								<a class="nav-link smooth-menu" href="#home"> 
									Home
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link smooth-menu" href="#about"> 
									About 
								</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link smooth-menu" href="#service">
									Service 
								</a>
							</li>
							
						
							<li class="nav-item">
								<a class="nav-link smooth-menu" href="#contact"> 
									Contact 
								</a>
							</li>
						</ul>
					</div> <!-- navbar-collapse.// -->
				 
				</div> <!-- container -->
			</nav>
		</div>
    </header>
    <!-- End header -->
    
	<main class="main">
        
		<!-- Start Slider
		============================================= -->
		<div id="home" class="hero-section v-card-section">
			<div class="hero-single jarallax d-flex" data-jarallax='{"speed": 0.2}' style="background-image: url(assets/img/images/slider01.jpg)">
               			
                <div class="container">
                    <div class="row">
						<div class="col-xl-10 offset-xl-1">
							<div class="hero-content">
								<h5 class="hero-sub-title wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
									Hello
								</h5>
								<h2 class="hero-title wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
									I am 
										<span class="typed-strings">
											  <span class="type_color">Tomiwa Samuel</span>
											  <span class="type_color">i build things for the web and design product (UX/UI).</span>
											   
										</span>
										<span class="typed"></span>
								</h2>
								<p>
									I'm a software Engineer and a product designer specializing in building an exceptional Digital Experiences. Currently focusing on building an environment where expertise can sell and market there product
								<div class="hero-btn text-center">
									<a href="#about" class="tm-btn-1 smooth-menu">
										More about me <i class="fas fa-chevron-right"></i>
									</a>
								</div>
                            </div>
						</div>
                    </div>
                </div>
            </div>
		</div>
		<!-- End Slider -->
		
		<!-- Start About
		============================================= -->
		<div id="about" class="about-area de-padding v-card-section">
			<div class="container">
				<div class="about-wpr">
					<div class="row">
						<div class="col-xl-6">
							<div class="about-left wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
								<div class="about-pic">
									<img src="assets/img/images/about_me.jpg" alt="thumb">
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="about-right wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">
								<div class="about-right-content">
									<h5 class="about-sub-title">
										About Me
									</h5>
									<h2 class="about-title">
										Hello , my name is  <span> Samuel</span>
									</h2>
									<h5 class="about-title-3">
										Software developer and product designer
									</h5>
									<div class="about-txt mb-30">
										<p>
										I'm a Software Engineer  I love creating things that live on the internet. i stated my journey in 2016 when  my mentor and i worked on an offline Computer Based Test (CBT) Software in a secondary School in Edo State, Nigeria.
										Now, i have the privilege to work with him and on project/product alone which i'm currently working on an environment/platform where tech expertise can sell and market there product. 
										</p>
										<p class="mb-0">
											
										</p>
									</div>
									<!-- <div class="about-btns">
										<a href="#" class="tm-btn-2">
											Download CV 
											<i class="fas fa-arrow-down"></i>
										</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->
		
		<!-- Start Service
		============================================= -->
		<div id="service" class="service-area bg de-padding v-card-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title mb-60 text-center">
							<h5 class="about-sub-title wh">
								My Services
							</h5>
							<h2 class="mb-0">
								Why Choose My Services
							</h2>
						</div>
					</div>
				</div>
				<div class="service-wpr">
					<div class="row g-5">
						
						<div class="col-xl-4 col-md-6">
							<div class="service-box">
								<div class="service-icon">
									<i>
										<img src="assets/img/images/icon/2.png" alt="thumb">
									</i>
								</div>
								<div class="service-content">
									<h4>Web development</h4>
									
									<p>
									 You don't just need a website. you need a professional website / portal that will help your business grow. We build individual or business website using the most secured payment gateway for e-commerce. Our websites are fully responsive on mobile devices
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="service-box">
								<div class="service-icon">
									<i>
										<img src="assets/img/images/icon/6.png" alt="thumb">
									</i>
								</div>
								<div class="service-content">
									<h4>UX/UI</h4>
									 
									<p>
									 UX designer that specialization in complex web application design. Achieved 15% increase in user satisfaction and 20% increase in conversions through the creation of interactively tested, data-driven, and user-centered design. Looking to leverage my skills to bring monetized improvements. 
										</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="service-box">
								<div class="service-icon">
									<i>
										<img src="assets/img/images/icon/4.png" alt="thumb">
									</i>
								</div>
								<div class="service-content">
									<h4>graphics design</h4>
									 
									<p>
									Senior graphic designer responsible for daily graphic design content for a medium-sized firm. Worked regularly on graphic, layout, and production materials. Developed 200+ graphic design projects (logos, brochures, advertisements, infographics) that increased client transactions by 25%.
									<br><br>
									</p>
								</div>
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Service -->
		
		<!-- Start Video
		============================================= -->
		
		<div class="video-area de-padding" style="background-image: url(assets/img/images/video.jpg) ">
			<div class="container">
				<div class="padding">
				<div class="video-wpr">
					<div class="row">
						<div class="col-xl-4 col-lg-4">
							<div class="my-service">
								<h5>My Services</h5>
								<h4>
									My  Skills
								</h4>
								<p class="mb-20">
									Outstanding analytical and ability for efficient problem solving. A very good team player Fast thinking and pro-active tendencies. <br> <br>
									Ability to react quickly to shifting priorities and meeting deadlines, Excellent communication skills, interpersonal and entrepreneurial skils. Ability to work under minimal supervision
								</p>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2">
							
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="skills-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>Web Development <span class="pull-right">90%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="90"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>product design <span class="pull-right">90%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="90"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Application Development <span class="pull-right">90%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="90"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- End Video -->
		
	
		
	
	
		
		
	
		<!-- Start Contact
		============================================= -->
		<div id="contact" class="contact-area de-pt wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title mb-60 text-center">
							<h5 class="about-sub-title def">
								Contact
							</h5>
							<h2 class="mb-0">
								Contact Me
							</h2>
						</div>
					</div>
				</div>
				<div class="contact-wpr">
					<div class="contact-content">
						<div class="contact-lpm mb-100">
							<div class="row g-5">
								<div class="col-xl-4 col-md-6 col-lg-6">
									<div class="contact-addr-box">
										<div class="contact-addr-icon">
											<i class="fas fa-phone"></i>
										</div>
										<div class="contact-addr-desc">
											<h4>Phone Number</h4>
											<span>+2348138836538,</span> <br>
											<span>+2348168180827</span>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-lg-6">
									<div class="contact-addr-box">
										<div class="contact-addr-icon">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="contact-addr-desc">
											<h4>Mail Address</h4>
											<span>samueltommy769@gmail.com</span> 
											
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-lg-6">
									<div class="contact-addr-box">
										<div class="contact-addr-icon">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="contact-addr-desc">
											<h4>Office Address</h4>
											<span>1, Alliyu Ibrahim Attah, Sunday Adewusi Estate, dakwa.</span> 
											<span>FCT </span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<form class="contact-form"   action="" method="POST">	
							<?php 
							include("db_conn.php");
							$rand = rand(1000, 9999);
							$time = date('Ymd');
							$ID = "tommytechcta/".$time.$rand;
							error_reporting(E_ALL);
							if(isset($_REQUEST['submit'])) {
								$uin = trim(addslashes($_REQUEST['uin']));
								$name = trim(addslashes($_REQUEST['name']));
								$emailreg = trim(addslashes($_REQUEST['email']));
								$subject = trim(addslashes($_REQUEST['subject']));
								$message = trim(addslashes($_REQUEST['message']));
								$sendemail = "timmystroge75@gmail.com";
						
							 //Create instance of PHPMailer
                             $mail = new PHPMailer();
                             //Set mailer to use smtp
                                 $mail->isSMTP();
                             //Define smtp host
                                 $mail->Host = "mail.talkertif.com";
                             //Enable smtp authentication
                                 $mail->SMTPAuth = true;
                             //Set smtp encryption type (ssl/tls)
                                 $mail->SMTPSecure = "tls";
                             //Port to connect smtp
                                 $mail->Port = "587";
                             //Set gmail username
                                 $mail->Username = "stroge@talkertif.com";
                             //Set gmail password
                                 $mail->Password = "oluwatimileyin";
                             //Email subject
                                 $mail->Subject = "Tomiwa Samuel Personal Website";
                             //Set sender email
                                 $mail->setFrom('tommytech@tommytech.talkertif.com');
                             //Enable HTML
                                 $mail->isHTML(true);
                             //Attachment
							
							// $mail = new PHPMailer();
							// //Set mailer to use smtp
							// 	$mail->isSMTP();
							// //Define smtp host
							// 	$mail->Host = "mail.wetindey.xyz";
							// //Enable smtp authentication
							// 	$mail->SMTPAuth = true;
							// //Set smtp encryption type (ssl/tls)
							// 	$mail->SMTPSecure = "tls";
							// //Port to connect smtp
							// 	$mail->Port = "587";
							// //Set gmail username
							// 	$mail->Username = "timmystroge@wetindey.xyz";
							// //Set gmail password
							// 	$mail->Password = "oluwatimileyin";
							// //Email subject
							// 	$mail->Subject = "TM Online Registration";
							// //Set sender email
							// 	$mail->setFrom('Timmystroge@wetindey.xyz');
							// //Enable HTML
							// 	$mail->isHTML(true);
							// //Attachment
                                 
                             //Email body
                                 $mail->Body = "    
								 <style>
									
									 html,
									 body {
										 margin: 0 auto !important;
										 padding: 0 !important;
										 height: 100% !important;
										 width: 100% !important;
										 font-family: 'Roboto', sans-serif !important;
										 font-size: 14px;
										 margin-bottom: 10px;
										 line-height: 24px;
										 color:#8094ae;
										 font-weight: 400;
									 }
									 * {
										 -ms-text-size-adjust: 100%;
										 -webkit-text-size-adjust: 100%;
										 margin: 0;
										 padding: 0;
									 }
									 table,
									 td {
										 mso-table-lspace: 0pt !important;
										 mso-table-rspace: 0pt !important;
									 }
									 table {
										 border-spacing: 0 !important;
										 border-collapse: collapse !important;
										 table-layout: fixed !important;
										 margin: 0 auto !important;
									 }
									 table table table {
										 table-layout: auto;
									 }
									 a {
										 text-decoration: none;
									 }
									 img {
										 -ms-interpolation-mode:bicubic;
									 }
								 </style>
							 
							 </head>
							 
							 <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;'>
								 <center style='width: 100%; background-color: #f5f6fa;'>
									 <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
										 <tr>
											<td style='padding: 40px 0;'>
												
												 <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
													 <tbody>
														 <tr>
															 <td style='padding: 30px 30px 20px'>
																 <p style='margin-bottom: 10px;'><strong>Hello Tomiwa Samuel</strong>,</p>
																 <p style='margin-bottom: 10px;'><em>This is to inform you that someone had gone through your personal website and decided to leave a message.</em>,</p>
																 <p style='margin-bottom: 10px;'>Name: $name</p>
																 <p style='margin-bottom: 10px;'>Email adress: $emailreg</p>
																 <p style='margin-bottom: 10px;'>Subject: $subject</p>
																 <p style='margin-bottom: 10px;'>Message: $message</p>
																
															 </td>
														 </tr>
													 </tbody>
												 </table>
												 <table style='width:100%;max-width:620px;margin:0 auto;'>
													 <tbody>
														 <tr>
															 <td style='text-align:center;padding:25px 0 0;'>
																 <p style='font-size: 13px;'>Copyright © 2020. All rights reserved.</p>
																
															 </td>
														 </tr>
													 </tbody>
												 </table>
											</td>
										 </tr>
									 </table>
								 </center>";
                             //Add recipient
                                 $mail->addAddress("$sendemail");
                             //Finally send email
                                 if ( $mail->send() ) {
                                     echo "<script>alert('sent')
                             location.href='index.php'</script>";
                                 
                                 }else{
                                  echo "<script>alert('message not send')</script>";
                                 }
                            
                        
						   $sql = "INSERT INTO cta_message(uin,  name, email, subject, message) VALUES('$uin','$name','$emailreg','$subject','$message')";
						   mysqli_query($conn,$sql)  or die(mysqli_connect_error($conn));
						   $num = mysqli_insert_id($conn);
						   if(mysqli_insert_id($conn)!=1){
						   $message = "error inserting into db";
						   }
                           

                      }
                      ?> 
							?>
							<h4 class="contact-tl">Send Message</h4>							
							<div class="row g-4">
							<input type="hidden" name="uin" class="form-control input-style-2"  value="<?php echo $ID;?>">
								<div class="col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
									<input type="text" name="name" class="form-control input-style-2" placeholder="Your Full Name*">
								</div>								
								<div class="col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
									<input type="email" name="email" class="form-control input-style-2" placeholder="Your Email Address*">
								</div>								
								<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
									<input type="text" name="subject" class="form-control input-style-2" placeholder="Subject...">
								</div>
								<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s">
									<textarea class="form-control input-style-2" name="message" placeholder="Your Message..."></textarea>
								</div>
								<div class="col-md-12 mt-50 contact-sub-btn text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
									<button type="submit" name="submit" class="tm-btn-2">
										Submit Message 
										<i class="fas fa-chevron-right"></i>
										
									</button>
									
								</div>
							 <p style="visibility: hidden;">hdhdhdhdhdhdhdhdh</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Contact -->
		
	
		
	</main>	
		
	<div class="clearfix"></div>
	
	<!-- Start Footer
	============================================= -->
	<footer>
		<div class="footer-widget">
			<div class="container">
				<div class="copyright">
					<div class="row align-items-center">
						<div class="col-xl-4">
							<p>Copyright &copy; 2021. All right reserved</p>
						</div>
						<div class="col-xl-4">
							<ul class="footer-menu">
								<li>
									<a href="#about" class="smooth-menu">
										About
									</a>
								</li>
								<li>
									<a href="#service" class="smooth-menu">
										services
									</a>
								</li>
								<li>
									<a href="#contact" class="smooth-menu">
										Contact
									</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-4">
							<ul class="footer-social">
								<li><a href="https://www.facebook.com/tommy.free2"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.instagram.com/ayooluwatomiwasire"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://wa.me/2348168180827"><i class="fab fa-whatsapp"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>	
	<!-- End Footer-->	
	
	<!-- Start Scroll top
	============================================= -->
	<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
	<!-- End Scroll top-->
	
  	<!-- jQuery Frameworks
    ============================================= -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/bootstrap-menu.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/jquery.appear.js"></script>
	<script src="assets/js/count-to.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/progress-bar.min.js"></script>
	<script src="assets/js/typed.js"></script>
    <script src="assets/js/parallax.js"></script>	
	<!-- <script src="assets/js/jquery.particles.min.js"></script> -->
	<script src="assets/js/YTPlayer.min.js"></script>
	<script src="assets/js/active-class.js"></script>
    <script src="assets/js/main.js"></script>	
</body>

</html>