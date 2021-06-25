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
			case $baseURL.'/managerPage':
				require_once "controller/managerController.php";
				$indexCtrl = new ManagerController();
				echo $indexCtrl->view_manager();
				break;
			case $baseURL.'/managerReport2':
				require_once "controller/managerController.php";
				$indexCtrl = new ManagerController();
				echo $indexCtrl->view_managerReport2();
				break;
			case $baseURL.'/customerPage':
				require_once "controller/userController.php";
				$indexCtrl = new UserController();
				echo $indexCtrl->view_customer();
				break;
			case $baseURL.'/deleteCustomer':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->deleteCustomer();
				header('Location: listUser');
				break;
			case $baseURL.'/filter':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->view_search();
				break;
			case $baseURL.'/addNewDriver':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				echo $indexCtrl->view_addNewDriver();
				break;
			case $baseURL.'/pdf1':
				require_once "controller/ManagerController.php";
				$indexCtrl = new ManagerController();
				echo $indexCtrl->view_pdf1();
				header('Location: pdf1.pdf');
				break;
			case $baseURL.'/pdf2':
				require_once "controller/ManagerController.php";
				$indexCtrl = new ManagerController();
				echo $indexCtrl->view_pdf2();
			header('Location: pdf2.pdf');
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
			case $baseURL.'/listUser/addDelivery':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->addData();
				header('Location: ../listUser');
				break;
			case $baseURL.'/listUser/updateUser':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->updateDataCustomer();
				header('Location: ../listUser');
				break;
			case $baseURL.'/addNewUser':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->addNewCustomer();
				header('Location: listUser');
				break;
			case $baseURL.'/driverPage/konfirmasi':
				require_once "controller/driversController.php";
				$driverCtrl = new DriversController();
				$driverCtrl-> updateStatus();
				header('Location: ../driverPage');
				break;
			case $baseURL.'/pagination':
				require_once "controller/adminController.php";
				$driverCtrl = new AdminController();
				$driverCtrl-> getPage();
				header('Location: listUser?page='.$_POST['page'] );
				break;
			case $baseURL.'/filter':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->getSearch();
				header('Location: search');
				break;
			case $baseURL.'/addNewDriver':
				require_once "controller/adminController.php";
				$indexCtrl = new AdminController();
				$indexCtrl->addNewDriver();
				header('Location: listUser');
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}

?>