<?php

 
//Inicializar una sesion de PHP
 if ($_SERVER['HTTP_REFERER'] == ""){ 
header("Location: index.php"); 
exit(); 
} 
session_start();
 
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['uid'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la 
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="index.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript"> 
            document.formulario.submit();
        </script>
<?php
}
 
    //Conectar BD
     include("conexion.php");

 
    //Sacar datos del usuario que ha iniciado sesion
    $sql = "SELECT  tx_nombre,tx_apellidoPaterno,tx_TipoUsuario,id_usuario
            FROM tbl_users
            LEFT JOIN ctg_tiposusuario
            ON tbl_users.id_TipoUsuario = ctg_tiposusuario.id_TipoUsuario
            WHERE id_usuario = '".$_SESSION['uid']."'";         
    $result     =mysql_query($sql); 
 
    $nombreUsuario = "";
 
    //Formar el nombre completo del usuario
    if( $fila = mysql_fetch_array($result) )
        $nombreUsuario = $fila['tx_nombre']." ".$fila['tx_apellidoPaterno'];
     $_SESSION['usuario']=$nombreUsuario;

	//Cerrrar conexion a la BD
?>





<body topmargin="0" >
                                            <!-- Dar Bienvenida al usuario -->
    
 

<?php


function generaPaises()
{
	include 'conexion.php';
	$consulta=mysql_query("SELECT id_ruta, nombre_ruta FROM ruta");
	//	desconectar();

	// Voy imprimiendo el primer select compuesto por los paises
	echo "<select autofocus name='paises' id='paises' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Seleccionar</option>";

	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option  value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html">
<title>.:: Proalba . sistema recepción de leche ::.</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="Content-Type" content="text/html">
<script type="text/javascript" src="eliminar.js"></script>

<link rel="stylesheet" href="normalize.css" type="text/css">	

<!-- maneja el estilo de ancho, tama? de letra, etc --->

<link rel="stylesheet" href="styleaza.css" type="text/css">	

<!-- ------------------------------------------------ -->

<link rel="stylesheet" href="form.css" type="text/css">	
<link rel="stylesheet" href="jquery-ui-1.10.2.custom.css" type="text/css">	


<script type="text/javascript" src="modernizr-2.6.2.js"></script>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="jquery.reveal.js"></script>
<script type="text/javascript" src="jquery.index.js"></script>

        <!--[if IE]>
        <script type="text/javascript" src="/innmilk/js/modernizr-2.6.2.js"></script>
        <![endif]-->
        <!--[if IE 8]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
        <link href="../selectjohan/css/ie8.css" rel="stylesheet">
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if gte IE 9]>
        <style type="text/css">.gradient ul li{filter:none}</style>
        <![endif]-->


<link rel="stylesheet" href="jquery.ui.all.css">
	<script src="jquery.ui.core.js"></script>
	<script src="jquery.ui.widget.js"></script>
	<script src="jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="demos.css">
<link rel="stylesheet" type="text/css" href="select_dependientes.css">
<script type="text/javascript" src="select_dependientes.js"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script>
	  <script language="JavaScript" type="text/javascript" src="ajax2.js"></script>



<!--  tabs <script src="scripts/jquery-1.2.3.min.js"> -->

	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    
    </script>

    <script>
	
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		
		// When a link is clicked
		$("a.tab").click(function () {
			
			
			// switch all tabs off
			$(".active").removeClass("active");
			
			// switch this tab on
			$(this).addClass("active");
			
			// slide all content up
			$(".content").slideUp();
			
			// slide this content up
			var content_show = $(this).attr("title");
			$("#"+content_show).slideDown();
		  
		});
	
	  });
  </script>

<!-- -->


 </head>


    <body>
 

<!-- inicio tabs  -->   
 <div id="tabbed_box_1" class="tabbed_box">


