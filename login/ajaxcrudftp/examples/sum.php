<?php  

/*$mes="2013-12";
$quincena="1";

include 'conexion.php';
	conectar();
	

	
	$sql="select d04 from leche where id_leche=1"; 
$cons=mysql_query($sql); 
if(!isset($sumatoria)){$sumatoria=0;}
while($resultado=mysql_fetch_array($cons)) 

{

$sumatoria+=$resultado['d04']; 
}
echo "Total Litros: ",$sumatoria;*/

?>

<?php 

/* VARIABLES
$nf = número de filas 
$nc = número de columnas 
$ct= total de columna 
$ft= total de fila 
$cf = total de columna sumatoria de fila 
*/
$nf=1; 
$nc=3;
echo '<table>'; 
for ($i = 0; $i <= $nf; $i++) { 
echo '<tr>'; 
for ($c = 1; $c <= $nc; $c++) { 
echo '<td>'.$c.' </td>'; 
$ft+=$c; 
$ct[$c]+=$c; 
} 

echo '<td style="background:yellow">'.$ft.' </td>'; 
$cf+=$ft; 
$ft=0; 
echo '</tr>'; 

}
echo '<tr>'; 
for ($c = 1; $c <= $nc; $c++) { 
echo '<td style="background:lime">'.$ct[$c].'</td>'; 
}
echo '<td style="background:lime">'.$cf.'</td>'; 
echo '</tr></table>';
?>