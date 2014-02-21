<?php
if (
	$_POST["user"]=="Pedro" And
		sha1($_POST["pass"])=="HASH" Or
	$_POST["user"]=="Chefia" And
		sha1($_POST["pass"])=="HASH"){
echo "
<html>\n
<head>\n
<title>Gerador de Certificados - Grupo Escoteiro Aragua&ccedil;&uacute;</title>\n
<style type=\"text/css\">\n
.ari{font-family:Arial;font-size:12pt;}\n
.ari2{font-family:Arial;font-weight:bolder;font-size:18pt;line-height:24px;}\n";
if ($_GET["nav"]==0){
echo "
#apDiv0 {
	position:absolute;
	left:51px;
	width:580px;
	height:412px;
	z-index:2;
}
#apDiv9 {
	position:absolute;
	left:132px;
	top:123px;
	width:37px;
	height:20px;
	z-index:2;
}
#apDiv10 {
	position:absolute;
	left:194px;
	top:97px;
	width:304px;
	height:55px;
	z-index:2;
}
#apDiv11 {
	position:absolute;
	left:168px;
	top:174px;
	width:331px;
	height:20px;
	z-index:2;
}
#apDiv12 {
	position:absolute;
	left:152px;
	top:210px;
	width:347px;
	height:20px;
	z-index:2;
}
#apDiv13 {
	position:absolute;
	left:144px;
	top:246px;
	width:112px;
	height:20px;
	z-index:2;
}
#apDiv14 {
	position:absolute;
	left:337px;
	top:246px;
	width:87px;
	height:20px;
	z-index:2;
}
#apDiv15 {
	position:absolute;
	left:170px;
	top:281px;
	width:329px;
	height:20px;
	z-index:2;
}#apDiv16 {
	position:absolute;
	left:118px;
	top:316px;
	width:381px;
	height:20px;
	z-index:2;
}";
}
elseif ($_GET["nav"]==1){
echo "
#apDiv0 {
	position:absolute;
	left:36px;
	width:580px;
	height:412px;
	z-index:2;
}
#apDiv9 {
	position:absolute;
	left:132px;
	top:122px;
	width:37px;
	height:20px;
	z-index:2;
}
#apDiv10 {
	position:absolute;
	left:200px;
	top:97px;
	width:304px;
	height:55px;
	z-index:2;
}
#apDiv11 {
	position:absolute;
	left:168px;
	top:173px;
	width:331px;
	height:20px;
	z-index:2;
}
#apDiv12 {
	position:absolute;
	left:152px;
	top:209px;
	width:347px;
	height:20px;
	z-index:2;
}
#apDiv13 {
	position:absolute;
	left:144px;
	top:245px;
	width:112px;
	height:20px;
	z-index:2;
}
#apDiv14 {
	position:absolute;
	left:337px;
	top:245px;
	width:87px;
	height:20px;
	z-index:2;
}
#apDiv15 {
	position:absolute;
	left:170px;
	top:280px;
	width:329px;
	height:20px;
	z-index:2;
}#apDiv16 {
	position:absolute;
	left:118px;
	top:315px;
	width:381px;
	height:20px;
	z-index:2;
}";
}
else {
echo "
#apDiv0 {
	position:absolute;
	left:36px;
	width:580px;
	height:412px;
	z-index:2;
}
#apDiv9 {
	position:absolute;
	left:132px;
	top:122px;
	width:37px;
	height:20px;
	z-index:2;
}
#apDiv10 {
	position:absolute;
	left:196px;
	top:96px;
	width:304px;
	height:55px;
	z-index:2;
}
#apDiv11 {
	position:absolute;
	left:168px;
	top:173px;
	width:331px;
	height:20px;
	z-index:2;
}
#apDiv12 {
	position:absolute;
	left:152px;
	top:209px;
	width:347px;
	height:20px;
	z-index:2;
}
#apDiv13 {
	position:absolute;
	left:144px;
	top:245px;
	width:112px;
	height:20px;
	z-index:2;
}
#apDiv14 {
	position:absolute;
	left:337px;
	top:245px;
	width:87px;
	height:20px;
	z-index:2;
}
#apDiv15 {
	position:absolute;
	left:170px;
	top:280px;
	width:329px;
	height:20px;
	z-index:2;
}#apDiv16 {
	position:absolute;
	left:118px;
	top:315px;
	width:381px;
	height:20px;
	z-index:2;
}";
};
echo "
</style>\n
</head>\n
\n
<body bgcolor=\"#FFFFFF\">\n
<div id=\"apDiv0\">\n
<div align=\"center\"><img src=\"verso.jpg\" width=\"580\"></div>\n
<div id=\"apDiv9\" class=\"ari\" align=\"center\">\n";

