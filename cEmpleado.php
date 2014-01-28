<?php 
include('var.php');

//referenciamos la clase DBManager
include("conexion.php");
//implementamos la clase empleado
class cEmpleado{
 //constructor	
 function cEmpleado(){
 }	
 
 // consulta los empledos de la BD
 function consultar(){
   //creamos el objeto $con a partir de la clase DBManager
   //usamos el metodo conectar para realizar la conexion
   
global $dn;
     $query = "select * from leche where $dn>'0' ";
	 $result = @mysql_query($query);
	 if (!$result)
	   return false;
	 else
	   return $result;
   
 }

 //elimina un empleado en la base de datos
 function eliminar($id_leche){
 

  
     	  global $dn;
     $query = "UPDATE leche SET $dn='0' WHERE id_leche=$id_leche";

     $result = @mysql_query($query);
     if (!$result)
	   return false;
     else
       return true;
   
 }
}
?>
