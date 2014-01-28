<?php

	#the code for the class


	#create an instance of the class
	 //$mes=substr($fecha, 0, 7); 
 //acomodar con varialbes los valores, guardar.php
if(isset($mes) and isset( $quincena) and isset($dn) )
	{
    $tblFriend = new ajaxCRUD("leche", "leche", "id_leche", "../");
	$tblFriend->addWhereClause("WHERE (fecha = '$mes' and quincena='$quincena'  and $dn>'0'  )");
	}

//echo $dias;
//if(isset($dn)){echo $dn;}

date_default_timezone_set('America/Bogota');
if(isset($fechas)){echo "Las recepciones que haga se guardaran con esta fecha ",$fechas;
 $dia=substr($fechas, -2, 2);
 $mes=substr($fechas, 0, 7); 
 
 //echo "<br>dia ",$dia; 
 //Secho "<br>mes ",$mes; 
 
}
else{echo "Las recepciones que haga se guardaran con esta fecha ",$fechas=date('Y-m-d');

 $dia=substr($fechas, -2, 2);
 $mes=substr($fechas, 0, 7); 
 
 //echo "<br>dia ",$dia; 
 //echo "<br>mes ",$mes; 
 
}

function generaPaises()
{
	include 'conexion.php';
	conectar();
	$consulta=mysql_query("SELECT id_ruta, nombre_ruta FROM ruta");
//	desconectar();

	// Voy imprimiendo el primer select compuesto por los paises
	echo "<select autofocus name='paises' id='paises' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Seleccionar</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
?>

<!DOCTYPE html>

<html lang="es" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths -webkit-"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html">
        <title>innmilk :: Sistema de Liquidacion del Leche</title>
        <link type="text/css" rel="stylesheet" href="../selectjohan/css/css" data-inprogress="">
		
			
	    <script src="jquery.js"></script>
    <script type="text/javascript" src="includes/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="includes/jquery-ui.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if(isset($mes) and isset( $quincena) and isset($dn) )
	{	$tblFriend->insertHeader();} ?>

		<!-- these js/css includes are ONLY to make the calendar widget work (fldDateMet);
			 these includes are not necessary for the class to work!! -->
		<link rel="stylesheet" href="includes/jquery.ui.all.css">
		<script src="includes/jquery.ui.core.js"></script>
		<!--script src="includes/jquery.ui.widget.js"></script-->
		<script src="includes/jquery.ui.datepicker.js"></script>
		
		
        <style media="" data-href="../selectjohan/css/normalize.css">/*! normalize.css v2.0.1 | MIT License | git.io/normalize */

/* ==========================================================================
   HTML5 display definitions
   ========================================================================== */

/*
 * Corrects `block` display not defined in IE 8/9.
 */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section,
summary {
    display: block;
}

/*
 * Corrects `inline-block` display not defined in IE 8/9.
 */

audio,
canvas,
video {
    display: inline-block;
}

/*
 * Prevents modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
    display: none;
    height: 0;
}

/*
 * Addresses styling for `hidden` attribute not present in IE 8/9.
 */

[hidden] {
    display: none;
}

/* ==========================================================================
   Base
   ========================================================================== */

/*
 * 1. Sets default font family to sans-serif.
 * 2. Prevents iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */

html {
    font-family: sans-serif; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
    -ms-text-size-adjust: 100%; /* 2 */
}

/*
 * Removes default margin.
 */

body {
    margin: 0;
}

/* ==========================================================================
   Links
   ========================================================================== */

/*
 * Addresses `outline` inconsistency between Chrome and other browsers.
 */

a:focus {
    outline: thin dotted;
}

/*
 * Improves readability when focused and also mouse hovered in all browsers.
 */

a:active,
a:hover {
    outline: 0;
}

/* ==========================================================================
   Typography
   ========================================================================== */

/*
 * Addresses `h1` font sizes within `section` and `article` in Firefox 4+,
 * Safari 5, and Chrome.
 */

h1 {
    font-size: 2em;
}

/*
 * Addresses styling not present in IE 8/9, Safari 5, and Chrome.
 */

abbr[title] {
    border-bottom: 1px dotted;
}

/*
 * Addresses style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
 */

b,
strong {
    font-weight: bold;
}

/*
 * Addresses styling not present in Safari 5 and Chrome.
 */

dfn {
    font-style: italic;
}

/*
 * Addresses styling not present in IE 8/9.
 */

mark {
    background: #ff0;
    color: #000;
}


/*
 * Corrects font family set oddly in Safari 5 and Chrome.
 */

code,
kbd,
pre,
samp {
    font-family: monospace, serif;
    font-size: 1em;
}

/*
 * Improves readability of pre-formatted text in all browsers.
 */

pre {
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word;
}

/*
 * Sets consistent quote types.
 */

q {
    quotes: "\201C" "\201D" "\2018" "\2019";
}

/*
 * Addresses inconsistent and variable font size in all browsers.
 */

small {
    font-size: 80%;
}

/*
 * Prevents `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

/* ==========================================================================
   Embedded content
   ========================================================================== */

/*
 * Removes border when inside `a` element in IE 8/9.
 */

img {
    border: 0;
}

/*
 * Corrects overflow displayed oddly in IE 9.
 */

svg:not(:root) {
    overflow: hidden;
}

/* ==========================================================================
   Figures
   ========================================================================== */

/*
 * Addresses margin not present in IE 8/9 and Safari 5.
 */

figure {
    margin: 0;
}

/* ==========================================================================
   Forms
   ========================================================================== */

/*
 * Define consistent border, margin, and padding.
 */

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}

/*
 * 1. Corrects color not being inherited in IE 8/9.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */

legend {
    border: 0; /* 1 */
    padding: 0; /* 2 */
}

/*
 * 1. Corrects font family not being inherited in all browsers.
 * 2. Corrects font size not being inherited in all browsers.
 * 3. Addresses margins set differently in Firefox 4+, Safari 5, and Chrome
 */

button,
input,
select,
textarea {
    font-family: inherit; /* 1 */
    font-size: 100%; /* 2 */
    margin: 0; /* 3 */
}

/*
 * Addresses Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

button,
input {
    line-height: normal;
}

/*
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Corrects inability to style clickable `input` types in iOS.
 * 3. Improves usability and consistency of cursor style between image-type
 *    `input` and others.
 */

button,
html input[type="button"], /* 1 */
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button; /* 2 */
    cursor: pointer; /* 3 */
}

/*
 * Re-set default cursor for disabled elements.
 */

button[disabled],
input[disabled] {
    cursor: default;
}

/*
 * 1. Addresses -webkit-box sizing set to `content-box` in IE 8/9.
 * 2. Removes excess padding in IE 8/9.
 */

