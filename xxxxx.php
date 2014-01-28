<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>MILK online - sistema en línea para liquidación de leche cruda</title>
        <meta name="author" content="" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="StyleSheet" href="estilos.css" type="text/css"> 
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style>
		<![endif]-->
		   <script src="jquery171.js" type="text/javascript"></script> 
    <script src="jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.alerts.js"></script>
    <link href="jquery.alerts.css" rel="stylesheet" type="text/css" />
     
    <script type="text/javascript">
    <!--
        $().ready(function() {
            $("#frmlogin").validate();
            $("#usuario").focus();
        });
    // -->
    </script>
		
		
		<link rel="stylesheet" href="blueberry.css" />
<style type="text/css">
<!--
* {
	margin: 0;
	border: 0;
	padding: 0;
}
body {
	background: #f0f0f0;
	font: 0px/0px Arial, San-Serif;
	color: #404040;
}
a { color: #264c99; text-decoration: none; }
a:hover { text-decoration: underline; }

h1,h2,h3,h4,p { margin-bottom: 0px; }
h1 {
	font-size: 0px;
	line-height: 0px;
	color: #ffffff;
	text-transform: lowercase;
}
h2, h3 {

	font-size: 0px;
	line-height: 0px;
	color: #808080;
}
h3 { font-size: 0px; color: #404040; }
h5 { font-weight: bold; font-size: 0px; color: #000; }

#header {
	height: 0px;
	padding-top: 0px; padding-bottom: 0px;
	text-align: center;
	background: #405580;
}
#header h1 {
	margin: 0 auto;

}
#doc { margin: 0px 0; }
#content {
	margin: 0 auto;
	
}

.blueberry { max-width: 960px; }

-->
</style>

<script src="jquery.min.js"></script>
<script src="jquery.blueberry.js"></script>

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>

		
		
		
    </head>
    <body style="background-color: #464C54; background-image:url('images/bg-right-column2.jpg')">
        <div class="container">
		
			<!-- Codrops top bar -->
           			
			<header>
							<div  align="center">
					<table id="shadow" border="0" width="60%" bgcolor="#FFFAF6" cellspacing="0" cellpadding="0">
						<tr>
							<td colspan="5" align="center" bgcolor="#406F96" height="97">
			
							<p>
							<img border="0" src="images/milk9c.png" width="206" height="75"> </td>
						</tr>
						<tr>
							<td width="17%" height="285" align="center" bgcolor="#EDEDED">
							&nbsp;</td>
							<td width="37%" height="285" align="center" bgcolor="#EDEDED">
							<img border="0" src="images/logoproalba300x176c.png" width="320" height="196"></td>
							<td width="4%" height="285" align="center" bgcolor="#EDEDED">
							&nbsp;</td>
							<td height="285" width="27%" bgcolor="#EDEDED">
			
			<div><html lang="en">
    
    
        <div class="container">
		
			<!-- Codrops top bar -->
			
			<section class="main">
				<form class="form-1" id="frmlogin" name="frmlogin" method="POST" action="validarUsuario.php">
					<p class="field">
						<input type="text" name="usuario" placeholder="Usuario">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Contrase&ntilde;a">
							<i class="icon-lock icon-large"></i>
					</p>

					<p class="submit">
						<button type="submit" name="enviar"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>
        </div>
    </body>
</html></div>        				<p></td>
							<td height="285" width="25%" bgcolor="#EDEDED">
			
			&nbsp;</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#406F96" bordercolorlight="#FCD817" colspan="5">
						<p align="center">
						<div id="doc">
  <div id="content">
  </div>

<!-- blueberry -->

    <div class="blueberry">
      <ul class="slides">
      
      		 <li>
		<p align="center">
		<img src="images/slide2.png" style="width: 760px" height="120" /></li>

        <li>
		<p align="center">
		<img src="images/slide.png" style="width: 760px" height="120" /></li>

            


    	<p>&nbsp;</p>
		<p>&nbsp;</div>
		<div>
		<img border="0" src="images/www.jpg" width="936" height="29"></li>
      </div>
<!-- blueberry -->

  </div>
</div>
</td>
					</tr>
					
					
				</table>
					<p>&nbsp;</div>
				
			</header>
			
        </div>
    </body>
</html>




    <?php
     
    //Mostrar errores de validacion de usuario, en caso de que lleguen
     
        if( isset( $_POST['msg_error'] ) )
        {
            switch( $_POST['msg_error'] )
            {
                case 1:
            ?>
            <script type="text/javascript"> 
                jAlert("El usuario o password son incorrectos.", "Seguridad");
                $("#password").focus();
            </script>
            <?php
                break;          
                case 2:
            ?>
            <script type="text/javascript"> 
                jAlert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.", "Seguridad");
            </script>
            <?php       
                break;
            }       //Fin switch
        }
 
        //Mostrar mensajes del estado del registro
         
        if( isset( $_POST['status_registro'] ) )
        {
            switch( $_POST['status_registro'] )
            {
                case 1:
                if( $_POST['i_EmailEnviado'] ==1) {
                ?>
                    <script type="text/javascript"> 
                        jAlert("Gracias, ha sido registrado exitosamente.\n Se le ha enviado un correo electronico de bienvenida, \npor favor, NO LO CONTESTE pues solo es informativo.", 'Registro');
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript"> 
                        jAlert("Gracias, ha sido registrado exitosamente.\n No se le ha podido enviar correo electronico de bienvenida, \nsin embargo, ya puede utilizar sus datos de acceso para iniciar sesion..", 'Registro');
                    </script>
                <?php
                }
 
                    break;          
                 
                default:
            ?>
                <script type="text/javascript"> 
                    jAlert("Temporalmente NO se ha podido registrar, intente de nuevo mas tarde.", "Registro");
                </script>
            <?php       
            }       //Fin switch
        }
    ?>
     
</table>
</form>
</body>
</html>