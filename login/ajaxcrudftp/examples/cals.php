<?php

 $dia=substr($fecha, -2, 2);
 $mes=substr($fecha, 0, 7); 


$mes=2;
$ano=2012;
$numero = cal_days_in_month(CAL_GREGORIAN, $mes, $ano); // 31
echo "Hubo $numero días en agosto del 2003";
?>