<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/T0818041';
	
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
			case $baseURL.'/index':
				require_once "controller/bookController.php";
				$indexCtrl = new BookController();
				echo $indexCtrl->view_index();
				break;
			
			default:
				echo '404 Not Found';
				break;
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		switch ($url) {
			case $baseURL.'/add':
				
			default:
				echo '404 Not Found';
				break;
		}
	}

?>