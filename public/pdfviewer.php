<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pi-Viewer</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	
	<jquery>
		<!-- Scripts -->
		<script src="js/jquery-2.2.4.min.js" rel="text/javascript"></script>
		<script src="js/owl.carousel.min.js" rel="text/javascript"></script>
		<script src="js/bootstrap.min.js" rel="text/javascript"></script>
		<script src="js/wow.min.js" rel="text/javascript"></script>
		<script src="js/typewriter.js" rel="text/javascript"></script>
		<script src="js/jquery.onepagenav.js" rel="text/javascript"></script>
		<script src="js/main.js" rel="text/javascript"></script>
	</jquery>
	
	
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
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="/public/css/cardio.css">
	
	<!--MagaloneScript -->
	<script src="/magalone_folder/js/magalone.min.js" type="text/javascript"></script>
	<link href="/magalone_folder/css/magalone.min.css" type="text/css" rel="stylesheet" />
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

	<!-- fileuploadScript -->
    <link rel="stylesheet" href="css/skeleton.css">
    <script src="js/drop_uploader.js"></script>
    <link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/drop_uploader.css">
    
    <!-- stopwatch script -->
    
    <link rel="stylesheet" href="css/stopwatch.css">
    <script src="js/stopwatch.js"></script>

    <!-- fileupload scipt -->
    
    <script>
    /* global $ */
    $(document).ready(function(){
        $('input[type=file]').drop_uploader({
            uploader_text: 'Drop files to upload, or',
            browse_text: 'Browse',
            browse_css_class: 'button button-primary',
            browse_css_selector: 'file_browse',
            uploader_icon: '<i class="pe-7s-cloud-upload"></i>',
            file_icon: '<i class="pe-7s-file"></i>',
            time_show_errors: 5,
            layout: 'list',
            method: 'ajax',
            url: 'ajax_upload.php',
            delete_url: 'ajax_delete.php',
        });
    });
	</script>

	
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
				<li><a href="index.php#intro">HOME</a></li>
				<li><a href="index.php#services">사용법</a></li>
				<li><a href="pdfviewer.php">동영상강의</a></li>
				<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
	</nav>
	

	
	<footer style = "height:1500px";>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-center-mobile">
		    <h3 class="white">File Upload</h3>
		    
		    <form method="POST" action="upload.php" enctype="multipart/form-data">
		        <input type="file" name="file" data-layout="list" data-method="ajax" 
		               accept ="application/pdf" data-maxfilesize = "20000000">
		        <input class="button-primary" type="submit" value="Submit">
		    </form>
			</div>
			<div class="col-sm-6 text-center-mobile">
				<h3 class="white">Server Status <span class="open-blink"></span></h3>
				<div class="row opening-hours">
					<div class="col-sm-6 text-center-mobile">
						<h5 class="light-white light">PDF upload</h5>
						<h3 class="regular white">status</h3>
					</div>
					<div class="col-sm-6 text-center-mobile">
						<h5 class="light-white light">PDF conversion</h5>
						<h3 class="regular white">status</h3>
					</div>
				</div>
				
				<div class="col-sm-12 text-center-mobile">
					<div class="stopwatch" data-autostart="false">
					    <div class="time">
					        <span class="minutes"></span> : 
					        <span class="seconds"></span>
							
					    </div>
					    <div class="controls">
					        <!-- Some configurability -->
					        <button class="toggle" data-pausetext="Pause" data-resumetext="Start">Start</button>
					        <button class="reset">Reset</button>
					    </div>
				</div>

			</div>	
			</div>
		</div>
		
		<div 
		id="reader-container" 
		data-path="/magalone_folder/documents/doc1/"
		data-page-mode = "single"
		data-enable-keyboard = "true"
		data-show-download = "true"
		data-enable-swiping = "true"
		data-enable-pinching = "true"
		data-show-thumbnails = "true"
		data-thumbnails-overlay = "true">
			<div
			    class="overlay"
			    data-display="pin"
			    data-type="html"
			    data-icon="alarm"
			    data-x="1"
			    data-y="1"
			    data-open-width="500"
			    data-open-height="500"
			    data-page="1">
			
			<div class="stopwatch" data-autostart="false">
			    <div class="time">
			        <span class="minutes"></span> : 
			        <span class="seconds"></span>
			    </div>
			    <div class="controls">
			        <!-- Some configurability -->
			        <button class="toggle" data-pausetext="Pause" data-resumetext="Start">Start</button>
			        <button class="reset">Reset</button>
			    </div>
			</div>				    
			 
			</div>
		</div>
	</div>
	</footer>

	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
			



</body>
</html>