<div align="center">
	<table border="0" width="100%">
		<tr>
			<td align="left" width="37%" height="34" >
			<img src="milk7.png" width="181" height="70"></td>

			<td align="center" height="34"><img border="0" src="logoproalba300x176a.png" width="111" height="70"></p> </td>
			<td align="center"><p align="right"><font size="2"><font color=#FFFFFF>Bienvenido <b><?php echo $nombreUsuario ?></font></font></b></p>

        	<!-- Proporcionar Link para cerrar sesion -->
        	<p  align="right"><a href="cerrarSesion.php">Cerrar sesión</a> </p></td>

			<td align="center" height="34" width="30">&nbsp;</td>
		</tr>
	</table>
</div>







    <div class="tabbed_area">
    <br>
<br>
<br>
<br>
    	
<!--  t?ulos  -->
        <ul class="tabs">
            <li><a href="#" title="content_1" class="tab active">Recepción</a></li>
            <li><a href="#" title="content_2" class="tab">Búsquedas</a></li>
            <li><a href="#" title="content_3" class="tab">Reportes</a></li>
        </ul>

<!--  contenido primer tab -->        
    <div id="content_1" class="content">
        	<ul>
            	<li>          
     


<section id="contenedor">					
            <div id="subcontenedor">
                              <div class="contenido" align="center" style="width: 1251px; height: 470px">
                   
		<form name="nuevo_empleado" action="" onsubmit="enviarDatosEmpleado(); return false">
			<div id="demo" align="center" >
					
	<table  border="1" >
		<tr>
			<td align=center width="197%" colspan="5" style="background-color: #408396">
			<font size="3"><font color=#ffffff>Recepción de Leche</font></font></td>
		</tr>

<input type="hidden" name="fechahora" value="<?php  echo $fechahora=date('Y-m-d-H-i-s');?>"/>


		<tr>
		
			<td align=center> Fecha<br>
		<p align="center"><input type="text"  name="fecha" id="datepicker"value=<?php  if(isset($fechas)){echo $fechas;} else{ echo date('Y-m-d');  }?> readonly required /></td></p>
			<td  align=center>Ruta<p align="center"><div id="demoIzq"><?php generaPaises(); ?></div></td></p>
				
				
			
		

			<td align=center>Proveedor<div >
				<p align="center"><select disabled="disabled" name="estados" id="estados">
						<option>Seleccionar...</option>
					</select>
					</p>
				</div></td>
			<td align=center >Cantidad<br>
			<p align="center"><input type="number" name="cantidad" size="20" min="1" placeholder="Cantidad..." title="Cantidad en Litros" required/></td></p>
			
			<?php     
	 if(isset($mes) and isset( $quincena) and isset($dn) ){

	$sql="select $dn from leche where quincena='$quincena' and fecha='$mes' "; 
$cons=mysql_query($sql); 
if(!isset($sumatoria)){$sumatoria=0;}
while($resultado=mysql_fetch_array($cons)) 

{

$sumatoria+=$resultado[$dn]; 
}
//echo "Total Litros: ",$sumatoria;
}
			?>

			
		</tr>
		<tr>	<td height="14" align="center" colspan="5">
		<input type="submit" style="height:22px" value="Guardar" name="guardar"></td></tr>
		
	</table>
	<table>
	
<tr>
<?php if(isset($sumatoria)){  ?>
			<td align=center width="130%" >Total Litros<br><p align="center"><?php echo"<b>", $sumatoria;
			echo "</b>"; }  ?></td></p>


</tr>
</table>
			
			</div>
			</form>
		<div id="resultado"><?php //include('consulta.php');?></div>

			</div>
            </div>
        </section>     







        		</li>
			</ul>
    </div>

<!-- segundo tab -->
    <div id="content_2" class="content">
        	<ul>
            	<li><iframe  align="center" frameborder=0 height="75%" width="100%" src="http://proalba.com.co/buscar-recepcion/principal.php"></iframe></li>
			</ul>
    </div>


<!-- tercer tab -->
    <div id="content_3" class="content" style="display: none;">
        
			
			<ul>
            	<li>
				<iframe  align="center" frameborder=0 height="75%" width="100%" src="http://www.proalba.com.co/reporte15/index.php" scrolling="yes" name="aa"></iframe>
</li>
			</ul>
			
        </div>

    
</div>

</div>


        
        </body></html>