<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/Tubes_PBW';
	
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			case $baseURL."/login":
				require_once "controller/loginController.php";
				$userCtrl = new loginController();
				echo $userCtrl->view_login();
			break;
			case $baseURL.'/logout':
				require_once "controller/loginController.php";
				$logout = new loginController();
				echo $logout->logout();
				header('Location: login');
				break;
			case $baseURL.'/customerAddress':
				require_once "controller/userController.php";
				$indexCtrl = new userController();
				echo $indexCtrl->view_index();
				break;
			case $baseURL.'/listUser':
				require_once "controller/adminController.php";
				$indexCtrl = new adminController();
				echo $indexCtrl->view_admin();
				break;
			case $baseURL.'/addDelivery':
				require_once "controller/adminController.php";
				$indexCtrl = new adminController();
				echo $indexCtrl->view_addDelivery();
				break;
			case $baseURL.'/addNewUser':
				require_once "controller/adminController.php";
				$indexCtrl = new adminController();
				echo $indexCtrl->view_addNewUser();
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		switch ($url) {
			case $baseURL.'/customerAddress':
				require_once "controller/userController.php";
				$indexCtrl = new userController();
				$indexCtrl->addAddress();
				header('Location: ../customerAddress?id='.$_POST['id'] );
				break;
			case $baseURL.'/enter':
				require_once "controller/loginController.php";
				$login= new loginController();
				$login->login();
				header('Location: login');
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}

?>