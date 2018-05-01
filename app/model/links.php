<?php
Class Links {
	private $id;
	private $name;
	private $color;
	private $photo;

	public function __construct($valeur = array()){
		if(!empty($valeur))
		{
			$this->hydrate($valeur);
		}
	}
	public function hydrate($donnee){
		if(!empty($donnee)){
			foreach ($donnee as $key => $value) {
				$methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
	                 
	            if (is_callable(array($this, $methode)))
	            {
	                $this->$methode($value);
	            }
				
			}
		}
	}

	public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }


}