
 
<body topmargin="0" >
                                           
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
 


    	
<!--  t?ulos  -->
        <ul class="tabs">
            <li><a href="#" title="content_1" class="tab active">Recepción</a></li>
            <li><a href="#" title="content_2" class="tab">Búsquedas</a></li>
            <li><a href="#" title="content_3" class="tab">Reportes</a></li>
        </ul>

<!--  contenido primer tab -->        
    <div id="content_1" class="content">
        	<ul>
            	<li><iframe  align="center" frameborder=0 height="75%" width="100%" src="http://"></iframe></li>
			</ul>
    </div>

<!-- segundo tab -->
    <div id="content_2" class="content">
        	<ul>
            	<li><iframe  align="center" frameborder=0 height="75%" width="100%" src="http://"></iframe></li>
			</ul>
    </div>


<!-- tercer tab -->
    <div id="content_3" class="content" style="display: none;">
        
			
			<ul>
            	<li>
				<iframe  align="center" frameborder=0 height="75%" width="100%" src="http://" scrolling="yes" name="aa"></iframe>
</li>
			</ul>
			
        </div>

    
</div>

</div>


        
        </body></html>