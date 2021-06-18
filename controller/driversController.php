<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class DriversController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

    public function view_drivers(){
        $result = $this ->getAllData();
		return View::createView('.php',
			[
				"result" => $result
			]);
    }
    public function getAllData(){
		
	}
}
?>

?>