input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box; /* 1 */
    padding: 0; /* 2 */
}

/*
 * 1. Addresses `appearance` set to `searchfield` in Safari 5 and Chrome.
 * 2. Addresses `box-sizing` set to `border-box` in Safari 5 and Chrome
 *    (include `-moz` to future-proof).
 */

input[type="search"] {
    -webkit-appearance: textfield; /* 1 */
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box; /* 2 */
    box-sizing: content-box;
}

/*
 * Removes inner padding and search cancel button in Safari 5 and Chrome
 * on OS X.
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/*
 * Removes inner padding and border in Firefox 4+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/*
 * 1. Removes default vertical scrollbar in IE 8/9.
 * 2. Improves readability and alignment in all browsers.
 */

textarea {
    overflow: auto; /* 1 */
    vertical-align: top; /* 2 */
}

/* ==========================================================================
   Tables
   ========================================================================== */

/*
 * Remove most spacing between table cells.
 */

table {
    border-collapse: collapse;
    border-spacing: 0;
}
</style>
        <style media="" data-href="../selectjohan/css/style.css">html{
    margin: 0;
    padding: 0;
    width: 100%;
}

body{
    color:#bbb;
    font-family: 'Roboto Condensed', sans-serif;
    font-size:12px;
    height: 100%;
    margin: 0;
    padding: 0;
    width: 100%    
}

img {
    border: none;
}

a:link, a:visited{    
    color:#333;
    text-decoration:none;
}

a:hover{
    color: #00A599;
}


h1, h2, h3, h4{
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 500;
    margin: 0;
    padding: 0;
}

header{
    moz-box-shadow: 0 0 5px 0 #eee inset;
    -webkit-box-shadow: 0 0 5px 0 #EEE inset;
    height: 40px;
    background: #F8F8F8;
    background: -moz-linear-gradient(top,rgba(248, 248, 248, 1) 0,rgba(232, 232, 232, 1) 100%);
    background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(248, 248, 248, 1)),color-stop(100%,rgba(232, 232, 232, 1)));
    background: -webkit-linear-gradient(top,rgba(248, 248, 248, 1) 0,rgba(232, 232, 232, 1) 100%);
    background: -o-linear-gradient(top,rgba(248, 248, 248, 1) 0,rgba(232, 232, 232, 1) 100%);
    background: -ms-linear-gradient(top,rgba(248, 248, 248, 1) 0,rgba(232, 232, 232, 1) 100%);
    background: linear-gradient(to bottom,rgba(248, 248, 248, 1) 0,rgba(232, 232, 232, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8',endColorstr='#e8e8e8',GradientType=0);
    position: relative;
}


#header_logo{
    background: url('logo_header.png') no-repeat;
    height: 25px;
    left: 10px;
    position: absolute;
    top: 10px;
    width: 126px
}

#header_opciones{
    height: 40px;
    right: 0px;
    position: absolute;
    top: 0px;
}


#header_opciones ul{
    list-style: none;
    margin: 0;
    padding: 0;
}

#header_opciones ul li{
    border-right: 1px solid #CDCDCD;
    border-left: 1px solid #FFF;
    float: left;
    height: 100%;
    margin: 0;
    padding: 8px;
    vertical-align: top;
}

#header_opciones ul li span{
    color: #003366;
}

/****************************************** ICONOS HEADER ****************************************/

.header_icono {
    background-image: url('options.png');
    background-color: transparent;
    background-repeat: no-repeat;
    display: block
}

#icono_mensaje  { background-position:   -0px; height: 24px; width: 24px }
#icono_busqueda { background-position: -24px -0px; height: 24px; width: 24px; }
#icono_configuracion   { background-position: -48px -0px; height: 24px; width: 24px; }
#icono_salir   { background-position: -72px -0px; height: 24px; width: 24px; }

/**************************************   FIN ICONOS HEADER  ****************************************/

/****************************************** INTERFAZ LOGIN ****************************************/

#header_login{
    height: 50px;
}

#header_login #header_logo{
    background: url('innmilk.png') no-repeat;
    height: 40px;
    left: 10px;
    top: 5px;
    width: 182px
}

.login {
    margin: 10% auto;
    width: 300px;
}

.login h3{
    margin-bottom: 0px;
    padding-bottom: 0px;
    text-align: center;

}

.login_content {
    
    border-radius: 2px;
    display: inline-block;
    padding: 10px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    vertical-align: top;
    width: 300px;
    height: 250px;
}

.login_content a{
    display: block;
    margin: 0 auto;
    text-align: right;    
    width: 80%;        
}

.login_logo{
    background: url('logo_header.png') no-repeat;
    height: 25px;
    width: 126px
}

.reenviar_clave{
    background: #ECEDED;
    border-radius: 2px;
    display: inline-block;
    padding: 10px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    vertical-align: top;
    width: 100%;
    height: 230px;
}

.reenviar_clave form{
    margin: 0 0 5px;
    padding-top: 5px;
}

/****************************************  END INTERFAZ LOGIN  **************************************/


/******************************************  MENU PRINCIPAL  ****************************************/
#menu_modulos{
    margin:10px 0px;
    overflow:hidden;
    text-align:center;
    width:100%;
}

#menu_modulos ul li{
    background:#f8f8f8;
    background:-moz-linear-gradient(top,rgba(248,248,248,1) 0,rgba(232,232,232,1) 100%);
    background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(248,248,248,1)),color-stop(100%,rgba(232,232,232,1)));
    background:-webkit-linear-gradient(top,rgba(248,248,248,1) 0,rgba(232,232,232,1) 100%);
    background:-o-linear-gradient(top,rgba(248,248,248,1) 0,rgba(232,232,232,1) 100%);
    background:-ms-linear-gradient(top,rgba(248,248,248,1) 0,rgba(232,232,232,1) 100%);
    background:linear-gradient(to bottom,rgba(248,248,248,1) 0,rgba(232,232,232,1) 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8',endColorstr='#e8e8e8',GradientType=0);
    border-radius:2px;-moz-border-radius:2px;
    -webkit-border-radius:2px;
    box-shadow:0 -2px 5px 0 #fff inset;
    -moz-box-shadow:0 -2px 5px 0 #fff inset;
    -webkit-box-shadow:0 -2px 5px 0 #fff inset;
    display:inline-block;
    margin:0 5px;
    position:relative;
    vertical-align:middle;   
    -webkit-transform:scale(1); /*Webkit: Scale down image to 0.8x original size*/
    -moz-transform:scale(1); /*Mozilla scale version*/
    -o-transform:scale(1); /*Opera scale version*/
    -webkit-transition-duration: 0.5s; /*Webkit: Animation duration*/
    -moz-transition-duration: 0.5s; /*Mozilla duration version*/
    -o-transition-duration: 0.5s; /*Opera duration version*/
}



