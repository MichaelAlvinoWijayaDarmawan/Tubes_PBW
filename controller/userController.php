<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/customer.php";

class UserController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

   
}
?>
