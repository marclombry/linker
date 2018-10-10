<?php

require_once('init.php');
require_once('app/view/connection.view.php');
if(isset($_SESSION['auth'])){
	
}
if(isset($_POST) && !empty($_POST)){AuthentifyController::Connexion();}
if(isset($_GET['deco'])){
	AuthentifyController::Deconnexion();
}
