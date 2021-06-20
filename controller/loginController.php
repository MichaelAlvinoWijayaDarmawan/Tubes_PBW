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
        if(isset($_SESSION['id'])){
            if($_SESSION['role'] == "admin"){
                    header('Location: listUser');
                }
                else if($_SESSION['role'] == "customers"){
                    header('Location: ');
                }
                else if($_SESSION['role'] == "manager"){
                    header('Location: ');
                }
                 else if($_SESSION['driver'] == "drivers"){
                    header('Location: ');
                }
            //$username = $_SESSION['username'];
            //$id = $_SESSION['id'];

        }else{
        return View::createView('login.php',
            []);}
    }
	
        public function login(){
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            $Role = $_POST['role'];
            $result = $this->db->executeSelectQuery("SELECT * FROM $Role WHERE username = '$Username' AND password = '$Password'");
            if(isset($result[0]['username']) && $result[0]['password'] != ''){
                session_start();
                $_SESSION['username'] = $result[0]['username'];
                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['role'] = $Role;
            }
        }

        public function logout(){
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['id']);
        }
}
?>
