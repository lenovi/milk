<?php 

$ruta=$_POST['paises'];
$proveedor=$_POST['estados'];

include 'conexion.php';
conectar();
 //date_default_timezone_set('America/Bogota');
 //para capturar los dos ultimos valores de la cadena
 $dia=substr($fecha, -2, 2);
 $mes=substr($fecha, 0, 7); 
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



$leche=mysql_query("select * from leche where fecha='$mes' and  id_ruta='$ruta' and id_proveedor='$proveedor' and quincena='$quincena' ");

if(mysql_num_rows($leche)>0)
{
$u=mysql_query("update leche set $dn=$cantidad, quincena=$quincena where id_ruta='$ruta' and id_proveedor='$proveedor' and  fecha='$mes' and quincena='$quincena' ");
}
else
{
$n=mysql_query("insert into leche (fecha,id_ruta,id_proveedor,quincena,$dn) values ('$mes','$ruta','$proveedor',$quincena,'$cantidad')");

if($n or $u){

echo'<center>
<br><br><br><br><br><br><img border="0" src="loader.gif" width="128" height="128">
</center>';
}
else{
echo "<h2>No se han podido guardar los datos</h2>";
}
}




$servidor="gazeta.startlogicmysql.com";
$usuario="newinnmilk";
$password=" SQLnewinnmilk.2013";
$db="proalba";


$conexion =  mysql_connect($servidor, $usuario, $password);
if (!$conexion) {
    die('No pudo conectarse: ' . mysql_error());
}

mysql_select_db($db, $conexion);


$query="select * from leche where fecha='$mes' and  id_ruta='$ruta' and id_proveedor='$proveedor' and quincena='$quincena'  ";
$resultado = mysql_query($query);

while($fila = mysql_fetch_array($resultado))
{

$suma = $fila['d01']+$fila['d02']+$fila['d03']+$fila['d04']+$fila['d05']+$fila['d06']+$fila['d07']+$fila['d08']+$fila['d09']+$fila['d10']+$fila['d11']+$fila['d12']+$fila['d13']+$fila['d14']+$fila['d15']+$fila['d16']+$fila['d17']+$fila['d18']+$fila['d19']+$fila['d20']+$fila['d21']+$fila['d22']+$fila['d23']+$fila['d24']+$fila['d25']+$fila['d26']+$fila['d27']+$fila['d28']+$fila['d29']+$fila['d30']+$fila['d31'];

//echo "<br>",$suma;

}
$mb=mysql_query("update leche set  total='$suma'  where fecha='$mes' and  id_ruta='$ruta' and id_proveedor='$proveedor' and quincena='$quincena'");


?>
<meta http-equiv="Refresh" content="0;url='principal.php?mes=<?php echo $mes; ?>&dn=<?php echo $dn; ?>&quincena=<?php echo $quincena; ?>&dias=<?php echo $dia; ?>&fechas=<?php echo $fecha; ?>&ruta=<?php echo $ruta; ?>' ">