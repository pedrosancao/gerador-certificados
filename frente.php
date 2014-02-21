<?php
include_once 'function.php';
login();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gerador de Certificados</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/default.css">
	</head>

	<body class="alt">
		<div class="custom-font apDivContainer">
			<div id="apDiv0" class="apDiv text-center">
				<div id="apDiv1" class="apDiv nowrap"><?php echo $_POST["ramo"]."&nbsp;".$_POST["name"]; ?></div>
				<div id="apDiv2" class="apDiv nowrap menor"><?php echo $_POST["grupo"]; ?></div>
				<div id="apDiv3" class="apDiv menor text-justify"><?php echo $_POST["cert"]; ?></div>
				<div id="apDiv4" class="apDiv nowrap menor"><?php echo $_POST["ueb"]; ?></div>
				<div id="apDiv5" class="apDiv nowrap menor text-left"><?php echo $_POST["city"]; ?>,</div>
				<div id="apDiv6" class="apDiv nowrap menor text-right"><?php echo $_POST["dia"]; ?></div>
				<div id="apDiv7" class="apDiv nowrap menor"><?php
					$meses = meses();
					echo isset($meses[$_POST["mes"]]) ? $meses[$_POST["mes"]] : '';
				?></div>
				<div id="apDiv8" class="apDiv nowrap menor"><?php echo $_POST["ano"]; ?></div>
				<img src="frente.jpg" width="580"/>
			</div>
		</div>
		<script type="text/javascript">
		window.print();
		window.setTimeout(function(){window.close()}, 100);
		</script>
	</body>
</html>