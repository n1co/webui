<?php
	require_once('functions.inc.php');
?>
<!doctype html>
<html>
	<head>
		<title>WebUI</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/smoothness/jquery-ui-1.10.4.custom.min.css">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<script>
			$(function() {
				$( "#dialog" ).dialog();
			});
		</script>
	</head>
	<body>
		<div id="dialog" title="Test">
			<p>Test <br /> test</p> <?php echo password_crypt('test', md5('g56h4sgr5h4sfg56h4h56d4gh56')); ?>
		</div>
	</body>
</html>