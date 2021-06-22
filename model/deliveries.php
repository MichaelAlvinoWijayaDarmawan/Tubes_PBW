<?php
class Deliveries{
    protected $id;
	protected $customer_name;
    protected $destination_id;
    protected $driver_name;
	protected $address;
    protected $scheduleded_date;
    protected $start_datetime;
    protected $end_datetime;
    protected $status;
	protected $item;
	public function __construct($id,$customer_name,$destination_id,$driver_name,$address,$scheduleded_date,$start_datetime,$end_datetime,$status,$item){
		$this->id = $id;
		$this->customer_name = $customer_name;
		$this->destination_id = $destination_id;
		$this->driver_name = $driver_name;
		$this->address = $address;
		$this->scheduleded_date = $scheduleded_date;
        $this->start_datetime = $start_datetime;
        $this->end_datetime = $end_datetime;
        $this->status = $status;
	    $this->item = $item;
	}

	public function getId(){
		return $this->id;
	}
    public function getCustomerName(){
		return $this->customer_name;
	}
    public function getDestinationId(){
		return $this->destination_id;
	}
	public function getDriverName(){
		return $this->driver_name;
	}
	public function getAddress(){
		return $this->address;
	}
	public function getItem(){
		return $this->item;
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