<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class loginController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","delivery");
    }

    public function view_login(){
		session_start();
		if(isset($_SESSION['id']) && isset($_SESSION['username'])){
			$username = $_SESSION['username'];
			$id = $_SESSION['id'];
			header('Location: listUser');
		}else{
		return View::createView('login.php',
			[
			
		]);}
    }
	
        public function login(){
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            $result = $this->db->executeSelectQuery("SELECT * FROM admin WHERE username = '$Username' AND password = '$Password'");
            if(isset($result[0]['username']) && $result[0]['username'] != ''){
                session_start();
                $_SESSION['username'] = $result[0]['username'];
                $_SESSION['id'] = $result[0]['id'];
            }
        }

        public function logout(){
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['id']);
        }
}
?>
