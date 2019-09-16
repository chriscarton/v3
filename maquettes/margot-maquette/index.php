<?php 
//Dispatcher : 
if(!empty($_GET['p'])){
	$page = $_GET['p'];
	require 'pages/'.$page.'.php';
}else{
	require 'pages/home.php';
}
?>