<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/Tubes_PBW';
	
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			case $baseURL.'/customerAlamat':
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
			default:
				echo '404 Not Found';
				break;
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		switch ($url) {
			case $baseURL.'/CustomerAlamat/TambahAlamat':
				require_once "controller/userController.php";
				$indexCtrl = new userController();
				$indexCtrl->addAddress();
				header('Location: ../customerAlamat?id='.$_POST['id'] );
				break;
			default:
				echo '404 Not Found';
				break;
		}
	}

?>