#menu_modulos ul li:hover{
    background:#fff;
    background:-moz-radial-gradient(center,ellipse cover,#fff 0,#e8e8e8 100%);
    background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,#fff),color-stop(100%,#e8e8e8));
    background:-webkit-radial-gradient(center,ellipse cover,#fff 0,#e8e8e8 100%);
    background:-o-radial-gradient(center,ellipse cover,#fff 0,#e8e8e8 100%);
    background:-ms-radial-gradient(center,ellipse cover,#fff 0,#e8e8e8 100%);
    background:radial-gradient(ellipse at center,#fff 0,#e8e8e8 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#e8e8e8',GradientType=1);
    -webkit-transform:scale(1.2); /*Webkit: Scale up image to 1.2x original size*/
    -moz-transform:scale(1.2); /*Mozilla scale version*/
    -o-transform:scale(1.2); /*Opera scale version*/
}

#menu_modulos ul li a{
    color:#555;
    display:block;
    min-height:50px;
    min-width:100px;
    padding:10px 15px;
    white-space:nowrap; 
}

#menu_modulos ul li a:hover{
    text-decoration:none
}

#menu_modulos ul li a span{
    display:block;
    min-width:100px;
    position:absolute;
    bottom:10px;
}

/****************************************  END MENU PRINCIPAL  ****************************************/

/****************************************  INTERFAZ PRINCIPAL  ****************************************/

#contenedor, #subcontenedor{
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    color: #333;
    display: inline-block;  
    margin: 0 2%;
    min-height:500px;
    width: 96%;
}

#menu_contenedor{
    display:inline-block;
    margin: 0;
    margin-right: -4px;
    vertical-align: top;
    width:15%;  
    z-index:10;
}

#menu_contenedor ul{
    margin:0;
    padding:0
}

#menu_contenedor ul li{
    background:-moz-linear-gradient(left,rgba(191,191,191,1) 95%,rgba(194,194,194,0.6) 100%);
    background:-webkit-gradient(linear,left top,right top,color-stop(95%,rgba(191,191,191,1)),color-stop(100%,rgba(194,194,194,0.6)));
    background:-webkit-linear-gradient(left,rgba(191,191,191,1) 95%,rgba(194,194,194,0.6) 100%);
    background:-o-linear-gradient(left,rgba(191,191,191,1) 95%,rgba(194,194,194,0.6) 100%);
    background:-ms-linear-gradient(left,rgba(191,191,191,1) 95%,rgba(194,194,194,0.6) 100%);
    background:linear-gradient(to right,rgba(191,191,191,1) 95%,rgba(194,194,194,0.6) 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bfbfbf',endColorstr='#99c2c2c2',GradientType=1);
    border-top-right-radius:0;
    border-top-left-radius:2px;
    border-bottom-right-radius:0;
    border-bottom-left-radius:2px;
    -moz-border-radius:2px 0 0 2px;
    -webkit-border-radius:2px 0 0 2px;
    display:block;
    list-style:none;
    margin-bottom: 5px;
    padding:10px;
}

#menu_contenedor ul li:hover{
    background:#eceded
}

#menu_contenedor ul li.active{
    background:#eceded;
    border-radius:3px 0 0 3px;
    -moz-border-radius:3px 0 0 3px;
    -webkit-border-radius:3px 0 0 3px;
}

#menu_contenedor ul li a{
    display:block;
    padding:10px 0;
    text-decoration:none;color:#555;
}

#menu_contenedor ul li a:hover{
    color:#000;
    text-decoration:none;
    transition:color .5s ease-out 0s;
}

#menu_contenedor ul li a h2{
    display:block;
    font-size:18px;
    padding-left:50px;
    text-shadow:0 1px 0 #fff;
}

#menu_contenedor ul li a span{
    display:block;
    font-size:12px;
    padding-left:50px;
    text-shadow:0 1px 0 #fff;
}

#subcontenedor{
    background:#ededed;
    margin: 0;
    margin-right: -4px;
    vertical-align: top;
    width: 100%;
}

#subcontenedor div.contenido{
    padding: 2%;
    padding-bottom: 0;
    position: relative;
    width: 100%;
}

#subcontenedor hr{
    background: #CCC;
    border: none;
    height: 1px;
    width: 100%;
}

#menu_subcontenedor{
    margin:10px 0px;
    width:100%;
}

#menu_subcontenedor ul{
    margin: 0;
    padding: 0;
}

#menu_subcontenedor ul li{
    border-left:0.1) solid; border-right:0 solid; border-top:1px solid rgba(0; border-bottom:1px solid #b3b3b3; display: inline-block;
    padding: 4px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    color: #333;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255,255,255,0.75);
    vertical-align: top;
    cursor: pointer;
    background-color: #f5f5f5;
    background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
    background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
    background-image: -o-linear-gradient(top,#fff,#e6e6e6);
    background-image: url('../selectjohan/linear-gradient(to%20bottom,#fff,#e6e6e6');
    background-repeat: repeat-x;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe6e6e6',GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05)
}

#menu_subcontenedor ul li:hover{
    text-decoration: none;
    background: #e6e6e6;
}

#menu_subcontenedor ul li.active{
    background: #e6e6e6 !important;
    text-shadow: none;
}

#menu_subcontenedor ul li a{
    border-radius: 2px;
    color: #555;
    display: block;
    height: 24px;
    min-height: 34px;
    padding: 2px 5px;
    position: relative;
}

#menu_subcontenedor ul li a:hover{
    text-decoration: none;
}

#menu_subcontenedor ul li a span{
    font-size: 12px;
    min-width: 68px; 
}

#menu_subcontenedor ul li a img{
    margin: 5px 5px 0px 0px;
}

footer{
    display: block;
    padding: 20px 0;
    text-align: center;
    width: 100%;
}

footer a:link, footer a:visited{
    color:#CCC;
}

footer a:hover{
    color:#00A599;
}</style> 
        <style media="" data-href="form.css">select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    background-color: #F8F8F8;
    border: 1px solid #D7D7D7;
    box-shadow: 0 1px 0 white;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    display: block;
    height: 18px;
    line-height: 18px;
    padding: 4px;
    width: 96%;
}

select{
    height: 26px;
    width: 98%;
}

