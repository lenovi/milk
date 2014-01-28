<?php 

$fp = fopen("var.php", "r+");
$var="d11";
fputs($fp, '<?php $var="'.$var.'";');

fclose($fp);

?>