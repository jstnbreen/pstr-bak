<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name=”viewport” content=”width=device-width, initial-scale=1” />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,700italic,400,400italic|Roboto+Condensed:400,300,700" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imgareaselect/0.9.10/css/imgareaselect-default.css" />
<?php
if ($thisPage == "Home") {echo "<link rel='stylesheet' href='css/style.css' type='text/css'/>";}
else {echo "<link rel='stylesheet' href='../css/style.css' type='text/css'/>";}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<!-- <script src="https://raw.githubusercontent.com/ridjohansen/css_browser_selector/gh-pages/js/vendor/css_browser_selector.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/jquery.colorbox-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imgareaselect/0.9.10/js/jquery.imgareaselect.pack.js"></script>
<script src="js/jquery.main.js"></script>

<?php
if ($thisPage == "Home") {echo "<script src='js/jquery.main.js'></script>";}
else {echo "<script src='../js/jquery.main.js'></script>";}
?>

<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<title>PSTR</title>
</head>
	
<body>
	<div id="wrapper">
		<header id="header">
			<a href="http://www.pstr.club">
				<?php
					if ($thisPage == "Home") {
						echo "<img class='pagebanner' src='img/banner_pstr-jayden.jpg'>";
					} elseif ($thisPage == "Club Info") {
						echo "<img class='pagebanner' src='../img/banner_logos.jpg'>";
					} elseif ($thisPage == "Results") {
						echo "<img class='pagebanner' src='../img/banner_results-page.jpg'>";
					} elseif ($thisPage == "Bylaws") {
						echo "<img class='pagebanner' src='../img/banner_logos.jpg'>";
					} elseif ($thisPage == "Event Schedule") {
						echo "<img class='pagebanner' src='../img/banner_results-page.jpg'>";
					} elseif ($thisPage == "Photos") {
						echo "<img class='pagebanner' src='../img/banner_results-page.jpg'>";
					} elseif ($thisPage == "Newsletter") {
						echo "<img class='pagebanner' src='../img/banner_logos.jpg'>";
					} elseif ($thisPage == "Short Course Info") {
						echo "<img class='pagebanner' src='../img/banner_pstr-jayden.jpg'>";
					} elseif ($thisPage == "Sponsors") {
						echo "<img class='pagebanner' src='../img/banner_logos.jpg'>";
					} elseif ($thisPage == "Transponders") {
						echo "<img class='pagebanner' src='../img/banner_pstr-jayden.jpg'>";
					} elseif ($thisPage != "default") {
						echo "<img class='pagebanner' src='../img/banner_pstr-jayden.jpg'>";
					}
				?>
			</a>
			<div class="quicklinks">
				<ul>
					<li>
						<li><a href="http://www.pstr.club">Home</a></li>
						<?php
						if ($thisPage == "Home") {
							echo "<a href='page/club-info.php'>Club Info</a>";
						}
						else {
							echo "<a href='../page/club-info.php'>Club Info</a>";
						}
						?>
					</li>
				</ul>
			</div>
			<nav id="nav" class="stickyme">
				<div class="nav-inner">
					<ul>
						<li><a href="http://www.pstr.club/page/results.php">Results</a></li>
						<li><a href="http://www.pstr.club/page/bylaws.php">Bylaws</a></li>
						<li><a href="http://www.pstr.club/page/event-schedule.php">Event Schedule</a></li>
						<li><a href="http://www.pstr.club/page/photos.php">Photos</a></li>
						<li><a href="http://www.pstr.club/page/newsletter.php">Newsletter</a></li>
						<li><a href="http://www.pstr.club/page/short-course-info.php">Short Course Series Info</a></li>
						<li><a href="http://www.pstr.club/page/sponsors.php">Sponsors</a></li>
						<li><a href="http://www.pstr.club/page/transponders.php">Transponders</a></li>
					</ul>
				</div>
			</nav>
		</header><!--end header-->
		<div id="main">
			<section id="content">
				<div class="container-fluid">