echo $_POST["nvl"];
echo "
</div>\n
<div id=\"apDiv10\" align=\"center\">\n
  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"ari2\" width=\"295\">\n
    <tr>\n";

echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item1"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item2"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item3"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item4"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item5"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item6"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item7"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item8"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item9"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item10"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item11"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item12"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "
    </tr>\n
    <tr>\n";

echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item13"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item14"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item15"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item16"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item17"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item18"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item19"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item20"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item21"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item22"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item23"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "<td align=\"center\" width=\"15mm\">";
if ($_POST["item24"]=="sim") {
echo "X";
}
else {
echo "&nbsp;";
};
echo "</td>\n";
echo "
    </tr>\n
  </table>\n
</div>\n
<div id=\"apDiv11\" class=\"ari\" align=\"left\">\n";

echo $_POST["exam"];
echo "
</div>\n
<div id=\"apDiv12\" class=\"ari\" align=\"left\">\n";

echo $_POST["end"];
echo "
</div>\n
<div id=\"apDiv13\" class=\"ari\" align=\"left\">\n";

echo $_POST["tel"];
echo "
</div>\n
<div id=\"apDiv14\" class=\"ari\" align=\"left\">\n";

echo $_POST["day"]."/";
if ($_POST["month"]=="Janeiro") {
echo "01";
}
else {
  if ($_POST["month"]=="Fevereiro") {
  echo "02";
  }
  else {
    if ($_POST["month"]=="Mar&ccedil;o") {
	echo "03";
	}
	else {
	  if ($_POST["month"]=="Abril") {
	  echo "04";
	  }
	  else {
	    if ($_POST["month"]=="Maio") {
		echo "05";
		}
		else {
		  if ($_POST["month"]=="Junho") {
		  echo "06";
		  }
		  else {
		    if ($_POST["month"]=="Julho") {
			echo "07";
			}
			else {
			  if ($_POST["month"]=="Agosto") {
			  echo "08";
			  }
			  else {
			    if ($_POST["month"]=="Setembro") {
				echo "09";
				}
				else {
				  if ($_POST["month"]=="Outubro") {
				  echo "10";
				  }
				  else {
				    if ($_POST["month"]=="Novembro") {
					echo "11";
					}
					else {
					  echo "12";
					};
				  };
				};
			  };
			};
		  };
		};
	  };
	};
  };
};
echo "/".$_POST["year"];
echo "
</div>\n
<div id=\"apDiv15\" class=\"ari\" align=\"left\">\n";

echo $_POST["qual"];
echo "
</div>\n
<div id=\"apDiv16\" class=\"ari\" align=\"left\">\n";

echo $_POST["obs"];
echo "
</div>\n
</div>\n
\n
<script language=\"javascript\">\n
window.print();\n
window.close();\n
</script>\n
\n
</body>\n
</html>";
}
else {
echo "
<html>\n
\n
<head>\n
<title>Gerador de Certificados por PedroH.</title>\n
<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0 ; URL= index.html\">\n
<style type=\"text/css\">\n
  .label{font-size:8pt;}\n
</style>\n
</head>\n
\n
<body bgcolor=\"#CCCCCC\">\n
</body>\n
\n
</html>";
};
?>