input[type="submit"], input[type="button"]{
    color: #FFF;
    background-color: #00CCBD;
    background-image: -ms-linear-gradient(top,#00CCBD,#00A599);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#00CCBD),to(#00A599));
    background-image: -webkit-linear-gradient(top,#00CCBD,#00A599);
    background-image: -o-linear-gradient(top,#00CCBD,#00A599);
    background-image: -moz-linear-gradient(top,#00CCBD,#00A599);
    background-image: url('../selectjohan/linear-gradient(top,#00CCBD,#00A599');
    background-repeat: repeat-x;
    filter: progid:dximagetransform.microsoft.gradient(startColorstr='#00CCBD',endColorstr='#00A599',GradientType=0);
    filter: progid:dximagetransform.microsoft.gradient(enabled=false);
    border: 1px solid #D7D7D7;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    display: block;
    height: 30px;
    line-height: 18px;
    max-width: 80px;
    margin: 0 auto;
    width: 100%   
}

input[type="submit"]:hover, input[type="button"]:hover{
    background: #00A599;
}

input[type="submit"].registrate{
    color: #FFF;
    background-color: #00CCBD;
    background-image: -ms-linear-gradient(top,#00CCBD,#00A599);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#00CCBD),to(#00A599));
    background-image: -webkit-linear-gradient(top,#00CCBD,#00A599);
    background-image: -o-linear-gradient(top,#00CCBD,#00A599);
    background-image: -moz-linear-gradient(top,#00CCBD,#00A599);
    background-image: url('../selectjohan/linear-gradient(top,#00CCBD,#00A599');
    background-repeat: repeat-x;
    filter: progid:dximagetransform.microsoft.gradient(startColorstr='#00CCBD',endColorstr='#00A599',GradientType=0);
    filter: progid:dximagetransform.microsoft.gradient(enabled=false);
    border: 1px solid #D7D7D7;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    display: block;
    height: 30px;
    line-height: 18px;
    width: 100%
}

input[type="submit"].registrate:hover{
    background: #00A599;
}

.lista_acciones{
    min-height: 40px;
    margin-bottom: 10px;
    position: relative;
    width: 100%;    
}

#subcontenedor form{
    margin: 10px auto;
    padding: 0 10%;
    width: 80%;
}

#subcontenedor  table{
    border: 1px solid #D7D7D7;
    width: 100%;
}

#subcontenedor table tr td {
    background: #f5f5f5;
    border-bottom: 1px solid #D7D7D7;
    padding: 10px;
}

#subcontenedor table tr th{
    background: #f5f5f5;
    border-bottom: 1px solid #D7D7D7;
    font-size: 13px;
    font-weight: normal;
    line-height: 18px;
    padding: 10px;
    text-align: left;
}

#subcontenedor table tr th span{
    color: #00A599;
    font-size: 14px;
    font-weight: 400;
}

#login form{
    margin: 30px auto;
    padding: 0 10%;
    width: 80%; 
}

.dato_alterno{
    background: #f5f5f5;
}

.formTitle, .formResult{
    /*border-bottom: 4px solid #00A599 !important;*/
    color: #FFF !important;
    font-size: 15px !important;
    font-weight: 400 !important;
    position: relative !important;
    text-shadow: 0 1px #FFFFFF;
    height: 20px ;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    background: #003366 !important;
    /*background: -moz-linear-gradient(top, rgba(0,204,189,1) 0%, rgba(0,165,153,1) 100%) !important;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,204,189,1)), color-stop(100%,rgba(0,165,153,1))) !important;
    background: -webkit-linear-gradient(top, rgba(0,204,189,1) 0%,rgba(0,165,153,1) 100%) !important;
    background: -o-linear-gradient(top, rgba(0,204,189,1) 0%,rgba(0,165,153,1) 100%) !important;
    background: -ms-linear-gradient(top, rgba(0,204,189,1) 0%,rgba(0,165,153,1) 100%) !important;
    background: linear-gradient(to bottom, rgba(0,204,189,1) 0%,rgba(0,165,153,1) 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00CCBD', endColorstr='#e8e8e8',GradientType=0 ) !important;*/
}

.formResult{
    background: #999999 !important; 
    text-shadow: none;
}

.btnLista{
    border-left:1px solid #e6e6e6; border-right:1px solid #e6e6e6; border-top:1px solid #e6e6e6; border-bottom:1px solid #b3b3b3; background-color: #f5f5f5;
    background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
    background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: linear-gradient(top, #ffffff, #e6e6e6);
    background-image: url('../selectjohan/-moz-linear-gradient(top,%20#ffffff, #e6e6e6');
    background-repeat: repeat-x;
    filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
    filter: progid:dximagetransform.microsoft.gradient(enabled=false);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    color: #333333 !important;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    line-height: 18px;
    margin-bottom: 10px;
    padding: 5px;  
    position: relative;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;   
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    z-index: 1
}

.btnLista:hover{
    color: #00A599 !important;
    text-decoration: none;
    background-color: #e6e6e6;
    background-position: 0 -15px;
    -webkit-transition: background-position 0.1s linear;
    -moz-transition: background-position 0.1s linear;
    -ms-transition: background-position 0.1s linear;
    -o-transition: background-position 0.1s linear;
    transition: background-position 0.1s linear;
}

td .btnLista{
    margin: 0px;
}

.paginador{
    display: inline-block;
    height: 50px;
    margin: 10px 0;
    position: relative;    
    width: 100%;
}

.paginador ul{
    display: block;
    height: 50px;
    margin: 0;
    padding: 0;    
    position: absolute;
    right: 0px;
    top: 0px;
    width: auto;
}

.paginador ul li{
    display: inline-block;
    list-style: none;
    margin: 0;
    padding: 0;    
}

.paginador .active a{
    background: #00A599 !important;
    color: #FFF !important;    
}

form div input[type="submit"]{
    width: 20%;
}

#form_busqueda{
    margin: 0 !important;
    padding: 0 !important;
    position: absolute;
    right: 0px;
    text-align: right;
    top: 0px;
    width: 100%!important;
    z-index: 0;
}

#form_busqueda input{
    display: inline-block !important;
}

#form_busqueda input[type="text"]{
    width: 150px;
}

#form_busqueda select{
    display: inline-block !important;
    width: 150px;
}

#login input, #login input[type="submit"]{
    max-width: 100% !important;
    margin: 10px auto;
}

#login input[type="submit"]{
    border: none;
}

#login input[type="text"],#login input[type="password"]{
    height: 25px;
}

#tabRutas tr th{
    width: 30%;
}

#tabRutas tr th:last-child, #tabRutas tr th:first-child{
    width: 20%;
}

#tabCertificacion tr th{
    width: 20%;
}

#stats {
    padding: 0 !important;
    width: 100% !important;
}

#stats span{
    color: #00A599;
    font-size: 14px;
    font-weight: 400;
}

#statsData{
    display: inline-block;
    vertical-align: top;
    width:25%;
    max-width: 250px;
}

