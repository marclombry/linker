<?php
class Database extends PDO{
	protected $pdo;
	protected $config=[];
	protected $table ='links';

	public function __construct(array $config){
		$this->config = $config;
		//var_dump($this->config['host']);die();
		if(empty($this->pdo)){
			$this->pdo = new PDO("mysql:host=$config[host];dbname=$config[dbname]","$config[username]" ,"$config[password]");
			//$this->pdo = new PDO('mysql:host=localhost;dbname=linker','root','');
		}
		return $this->pdo;
	}

	public function all($one=null){
		if($one){
			return $this->pdo->query("SELECT * FROM $this->table")->fetch(PDO::FETCH_OBJ);
		}
		return $this->pdo->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_OBJ);
	}

}