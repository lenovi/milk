<?php 	require_once('../preheader.php');  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tabbed Structure - Regular</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    <script src="scripts/jquery-1.2.3.min.js"></script>
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
</head>

<body>
<div id="tabbed_box_1" class="tabbed_box">
	<h4>Browse Site <small>Select a Tab</small></h4>
    <div class="tabbed_area">
    
    	

        <ul class="tabs">
            <li><a href="#" title="content_1" class="tab active">Topics</a></li>
            <li><a href="#" title="content_2" class="tab">Archives</a></li>
            <li><a href="#" title="content_3" class="tab">Pages</a></li>
        </ul>
        
        <div id="content_1" class="content">
        	<ul>
            	<li>




<?php  // <-- this include file MUST go first before any HTML/output
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






</li>
			</ul>
        </div>
        <div id="content_2" class="content">
        	<ul>
            	<li><a target="_self" href="http://proalba.com.co/ajaxcrudftp/examples/principal.php?mes=2013-12&dn=d11&quincena=1&dias=11&fechas=2013-12-11">December 2008 <small>6 Posts</small></a></li>
            
			</ul>
        </div>
        <div id="content_3" class="content">
        	<ul>
            	<li><a href="">Home</a></li>
            	<li><a href="">About</a></li>
            	<li><a href="">Contribute</a></li>
            	<li><a href="">Contact</a></li>
			</ul>
        </div>
    
    </div>

</div>


</body>
</html>