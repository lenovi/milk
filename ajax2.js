// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatosEmpleado(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  nom=document.nuevo_empleado.fecha.value;
  ape=document.nuevo_empleado.paises.value;
  web=document.nuevo_empleado.estados.value;
  oto=document.nuevo_empleado.cantidad.value;


fechahora=document.nuevo_empleado.fechahora.value;
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("fecha="+nom+"&ruta="+ape+"&proveedor="+web+"&cantidad="+oto+"&fechahora="+fechahora)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  //document.nuevo_empleado.nombre.value="";
  //document.nuevo_empleado.apellido.value="";
  document.nuevo_empleado.estados.value="";
  document.nuevo_empleado.cantidad.value="";
  document.nuevo_empleado.estados.focus();
}