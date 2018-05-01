<?php
echo 'enfin';
$config=require_once('app/database/config.php');
require_once('app/database/database.php');
require_once('app/database/table.php');
require_once('app/model/links.php');
//var_dump($config);
$database= new Database($config);
var_dump($database->all());
$table = new Table($config);
/*
echo "<div style='background-color:#1abc9c'>";
	foreach($table->all(true) as $elem){
		echo '<p style="padding:2px;">'.$elem.'</p>';
	}
echo "</div>";
*/
$link = new Links($table->all(true));
var_dump($link);

