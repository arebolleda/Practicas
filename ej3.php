<!--Ejercicio-3-->
<!--Marco Santiago-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
           ej3
        </title>
        <link rel="icon" type="image/png" href="media/">
    </head>
    <body>
        <div class="">
            <?php
                #Se recoge la variable default y se corta hasta el punto,se guardan las dos mitades 192 y .168.16.204;
                #con ello se elimina el primer . y se realiza a misma operacion de nuevo. Luego con printf se transforma a binario.
                $default="192.168.16.204";
                $ip1=strchr("$default",".",true);
                $spare=strchr("$default",".");
                $gspare=substr($spare, -(strlen($spare)-1));
                $ip2=strchr("$gspare",".",true);
                $spare1=strchr("$gspare",".");
                $gspare1=substr($spare1, -(strlen($spare1)-1));
                $ip3=strchr("$gspare1",".",true);
                $spare2=strchr("$gspare1",".");
                $ip4=substr($spare2, -(strlen($spare2)-1));
                printf("La ip: ".$default." es "."%b."."%b."."%b."."%b"." en binario.",$ip1,$ip2,$ip3,$ip4);
            ?>
        </div>
    </body>
</html>