#statsDate{
    display: inline-block;
    vertical-align: top;
    width: 70%
}</style>
        <style media="" data-href="reveal.css">/*	--------------------------------------------------
        Reveal Modals
        -------------------------------------------------- */

.reveal-modal-bg { 
    position: fixed; 
    height: 100%;
    width: 100%;
    background: #000;
    background: rgba(0,0,0,.8);
    z-index: 100;
    display: none;
    top: 0;
    left: 0; 
}

.reveal-modal {
    color: #333;
    visibility: hidden;
    top: 100px; 
    left: 50%;
    margin-left: -300px;
    width: 520px;
    background: #eee url('modal-gloss.png') no-repeat -200px -80px;
    position: absolute;
    z-index: 101;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 0 10px rgba(0,0,0,.4);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);
    -box-shadow: 0 0 10px rgba(0,0,0,.4); padding-left:40px; padding-right:40px; padding-top:30px; padding-bottom:34px
}

.reveal-modal h1{color:#00A599;}

.reveal-modal.small 		{ width: 200px; margin-left: -140px;}
.reveal-modal.medium 		{ width: 400px; margin-left: -240px;}
.reveal-modal.large 		{ width: 600px; margin-left: -340px;}
.reveal-modal.xlarge 		{ width: 800px; margin-left: -440px;}

.reveal-modal .close-reveal-modal {
    font-size: 22px;
    line-height: .5;
    position: absolute;
    top: 8px;
    right: 11px;
    color: #aaa;
    text-shadow: 0 -1px 1px rbga(0,0,0,.6);
    font-weight: bold;
    cursor: pointer;
} 
/*
        
NOTES

Close button entity is &#215;

Example markup

<div id="myModal" class="reveal-modal">
        <h2>Awesome. I have it.</h2>
        <p class="lead">Your couch.  I it's mine.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices aliquet placerat. Duis pulvinar orci et nisi euismod vitae tempus lorem consectetur. Duis at magna quis turpis mattis venenatis eget id diam. </p>
        <a class="close-reveal-modal">&#215;</a>
</div>

*/
</style>
        <style media="" data-href="jquery-ui-1.10.2.custom.css">/*! jQuery UI - v1.10.2 - 2013-04-26
* http://jqueryui.com
* Includes: jquery.ui.core.css, jquery.ui.resizable.css, jquery.ui.selectable.css, jquery.ui.accordion.css, jquery.ui.autocomplete.css, jquery.ui.button.css, jquery.ui.datepicker.css, jquery.ui.dialog.css, jquery.ui.menu.css, jquery.ui.progressbar.css, jquery.ui.slider.css, jquery.ui.spinner.css, jquery.ui.tabs.css, jquery.ui.tooltip.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Trebuchet%20MS%2CTahoma%2CVerdana%2CArial%2Csans-serif&fwDefault=bold&fsDefault=1.1em&cornerRadius=4px&bgColorHeader=%23FFAA00&bgTextureHeader=gloss_wave&bgImgOpacityHeader=35&borderColorHeader=%23FF8600&fcHeader=%23ffffff&iconColorHeader=%23ffffff&bgColorContent=%23eeeeee&bgTextureContent=highlight_soft&bgImgOpacityContent=100&borderColorContent=%23dddddd&fcContent=%23333333&iconColorContent=%23222222&bgColorDefault=%23f6f6f6&bgTextureDefault=glass&bgImgOpacityDefault=100&borderColorDefault=%23cccccc&fcDefault=%2300A599&iconColorDefault=%23FFAA00&bgColorHover=%23fdf5ce&bgTextureHover=glass&bgImgOpacityHover=100&borderColorHover=%23fbcb09&fcHover=%23c77405&iconColorHover=%23ef8c08&bgColorActive=%23ffffff&bgTextureActive=glass&bgImgOpacityActive=65&borderColorActive=%23fbd850&fcActive=%23eb8f00&iconColorActive=%23ef8c08&bgColorHighlight=%23ffe45c&bgTextureHighlight=highlight_soft&bgImgOpacityHighlight=75&borderColorHighlight=%23fed22f&fcHighlight=%23363636&iconColorHighlight=%23228ef1&bgColorError=%23b81900&bgTextureError=diagonals_thick&bgImgOpacityError=18&borderColorError=%23cd0a0a&fcError=%23ffffff&iconColorError=%23ffd27a&bgColorOverlay=%23666666&bgTextureOverlay=diagonals_thick&bgImgOpacityOverlay=20&opacityOverlay=50&bgColorShadow=%23000000&bgTextureShadow=flat&bgImgOpacityShadow=10&opacityShadow=20&thicknessShadow=5px&offsetTopShadow=-5px&offsetLeftShadow=-5px&cornerRadiusShadow=5px
* Copyright 2013 jQuery Foundation and other contributors Licensed MIT */

/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
	display: none;
}
.ui-helper-hidden-accessible {
	border: 0;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}
.ui-helper-reset {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	line-height: 1.3;
	text-decoration: none;
	font-size: 100%;
	list-style: none;
}
.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
	content: "";
	display: table;
	border-collapse: collapse;
}
.ui-helper-clearfix:after {
	clear: both;
}
.ui-helper-clearfix {
	min-height: 0; /* support: IE7 */
}
.ui-helper-zfix {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: absolute;
	opacity: 0;
	filter:Alpha(Opacity=0);
}

.ui-front {
	z-index: 100;
}


/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
	cursor: default !important;
}


/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	display: block;
	text-indent: -99999px;
	overflow: hidden;
	background-repeat: no-repeat;
}


