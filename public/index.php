<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PiLMS</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="/public/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="/public/css/owl.css">
	<!-- Animate. -->
	<link rel="stylesheet" type="text/css" href="/public/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="/public/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">HOME</a></li>
					<li><a href="#services">사용법</a></li>
					<li><a href="pdfviewer.php">동영상강의</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">고려대학교 CCP 연구</h3>
							<h1 class="white typed">π-LMS(PILMS)</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Today's Schedule</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Machine Learning</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Hyeon-cheol Kim</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Computer Network</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Seung-Jun Baek</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Processor Architecture</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Kyung-ho Lee</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Better Education</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Good, Better</h4>
							<h4 class="white heading small-pt">학습 관리 시스템</h4>
							<a href="#" class="btn btn-white-fill expand">PiLMS</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Effectiveness</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">학습이 쉬워졌어요</h4>
								<h5 class="white heading light author">Tom Lee</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Learning의 효율성 증대</h4>
								<h5 class="white heading light author">Greg Pardon</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">To the global standard of education</h4>
								<h5 class="white heading light author"></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class="light muted">PiLMS의 기능은 이러합니다</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">What you learn</h4>
						<p class="description">learning situation을 파악</p>
						<p class="description">학습자가 어떤 상황입니까</p>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">ML</h4>
						<p class="description">Effectiveness의 증대 고민</p>
						<p class="description">효율성을 높이자</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Research</h4>
						<p class="description">학습자에게 어떤것이 필요한가</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Our Team</h2>
				<h4 class="light muted">Team을 소개합니다</h4>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="team text-center">
						<div class="cover" style="background:url('img/bak.jpg'); background-size:cover;">
							<div class="overlay text-center">
							</div>
						</div>
						<img src="img/prof.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>김현철 교수</h4>
							<h5 class="muted regular">지도교수님</h5>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="team text-center">
						<div class="cover" style="background:url('img/bak.jpg'); background-size:cover;">
							<div class="overlay text-center">
							</div>
						</div>
						<img src="img/2.png" alt="Team Image" class="avatar">
						<div class="title">
							<h4>이 탐</h4>
							<h5 class="muted regular">Leader</h5>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="team text-center">
						<div class="cover" style="background:url('img/bak.jpg'); background-size:cover;">
							<div class="overlay text-center">
							</div>
						</div>
						<img src="img/4.png" alt="Team Image" class="avatar">
						<div class="title">
							<h4>소찬호</h4>
							<h6 class="muted regular">research & machine learning</h5>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="team text-center">
						<div class="cover" style="background:url('img/bak.jpg'); background-size:cover;">
							<div class="overlay text-center">
							</div>
						</div>
						<img src="img/3.png" alt="Team Image" class="avatar">
						<div class="title">
							<h4>박소윤</h4>
							<h6 class="muted regular">research & web developer</h5>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="team text-center">
						<div class="cover" style="background:url('img/bak.jpg'); background-size:cover;">
							<div class="overlay text-center">
							</div>
						</div>
						<img src="img/1.png" alt="Team Image" class="avatar">
						<div class="title">
							<h4>황나윤</h4>
							<h5 class="muted regular">Web developer</h5>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="team text-center">
						<div class="cover" style="background:url('img/bak.jpg'); background-size:cover;">
							<div class="overlay text-center">
							</div>
						</div>
						<img src="img/you.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>학습자</h4>
							<h5 class="muted regular">YOU. The learner</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To Better Education.</h4>
							<h4 class="light-white light">#LMS #KU #BlackBoard</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">We use various Techs</h4>
							<h4 class="light-white light">#CCP #ML #PHP #Research</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Full Name">
					<input type="text" class="form-control form-white" placeholder="Email Address">
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<!--<footer>-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-sm-6 text-center-mobile">-->
	<!--				<h3 class="white">PiLMS는 교육의 혁신입니다</h3>-->
	<!--				<h5 class="light regular light-white">For the better education</h5>-->
	<!--				<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>-->
	<!--			</div>-->
	<!--			<div class="col-sm-6 text-center-mobile">-->
	<!--				<h3 class="white">Contact us<span class="open-blink"></span></h3>-->
	<!--				<div class="row opening-hours">-->
	<!--					<div class="col-sm-6 text-center-mobile">-->
	<!--						<h5 class="light-white light">email</h5>-->
	<!--						<h3 class="regular white">nayoo38.korea.ac.kr</h3>-->
	<!--					</div>-->
	<!--					<div class="col-sm-6 text-center-mobile">-->
	<!--						<h5 class="light-white light">phone</h5>-->
	<!--						<h3 class="regular white">1234-5678</h3>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--		<div class="row bottom-footer text-center-mobile">-->
	<!--			<div class="col-sm-8">-->
	<!--				<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>-->
	<!--			</div>-->
	<!--			<div class="col-sm-4 text-right text-center-mobile">-->
	<!--				<ul class="social-footer">-->
	<!--					<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>-->
	<!--					<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>-->
	<!--					<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>-->
	<!--				</ul>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</footer>-->
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>
	
