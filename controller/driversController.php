<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/drivers.php";
require_once "model/deliveries.php";

class DriversController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

    public function view_drivers(){
        $result = $this ->getAllData();
		return View::createView('driverPage.php',
			[
				"result" => $result
			]);
    }
    public function getAllData(){
		$query = "SELECT c.name as cName,dr.name as dName from deliveries d inner join customers c on d.customer_id = c.id inner join drivers dr on  d.driver_id = dr.id";
        $query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Deliveries("",$value['cName'],"",$value['dName'],"","","","");
		}
		return $result;
	}
}
?>
