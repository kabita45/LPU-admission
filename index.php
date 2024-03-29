<?php
session_start();
error_reporting(0);
include('connect.php');

date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d H:i:s');

if (isset($_POST['btnsubmit'])) {

	$pin = $_POST['txtpin'];
	$serial = $_POST['txtserial'];

	$sql = "SELECT * FROM scratchcard WHERE pin='" . $pin . "' and serial = '" . $serial . "' and status = '0'";
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		($row = mysqli_fetch_assoc($result));
		$_SESSION["serial"] = $row['serial'];

		header("Location: apply/admission.php");
	} else {
		?>
		<script>
			alert('Invalid Scratch Card Details or Has Already been Used');

		</script>
		<?php
	}

}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Lovely Professional University|Online Student Admission System</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

<style type="text/css">
	<!--
	.style1 {
		color: #000000
	}
	-->
</style>
</head>

<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Start Admission Process here </h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Login" data-toggle="tab">Enter Scratch Card Details (N5900)</a>
						</li>
						<img src="images/icon.png" alt="" height="100" width="100" />

					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<?php
							include('form.php');
							?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hover-btn-new log orange" href="#" data-toggle="modal"
									data-target="#login"><span>Apply</span></a></li>
						</ul>
						<li class="nav-item"><a class="nav-link" href="user/index.php">Dashboard</a></li>

					</ul>

				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel"
		data-pause="hover" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.gif');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2><strong>Lovely Professional </strong>University Phagwara Punjab</h2>
										<p class="lead">Lovely Professional University (LPU) embodies the aspirations of
											modern learners, offering an entrepreneurial educational environment that
											nurtures the intellect and skills for maximum productivity.</p>
										<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Lovely Professional</strong>
											University, Phagwara
											Punjab</h2>
										<p class="lead" data-animation="animated fadeInLeft">We inculcates positive
											values and offers resources for navigating the world with ease. </p>
										<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Lovely Professional
											</strong>University,
											Phagwara Punjab</h2>
										<p class="lead" data-animation="animated fadeInLeft">At LPU, all our programs
											are proudly accredited by the prestigious UGC, ensuring the highest quality
											of education</p>
										<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>About Us </h3>
					<p align="justify" class="lead style1">Lovely Professional University (LPU) is a manifestation of
						the aspirations of thousands of students from around the world for an innovative and
						globally-focused educational institution. The university's commitment to excellence is
						underscored by its extensive accreditation by reputable organizations and the swift attainment
						of a full educational license.

						Founded on the principles of quality scholarship and world-class infrastructure, LPU is the
						crown jewel of the Lovely Group, a multi-faceted conglomerate involved in various industries
						such as education, technology, and more, with a history dating back to 2001. LPU is
						strategically located in Jalandhar, Punjab, on a sprawling 600-acre campus, providing students
						with an inspiring and peaceful environment for rigorous academic endeavors.

						Situated in the heart of Punjab, LPU is well-connected to major cities, including Amritsar,
						Chandigarh, and Delhi. Its accessibility makes it a preferred destination for students across
						India and beyond. With a focus on innovation and global learning, LPU has become a hub for
						future leaders and change-makers. The university's diverse and vibrant community represents a
						microcosm of the world, offering an enriching experience that prepares students for success in a
						rapidly evolving global landscape.</p>
				</div>
			</div><!-- end title -->

			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">
						<h4>Lovely Professional University, Phagwara(Punjab) </h4>
						<h2>Welcome to Online Student Admission System </h2>
						<p>&nbsp;</p>

						<a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
					</div><!-- end messagebox -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">
						<img src="images/blog_6.jpg" alt="" width="530" height="420" class="img-fluid img-rounded">
					</div>
					<!-- end media -->
				</div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn"></div>
					<!-- end media -->
				</div><!-- end col -->
				<!-- end col -->
			</div>
			<!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->
	<!-- end section -->
	<!-- end section -->
	<!-- end section -->
	<!-- end section -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- end col -->
				<!-- end col -->
				<!-- end col -->
			</div>
			<!-- end row -->
		</div><!-- end container -->
	</footer><!-- end footer -->

	<?php

	include('footer.php');
	?>

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>

</html>