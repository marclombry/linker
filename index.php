<?php
/*
$config=require_once('core/app/database/config.php');
require_once('core/app/database/database.php');
require_once('core/app/database/table.php');
require_once('core/app/model/links.php');
require_once('core/app/form.php');
*/
require_once('core/init.php');
$content='';$choiceLink='';
//var_dump($config);
$database= new Database($config);
//var_dump($database->all());
$table = new Table($config);
//$images = $table->select('SELECT photo FROM links');


/*
echo "<div style='background-color:#1abc9c'>";
	foreach($table->all(true) as $elem){
		echo '<p style="padding:2px;">'.$elem.'</p>';
	}
echo "</div>";
*/
$link = new Links($table->all(true));
//$l1 = $link->hydrate();

$table->setTable('links');
$t = $table->select("select * from links where category <> 'cartoon'");

$all=[];
foreach ($t as $key => $link) {
	array_push($all,new Links($link));
}
foreach($all as $key=> $value){
	$content.='
<div class="block" style="background-color:'.$value->getColor().'">
    <h2>'.$value->getName().'</h2> 
    <p><a href="'.$value->getHref().'" target="_blank"><img src="core/app/public/images/'.$value->getPhoto().'" width="100%"></a></p>     
</div>';
}

/*
$d = array(
	':wordsen'=>'update',
	':picture'=>'',
	':wordsfr'=>'modifier'
   );
  */
//var_dump($database->delete(111,'langage'));
require_once('core/app/view/index.view.php');

