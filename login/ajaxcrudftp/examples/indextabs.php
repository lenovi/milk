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