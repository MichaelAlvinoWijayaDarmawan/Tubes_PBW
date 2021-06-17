<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Customer.php";

class UserController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

    public function view_index(){
		$id = "";
		if(isset($_GET['id']) && $_GET['id'] != ""){
			$id = $this->db->escapeString($_GET['id']);
		}
		$result = $this ->getAddress($id);
		return View::createView('customerAlamat.php',
			[
				"id" => $id,
				"result" => $result
			]);
    }
	
	public function getAddress($id){
		$query = "SELECT customers.id,customers.name,addresses.address,addresses.id,addresses.description FROM customers left join addresses on customers.id = addresses.customer_id where customer_id='$id'";
		
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Customer($value['id'],$value['name'],$value['id'],$value['address'],$value['description']);
		}
		return $result;
	}
	
	public function addAddress(){
		$id = $_POST['id'];
		$alamat = $_POST['alamat'];
		$deskripsi = $_POST['deskripsi'];
		if (isset($id) && $id != ""){
			$id = $this->db->escapeString($id);
			$alamat = $this->db->escapeString($alamat);
			$deskripsi = $this->db->escapeString($deskripsi);
			$query = "INSERT INTO addresses(customer_id,address,description) VALUES ('$id','$alamat','$deskripsi')";
			$this->db->executeNonSelectQuery($query);
		}
	}
}
?>
