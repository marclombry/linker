<?php
class AdminController{

	public static function create($post){
		global $database;
		$confirm='';
		if(isset($_POST)){
			$_POST = array_map('htmlspecialchars',$_POST);

			$donnee = [
				':name'=>htmlentities($_POST['name']),
				':color'=>htmlentities($_POST['color']),
				':photo'=>htmlentities($_POST['photo']),
				':href'=>htmlentities($_POST['href']),
				':category'=>htmlentities($_POST['category']),
				
			];
			foreach ($donnee as $key => $value) {
				if(empty($value))
				{
					$confirm =false;
				}
			}
			if($confirm !==false){
				$database->insert($donnee);
			}
			

		}
	}

	public static function delete($id){
		global $database;
		if(isset($_GET['id'])){
			$id = htmlspecialchars($_GET['id']);
			$database->delete($id,'moneys');
		}
		
	}



}
