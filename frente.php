<?php
include_once 'login.php';
login();

echo "
<html>\n
<head>\n
<title>Gerador de Certificados - Grupo Escoteiro Aragua&ccedil;&uacute;</title>\n
<style type=\"text/css\">\n
.edward{font-family:Edwardian Script ITC;font-size:19pt;}\n
.edward_{font-family:Edwardian Script ITC;font-size:18pt;}\n";
if ($_GET["nav"]==0){
echo "
#apDiv0 {
	position:absolute;
	left:48px;
	top:20px;
	width:580px;
	height:412px;
	z-index:1;
}
#apDiv1 {
	position:absolute;
	left:66px;
	top:137px;
	width:460px;
	height:30px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:127px;
	top:159px;
	width:395px;
	height:30px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:39px;
	top:181px;
	width:492px;
	height:30px;
	z-index:1;
}
#apDiv4 {
	position:absolute;
	left:114px;
	top:222px;
	width:100px;
	height:30px;
	z-index:1;
}
#apDiv5 {
	position:absolute;
	left:242px;
	top:265px;
	width:96px;
	height:30px;
	z-index:1;
}
#apDiv6 {
	position:absolute;
	left:335px;
	top:265px;
	width:33px;
	height:30px;
	z-index:1;
}
#apDiv7 {
	position:absolute;
	left:388px;
	top:265px;
	width:80px;
	height:30px;
	z-index:1;
}
#apDiv8 {
	position:absolute;
	left:486px;
	top:265px;
	width:54px;
	height:30px;
	z-index:1;
}";
}
elseif ($_GET["nav"]==1){
echo "
#apDiv0 {
	position:absolute;
	left:36px;
	top:20px;
	width:580px;
	height:412px;
	z-index:1;
}
#apDiv1 {
	position:absolute;
	left:68px;
	top:136px;
	width:460px;
	height:30px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:129px;
	top:158px;
	width:395px;
	height:30px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:41px;
	top:180px;
	width:492px;
	height:30px;
	z-index:1;
}
#apDiv4 {
	position:absolute;
	left:116px;
	top:222px;
	width:100px;
	height:30px;
	z-index:1;
}
#apDiv5 {
	position:absolute;
	left:244px;
	top:264px;
	width:96px;
	height:30px;
	z-index:1;
}
#apDiv6 {
	position:absolute;
	left:337px;
	top:264px;
	width:33px;
	height:30px;
	z-index:1;
}
#apDiv7 {
	position:absolute;
	left:390px;
	top:264px;
	width:80px;
	height:30px;
	z-index:1;
}
#apDiv8 {
	position:absolute;
	left:488px;
	top:264px;
	width:54px;
	height:30px;
	z-index:1;
}";
}
else {
echo "
#apDiv0 {
	position:absolute;
	left:36px;
	top:20px;
	width:580px;
	height:412px;
	z-index:1;
}
#apDiv1 {
	position:absolute;
	left:68px;
	top:136px;
	width:460px;
	height:30px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:129px;
	top:158px;
	width:395px;
	height:30px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:41px;
	top:180px;
	width:492px;
	height:30px;
	z-index:1;
}
#apDiv4 {
	position:absolute;
	left:116px;
	top:222px;
	width:100px;
	height:30px;
	z-index:1;
}
#apDiv5 {
	position:absolute;
	left:244px;
	top:264px;
	width:96px;
	height:30px;
	z-index:1;
}
#apDiv6 {
	position:absolute;
	left:337px;
	top:264px;
	width:33px;
	height:30px;
	z-index:1;
}
#apDiv7 {
	position:absolute;
	left:390px;
	top:264px;
	width:80px;
	height:30px;
	z-index:1;
}
#apDiv8 {
	position:absolute;
	left:488px;
	top:264px;
	width:54px;
	height:30px;
	z-index:1;
}";
};
echo "
</style>\n
</head>\n
\n
<body bgcolor=\"#FFFFFF\">\n
<div id=\"apDiv0\">\n
<div id=\"apDiv1\" class=\"edward\" align=\"center\">\n";
echo $_POST["ramo"]."&nbsp;".$_POST["name"];
echo "
</div>\n
<div id=\"apDiv2\" class=\"edward_\" align=\"center\">\n";
echo $_POST["grupo"];
echo "
</div>\n
<div id=\"apDiv3\">\n
  <table class=\"edward_\" width=\"492\">\n
    <tr><td align=\"center\">\n
      <div style=\"text-indent:30mm;line-height:21px;text-align:justify\">\n";
echo $_POST["cert"];
echo "
      </div>\n
    </td></tr>\n
  </table>\n
</div>\n
<div id=\"apDiv4\" class=\"edward_\" align=\"center\">\n";
echo $_POST["ueb"];
echo "
</div>\n
<div id=\"apDiv5\" class=\"edward_\" align=\"left\">\n";
echo $_POST["city"].",";
echo "
</div>\n
<div id=\"apDiv6\" class=\"edward_\" align=\"right\">\n";
echo $_POST["dia"];
if ($_GET["nav"]==1){
echo "&nbsp;";
};
echo "
</div>\n
<div id=\"apDiv7\" class=\"edward_\" align=\"center\">\n";
echo $_POST["mes"];
echo "
</div>\n
<div id=\"apDiv8\" class=\"edward_\" align=\"left\">\n";
echo $_POST["ano"];
echo "
</div>\n
<div align=\"center\"><img src=\"frente.jpg\" width=\"580\"></div>\n
</div>\n
\n
<script language=\"javascript\">\n
window.print();\n
window.close();\n
</script>\n
\n
</body>\n
</html>\n";
}
