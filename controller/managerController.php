<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/report.php";

class ManagerController{
    protected $db;
    protected $id;
    protected $username;
    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
        session_start();
            $this->id = $_SESSION['id'];
			$this->username = $_SESSION['name'];
    }

    public function view_manager(){
		$result = $this->getReportOne();
        if($_SESSION['id']!="" && $_SESSION['role']=="manager"){
            return View::createView('managerPage.php',
                [	
				"id" => $this->id,
				"username" => $this->username,
				"result" => $result
                ]);}
            else{
                header('Location: login');
            }
    }
	
	 public function view_managerReport2(){
		$result = $this->getReportTwo();
        if($_SESSION['id']!="" && $_SESSION['role']=="manager"){
            return View::createView('managerReport2.php',
                [	
				"id" => $this->id,
				"username" => $this->username,
				"result" => $result
                ]);}
            else{
                header('Location: login');
            }
    }
	public function view_pdf1(){
		$result = $this->getReportOne();
        if($_SESSION['id']!="" && $_SESSION['role']=="manager"){
            return View::createView('pdf1.php',
                [	
				"result" => $result
                ]);}
    }
	public function view_pdf2(){
		$result = $this->getReportTwo();
        if($_SESSION['id']!="" && $_SESSION['role']=="manager"){
            return View::createView('pdf2.php',
                [	
				"result" => $result
                ]);}
    }
	public function getReportOne(){
		$query = "SELECT drivers.name, count(driver_id) as jumlah FROM `deliveries` left join drivers on deliveries.driver_id= drivers.id where status= 'Sudah Diterima' and month(end_datetime) = month(CURRENT_DATE()) GROUP BY driver_id LIMIT 10";
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Report($value['name'],$value['jumlah'],"","","");
		}
		return $result;
	}
	public function getReportTwo(){
		$query = "SELECT drivers.name,customers.name as cname,addresses.address,items.name as iname FROM `deliveries` 
				  left join drivers on deliveries.driver_id= drivers.id left join delivery_details on delivery_details.delivery_id = deliveries.id 
				  left join items on items.id = delivery_details.item_id left join customers on customers.id = deliveries.customer_id 
				  left join addresses on addresses.id= deliveries.destination_id where status= 'Sudah Diterima' and month(end_datetime) = month(CURRENT_DATE())";
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value){
			$result[] = new Report($value['name'],"",$value['cname'],$value['address'],$value['iname']);
		}
		return $result;
	}
	
}
?>
