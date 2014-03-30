<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexionpaginaweb = "localhost";
$database_conexionpaginaweb = "paginabd";
$username_conexionpaginaweb = "root";
$password_conexionpaginaweb = "";
$conexionpaginaweb = mysql_pconnect($hostname_conexionpaginaweb, $username_conexionpaginaweb, $password_conexionpaginaweb) or trigger_error(mysql_error(),E_USER_ERROR); 
?>