<?php
session_start();
define('RACINE', $_SERVER['REQUEST_URI']);
$error='';



$config=require_once('app/database/config.php');
require_once('app/database/database.php');
require_once('app/database/table.php');
$database= new Database($config);
$dbUser= new Database([
	'host'=>'localhost',
	'dbname'=>'tirelire',
	'username'=>'root',
	'password'=>''
]);

require_once('app/model/links.php');

require_once('app/model/authentify.php');

$link = new links();


require_once('app/form.php');
require_once('app/formFilter.php');


require_once('app/controller/authentifyController.php');