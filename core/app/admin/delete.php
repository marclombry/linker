<?php
require_once("../../../core/init.php");
require('app/controller/adminController.php');
if(isset($_GET['id'])){
	AdminController::delete($_GET['id']);
	//header('location:/linker/core/app/admin');
}
require_once('app/view/delete.view.php');