<?php
 //$dia=substr($fecha, -2, 2);
if(isset($mes) and isset( $quincena) and isset($dn) )
	{
   $tblFriend->showOnly("fecha,id_ruta, id_proveedor, $dn");
   
   
   $tblFriend->displayAs("fecha", "Fecha");
   $tblFriend->displayAs("id_ruta", "Ruta");
   $tblFriend->displayAs("id_proveedor", "Proveedor");
   $tblFriend->displayAs("$dn", "Dia $dias");

   $tblFriend-> omitField ("id_leche");//para que no se vea el campo

 $tblFriend->disallowEdit('fecha');
 $tblFriend->disallowEdit('id_proveedor');
 $tblFriend->disallowEdit('id_ruta');
 $tblFriend->disallowEdit($dn);

/*
   $tblFriend-> disallowDelete (); //no permite la eliminacion
   $tblFriend-> omitField ("id_horario");//para que no se vea el campo
   $tblFriend-> omitField ("num");//para que no se vea el campo*/
$tblFriend-> disallowAdd ();//no permite anadir 
  $tblFriend-> disallowDelete (); //no permite la eliminacion
//$tblFriend->showOnly("nomasig");
 $tblFriend->addButtonToRow("Eliminar", "eliminar.php?dn=$dn&mes=$mes&quincena=$quincena&dias=$dias&fechas=$fechas&id_proveedor=$id_proveedor&id_ruta=$id_ruta", "id_leche");
//&dn= $dn
echo $tblFriend->defineRelationship("id_ruta", "ruta", "id_ruta",
"nombre_ruta","id_ruta",1);

$tblFriend->defineRelationship("id_proveedor", "proveedor", "id_proveedor",
"nombre_p","id_proveedor",1);


	#set the number of rows to display (per page)
    $tblFriend->setLimit(7);

    #set a filter box at the top of the table
  //  
	

	 // $c="matematica";
	#set allowable values for certain fields
	

	#show CSV export button
	//$tblFriend->showCSVExportOption();

	#use if you want to move the add form to the top of the page
	$tblFriend->displayAddFormTop();

	#order the table by any field you want
	$tblFriend->addOrderBy("ORDER BY id_leche DESC");

//$tblFriend->addAjaxFilterBoxAllFields();


	$tblFriend->showTable();
}

?>