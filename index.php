<?php

//1.Formato de zona horaria
date_default_timezone_set("America/Bogota");

//2. hora de entrada debe venir de BD (se puede guardar como varchar)
$ingreso=new DateTime("2020-12-03 15:00:00");


//3. Se captura la hora actual
$salida=new DateTime();

//4. calculamos diferencias solo es posible entre datos tipo DateTime
$intervaloTiempo = date_diff($ingreso, $salida);

//5. Mostramos resultados pasando de dateTime a string
echo($ingreso->format('Y-m-d H:i:s'));
echo("<br>");
echo($salida->format('Y-m-d H:i:s'));
echo("<br>");
echo ("La diferencia es de: ".$intervaloTiempo->format("%d dias, %h horas, %i minutos"));


?>