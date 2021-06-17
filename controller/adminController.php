<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class UserController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

    public function view_admin(){
        $result = $this ->getAllCustomer();
		return View::createView('adminAlamat.php',
			[
				"result" => $result
			]);
    }
    public function getAllData(){
		$query = "SELECT * FROM customer";
		
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		
		foreach ($query_result as $key => $value){
			$result[] = new ();
		}
		return $result;
	}
}
?>

?>