/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.ui-resizable {
	position: relative;
}
.ui-resizable-handle {
	position: absolute;
	font-size: 0.1px;
	display: block;
}
.ui-resizable-disabled .ui-resizable-handle,
.ui-resizable-autohide .ui-resizable-handle {
	display: none;
}
.ui-resizable-n {
	cursor: n-resize;
	height: 7px;
	width: 100%;
	top: -5px;
	left: 0;
}
.ui-resizable-s {
	cursor: s-resize;
	height: 7px;
	width: 100%;
	bottom: -5px;
	left: 0;
}
.ui-resizable-e {
	cursor: e-resize;
	width: 7px;
	right: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-w {
	cursor: w-resize;
	width: 7px;
	left: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-se {
	cursor: se-resize;
	width: 12px;
	height: 12px;
	right: 1px;
	bottom: 1px;
}
.ui-resizable-sw {
	cursor: sw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	bottom: -5px;
}
.ui-resizable-nw {
	cursor: nw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	top: -5px;
}
.ui-resizable-ne {
	cursor: ne-resize;
	width: 9px;
	height: 9px;
	right: -5px;
	top: -5px;
}
.ui-selectable-helper {
	position: absolute;
	z-index: 100;
	border: 1px dotted black;
}
.ui-accordion .ui-accordion-header {
	display: block;
	cursor: pointer;
	position: relative;
	margin-top: 2px;
	padding: .5em .5em .5em .7em;
	min-height: 0; /* support: IE7 */
}
.ui-accordion .ui-accordion-icons {
	padding-left: 2.2em;
}
.ui-accordion .ui-accordion-noicons {
	padding-left: .7em;
}
.ui-accordion .ui-accordion-icons .ui-accordion-icons {
	padding-left: 2.2em;
}
.ui-accordion .ui-accordion-header .ui-accordion-header-icon {
	position: absolute;
	left: .5em;
	top: 50%;
	margin-top: -8px;
}
.ui-accordion .ui-accordion-content {
	padding: 1em 2.2em;
	border-top: 0;
	overflow: auto;
}
.ui-autocomplete {
	position: absolute;
	top: 0;
	left: 0;
	cursor: default;
}
.ui-button {
	display: inline-block;
	position: relative;
	padding: 0;
	line-height: normal;
	margin-right: .1em;
	cursor: pointer;
	vertical-align: middle;
	text-align: center;
	overflow: visible; /* removes extra width in IE */
}
.ui-button,
.ui-button:link,
.ui-button:visited,
.ui-button:hover,
.ui-button:active {
	text-decoration: none;
}
/* to make room for the icon, a width needs to be set here */
.ui-button-icon-only {
	width: 2.2em;
}
/* button elements seem to need a little more width */
button.ui-button-icon-only {
	width: 2.4em;
}
.ui-button-icons-only {
	width: 3.4em;
}
button.ui-button-icons-only {
	width: 3.7em;
}

/* button text element */
.ui-button .ui-button-text {
	display: block;
	line-height: normal;
}
.ui-button-text-only .ui-button-text {
	padding: .4em 1em;
}
.ui-button-icon-only .ui-button-text,
.ui-button-icons-only .ui-button-text {
	padding: .4em;
	text-indent: -9999999px;
}
.ui-button-text-icon-primary .ui-button-text,
.ui-button-text-icons .ui-button-text {
	padding: .4em 1em .4em 2.1em;
}
.ui-button-text-icon-secondary .ui-button-text,
.ui-button-text-icons .ui-button-text {
	padding: .4em 2.1em .4em 1em;
}
.ui-button-text-icons .ui-button-text {
	padding-left: 2.1em;
	padding-right: 2.1em;
}
/* no icon support for input elements, provide padding by default */
input.ui-button {
	padding: .4em 1em;
}

/* button icon element(s) */
.ui-button-icon-only .ui-icon,
.ui-button-text-icon-primary .ui-icon,
.ui-button-text-icon-secondary .ui-icon,
.ui-button-text-icons .ui-icon,
.ui-button-icons-only .ui-icon {
	position: absolute;
	top: 50%;
	margin-top: -8px;
}
.ui-button-icon-only .ui-icon {
	left: 50%;
	margin-left: -8px;
}
.ui-button-text-icon-primary .ui-button-icon-primary,
.ui-button-text-icons .ui-button-icon-primary,
.ui-button-icons-only .ui-button-icon-primary {
	left: .5em;
}
.ui-button-text-icon-secondary .ui-button-icon-secondary,
.ui-button-text-icons .ui-button-icon-secondary,
.ui-button-icons-only .ui-button-icon-secondary {
	right: .5em;
}

/* button sets */
.ui-buttonset {
	margin-right: 7px;
}
.ui-buttonset .ui-button {
	margin-left: 0;
	margin-right: -.3em;
}

/* workarounds */
/* reset extra padding in Firefox, see h5bp.com/l */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
	border: 0;
	padding: 0;
}
.ui-datepicker {
	width: 17em;
	padding: .2em .2em 0;
	display: none;
}
.ui-datepicker .ui-datepicker-header {
	position: relative;
	padding: .2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
	position: absolute;
	top: 2px;
	width: 1.8em;
	height: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
	top: 1px;
}
.ui-datepicker .ui-datepicker-prev {
	left: 2px;
}
.ui-datepicker .ui-datepicker-next {
	right: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
	left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
	right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
	display: block;
	position: absolute;
	left: 50%;
	margin-left: -8px;
	top: 50%;
	margin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
	margin: 0 2.3em;
	line-height: 1.8em;
	text-align: center;
}
.ui-datepicker .ui-datepicker-title select {
	font-size: 1em;
	margin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month-year {
	width: 100%;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
	width: 49%;
}
.ui-datepicker table {
	width: 100%;
	font-size: .9em;
	border-collapse: collapse;
	margin: 0 0 .4em;
}
.ui-datepicker th {
	padding: .7em .3em;
	text-align: center;
	font-weight: bold;
	border: 0;
}
.ui-datepicker td {
	border: 0;
	padding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
	display: block;
	padding: .2em;
	text-align: right;
	text-decoration: none;
}
.ui-datepicker .ui-datepicker-buttonpane {
	background-image: none;
	margin: .7em 0 0 0;
	padding: 0 .2em;
	border-left: 0;
	border-right: 0;
	border-bottom: 0;
}
.ui-datepicker .ui-datepicker-buttonpane button {
	float: right;
	margin: .5em .2em .4em;
	cursor: pointer;
	padding: .2em .6em .3em .6em;
	width: auto;
	overflow: visible;
}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
	float: left;
}

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi {
	width: auto;
}
.ui-datepicker-multi .ui-datepicker-group {
	float: left;
}
.ui-datepicker-multi .ui-datepicker-group table {
	width: 95%;
	margin: 0 auto .4em;
}
.ui-datepicker-multi-2 .ui-datepicker-group {
	width: 50%;
}
.ui-datepicker-multi-3 .ui-datepicker-group {
	width: 33.3%;
}
.ui-datepicker-multi-4 .ui-datepicker-group {
	width: 25%;
}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
	border-left-width: 0;
}
.ui-datepicker-multi .ui-datepicker-buttonpane {
	clear: left;
}
.ui-datepicker-row-break {
	clear: both;
	width: 100%;
	font-size: 0;
}

