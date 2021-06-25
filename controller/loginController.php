<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class LoginController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

   public function view_login(){
        session_start();
        if(isset($_SESSION['id'])){
            if($_SESSION['role'] == "admin"){
                    header('Location: listUser');
                }
                else if($_SESSION['role'] == "customers"){
                    header('Location: customerPage');
                }
                else if($_SESSION['role'] == "manager"){
                    header('Location: managerPage');
                }
                else if($_SESSION['role'] == "drivers"){
                    header('Location: driverPage');
                }
            //$username = $_SESSION['username'];
            //$id = $_SESSION['id'];

        }else{
            return View::createView('login.php',
            []);
        }
    }
	
        public function login(){
            $Username = $_POST['name'];
            $Password = $_POST['password'];
            $Role = $_POST['role'];
		$result = $this->db->executeSelectQuery("SELECT * FROM $Role WHERE name = \"$Username\" AND password = '$Password'");
            if(isset($result[0]['name']) && $result[0]['password'] != ''){
                session_start();
                $_SESSION['name'] = $result[0]['name'];
                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['role'] = $Role;
            }
        }

        public function logout(){
            session_start();
            unset($_SESSION['name']);
            unset($_SESSION['id']);
        }
}
?>
