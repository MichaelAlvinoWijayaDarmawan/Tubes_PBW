<?php
class Deliveries{
    protected $id;
	protected $customer_id;
    protected $destination_id;
    protected $driver_id;
    protected $scheduleded_date;
    protected $start_datetime;
    protected $end_datetime;
    protected $status;
	
	public function __construct($id,$customer_id,$destination_id,$driver_id,$scheduleded_date,$start_datetime,$end_datetime,$status){
		$this->id = $id;
		$this->customer_id = $customer_id;
		$this->destination_id = $destination_id;
		$this->driver_id = $driver_id;
		$this->scheduleded_date = $scheduleded_date;
        $this->start_datetime = $start_datetime;
        $this->end_datetime = $end_datetime;
        $this->status = $status;
	}

	public function getId(){
		return $this->id;
	}
    public function getCustomerId(){
		return $this->customer_id;
	}
    public function getDestinationId(){
		return $this->destination_id;
	}
	public function getDriverId(){
		return $this->driver_id;
	}
	public function getSchedulededData(){
		return $this->scheduleded_date;
	}
	public function getStartDateTime(){
		return $this->start_datetime;
	}
	public function getEndDateTime(){
		return $this->end_datetime;
	}
    public function getStatus(){
		return $this->status;
	}
}
?>