/* RTL support */
.ui-datepicker-rtl {
	direction: rtl;
}
.ui-datepicker-rtl .ui-datepicker-prev {
	right: 2px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next {
	left: 2px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-prev:hover {
	right: 1px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next:hover {
	left: 1px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane {
	clear: right;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button {
	float: left;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
	float: right;
}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
	border-right-width: 0;
	border-left-width: 1px;
}
.ui-dialog {
	position: absolute;
	top: 0;
	left: 0;
	padding: .2em;
	outline: 0;
}
.ui-dialog .ui-dialog-titlebar {
	padding: .4em 1em;
	position: relative;
}
.ui-dialog .ui-dialog-title {
	float: left;
	margin: .1em 0;
	white-space: nowrap;
	width: 90%;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
	position: absolute;
	right: .3em;
	top: 50%;
	width: 21px;
	margin: -10px 0 0 0;
	padding: 1px;
	height: 20px;
}
.ui-dialog .ui-dialog-content {
	position: relative;
	border: 0;
	padding: .5em 1em;
	background: none;
	overflow: auto;
}
.ui-dialog .ui-dialog-buttonpane {
	text-align: left;
	border-width: 1px 0 0 0;
	background-image: none;
	margin-top: .5em;
	padding: .3em 1em .5em .4em;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
	float: right;
}
.ui-dialog .ui-dialog-buttonpane button {
	margin: .5em .4em .5em 0;
	cursor: pointer;
}
.ui-dialog .ui-resizable-se {
	width: 12px;
	height: 12px;
	right: -5px;
	bottom: -5px;
	background-position: 16px 16px;
}
.ui-draggable .ui-dialog-titlebar {
	cursor: move;
}
.ui-menu {
	list-style: none;
	padding: 2px;
	margin: 0;
	display: block;
	outline: none;
}
.ui-menu .ui-menu {
	margin-top: -3px;
	position: absolute;
}
.ui-menu .ui-menu-item {
	margin: 0;
	padding: 0;
	width: 100%;
}
.ui-menu .ui-menu-divider {
	margin: 5px -2px 5px -2px;
	height: 0;
	font-size: 0;
	line-height: 0;
	border-width: 1px 0 0 0;
}
.ui-menu .ui-menu-item a {
	text-decoration: none;
	display: block;
	padding: 2px .4em;
	line-height: 1.5;
	min-height: 0; /* support: IE7 */
	font-weight: normal;
}
.ui-menu .ui-menu-item a.ui-state-focus,
.ui-menu .ui-menu-item a.ui-state-active {
	font-weight: normal;
	margin: -1px;
}

.ui-menu .ui-state-disabled {
	font-weight: normal;
	margin: .4em 0 .2em;
	line-height: 1.5;
}
.ui-menu .ui-state-disabled a {
	cursor: default;
}

/* icon support */
.ui-menu-icons {
	position: relative;
}
.ui-menu-icons .ui-menu-item a {
	position: relative;
	padding-left: 2em;
}

/* left-aligned */
.ui-menu .ui-icon {
	position: absolute;
	top: .2em;
	left: .2em;
}

/* right-aligned */
.ui-menu .ui-menu-icon {
	position: static;
	float: right;
}
.ui-progressbar {
	height: 2em;
	text-align: left;
	overflow: hidden;
}
.ui-progressbar .ui-progressbar-value {
	margin: -1px;
	height: 100%;
}
.ui-progressbar .ui-progressbar-overlay {
	background: url('animated-overlay.gif');
	height: 100%;
	filter: alpha(opacity=25);
	opacity: 0.25
}
.ui-progressbar-indeterminate .ui-progressbar-value {
	background-image: none;
}
.ui-slider {
	position: relative;
	text-align: left;
}
.ui-slider .ui-slider-handle {
	position: absolute;
	z-index: 2;
	width: 1.2em;
	height: 1.2em;
	cursor: default;
}
.ui-slider .ui-slider-range {
	position: absolute;
	z-index: 1;
	font-size: .7em;
	display: block;
	border: 0;
	background-position: 0 0;
}

/* For IE8 - See #6727 */
.ui-slider.ui-state-disabled .ui-slider-handle,
.ui-slider.ui-state-disabled .ui-slider-range {
	filter: inherit;
}

.ui-slider-horizontal {
	height: .8em;
}
.ui-slider-horizontal .ui-slider-handle {
	top: -.3em;
	margin-left: -.6em;
}
.ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}
.ui-slider-horizontal .ui-slider-range-min {
	left: 0;
}
.ui-slider-horizontal .ui-slider-range-max {
	right: 0;
}

.ui-slider-vertical {
	width: .8em;
	height: 100px;
}
.ui-slider-vertical .ui-slider-handle {
	left: -.3em;
	margin-left: 0;
	margin-bottom: -.6em;
}
.ui-slider-vertical .ui-slider-range {
	left: 0;
	width: 100%;
}
.ui-slider-vertical .ui-slider-range-min {
	bottom: 0;
}
.ui-slider-vertical .ui-slider-range-max {
	top: 0;
}
.ui-spinner {
	position: relative;
	display: inline-block;
	overflow: hidden;
	padding: 0;
	vertical-align: middle;
}
.ui-spinner-input {
	border: none;
	background: none;
	color: inherit;
	padding: 0;
	margin: .2em 0;
	vertical-align: middle;
	margin-left: .4em;
	margin-right: 22px;
}
.ui-spinner-button {
	width: 16px;
	height: 50%;
	font-size: .5em;
	padding: 0;
	margin: 0;
	text-align: center;
	position: absolute;
	cursor: default;
	display: block;
	overflow: hidden;
	right: 0;
}
/* more specificity required here to overide default borders */
.ui-spinner a.ui-spinner-button {
	border-top: none;
	border-bottom: none;
	border-right: none;
}
/* vertical centre icon */
.ui-spinner .ui-icon {
	position: absolute;
	margin-top: -8px;
	top: 50%;
	left: 0;
}
.ui-spinner-up {
	top: 0;
}
.ui-spinner-down {
	bottom: 0;
}

/* TR overrides */
.ui-spinner .ui-icon-triangle-1-s {
	/* need to fix icons sprite */
	background-position: -65px -16px;
}
.ui-tabs {
	position: relative;/* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
	padding: .2em;
}
.ui-tabs .ui-tabs-nav {
	margin: 0;
	padding: .2em .2em 0;
}
.ui-tabs .ui-tabs-nav li {
	list-style: none;
	float: left;
	position: relative;
	top: 0;
	margin: 1px .2em 0 0;
	border-bottom-width: 0;
	padding: 0;
	white-space: nowrap;
}
.ui-tabs .ui-tabs-nav li a {
	float: left;
	padding: .5em 1em;
	text-decoration: none;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
	margin-bottom: -1px;
	padding-bottom: 1px;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active a,
.ui-tabs .ui-tabs-nav li.ui-state-disabled a,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading a {
	cursor: text;
}
.ui-tabs .ui-tabs-nav li a, /* first selector in group seems obsolete, but required to overcome bug in Opera applying cursor: text overall if defined elsewhere... */
.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a {
	cursor: pointer;
}
.ui-tabs .ui-tabs-panel {
	display: block;
	border-width: 0;
	padding: 1em 1.4em;
	background: none;
}
.ui-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
	-webkit-box-shadow: 0 0 5px #aaa;
	box-shadow: 0 0 5px #aaa;
}
body .ui-tooltip {
	border-width: 2px;
}

/* Component containers
----------------------------------*/
.ui-widget {
	font-family: Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;
	font-size: 1.1em;
}
.ui-widget .ui-widget {
	font-size: 1em;
}
.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
	font-family: Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;
	font-size: 1em;
}
.ui-widget-content {
	border: 1px solid #dddddd;
	background: #eeeeee url("http://proalba.com.co/innmilk/js/jquery-ui/css/custom-theme/images/ui-bg_highlight-soft_100_eeeeee_1x100.png") 50% top repeat-x;
	color: #333333;
}
.ui-widget-content a {
	color: #333333;
}
.ui-widget-header {
	border: 1px solid #FF8600;
	background: #FFAA00 url('ui-bg_gloss-wave_35_FFAA00_500x100.png') repeat-x 50% 50%;
	color: #ffffff;
	font-weight: bold
}
.ui-widget-header a {
	color: #ffffff;
}

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
	border: 1px solid #cccccc;
	background: #f6f6f6 url("http://proalba.com.co/innmilk/js/jquery-ui/css/custom-theme/images/ui-bg_glass_100_f6f6f6_1x400.png") 50% 50% repeat-x;
	font-weight: bold;
	color: #00A599;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited {
	color: #00A599;
	text-decoration: none;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
	border: 1px solid #fbcb09;
	background: #fdf5ce url('ui-bg_glass_100_fdf5ce_1x400.png') repeat-x 50% 50%;
	font-weight: bold;
	color: #c77405
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited {
	color: #c77405;
	text-decoration: none;
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	border: 1px solid #fbd850;
	background: #ffffff url('ui-bg_glass_65_ffffff_1x400.png') repeat-x 50% 50%;
	font-weight: bold;
	color: #eb8f00
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #eb8f00;
	text-decoration: none;
}

/* Interaction Cues
----------------------------------*/
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
	border: 1px solid #fed22f;
	background: #ffe45c url('ui-bg_highlight-soft_75_ffe45c_1x100.png') repeat-x 50% top;
	color: #363636
}
.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
	color: #363636;
}
.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
	border: 1px solid #cd0a0a;
	background: #b81900 url('ui-bg_diagonals-thick_18_b81900_40x40.png') 50% 50%;
	color: #ffffff
}
.ui-state-error a,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error a {
	color: #ffffff;
}
.ui-state-error-text,
.ui-widget-content .ui-state-error-text,
.ui-widget-header .ui-state-error-text {
	color: #ffffff;
}
.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
	font-weight: bold;
}
.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
	opacity: .7;
	filter:Alpha(Opacity=70);
	font-weight: normal;
}
.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
	opacity: .35;
	filter:Alpha(Opacity=35);
	background-image: none;
}
.ui-state-disabled .ui-icon {
	filter:Alpha(Opacity=35); /* For IE8 - See #6059 */
}

