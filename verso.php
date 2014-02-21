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

	<body>
		<div class="default-font apDivContainer">
			<div id="apDiv0" class="apDiv text-center">
				<img src="verso.jpg" width="580"/>
				<div id="apDiv9" class="apDiv nowrap"><?php echo $_POST["nvl"]; ?></div><?php
				if (isset($_POST['itens']) && is_array($_POST['itens'])) { ?>

				<div id="apDiv10" class="apDiv caixas text-left"><?php
					for ($i = 1; $i <= 24; $i++) {
						echo "\n" . str_repeat("\t", 5) . '<div class="x">' . (in_array($i, $_POST['itens']) ? 'X' : '') . '</div>';
					}
				?>

				</div><?php } ?>

				<div id="apDiv11" class="apDiv nowrap text-left"><?php echo $_POST["exam"]; ?></div>
				<div id="apDiv12" class="apDiv nowrap text-left"><?php echo $_POST["end"]; ?></div>
				<div id="apDiv13" class="apDiv nowrap text-left"><?php echo $_POST["tel"]; ?></div>
				<div id="apDiv14" class="apDiv nowrap text-left"><?php
					echo is_numeric($_POST["dia"]) ? $_POST["dia"] + 1 : str_repeat('&nbsp;', 5);
					echo '/';
					echo is_numeric($_POST["mes"]) ? $_POST["mes"] + 1 : str_repeat('&nbsp;', 6);
					echo '/';
					echo $_POST["ano"];
				?></div>
				<div id="apDiv15" class="apDiv nowrap text-left"><?php echo $_POST["qual"]; ?></div>
				<div id="apDiv16" class="apDiv nowrap text-left"><?php echo $_POST["obs"]; ?></div>
			</div>
		</div>
		<script type="text/javascript">
		window.print();
		window.setTimeout(function(){window.close()}, 100);
		</script>
	</body>
</html>