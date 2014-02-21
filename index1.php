<?php
if (
	$_POST["user"]=="Pedro" And
		sha1($_POST["pass"])=="HASH" Or
	$_POST["user"]=="Chefia" And
		sha1($_POST["pass"])=="HASH"){
echo "
<html>\n
\n
<head>\n
\n
<title>Gerador de Certificados - Grupo Escoteiro Aragua&ccedil;&uacute;</title>\n
\n
<style type=\"text/css\">\n
  .label{font-size:8pt;}\n
</style>\n
\n
<script language=\"javascript\">\n
function data(){\n
var di = document.form1.dia.value;\n
document.form2.day.value = di;\n
\n
var me = document.form1.mes.value;\n
document.form2.month.value = me;\n
\n
var an = document.form1.ano.value;\n
document.form2.year.value = an;\n
};\n
</script>\n
\n
</head>\n
\n
<body bgcolor=\"#CCCCCC\">\n
\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\"><tr><td>\n
<form action=\"";
if ($_POST["nav"]=="ff"){
echo "frente.php?nav=0";
}
elseif ($_POST["nav"]=="ie"){
echo "frente.php?nav=1";
}
else {
echo "frente.php?nav=2";
};
echo "\" method=\"post\" name=\"form1\" target=\"_blank\">\n
<input type=\"hidden\" name=\"user\" id=\"user\" value=\"";
echo $_POST["user"];
echo "\">\n
<input type=\"hidden\" name=\"pass\" id=\"pass\" value=\"";
echo $_POST["pass"];
echo "\">\n
<fieldset>\n
<legend style=\"color:#FFFFFF;\">Frente&nbsp;</legend>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n
  <tr class=\"label\">\n
    <td>Ramo</td>\n
    <td>Nome</td>\n
  </tr>\n
  <tr>\n
    <td><input name=\"ramo\" type=\"text\" id=\"ramo\" size=\"10\" maxlength=\"10\" title=\"ex.: Escoteiro, Guia, Lobinha, etc\"></td>\n
    <td><input name=\"name\" type=\"text\" id=\"name\" size=\"40\" maxlength=\"40\"></td>\n
  </tr>\n
</table>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top:5px;\">\n
  <tr class=\"label\">\n
    <td>Registro UEB</td>\n
    <td>Grupo Escoteiro (nome e numeral)</td>\n
  </tr>\n
  <tr>\n
    <td><input name=\"ueb\" type=\"text\" id=\"ueb\" size=\"10\" maxlength=\"8\" title=\"ex.: 123456-7\"></td>\n
    <td><input name=\"grupo\" type=\"text\" id=\"grupo\" size=\"40\" maxlength=\"40\" value=\"Aragua&ccedil;&uacute; - 172&ordm;\"></td>\n
  </tr>\n
</table>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top:5px;\">\n
  <tr class=\"label\">\n
    <td>Certificado</td>\n
  </tr>\n
  <tr>\n
    <td><input name=\"cert\" type=\"text\" id=\"cert\" size=\"54\" title=\"Promessa / Progress&atilde;o / Gradua&ccedil;&atilde;o / Especialidade / Anos de Atividade / Participa&ccedil;&atilde;o em evento\"></td>\n
  </tr>\n
</table>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top:5px;\">\n
  <tr class=\"label\">\n
    <td>Cidade</td>\n
    <td>&nbsp;</td>\n
    <td>Data</td>\n
  </tr>\n
  <tr>\n
    <td><input type=\"text\" name=\"city\" id=\"city\" size=\"22\" value=\"S&atilde;o Paulo\"></td>\n
    <td>&nbsp;</td>\n
    <td><select name=\"dia\" id=\"dia\" onChange=\"data()\">\n";

$dias = array (
  "&nbsp;",
  "01", "02", "03", "04", "05", "06", "07", "08", "09", 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31,
);
foreach ($dias as $dia)
echo "<option value=\"$dia\">$dia</option>\n";
echo "\n
</select><select name=\"mes\" id=\"mes\" onChange=\"data()\">\n
\n";
$meses = array (
  "&nbsp;",
  "Janeiro",
  "Fevereiro",
  "Mar&ccedil;o",
  "Abril",
  "Maio",
  "Junho",
  "Julho",
  "Agosto",
  "Setembro",
  "Outubro",
  "Novembro",
  "Dezembro",
);
foreach ($meses as $mes)
echo "<option value=\"$mes\">$mes</option>\n";
echo "\n
</select><select name=\"ano\" id=\"ano\" onChange=\"data()\">\n
\n";
$anos = array (
  "&nbsp;",
  2000,
  2001,
  2002,
  2003,
  2004,
  2005,
  2006,
  2007,
  2008,
  2009,
  2010,
  2011,
  2012,
  2013,
  2014,
  2015,
  2016,
  2017,
  2019,
  2020,
);
foreach ($anos as $ano)
echo "<option value=\"$ano\">$ano</option>\n";
echo "\n
</select>\n
    </td>\n
  </tr>\n
</table>\n
<div align=\"center\" style=\"margin-top:15px;\">\n
<input name=\"vai\" type=\"submit\" id=\"vai\" value=\"Imprimir\">\n
&nbsp;\n
<input type=\"reset\" name=\"cls\" id=\"cls\" value=\"Limpar\">\n
</div>\n
</fieldset>\n
</form>\n
\n
<form action=\"";
if ($_POST["nav"]=="ff"){
echo "verso.php?nav=0";
}
elseif ($_POST["nav"]=="ie"){
echo "verso.php?nav=1";
}
else {
echo "verso.php?nav=2";
};
echo "\" method=\"post\" name=\"form2\" target=\"_blank\">\n
<input type=\"hidden\" name=\"day\" id=\"day\">\n
<input type=\"hidden\" name=\"month\" id=\"month\">\n
<input type=\"hidden\" name=\"year\" id=\"year\">\n
<input type=\"hidden\" name=\"user\" id=\"user\" value=\"";
echo $_POST["user"];
echo "\">\n
<input type=\"hidden\" name=\"pass\" id=\"pass\" value=\"";
echo $_POST["pass"];
echo "\">\n
<fieldset>\n
<legend style=\"color:#FFFFFF;\">Verso&nbsp;</legend>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n
  <tr class=\"label\">\n
    <td>Examinador</td>\n
    </tr>\n
  <tr>\n
    <td><input name=\"exam\" type=\"text\" id=\"exam\" size=\"54\" maxlength=\"54\"></td>\n
    </tr>\n
</table>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top:5px;\">\n
  <tr class=\"label\">\n
    <td>Endere&ccedil;o</td>\n
    <td>Telefone</td>\n
  </tr>\n
  <tr>\n
    <td><input name=\"end\" type=\"text\" id=\"end\" size=\"36\"></td>\n
    <td><input name=\"tel\" type=\"text\" id=\"tel\" size=\"13\" maxlength=\"13\" title=\"ex.: (12)3456-7890\"></td>\n
  </tr>\n
</table>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top:5px;\">\n
  <tr class=\"label\">\n
    <td>Qualifica&ccedil;&atilde;o</td>\n
  </tr>\n
  <tr>\n
    <td><input name=\"qual\" type=\"text\" id=\"qual\" size=\"54\"></td>\n
    </tr>\n
</table>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-top:5px;\">\n
  <tr class=\"label\">\n
    <td>Observa&ccedil;&otilde;es</td>\n
    </tr>\n
  <tr>\n
    <td><input type=\"text\" name=\"obs\" id=\"obs\" size=\"54\"></td>\n
    </tr>\n
</table>\n
<fieldset title=\"Preencher apenas nos certificados de Especialidades\" style=\"margin-top:8px;\">\n
<legend style=\"color:#FFFFFF;\" title=\"Preencher apenas nos certificados de Especialidades\">Especialidade&nbsp;</legend>\n
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n
  <tr class=\"label\">\n
    <td>N&iacute;vel</td>\n
  </tr>\n
  <tr>\n
    <td>\n
      <select name=\"nvl\" id=\"nvl\">\n
        <option value=\"&nbsp;\">&nbsp;</option>\n
        <option value=\"1\">1</option>\n
        <option value=\"2\">2</option>\n
        <option value=\"3\">3</option>\n
      </select>\n
    </td>\n
  </tr>\n
  <tr>\n
    <td align=\"center\">\n
    <div style=\"margin-top:10px;\">\n
      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"label\" width=\"322\">\n
	  \n";

$nums = array ( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,);
echo "<tr>\n<td>Item</td>\n";
$num1 = array_slice($nums,0,12);
foreach ($num1 as $p1)
echo "<td align=\"center\">$p1</td>\n";
echo "</tr>\n<tr>\n<td align=\"left\">Sim</td>\n";
foreach ($num1 as $p1)
echo "<td align=\"center\"><input type=\"radio\" name=\"item$p1\" value=\"sim\"></td>\n";
echo "</tr>\n<tr>\n<td align=\"left\">N&atilde;o</td>\n";
foreach ($num1 as $p1)
echo "<td align=\"center\"><input type=\"radio\" name=\"item$p1\" value=\"nao\" checked></td>\n";
echo "</tr>";

echo "<tr height=\"25\" valign=\"bottom\">\n<td>Item</td>\n";
$num2 = array_slice($nums,12,12);
foreach ($num2 as $p1)
echo "<td align=\"center\">$p1</td>\n";
echo "</tr>\n<tr>\n<td align=\"left\">Sim</td>\n";
foreach ($num2 as $p1)
echo "<td align=\"center\"><input type=\"radio\" name=\"item$p1\" value=\"sim\"></td>\n";
echo "</tr>\n<tr>\n<td align=\"left\">N&atilde;o</td>\n";
foreach ($num2 as $p1)
echo "<td align=\"center\"><input type=\"radio\" name=\"item$p1\" value=\"nao\" checked></td>\n";
echo "</tr>";

echo "\n
      </table>\n
    </div>\n
    </td>\n
  </tr>\n
</table>\n
</fieldset>\n
<div align=\"center\" style=\"margin-top:12px;\">\n
<input name=\"vai2\" type=\"submit\" id=\"vai2\" value=\"Imprimir\" onClick=\"data()\">\n
&nbsp;\n
<input type=\"reset\" name=\"cls2\" id=\"cls2\" value=\"Limpar\">\n
</div>\n
</fieldset>\n
</form>\n
</td>\n
</tr>\n
<tr>\n
<td align=\"center\">\n
<input type=\"button\" value=\"Voltar para o Site\" onClick=\"window.location='http://www.gearaguacu.com.br'\">
</td>\n
</tr>\n
</table>\n
\n
</body>\n
\n
</html>\n";
}
else {
echo "
<html>\n
\n
<head>\n
<title>Gerador de Certificados por PedroH.</title>\n
<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1 ; URL= index.html\">\n
<style type=\"text/css\">\n
  .label{font-size:8pt;}\n
</style>\n
</head>\n
\n
<body bgcolor=\"#CCCCCC\">\n
\n
Senha incorreta\n
\n
</body>\n
\n
</html>";
};
?>