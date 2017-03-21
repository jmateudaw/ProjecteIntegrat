<?php

 $numero=1;
 $estacion="";


 switch($numero){
    case 1: $estacion="Verano";break;
    case 2: $estacion="Otoño";break;
    case 3: $estacion="Invierno";break;
    case 4: $estacion="Primavera";break;
    default: $estacion="Incorrecta";
 }

 echo "La estación es: " . $estacion;

?>
