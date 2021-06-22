<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/deliveries.php";

class UserController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
		 session_start();
            $this->id = $_SESSION['id'];
			$this->username = $_SESSION['name'];
    }
	public function view_customer(){
        $result = $this ->getAllData();

        if($_SESSION['id']!="" && $_SESSION['role']=="customers"){
            return View::createView('customerPage.php',
                [	
                "idCustomer" => $this->id,
                "username" => $this->username,
                "result" => $result
                ]);}
            else{
                header('Location: login');
            }
    }
 public function getAllData(){
        $id = $this->id;
		$query = "SELECT c.name as cName,dr.name as dName,d.status,addresses.address,items.name as item from deliveries d 
				  inner join customers c on d.customer_id = c.id inner join drivers dr on d.driver_id = dr.id 
				  inner join addresses on addresses.id =d.destination_id inner join delivery_details 
				  on d.id=delivery_details.delivery_id inner join items on items.id = delivery_details.item_id
				  where c.id=$id;";
        $query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Deliveries("",$value['cName'],"",$value['dName'],$value['address'],"","","",$value['status'],$value['item']);
		}
		return $result;
	}
   
}
?>