/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	width: 16px;
	height: 16px;
}
.ui-icon,
.ui-widget-content .ui-icon {
	background-image: url('ui-icons_222222_256x240.png');
}
.ui-widget-header .ui-icon {
	background-image: url('ui-icons_ffffff_256x240.png');
}
.ui-state-default .ui-icon {
	background-image: url('ui-icons_FFAA00_256x240.png');
}
.ui-state-hover .ui-icon,
.ui-state-focus .ui-icon {
	background-image: url('ui-icons_ef8c08_256x240.png');
}
.ui-state-active .ui-icon {
	background-image: url('ui-icons_ef8c08_256x240.png');
}
.ui-state-highlight .ui-icon {
	background-image: url('ui-icons_228ef1_256x240.png');
}
.ui-state-error .ui-icon,
.ui-state-error-text .ui-icon {
	background-image: url('ui-icons_ffd27a_256x240.png');
}

/* positioning */
.ui-icon-blank { background-position: 16px 16px; }
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position:  -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -64px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position:  -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position:  -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position:  -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position:  -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position:  -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position:  -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position:  -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-on { background-position: -96px -144px; }
.ui-icon-radio-off { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position:  -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-start { background-position: -80px -160px; }
/* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position:  -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-all,
.ui-corner-top,
.ui-corner-left,
.ui-corner-tl {
	border-top-left-radius: 4px;
}
.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr {
	border-top-right-radius: 4px;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-left,
.ui-corner-bl {
	border-bottom-left-radius: 4px;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
	border-bottom-right-radius: 4px;
}

/* Overlays */
.ui-widget-overlay {
	opacity: .5;
	filter: Alpha(Opacity=50);
}
.ui-widget-shadow {
	padding: 5px;
	background: #000000 url('ui-bg_flat_10_000000_40x100.png') repeat-x 50% 50%;
	opacity: .2;
	filter: Alpha(Opacity=20);
	border-radius: 5px; margin-left:-5px; margin-right:0; margin-top:-5px; margin-bottom:0
}
</style>

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
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Proalba</title>
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
 </head>
    <body style="">
    
           
        <!-- fin menu modulos -->        
        <section id="contenedor">					
            <div id="subcontenedor">
                <div class="contenido">
                    &nbsp;</div>
                <div class="contenido">
                    
                    <form method="post" action="guardar.php">
			<div id="demo" align="center" >
					
					<table  border="1" >
		<tr>
			<td align=center width="197%" colspan="5">Recepción de Leche</td>
		</tr>
		<tr>
		
			<td align=center> Fecha<br>
		<p align="center"><input type="text"  name="fecha" id="datepicker"value=<?php  if(isset($fechas)){echo $fechas;} else{ echo date('Y-m-d');  }?> required /></td></p>
			<td  align=center>Ruta<p align="center"><div id="demoIzq"><?php generaPaises(); ?></div></td></p>
				
				
			
		

			<td ><div id="demoDer"><br>
				<p align="center"><select disabled="disabled" name="estados" id="estados">
						<option>Seleccionar...</option>
					</select>
					</p>
				</div></td>
			<td align=center >Cantidad<br>
			<p align="center"><input type="number" name="cantidad" size="20" placeholder="Cantidad..." title="Cantidad en Litros" required/></td></p>
			
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
			<td align=center width="110%" >Total Litros<br><p align="center"><?php echo"<b>", $sumatoria;
			echo "</b>";   ?></td></p>
			
		</tr>
		<tr>	<td align=center colspan="5">
		<input type="submit" value="Guardar" name="guardar"></td></tr>
		
	</table>


			
			</div>
			</form>
<?php include('modificar_dia.php'); ?>
			</div>
            </div>
        </section>     
        
        </body></html>