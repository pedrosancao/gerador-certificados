<?php

/**
 * @author		Pedro Sanção <pedro at sancao dot co>
 * @copyright	Copyright (c) 2014, Pedro Sanção
 * @license		MIT License
 */

include_once 'function.php';
login();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gerador de Certificados</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/default.css">
		<script type="text/javascript">
function data(){
	document.form2.dia.value = document.form1.dia.value;
	document.form2.mes.value = document.form1.mes.value;
	document.form2.ano.value = document.form1.ano.value;
};
function marcarTodos() {
	var checkboxes = document.getElementsByName('itens[]');
	var i;
	for (i = 0; i < checkboxes.length; i++) {
		checkboxes[i].checked = true;
	}
}
		</script>
	</head>

	<body>
	    <div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Frente</h3>
				</div>
				<div class="panel-body container-fluid">
					<form action="frente.php" method="post" name="form1" target="_blank">
						<input type="hidden" name="user" id="user" value="<?php echo isset($_POST["user"]) ? $_POST["user"] : ''; ?>">
						<input type="hidden" name="pass" id="pass" value="<?php echo isset($_POST["pass"]) ? $_POST["pass"] : ''; ?>">
						<div class="form-group col-sm-3">
							<label for="ramo">Ramo</label>
							<input name="ramo" type="text" id="ramo" class="form-control" size="10" maxlength="10" title="ex.: Escoteiro, Guia, Lobinha, etc" value=""/>
						</div>
						<div class="form-group col-sm-9">
							<label for="name">Nome</label>
							<input name="name" type="text" id="name" class="form-control" size="40" maxlength="40" value=""/>
						</div>
						<div class="form-group col-sm-3">
							<label for="ueb">Registro UEB</label>
							<input name="ueb" type="text" id="ueb" class="form-control" size="8" maxlength="8" title="ex.: 123456-7" value=""/>
						</div>
						<div class="form-group col-sm-9">
							<label for="grupo">Grupo Escoteiro (nome e numeral)</label>
							<input name="grupo" type="text" id="grupo" class="form-control" size="40" maxlength="40" value=""/>
						</div>
						<div class="form-group col-sm-12">
							<label for="cert">Certificado</label>
							<input name="cert" type="text" id="cert" class="form-control" size="54" title="Promessa / Progressão / Graduação / Especialidade / Anos de Atividade / Participação em evento" value=""/>
						</div>
						<div class="form-group col-sm-5">
							<label for="city">Cidade</label>
							<input type="text" name="city" id="city" class="form-control" size="22" value="São Paulo"/>
						</div>
						<div class="form-group col-sm-2">
							<label for="dia">Dia</label>
							<select name="dia" id="dia" class="form-control" onchange="data()">
								<option value="">&mdash;</option><?php
								foreach (range(1, 31) as $dia) {
									printf('<option value="%1$s">%1$s</option>', str_pad($dia, 2, 0, STR_PAD_LEFT));
								} ?>

							</select>
						</div>
						<div class="form-group col-sm-3">
							<label for="mes">Mês</label>
							<select name="mes" id="mes" class="form-control" onchange="data()">
								<option value="">&mdash;</option><?php
								foreach (meses() as $nMes => $mes) {
									printf('<option value="%1$s">%2$s</option>', $nMes, $mes);
								} ?>

							</select>
						</div>
						<div class="form-group col-sm-2">
							<label for="ano">Ano</label>
							<select name="ano" id="ano" class="form-control" onchange="data()">
								<option value="">&mdash;</option><?php
								foreach (range(2000, 2020) as $ano) {
									printf('<option value="%1$s">%1$s</option>', $ano);
								} ?>

							</select>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Imprimir</button>
							<button type="reset" class="btn btn-default">Limpar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Verso</h3>
				</div>
				<div class="panel-body container-fluid">
					<form action="verso.php" method="post" name="form2" target="_blank">
						<input type="hidden" name="user" id="user" value="<?php echo isset($_POST["user"]) ? $_POST["user"] : ''; ?>">
						<input type="hidden" name="pass" id="pass" value="<?php echo isset($_POST["pass"]) ? $_POST["pass"] : ''; ?>">
						<input type="hidden" name="dia" id="dia">
						<input type="hidden" name="mes" id="mes">
						<input type="hidden" name="ano" id="ano">
						<div class="form-group col-sm-12">
							<label for="exam">Examinador</label>
							<input name="exam" type="text" id="exam" class="form-control" size="54" maxlength="54" value=""/>
						</div>
						<div class="form-group col-sm-6">
							<label for="end">Endereço</label>
							<input name="end" type="text" id="end" class="form-control" size="36" value=""/>
						</div>
						<div class="form-group col-sm-6">
							<label for="tel">Telefone</label>
							<input name="tel" type="text" id="tel" class="form-control" size="13" maxlength="13" title="ex.: (12)3456-7890" value=""/>
						</div>
						<div class="form-group col-sm-12">
							<label for="qual">Qualificação</label>
							<input name="qual" type="text" id="qual" class="form-control" size="54" value=""/>
						</div>
						<div class="form-group col-sm-12">
							<label for="obs">Observações</label>
							<input name="obs" type="text" id="obs" class="form-control" size="54" value=""/>
						</div>
						<div class="clearfix">&nbsp;</div>
						<fieldset title="Preencher apenas nos certificados de Especialidades">
							<legend>Especialidade</legend>
							<div class="form-group col-sm-2">
								<label for="nvl">Nível</label>
								<select name="nvl" id="nvl" class="form-control">
									<option value="">&mdash;</option><?php
									foreach (range(1, 3) as $n) {
										printf('<option value="%1$s">%1$s</option>', $n);
									} ?>

								</select>
							</div>
							<div class="form-group col-sm-12">
								<label>Items <button type="button" class="btn btn-default btn-xs" onclick="marcarTodos()">Marcar Todos</button></label>
								<div class="checkbox-group"><?php
								$colunas = 6; # editar aqui
								$qtd = 24 / $colunas;
								$qtdInt = ceil($qtd);
								$tamanhoColuna = floor(12 / $colunas);
								for ($i = 0; $i < $colunas; $i++) {
									printf('<div class="col-sm-%u">', $tamanhoColuna);
									$limite =  ($i + 1) * $qtdInt - floor(($i + 1) * ($qtdInt - $qtd));
									for ($item = $i * $qtdInt + 1; $item <= $limite; $item++) { ?>

										<div class="checkbox">
											<label>
												<input name="itens[]" type="checkbox" value="<?php echo $item; ?>"/> Item <?php echo $item; ?>
											</label>
										</div><?php
									}
									echo '</div>';
								} ?>

								</div>
							</div>
						</fieldset>
						<div class="text-center">
							<button type="submit" class="btn btn-primary" onclick="data()">Imprimir</button>
							<button type="reset" class="btn btn-default">Limpar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
