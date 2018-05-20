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
$table->setTable('links');
//var_dump($table->all());
/*
$d = [
	array(
	':wordsen'=>'sure',
	':picture'=>'',
	':wordsfr'=>'sur'
   ),
array(
	':wordsen'=>'here',
	':picture'=>'',
	':wordsfr'=>'ici'
   ),
array(
	':wordsen'=>'neither',
	':picture'=>'',
	':wordsfr'=>'ni'
   ),
array(
	':wordsen'=>'probably',
	':picture'=>'',
	':wordsfr'=>'probablement'
   ),
array(
	':wordsen'=>'certainly',
	':picture'=>'',
	':wordsfr'=>'certainement'
   ),
array(
	':wordsen'=>'Absolutely',
	':picture'=>'',
	':wordsfr'=>'absolument'
   ),
array(
	':wordsen'=>'congratulations',
	':picture'=>'',
	':wordsfr'=>'felicitation'
   ),
array(
	':wordsen'=>'i see',
	':picture'=>'',
	':wordsfr'=>'je vois '
   ),
array(
	':wordsen'=>'i quit',
	':picture'=>'',
	':wordsfr'=>'j arrete'
   ),
array(
	':wordsen'=>'let go',
	':picture'=>'',
	':wordsfr'=>'allons y'
   ),
array(
	':wordsen'=>'me too',
	':picture'=>'',
	':wordsfr'=>'moi aussi'
   ),
array(
	':wordsen'=>'my god',
	':picture'=>'',
	':wordsfr'=>'mon dieu'
   ),
array(
	':wordsen'=>'no way',
	':picture'=>'',
	':wordsfr'=>'en aucune facon '
   ),
array(
	':wordsen'=>'and she ?',
	':picture'=>'',
	':wordsfr'=>'et elle ?'
   ),
array(
	':wordsen'=>'come on',
	':picture'=>'',
	':wordsfr'=>'allons'
   ),
array(
	':wordsen'=>'hold on',
	':picture'=>'',
	':wordsfr'=>'Attendez'
   ),
array(
	':wordsen'=>'i agree',
	':picture'=>'',
	':wordsfr'=>'je suis d accord'
   ),
array(
	':wordsen'=>'i am',
	':picture'=>'',
	':wordsfr'=>'je suis'
   ),
array(
	':wordsen'=>'not bad',
	':picture'=>'',
	':wordsfr'=>'pas mal'
   ),
array(
	':wordsen'=>'not',
	':picture'=>'',
	':wordsfr'=>'yet'
   ),
array(
	':wordsen'=>'see you',
	':picture'=>'',
	':wordsfr'=>'a plus'
   ),
array(
	':wordsen'=>'shut up',
	':picture'=>'',
	':wordsfr'=>'tais-toi'
   ),
array(
	':wordsen'=>'So long',
	':picture'=>'',
	':wordsfr'=>'si longtemps'
   ),
array(
	':wordsen'=>'why not',
	':picture'=>'',
	':wordsfr'=>'pourquoi pas'
   ),
array(
	':wordsen'=>'allow me',
	':picture'=>'',
	':wordsfr'=>'autorise moi'
   ),
array(
	':wordsen'=>'be quiet',
	':picture'=>'',
	':wordsfr'=>'Soyez silencieux'
   ),
array(
	':wordsen'=>'cheer up',
	':picture'=>'',
	':wordsfr'=>'Courage'
   ),
array(
	':wordsen'=>'get lost',
	':picture'=>'',
	':wordsfr'=>'Foutez le camp'
   ),
array(
	':wordsen'=>'good job',
	':picture'=>'',
	':wordsfr'=>'bon travail'
   ),
array(
	':wordsen'=>'goodbye',
	':picture'=>'',
	':wordsfr'=>'au revoir'
   ),
array(
	':wordsen'=>'have fun',
	':picture'=>'',
	':wordsfr'=>'s amuser'
   ),
array(
	':wordsen'=>'he is marc',
	':picture'=>'',
	':wordsfr'=>'il es marc'
   ),
array(
	':wordsen'=>'how much',
	':picture'=>'',
	':wordsfr'=>'combien'
   ),
array(
	':wordsen'=>'i am full',
	':picture'=>'',
	':wordsfr'=>'je suis plein'
   ),
array(
	':wordsen'=>'I m home',
	':picture'=>'',
	':wordsfr'=>'je suis a la maison'
   ),
array(
	':wordsen'=>'i m sick',
	':picture'=>'',
	':wordsfr'=>'je suis malade'
   ),
array(
	':wordsen'=>'it s july',
	':picture'=>'',
	':wordsfr'=>'c est juillet'
   ),

];

foreach ($d as $key => $v) {
	//$table->insert($v);
}
//var_dump($table->insert($v));
*/

$l= [
    array(
    	':name'=>'Github',
    	':color'=>'blue',
    	':photo'=>'github',
    	':href'=>'https://github.com/',
    	'category'=>'social network'
    ),
 array(
    	':name'=>'Stackoverflow',
    	':color'=>'blue',
    	':photo'=>'stack',
    	':href'=>'https://stackoverflow.com/',
    	'category'=>'social network'
    ),
  array(
    	':name'=>'Facebook',
    	':color'=>'blue',
    	':photo'=>'facebook',
    	':href'=>'https://fr-fr.facebook.com/',
    	'category'=>'social network'
    ),
   array(
    	':name'=>'Twitter',
    	':color'=>'blue',
    	':photo'=>'twiter',
    	':href'=>'https://twitter.com/?lang=fr',
    	'category'=>'social network'
    ),
   array(
    	':name'=>'Instagram',
    	':color'=>'blue',
    	':photo'=>'instagram',
    	':href'=>'https://www.instagram.com/?hl=fr',
    	'category'=>'social network'
    ),
   array(
    	':name'=>'Pinterest',
    	':color'=>'blue',
    	':photo'=>'pinterest',
    	':href'=>'https://www.pinterest.fr/',
    	'category'=>'social network'
    ),
  
  
 
];

foreach ($l as $key => $v) {
	//$table->insert($v);
}

