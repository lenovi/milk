<?php
function conectar()
{
	mysql_connect("gazeta.startlogicmysql.com", "newinnmilk", "SQLnewinnmilk.2013");
	mysql_select_db("proalba");
}

function desconectar()
{
	mysql_close();
}
?>