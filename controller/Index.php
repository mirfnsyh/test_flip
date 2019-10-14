<?php 
require_once('config/Config.php');
require_once('service/IndexService.php');

class Index { 

	public function __construct()  
    {  
        $this->config = new Config();
        $this->IndexService = new IndexService();

    } 

	public function index(){

		$listData = $this->IndexService->showAllData();//List data Dari table transaction
		$content = 'view/index/index.php'; //page path untuk di parsing ke view master

		return require_once('view/shared/master.php');
	}

	public function notFound(){
		return require_once('view/shared/404.php');
	}

	public function postData(){

		if(!isset($_POST['submit'])) {
			return $this->index();
		}

		$param = [
			"bank_code" => $_POST['bank_code'],
			"account_number" =>$_POST['account_number'],
			"amount" =>$_POST['amount'],
			"remark" =>$_POST['remark'],
		];

		$doPost = $this->IndexService->doPost($param);

		return $this->index();
	}

	public function checkData($id = null, $transactions_id = null){

		$doCheck = $this->IndexService->doCheck($id, $transactions_id);

		return $this->index();
	}

}

?>