<?php

/**
 * @author		Pedro Sanção <pedro at sancao dot co>
 * @copyright	Copyright (c) 2014, Pedro Sanção
 * @license		MIT License
 */
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gerador de Certificados</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/default.css">
	</head>

	<body>
	    <div class="container">
			<h1>Gerador de Certificados</h1>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Instruções de Uso</h3>
				</div>
				<div class="panel-body">
					<p>Preencha todos os campos e clique no botão "Imprimir" do primeiro grupo, após impressão coloque a folha de volta na impressora e clique no segundo botão "Imprimir".</p>
					<p>Para acessar é necessário usuário e senha.
				</div>
			</div>
			<div class="panel panel-default panel-small">
				<div class="panel-heading">
					<h3 class="panel-title">Login</h3>
				</div>
				<div class="panel-body">
					<form action="index1.php" name="login" method="post">
						<div class="form-group">
							<label for="user">Usuário</label>
							<input type="text" name="user" id="user" class="form-control" size="30" placeholder="Informe o usuário"/>
						</div>
						<div class="form-group">
							<label for="pass">Senha</label>
							<input type="password" name="pass" id="pass" class="form-control" size="30" placeholder="Informe a senha"/>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary" accesskey="Enter">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
