<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/customer.php";
require_once "model/drivers.php";

class AdminController{
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
			header('Location: login');
		}
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
			header('Location: login');
		}
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

	public function addData(){
		$customerId = $_POST['idCustomer'];
		$addressId = $_POST['address'];
		$driverId = $_POST['drivers'];
		$mode = $_POST['status'];
		if(isset($_POST['tanggalKirim'])){
			$tanggalKirim = $_POST['tanggalKirim'];
		}
		$itemName = $_POST['namaBarang'];
		$itemCategory = $_POST['jenisBarang'];
		$itemQuantity = $_POST['banyakBarang'];
		$itemUnit = $_POST['satuanBarang'];
		

		$query = "INSERT INTO items (name,category) VALUES ('$itemName','$itemCategory')";
		$this->db->executeNonSelectQuery($query);
		if($mode=="Sekarang"){
			$mode = 'Sedang Dikirim';
			$tanggalKirim = date("Y/m/d H:i:s");
			$scheduled = date("Y/m/d");
			$query = "INSERT INTO deliveries (customer_id,destination_id,driver_id,scheduled_datetime,start_datetime,end_datetime,status) 
				VALUES ('$customerId','$addressId','$driverId','$scheduled','$tanggalKirim','','$mode')";
		}
		else{
			$mode = 'Belum Dikirim';
			$date = date_create($tanggalKirim);
			$datetime = date_format($date,"Y/m/d H:i:s");
			$tanggalKirim = $datetime;
			$query = "INSERT INTO deliveries (customer_id,destination_id,driver_id,scheduled_datetime,start_datetime,end_datetime,status) 
				VALUES ('$customerId','$deliveryId','$driverId','$tanggalKirim','','','$mode')";
		}
		$this->db->executeNonSelectQuery($query);
		$query = "SELECT id from deliveries order by id desc limit 1 ";
		$result_query = $this->db->executeSelectQuery($query);
		$deliveryId = $result_query[0]['id'];
		$query = "SELECT id from items order by id desc limit 1 ";
		$result_query = $this->db->executeSelectQuery($query);
		$itemsId = $result_query[0]['id'];
		$query = "INSERT INTO delivery_details (delivery_id,item_id,quantity,unit) 
			VALUES ('$deliveryId','$itemsId','$itemQuantity','$itemUnit')";
		$result_query = $this->db->executeNonSelectQuery($query);
	}
}
?>

