<?php 
require_once('config/Config.php');
require_once('daos/IndexDao.php');

class IndexService { 

	public function __construct()  
    {  
        $this->config = new Config();
        $this->IndexDao = new IndexDao();
    } 

	public function doPost($param){
		$config = $this->config->ListConfig();

		$url = $config['base_flip_url']."/disburse";
		$key = $config['flip_key'];

		//send parameter
		$postCURL = $this->postCURL($url, $param, $key);

		$dataResponse = json_decode($postCURL, true);

		//Validasi response yang di dapat
		if(count($dataResponse) > 2){
			$this->IndexDao->insertResponse($dataResponse);
		}

		return true;
	}

	public function doCheck($id,$transactions_id){
		$config = $this->config->ListConfig();

		$url = $config['base_flip_url']."/disburse/".$transactions_id;
		$key = $config['flip_key'];

		//send parameter
		$getCURL = $this->getCURL($url, $key);

		$dataResponse = json_decode($getCURL, true);
		
		//Validasi response yang di dapat
		if(count($dataResponse) > 2){
			$this->IndexDao->updateResponse($id,$dataResponse);
		}

		return true;
	}

	public function postCURL($_url, $_param, $_key = null){

		$postData = json_encode($_param);

        $ch = curl_init($_url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD, $_key);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		   'Content-Type: application/json', 
		    'Content-Length: ' . strlen($postData))                                                                     
		);   

		$output = curl_exec($ch);                                                                                                                
		                                                                                                                     
		if ($output === FALSE) {
		  echo "cURL Error: " . curl_error($ch);
		}

		curl_close($ch);

        return $output;
    }

    public function getCURL($_url,$_key){

        $ch = curl_init($_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                 
		curl_setopt($ch, CURLOPT_USERPWD, $_key);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 

		$output = curl_exec($ch);                                                                                                                
		                                                                                                                     
		if ($output === FALSE) {
		  echo "cURL Error: " . curl_error($ch);
		}

		curl_close($ch);

        return $output;
    }

    public function showAllData(){
    	return $this->IndexDao->showAllData();
    }

}