<?php 
#error_reporting(0);
date_default_timezone_set('America/Lima');

#define("PATH", "http://".$_SERVER['SERVER_NAME'].substr(dirname(__FILE__).DIRECTORY_SEPARATOR,strlen($_SERVER['DOCUMENT_ROOT'])));
define("PATH","http://192.168.1.15/dev/haroing/");
define("FOLDER","/dev/haroing/");
define("FOLDER_FILE","/var/www/dev/haroing/upload/articulo_file/");
define("RUTA", dirname(__FILE__).DIRECTORY_SEPARATOR);
define("SERVER","localhost");
define("USER", "root");
define("PASS", "perutec");
define("BD", "haroing_db");
define("FECHA",'Y-m-d');
define("MAX_FILE_SIZE", 5000000);
define("IGV", "18");

$key  = date('Y-m-d').$_SERVER['SERVER_NAME'].FOLDER;
define("KEY",$key);

#CONSTANTES
define("ID", "ID");
define("NOMBRES", "NOMBRES");
define("APELLIDOS", "APELLIDOS");
define("TIPO", "TIPO");





 ?>
