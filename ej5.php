<!--Ejercicio-5-->
<!--Marco Santiago-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
           ej5
        </title>
        <link rel="icon" type="image/png" href="media/">
    </head>
    <body>
        <div class="">
            <?php
                #Se recoge la variable default y se corta hasta el punto,se guardan las dos mitades 192 y .168.16.204;
                #con ello se elimina el primer . y se realiza a misma operacion de nuevo. Luego con printf se transforma a binario.
                $default="192.168.16.204";
                $mascara="15";
                $ip1=strchr("$default",".",true);
                $spare=strchr("$default",".");
                $gspare=substr($spare, -(strlen($spare)-1));
                $ip2=strchr("$gspare",".",true);
                $spare1=strchr("$gspare",".");
                $gspare1=substr($spare1, -(strlen($spare1)-1));
                $ip3=strchr("$gspare1",".",true);
                $spare2=strchr("$gspare1",".");
                $ip4=substr($spare2, -(strlen($spare2)-1));
                //
                $ip1bin=decbin($ip1);
                $ip2bin=decbin($ip2);
                $ip3bin=decbin($ip3);
                $ip4bin=decbin($ip4);
                $ip1bin_parched=str_pad($ip1bin,8,"0",STR_PAD_LEFT);
                $ip2bin_parched=str_pad($ip2bin,8,"0",STR_PAD_LEFT);
                $ip3bin_parched=str_pad($ip3bin,8,"0",STR_PAD_LEFT);
                $ip4bin_parched=str_pad($ip4bin,8,"0",STR_PAD_LEFT);
                //
                $ipbin=$ip1bin_parched.$ip2bin_parched.$ip3bin_parched.$ip4bin_parched;
                //
                $lenght=32-$mascara;
                $red=substr($ipbin,0,-$lenght);
                //
                $red_parched=str_pad($red,32,"0",STR_PAD_RIGHT);
                //
                //Direccion de red, se coge la red en binario y se cogen las dos partes, una para seguir cortandola y la otra para pasarla a decimal. 
                $red1=substr($red_parched,-8);
                $aux1=substr($red_parched,0,-8);
                $red2=substr($aux1,-8);
                $aux2=substr($aux1,0,-8);
                $red3=substr($aux2,-8);
                $red4=substr($aux2,0,-8);
                //
                //Direccion de broadcast
                $red_parched_broad=str_pad($red,32,"1",STR_PAD_RIGHT);
                //
                $red1_bro=substr($red_parched_broad,-8);
                $aux1_bro=substr($red_parched_broad,0,-8);
                $red2_bro=substr($aux1_bro,-8);
                $aux2_bro=substr($aux1_bro,0,-8);
                $red3_bro=substr($aux2_bro,-8);
                $red4_bro=substr($aux2_bro,0,-8);
                ////////////////////////////////////////////////
                echo "IP ".$default."/".$mascara."<br>";
                echo "Mascara ".$mascara."<br>";
                printf("Direccion de Red: ".bindec($red4).".".bindec($red3).".".bindec($red2).".".bindec($red1)."<br>");
                printf("Direccion de Broadcast: ".bindec($red4_bro).".".bindec($red3_bro).".".bindec($red2_bro).".".bindec($red1_bro));
            ?>
        </div>
    </body>
</html>