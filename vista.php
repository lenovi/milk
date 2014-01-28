<?php 
$d="d09";
	include 'conexion.php';
	conectar();
	$cons=mysql_query("Select leche.fecha,
  ruta.nombre_ruta,
  proveedor.cod_alterno,
  proveedor.nombre_p,
  leche.$d
From leche Inner Join
  ruta On ruta.id_ruta = leche.id_ruta Inner Join
  proveedor On proveedor.id_proveedor = leche.id_proveedor where id_leche=1");

echo "<table border='1'>
<tr>
<td align='center'>Fecha</td>
<td align='center'>Ruta</td>
<td align='center'>Codigo</td>
<td align='center'>Proveedor</td>
<td align='center'>Cantidad</td>";
	while($reg=mysql_fetch_row($cons))
	{
	$p=$reg[0];
	if($p="2013-12")
	{
	echo "<tr><td align='center'>";
		echo "<br>",$reg[0];
		echo "</td><td align='center'>",$reg[1];
		echo "</td><td align='center'>",$reg[2];
		echo "</td><td align='center'>",$reg[3];
		echo  "</td><td align='center'>",$reg[4];
		echo " Litros</td></tr>";
	}
}
echo "</table>";


?>