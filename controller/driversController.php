<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/drivers.php";
require_once "model/deliveries.php";

class DriversController{
    protected $db;
    protected $id;
    protected $username;
    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
        session_start();
            $this->id = $_SESSION['id'];
			$this->username = $_SESSION['name'];
    }

    public function view_drivers(){
        $result = $this ->getAllData();
		// return View::createView('driverPage.php',
		// 	[
		// 		"result" => $result
		// 	]);

        if($_SESSION['id']!="" && $_SESSION['role']=="drivers"){
            return View::createView('driverPage.php',
                [	
                "idDriver" => $this->id,
                "username" => $this->username,
                "result" => $result
                ]);}
            else{
                header('Location: login');
            }
    }
    public function getAllData(){
        $id = $this->id;
		$query = "SELECT d.id as dId, c.name as cName,dr.name as dName, d.end_datetime from deliveries d inner join customers c on d.customer_id = c.id inner join drivers dr on  d.driver_id = dr.id where dr.id = $id";
        $query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Deliveries($value['dId'],$value['cName'],"",$value['dName'],"","","",$value['end_datetime'],"","");
		}
		return $result;
	}
	
	public function updateStatus(){
		$id = $_POST['id'];
		if (isset($id) && $id != ""){
			$id = $this->db->escapeString($id);
			$tanggalSampai = date("Y/m/d H:i:s");
			$query = "UPDATE deliveries SET end_datetime='$tanggalSampai', status='Sudah Diterima' WHERE id='$id'";
			$this->db->executeNonSelectQuery($query);
		}
	}
	
	
}
?>
