<?php 
require_once('config/Database.php');
include_once('model/IndexModel.php');

class IndexDao { 

	public function __construct()  
    {  
        $this->db = new Database();
        $this->IndexModel = new IndexModel();
    } 

	public function insertResponse($param){

		$result = "";
		$value = "";
		if($param != null || !empty($param)){

			foreach($param as $key => $item){
				$value .= "'".$item."'";
				$value .= ",";
			}

			$dateTime = date("Y-m-d H:i:s");
			$value .= "'".$dateTime."'"; //Add value created_at

			$result = $this->db->insert($this->IndexModel->mTable, $this->IndexModel->mField, $value);

		}
		
		return $result;
	}

	public function updateResponse($id, $param){

		$result = "";
		$value = "";

		if($param != null || !empty($param)){

			foreach($param as $key => $item){
				if($key == 'status' || $key == 'receipt' || $key == 'time_served'){
					$value .=  $key." = '".$item."', ";
				}
			}

			$value = rtrim($value, ", ");

			$result = $this->db->update($this->IndexModel->mTable, $value,$id);

		}
		
		return $result;
	}

	public function showAllData(){
		$result = $this->db->showAllData($this->IndexModel->mTable);

		return $result;
	}

}
