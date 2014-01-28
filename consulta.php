<?php 
include_once("cEmpleado.php");

//consulta todos los empleados
$objempleado = new cEmpleado;
$consulta=$objempleado->consultar();

mysql_query("SET NAMES 'utf8'"); // solución eñes y tildes

if(isset($fecha)){
 $dia=substr($fecha, -2, 2);
 $mes=substr($fecha, 0, 7); 

 //echo substr($fecha, -2, 2); 
$dn="d".$dia;

if($dia>=1 and $dia<=15){

$quincena=1;
}

if($dia>=16 and $dia<=31){

$quincena=2;
}

	$cons=mysql_query("Select leche.fecha,
  ruta.nombre_ruta,
  proveedor.cod_alterno,
  proveedor.nombre_p,
  leche.$dn,
  leche.total,
  leche.id_leche
From leche Inner Join
  ruta On ruta.id_ruta = leche.id_ruta Inner Join
  proveedor On proveedor.id_proveedor = leche.id_proveedor where leche.id_ruta='$ruta' and leche.fecha='$mes' and leche.quincena='$quincena' and $dn>0 order by cod_alterno asc");
  
  //totaldia alias del campo
  $result = mysql_query("SELECT SUM($dn) as totaldia FROM leche where id_ruta='$ruta' and fecha='$mes' and quincena='$quincena' and $dn>0"); 
  
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<?php

$pro=mysql_num_rows($cons);
  echo "<table border='1' width:400px;>";

    $row = mysql_fetch_array($result, MYSQL_ASSOC);


	$cons_1=mysql_query("Select leche.fecha,
  ruta.nombre_ruta,
  proveedor.cod_alterno,
  proveedor.nombre_p,
  leche.$dn,
  leche.total,
  leche.id_leche
From leche Inner Join
  ruta On ruta.id_ruta = leche.id_ruta Inner Join
  proveedor On proveedor.id_proveedor = leche.id_proveedor where leche.id_ruta='$ruta' and leche.fecha='$mes' and leche.quincena='$quincena' and $dn>0 order by cod_alterno asc");


	while($reg=mysql_fetch_row($cons_1))
	{
$rutahoy=$reg[1];
}
if(!isset($rutahoy)){

//echo "<center><h4><font color='#000000'>No hay mas recepciones para eliminar</font></h4></center>";

}
else{


	echo "<tr><td><b><font size='2'>Total litros </font><font size='2' color='#FF0000'>".$rutahoy."</font> <font size='2'>hoy: </font><font size='3' color='#FF0000'>",$row['totaldia'];
 	echo "</font><font size='2'> Litros </font></td><td><b><font size='2'>Recepci&oacuten proveedores </font><font size='2' color='#FF0000'>".$rutahoy."</font><font size='2'> hoy: </font><font size='3' color='#FF0000'>";
  	echo $pro;
  	echo "</font></b></td>";

$result2 = mysql_query("SELECT SUM($dn) as totaldia2 FROM leche where  fecha='$mes' and quincena='$quincena' and $dn>0"); 
$cons2 = mysql_query("SELECT * FROM leche where  fecha='$mes' and quincena='$quincena' and $dn>0 "); 
  
  $pro2=mysql_num_rows($cons2);

    $row2 = mysql_fetch_array($result2, MYSQL_ASSOC);

	echo "<td><b><font size='2'>Total litros todas las rutas hoy:</font> <font size='3' color='#FF0000'>",$row2['totaldia2'];
  	echo " </font><font size='2'>Litros </font></td><td><b><font size='2'>Recepcion todos los proveedores hoy:</font> <font size='3' color='#FF0000'>";
  	echo $pro2;
  	echo "</font></b></td></tr></table><br>";
  

//  <!-- tabla titulos -->

echo '<table border="1" width="100%" >
	<tr>
		<td align="center" width="101">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
	<b>	Fecha</b></span></td>
		<td align="center" width="297">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
	<b>	Ruta</b></span></td>
		<td align="center" width="65">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
	<b>	C&oacute;digo</b></span></td>
		<td align="center" width="419">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
	<b>	Proveedor</b></span></td>
		<td align="center" width="107">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
	<b>	Cantidad</b></span></td>
		<td align="center" width="75">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
	<b>	Acci&oacute;n</b></span></td>
	</tr>
</table>';

// <!-- tabla contenidos -->

echo '<div style="width:100%; height:200px; overflow-y: scroll;" >';

echo "<table border='1' width:100%;>";
	while($reg=mysql_fetch_row($cons))
	{
$total=$reg[5];
$idleche=$reg[6];

echo '<tr><td align="center" width="115">';



echo '<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">';

echo "<br>",$reg[0]."-".$dia;

echo '</span></td>';

echo '<td align="center" width="348">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
',$reg[1];

echo '</span></td>';

echo '<td align="center" width="70">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
',$reg[2];

echo '</span></td>';

echo '<td align="center" width="484">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
',$reg[3];

echo '</span></td>';

echo '<td align="center" width="119">
		<span style="color: rgb(61, 66, 70); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 245, 245); display: inline !important; float: none;">
',$reg[4];



echo ' Litros</span></td>';

		echo "<td align='center' width='60'><font size='2'><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"eliminarDato('".$reg[6]."')\">Eliminar</a></font></td></tr>";
}

echo '</tr>
</table><br></div>';
}
// <!-- tablas originales -->



}


?>