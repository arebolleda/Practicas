<!--Ejercicio-6-->
<!--Marco Santiago-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
           ej6
        </title>
        <link rel="icon" type="image/png" href="media/">
    </head>
    <body>
        <div class="">
            <?php
                $nif=53687598;
                $aux=$nif%23;
                switch ($aux){
                    case 0:
                        echo "La letra es: T";
                        break;
                    case 1:
                        echo "La letra es: R";
                        break;
                    case 2:
                        echo "La letra es: W";
                        break;
                    case 3:
                        echo "La letra es: A";
                        break;
                    case 4:
                        echo "La letra es: G";
                        break;
                    case 5:
                        echo "La letra es: M";
                        break;
                    case 6:
                        echo "La letra es: Y";
                        break;
                    case 7:
                        echo "La letra es: F";
                        break;
                    case 8:
                        echo "La letra es: P";
                        break;
                    case 9:
                        echo "La letra es: D";
                        break;
                    case 10:
                        echo "La letra es: X";
                        break;
                    case 11:
                        echo "La letra es: B";
                        break;
                    case 12:
                        echo "La letra es: N";
                        break;
                    case 13:
                        echo "La letra es: J";
                        break;
                    case 14:
                        echo "La letra es: Z";
                        break;
                    case 15:
                        echo "La letra es: S";
                        break;
                    case 16:
                        echo "La letra es: Q";  
                        break;
                    case 17:
                        echo "La letra es: V";
                        break;
                    case 18:
                        echo "La letra es: H";
                        break;
                    case 19:
                        echo "La letra es: L";
                        break;
                    case 20:
                        echo "La letra es: C";
                        break;
                    case 21:
                        echo "La letra es: K";
                        break;
                    case 22:
                        echo "La letra es: E";
                        break;
                    default:
                        echo "Error de algun tipo.";
                        break;
                }
            ?>
        </div>
    </body>
</html>
