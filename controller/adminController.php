<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/customer.php";
require_once "model/drivers.php";

class adminController{
    protected $db;
	protected $id;
    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
		session_start();
            $this->idAdmin = $_SESSION['id'];
			$this->username = $_SESSION['username'];
    }

    public function view_admin(){
        $result = $this ->getAllData();
		if($_SESSION['id']!=""){
		return View::createView('listUser.php',
			[	
			"idAdmin" => $this->idAdmin,
			"username" => $this->username,
			"result" => $result
			]);}
		else{
			header('Location: login');}
    }
	public function view_addDelivery(){
		$id = "";
		if($_SESSION['id']!=""){
			if(isset($_GET['idCustomer']) && $_GET['idCustomer'] != ""){
				$id = $this->db->escapeString($_GET['idCustomer']);
			}
		$result = $this ->getSelectCustomer($id);
		$result2 = $this ->getAllDataDriver();
		return View::createView('addDelivery.php',
			[
				"id" => $id,
				"result" => $result,
				"result2" => $result2
		]);}
		else{
			header('Location: login');}
		
		
    }
	
	public function view_addNewUser(){
		$id = "";
		if($_SESSION['id']!=""){
		return View::createView('addNewUser.php',
			[]);}
		else{
			header('Location: login');}
		
		
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
	
	public function getAllDataDriver(){
		$query = "SELECT * from drivers";
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Drivers($value['id'],$value['name'],"","");
		}
		return $result;
	}

	public function insertData(){
		$customerId = $_GET['idCustomer'];
		$deliveryId = $_POST['address'];
		#$query = "INSERT INTO (deliveries,delivery_details) (name) VALUES ('$group')";
	}
}
?>

