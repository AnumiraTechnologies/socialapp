<?php
session_start();
if(!isset($_SESSION['bdid'])) { echo "Authentication failed !"; } else {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Social Media Analytics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-override.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="https://dt2lvkroutb6v.cloudfront.net/js/jquery-latest.js"></script> 
	<script>
    $(document).ready(function(){
        $("#go").click(function () {
		$("#bubblechart").html("Loading... Please wait");
         $.ajax({
                type : "GET",
                url  : 'results.php',
                async: true,
                success : function(msgqn){
                $("#bubblechart").html("");			
                $("#bubblechart").html(msgqn);			
                }
           });	
           });	
		   
});
	</script>
  </head>
  <body>
		<div class="container-fluid">
			<div class="span4"><button id="go" name="go" class="btn btn-inverse">Start</button><button id="stop" name="stop" class="btn btn-inverse">Stop</button></div>
		</div>	
	<div class="container-fluid">
		<div class="row">
			<div class="span12">
				<h2 class="title">Assembly Election 2014</h2>
			</div>
		</div>
		<div class="row-fluid"> 
			<div class="span2">
				<h3>Ranking</h3>
			</div>
			<div class="span2">
				<h3>Name</h3>
			</div>
			<div class="span2">
				<h3>Tweet count</h3>
			</div>
		</div>
	
	</div>
		<div class="container-fluid">
			<div class="span12" id="bubblechart"></div>
		</div>	

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}
?>