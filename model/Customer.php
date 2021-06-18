<?php
class Customer{
	protected $customer_id;
	protected $name;
	protected $address;
	protected $address_id;
	protected $description;
	
	public function __construct($customer_id,$name,$address,$address_id,$description){
		$this->customer_id = $customer_id;
		$this->name = $name;
		$this->address = $address;
		$this->address_id = $address_id;
		$this->description = $description;
	}

	public function getCustomerId(){
		return $this->customer_id;
	}
	public function getAddressId(){
		return $this->address_id;
	}
	public function getAddress(){
		return $this->address;
	}
	public function getName(){
		return $this->name;
	}
	public function getDescription(){
		return $this->description;
	}
}

?>