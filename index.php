<?php
echo 'enfin';
$config=require_once('app/database/config.php');
require_once('app/database/database.php');
require_once('app/database/table.php');
//var_dump($config);
$database= new Database($config);
var_dump($database->all());
$table = new Table($config);

echo "<div style='background-color:#1abc9c'>".$table->all(true)->name."</div>";

