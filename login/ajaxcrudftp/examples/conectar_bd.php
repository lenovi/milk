<?php
/*     
    Instituto Tecnologico de Zacatepec, Morelos 
Descripcion:   Conecta con el Manejador de Base de Datos (DBMS) y deja disponible una variable global (conexio)
        para ser utilizada posteriormente. 
Author:     Gonzalo Silverio  gonzasilve@gmail.com 
Archivo:    conectar_bd.php 
*/
 
$conexio;
function conectar_bd()
{
    global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "newinnmilk";
    $elPw  = "SQLnewinnmilk.2013";
    $elServer ="gazeta.startlogicmysql.com";
    $laBd = "proalba";
     
    //Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error());
}   
?>