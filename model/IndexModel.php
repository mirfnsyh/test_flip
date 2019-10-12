<?php 
require_once('config/Database.php');

class IndexModel { 

	public function __construct()  
    {  
        $this->db = new Database();

        $this->mTable = 'transactions';
        $this->mField = "(transactions_id, amount, status, timestamp, bank_code, account_number, beneficiary_name, remark, receipt, time_served, fee, created_at)";
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

			$result = $this->db->insert($this->mTable, $this->mField, $value);

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

			$result = $this->db->update($this->mTable, $value,$id);

		}
		
		return $result;
	}

	public function showAllData(){
		$result = $this->db->showAllData($this->mTable);

		return $result;
	}

}
