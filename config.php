<?php
require_once 'messages.php';

define( 'BASE_PATH', 'https://unc3ns0r3dv2.000webhostapp.com/');//Ruta base donde se encuentra
define( 'DB_HOST', 'localhost' );//Servidor de la base de datos
define( 'DB_USERNAME', 'skaryxd');//Usuario de la base de datos
define( 'DB_PASSWORD', 'asd02322');//Contraseña de la base de datos
define( 'DB_NAME', 'unc3ns0r3d');//Nombre de la base de datos

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
