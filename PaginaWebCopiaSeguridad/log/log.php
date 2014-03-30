
<?php
/**
*
* Archivo de logs de la aplicación web
* @param string $cadena texto a escribir en el log
* @param string $tipo texto que indica el tipo de mensaje. Los 
* valores normales son Info, Error, Warn, Debug, Critical.
*/

function write_log($cadena, $tipo){
	$arch = fopen(realpath('.')."/log_".date("Y-m-d").".txt","a+");
	fwrite($arch, "[".date("Y-m-d H:i:s.u")." - $tipo ] ".$cadena."\n");
	fclose($arch);
}

write_log("Estro es una prueba","Debug");

?>