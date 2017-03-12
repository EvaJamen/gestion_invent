<?php

	//CONNECT TO MY BDD
	include 'config.php';

	$q = isset($_GET['q']) ? $_GET['q'] : '';

	if($q == '')
	{
		$page = 'home';
	}
	else if($q == 'new')
	{
    	$page = 'new';
	}
	else if($q == 'update')
	{
    	$page = 'update';
	}
	else if($q == 'inventory')
	{
    	$page = 'inventory';
	}
	else if($q == 'delete')
	{
    	$page = 'delete';
	}
	else if(preg_match('/^session\/[-_a-z0-9]+$/', $q))
	{
		$page = 'session';
	}
	else
	{
		$page = '404';
	}

	include 'pages/'.$page.'.php';
?>