<?php
class Customer{
	protected $CustomerId;
	protected $Name;
	protected $AlamatId;
	protected $Alamat;
	protected $Deskripsi;
	
	public function __construct($CustomerId,$Name,$AlamatId,$Alamat,$Deskripsi){
		$this->CustomerId = $CustomerId;
		$this->Name = $Name;
		$this->AlamatId = $AlamatId;
		$this->Alamat = $Alamat;
		$this->Deskripsi = $Deskripsi;
	}

	public function getCustomerId(){
		return $this->CustomerId;
	}
	public function getAlamatId(){
		return $this->AlamatId;
	}
	public function getAlamat(){
		return $this->Alamat;
	}
	public function getName(){
		return $this->Name;
	}
	public function getDeskripsi(){
		return $this->Deskripsi;
	}
}

?>