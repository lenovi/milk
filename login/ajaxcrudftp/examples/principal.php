<?php
/*     
    Instituto Tecnologico de Zacatepec, Morelos 
Descripcion:   Pantalla inicial que se muestra al usuario una vez que ha sido logueado correctamente. 
Author:     Gonzalo Silverio  gonzasilve@gmail.com 
Archivo:    principal.php 
*/
 
//Inicializar una sesion de PHP
 
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
    include("conectar_bd.php");  
    conectar_bd();
 
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
mysql_close($conexio);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:: Proalba ::.</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body topmargin="0" >
                                            <!-- Dar Bienvenida al usuario -->
    <p align="right">Bienvenido <b><?php echo $nombreUsuario ?></b></p>

        <!-- Proporcionar Link para cerrar sesion -->
        <p  align="right"><a href="cerrarSesion.php">Cerrar sesi&oacute;n</a> </p>
 

<?php 	require_once('../preheader.php'); // <-- this include file MUST go first before any HTML/output
	include_once ('../ajaxCRUD.class.php'); // <-- this include file MUST go first before any HTML/output
?>
<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Example Page</title>
	<link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script>
	$(function() {
		

		$( "#tabs" ).tabs();


		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	</style>
</head>
<body>


<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Recepcion</a></li>
		<li><a href="#tabs-2">Listado</a></li>
		<li><a href="#tabs-3">Reportes</a></li>
	</ul>
	<div id="tabs-1"><?php include('recepcion.php');?></div>
	<div id="tabs-2">pag. de prueba</div>
	<div id="tabs-3"></div>
</div>

</body>
</html>