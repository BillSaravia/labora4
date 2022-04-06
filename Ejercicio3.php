<?php         
	$x=$_GET["numer1"];
	$y=$_GET["numer2"];


    if ($x > $y){
        $sum=$x + $y;
        $diferencia=$x - $y;
        echo "La suma es $sum", "<br>";
        echo "La diferencia de los numeros es $diferencia", "<br>";
    }

    else{
        $producto=$x * $y;
        $division=$x / $y;
        $division=round($division,2);
        echo "El producto es $producto", "<br>";
        echo "La división del primero respecto al segundo es $division", "<br>";
    
    }
?>
<pre></pre>
<center><p><a href="Index.html"><label style="border-radius: 5px; background: #000000; border-color:#000000;  height:44px; color: white; width: 152px; text-align: center; font-size: 16px; padding: 10px 0;">Regresar a Inicio</label></center>