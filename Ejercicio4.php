<?php
	$x=$_GET["numer1"];
	$y=$_GET["numer2"];
	$z=$_GET["numer3"];


if (($x > $y) or ($x > $z)){
	echo "$x es mayor que $y y $z";
}
elseif (($y > $z) or ($y > $z)){
	echo "$y es mayor que $x y $z";
}
elseif (($z > $y) or ($z > $x)){
	echo "$z es mayor que $y y $x";
}
else {
	echo "Los numero $x , $y y $z son iguales";
}
?>
<pre></pre>
<center><p><a href="Index.html"><label style="border-radius: 5px; background: #000000; border-color:#000000;  height:44px; color: white; width: 152px; text-align: center; font-size: 16px; padding: 10px 0;">Regresar a Inicio</label></center>
