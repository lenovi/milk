<?php 


include 'conexion.php';
conectar();
$eliminar=mysql_query("update leche set $dn='0' where id_leche=$id_leche ");



include("conexion.php");


$query="select * from leche where id_leche='$id_leche'  ";
$resultado = mysql_query($query);

while($fila = mysql_fetch_array($resultado))
{

$suma = $fila['d01']+$fila['d02']+$fila['d03']+$fila['d04']+$fila['d05']+$fila['d06']+$fila['d07']+$fila['d08']+$fila['d09']+$fila['d10']+$fila['d11']+$fila['d12']+$fila['d13']+$fila['d14']+$fila['d15']+$fila['d16']+$fila['d17']+$fila['d18']+$fila['d19']+$fila['d20']+$fila['d21']+$fila['d22']+$fila['d23']+$fila['d24']+$fila['d25']+$fila['d26']+$fila['d27']+$fila['d28']+$fila['d29']+$fila['d30']+$fila['d31'];

echo "<br>",$suma;

}
$mb=mysql_query("update leche set  total='$suma'  where id_leche='$id_leche'  ");



?>





<meta http-equiv="Refresh" content="0;url='index.php?mes=<?php echo $mes; ?>&dn=<?php echo $dn; ?>&quincena=<?php echo $quincena; ?>&dias=<?php echo $dias; ?>&fechas=<?php echo $fechas; ?>' ">
