<?php 


include 'conexion.php';
 //date_default_timezone_set('America/Bogota');
 //para capturar los dos ultimos valores de la cadena
 $dia=substr($fecha, -2, 2);
 $mes=substr($fecha, 0, 7); 
 
 $mes7=substr($fecha, 5, 2); 
 $year2=substr($fecha, 0, 4); 
 // echo "<br>mes ",$mes7;
 // echo "<br>year ",$year2;
//echo $dia;
//$fecha="2013-11-47";
//echo substr($fecha, -2, 2); // f 
$dn="d".$dia;


if($dia>=1 and $dia<=15){

$quincena=1;
}

if($dia>=16 and $dia<=31){

$quincena=2;
}

$fechahora=date('Y-m-d-H-i-s');

$leche=mysql_query("select * from leche where fecha='$mes' and  id_ruta='$ruta' and id_proveedor='$proveedor' and quincena='$quincena' ");

if(mysql_num_rows($leche)>0)
{
while($fila = mysql_fetch_array($leche))
{
$l=$fila[$dn];
}
if($l>0)
{
echo '<p align="center"><font size="4">Ya se ha tomado la recepcion de este proveedor</font></p>';
echo '<p align="center">&nbsp;</p>';

$en=1;
}
else{
$u=mysql_query("update leche set fechahora='$fechahora', $dn=$cantidad, quincena=$quincena, year2='$year2', mes='$mes7' where id_ruta='$ruta' and id_proveedor='$proveedor' and  fecha='$mes' and quincena='$quincena' ");

$fp = fopen("var.php", "w");
//$var="d11";
fputs($fp, '<?php $dn="'.$dn.'"; $quincena="'.$quincena.'"; $ruta="'.$ruta.'"; $proveedor="'.$proveedor.'";  $mes="'.$mes.'"; $fecha="'.$fecha.'"; ?>');

fclose($fp);
}
}
else
{
$n=mysql_query("insert into leche (fecha,id_ruta,id_proveedor,quincena,$dn,fechahora,year2,mes) values ('$mes','$ruta','$proveedor',$quincena,'$cantidad','$fechahora','$year2','$mes7')");

$fp = fopen("var.php", "w");
//$var="d11";
fputs($fp, '<?php $dn="'.$dn.'"; $quincena="'.$quincena.'"; $ruta="'.$ruta.'"; $proveedor="'.$proveedor.'";  $mes="'.$mes.'"; $fecha="'.$fecha.'"; ?>');

fclose($fp);
}

include("conexion.php");

if($ruta>0 and $proveedor>0)
{
$query="select * from leche where fecha='$mes' and  id_ruta='$ruta' and id_proveedor='$proveedor' and quincena='$quincena'  ";

$resultado = mysql_query($query);

while($fila = mysql_fetch_array($resultado))
{

$suma = $fila['d01']+$fila['d02']+$fila['d03']+$fila['d04']+$fila['d05']+$fila['d06']+$fila['d07']+$fila['d08']+$fila['d09']+$fila['d10']+$fila['d11']+$fila['d12']+$fila['d13']+$fila['d14']+$fila['d15']+$fila['d16']+$fila['d17']+$fila['d18']+$fila['d19']+$fila['d20']+$fila['d21']+$fila['d22']+$fila['d23']+$fila['d24']+$fila['d25']+$fila['d26']+$fila['d27']+$fila['d28']+$fila['d29']+$fila['d30']+$fila['d31'];

//echo "<br>",$suma;

}
$mb=mysql_query("update leche set  total='$suma'  where fecha='$mes' and  id_ruta='$ruta' and id_proveedor='$proveedor' and quincena='$quincena'");


echo '<div id="resultado">';
include('consulta.php');
echo '</div>';

}
?>
