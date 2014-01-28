<?php 
include_once("cEmpleado.php");

//consulta todos los empleados
$objempleado = new cEmpleado;
$consulta=$objempleado->consultar();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php

if(isset($fecha)){
 $dia=substr($fecha, -2, 2);
 $mes=substr($fecha, 0, 7); 

 //echo substr($fecha, -2, 2); // f 
$dn="d".$dia;

if($dia>=1 and $dia<=15){

$quincena=1;
}

if($dia>=16 and $dia<=31){

$quincena=2;
}

$idx=mysql_insert_id();

	$cons=mysql_query("Select leche.fecha,
  ruta.nombre_ruta,
  proveedor.cod_alterno,
  proveedor.nombre_p,
  leche.$dn,
  leche.total,
  leche.id_leche
From leche Inner Join
  ruta On ruta.id_ruta = leche.id_ruta Inner Join
  proveedor On proveedor.id_proveedor = leche.id_proveedor where leche.id_ruta='$ruta' and leche.fecha='$mes' and leche.quincena='$quincena' and $dn>0 ORDER BY '$idx' DESC");
  
  //totaldia alias del campo
  $result = mysql_query("SELECT SUM($dn) as totaldia FROM leche where id_ruta='$ruta' and fecha='$mes' and quincena='$quincena' and $dn>0"); 
  
$pro=mysql_num_rows($cons);
  echo "<table border='1' width:400px;>";

    $row = mysql_fetch_array($result, MYSQL_ASSOC);

	echo "<tr><td><b>Total litros ruta hoy: <font size='3' color='#FF0000'>",$row['totaldia'];
 	echo " Litros </font></td><td><b>Recepcion proveedores ruta hoy: <font size='3' color='#FF0000'>";
  	echo $pro;
  	echo "</font></b></td>";

$result2 = mysql_query("SELECT SUM($dn) as totaldia2 FROM leche where  fecha='$mes' and quincena='$quincena' and $dn>0"); 
$cons2 = mysql_query("SELECT * FROM leche where  fecha='$mes' and quincena='$quincena' and $dn>0"); 

  $pro2=mysql_num_rows($cons2);

    $row2 = mysql_fetch_array($result2, MYSQL_ASSOC);

	echo "<td><b>Total litros todas las rutas: <font size='3' color='#FF0000'>",$row2['totaldia2'];
  	echo " Litros </font></td><td><b>Recepcion todos los proveedores hoy: <font size='3' color='#FF0000'>";
  	echo $pro2;
  	echo "</font></b></td></tr></table><br>";
  
  $cons9=mysql_num_rows($cons);

if($cons9>0){

echo "<table border='1' width:400px;>
<tr>
<th align='center' bgcolor=#000099>Fecha</th>
<th align='center'>Ruta</th>
<th align='center'>C&oacute;digo</th>
<th align='center'>Proveedor</th>
<th align='center'>Cantidad</th>
<th align='center'>Acci&oacute;n</th></tr>";
echo "</table>";
echo '<div style="width:100%; height:200px; overflow: auto;" >';
echo "<table border='1' width:400px;>";
	while($reg=mysql_fetch_row($cons))
	{
$total=$reg[5];
$idleche=$reg[6];
	echo "<tr><td align='center'>";
		echo "<br>",$reg[0]."-".$dia;
		echo "</td><td align='center'>",$reg[1];
		echo "</td><td align='center'>",$reg[2];
		echo "</td><td align='center'>",$reg[3];
		echo  "</td><td align='center'>",$reg[4];
		echo " Litros</td>";
		echo "<td><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"eliminarDato('".$reg[6]."')\">Eliminar</a></td></tr>";
}
echo "</table><br></div>";
}
}


?>