<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/Tubes_PBW';
	
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			case $baseURL."/login":
				require_once "controller/loginController.php";
				$userCtrl = new LoginController();
				echo $userCtrl->view_login();
			break;
			case $baseURL.'/logout':
				require_once "controller/loginController.php";
				$logout = new LoginController();
				echo $logout->logout();
				header('Location: login');
				break;
			case $baseURL.'/customerAddress':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->view_addAddress();
				break;
			case $baseURL.'/listUser':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->view_admin();
				break;
			case $baseURL.'/addDelivery':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->view_addDelivery();
				break;
			case $baseURL.'/addNewUser':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->view_addNewUser();
				break;
			case $baseURL.'/driverPage':
				require_once "controller/driversController.php";
				$indexCtrl = new DriversController();
				echo $indexCtrl->view_drivers();
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		switch ($url) {
			case $baseURL.'/customerAddress':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->addAddress();
				header('Location: customerAddress?id='.$_POST['id'] );
				break;
			case $baseURL.'/enter':
				require_once "controller/loginController.php";
				$login= new LoginController();
				$login->login();
				header('Location: login');
				break;
			case $baseURL.'/addDelivery':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->addData();
				break;
			case $baseURL.'/addNewUser':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->addNewCustomer();
				header('Location: listUser');
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}

?>