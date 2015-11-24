<?php
$thisPage = "Photos";
include ("../include/global.php");
include ("../include/header.php");
?>

<div class="row">
	<div class="col-sm-12">
		<h1>Photos</h1>

		<h4>All Photos</h4>
		<hr>

		<p class="center italic">
			Photos by
		</p>
		<img class="m1-auto block" src="../img/logo_motophoto.jpg">

		<ul class="list-disc" style="font-weight:bold;">
			<li><a href="photos_member-photos.php" style="font-size:26px;">Member Photos</a></li>
			<li><a href="photos_2015-awards-banquet.php" style="font-size:26px;">2014 Year End Awards Banquet</a></li>
			<li><a href="photos_2015-record-winter-cleanup.php" style="font-size:26px;">2015 Record Winter Cleanup</a></li>
		</ul>
	</div>
</div>

<p>
	&nbsp;
</p>

<?php
include("../include/footer.php");
?>