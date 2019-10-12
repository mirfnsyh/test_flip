<?php 
	//load controller
	require_once 'controller/Index.php';

	$index = new Index();

	if(!isset($_GET['page']))
	{
		$index->index();
	}
	else
	{
		switch($_GET['page'])
		{
			case 'index' : 
				$index->index();
				break;

			case 'postData' : 
				$index->postData();
				break;

			case 'checkData' : 
				$index->checkData($_GET['id'],$_GET['transactions_id']);
				break;

			default : 
				$index->notFound();
				break;
		}
	}

?>