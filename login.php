<?php
// Comprobamos si hemos iniciado sesión con anterioridad


	 if ($_SERVER['HTTP_REFERER'] == ""){ 
header("Location: index.php"); 
exit(); 
} 
if (userIsAuth()) {
  echo 'Ueeps, pero ¿queeeé pasa? Si ya has iniciado una sesión. ¿Quieres irte? <a href="logout.php">Sí</a> | <a href="http://disney.com">No</a>';
  exit;
// Comprobamos si hemos recibido algo del formulario de login y que estos datos no sean vacios
} else if ($_POST) {
  if (!empty($_POST['username']) && !empty($_POST['passwd']) ) {
 
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
 
    if ( login($username, $passwd) ) {
      'Enhorabuena ' . htmlentities($username) . '. Te has autenticado correctamente.';
      exit;
    } else {
      echo 'Vaya, no hemos encontrado nada que coincida con este nombre de usuario y contraseña en nuestra base de datos';
    }
 
  } else {
    echo 'Que mal rollo... ¡Tienes que rellenar todos los campos!';
  }
}
 
/*
 * Si no habíamos iniciado sesión o lo hemos intentado pero ha fallado el proceso entonces mostrará el formulario de login.
 * No voy a implementar la función do_html_form_login(), lo podéis hacer vosotros. Es un simple formulario en html.
 */
do_html_form_login();
?>