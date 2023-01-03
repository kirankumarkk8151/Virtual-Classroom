<?php
require_once("../../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
switch ($view) {


	default :
		$content    = 'class.php';		
}

require_once("../../navigation/navigations.php");
?>