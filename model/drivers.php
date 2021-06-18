<?php
class Drivers{
	protected $id;
	protected $name;
	protected $start_work_date;
	protected $end_work_date;
	
	public function __construct($id,$name,$start_work_date,$end_work_date){
		$this->id = $id;
		$this->name = $name;
		$this->start_work_date = $start_work_date;
		$this->end_work_date = $end_work_date;
	}

	public function getId(){
		return $this->getId;
	}
	public function getName(){
		return $this->name;
	}
	public function getStartWorkDate(){
		return $this->start_work_date;
	}
	public function getEndWorkDate(){
		return $this->end_work_date;
	}
}

?>