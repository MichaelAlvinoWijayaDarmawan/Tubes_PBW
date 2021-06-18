<?php
class Items{
    protected $id;
	protected $delivery_id;
    protected $item_id;
	protected $quantity;
    protected $unit;

	public function __construct($id,$delivery_id,$item_id,$quantity,$unit){
		$this->id = $id;
        $this->delivery_id = $delivery_id;
        $this->item_id = $item_id;
        $this->quantity = $quantity;
        $this->unit = $unit;
	}

	public function getId(){
		return $this->id;
	}
    public function getDeliveryId(){
		return $this->delivery_id;
	}
    public function getItemId(){
		return $this->item_id;
	}
    public function getQuantity(){
		return $this->quantity;
	}
    public function getUnit(){
		return $this->unit;
	}
}
?>