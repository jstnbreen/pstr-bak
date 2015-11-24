<?php
$thisPage = "Bylaws";
include ("../include/global.php");
include ("../include/header.php");
?>

<div class="row">
	<div class="col-sm-12">
		<form method="post" action="index.php" class="form-signin" style="margin:0 auto;margin-top:27vh;max-width:330px;">
			<h2 class="form-signin-heading">Admin Login</h2>
			<label for="email" class="sr-only">Email address</label>
			<input name="email" class="form-control" id="email" type="email" placeholder="Enter email" required autofocus>
			<label for="password" class="sr-only">Password</label>
			<input name="password" class="form-control" id="password" type="password" placeholder="Enter password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>

<?php
include("../include/footer.php");
?>