<?php
class Items{
    protected $id;
	protected $name;
    protected $category;
	
	public function __construct($id,$name,$category){
		$this->id = $id;
        $this->name = $name;
        $this->category = $category;
	}

	public function getId(){
		return $this->id;
	}
    public function getName(){
		return $this->name;
	}
    public function getCategory(){
		return $this->category;
	}
}
?>