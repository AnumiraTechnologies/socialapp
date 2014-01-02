<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Social Media Analytics - Demo Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-override.css" rel="stylesheet" media="screen">
  </head>
  <body>

	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Social Media Analytics - Demo Twitter trends</h2>
			</div>
			<?php
if(count($_POST) > 0) {

if($_POST['scode'] != "demodb") {
echo "Authentication failed !<br>";
} else {
$_SESSION['bdid'] = $_POST['scode'];
header("location:index.php");
}
}
			?>
			<form action="login.php" method="POST">
				<input type="password" name="scode" class="input-medium search-query">
				<button type="submit" class="btn">Enter</button>
			</form>
		</div>
	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
