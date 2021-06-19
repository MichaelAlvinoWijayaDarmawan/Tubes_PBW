<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/customer.php";

class adminController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

    public function view_admin(){
        $result = $this ->getAllData();
		return View::createView('listUser.php',
			[
				"result" => $result
			]);
    }
	public function view_addDelivery(){
		$id = "";
		if(isset($_GET['idCustomer']) && $_GET['idCustomer'] != ""){
			$id = $this->db->escapeString($_GET['idCustomer']);
		}
		$result = $this ->getSelectCustomer($id);
		return View::createView('addDelivery.php',
			[
				"id" => $id,
				"result" => $result
			]);
    }
    public function getAllData(){
		$query = "SELECT * from customers";
		
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Customer($value['id'],$value['name'],"","","");
		}
		return $result;
	}

	public function getSelectCustomer($id){
		$query = "SELECT customers.id,customers.name,addresses.address,addresses.id,addresses.description FROM customers left join addresses on customers.id = addresses.customer_id where customer_id='$id'";
		
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Customer($value['id'],$value['name'],$value['address'],$value['id'],$value['description']);
		}
		return $result;
	}
	
}
?>

