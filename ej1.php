<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
           ej1
        </title>
        <link rel="icon" type="image/png" href="media/">
    </head>
    <body>
        <div class="">
            <?php
                $var1=1;
                $var2=2;
                echo "<p>Calculadora: los dos numeros son: $var1 y $var2 </p>";
                $total=$var1+$var2;
                echo "<p>La suma de los numeros es: $total el total es tipo ".gettype($total)."</p>";
                $total=$var1-$var2;
                echo "<p>La resta de los numeros es: $total el total es tipo ".gettype($total)."</p>";
                $total=$var1*$var2;
                echo "<p>La multiplicacion de los numeros es: $total el total es tipo ".gettype($total)."</p>";
                $total=$var1/$var2;
                echo "<p>La division de los numeros es: $total total es tipo ".gettype($total)."</p>";
                $total=pow($var1,$var2);
                echo "<p>La exponencial de los numeros es: $total total es tipo ".gettype($total)."</p>";
            ?>
        </div>
    </body>
</html>