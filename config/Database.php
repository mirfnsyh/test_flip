<?php
/**
 * using mysqli_connect for database connection
 */

class Database{ 

		public function connection(){
			$databaseHost = 'localhost';
			$databaseName = 'flip_test';
			$databaseUsername = 'root';
			$databasePassword = '';

			$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
		}

		//Default Sql Function

		public function listFieldToString($field){
				$res = "";
				for($i=0;$i<count($field);$i++){
					$res .= $field[$i];
					$res .= ", ";
				}

				$res = rtrim($res, ", ");

				return $res;
		}

		public function insert($table, $field, $value){
			$field = $this->listFieldToString($field);
			
			$sql = "INSERT INTO ".$table." ( ".$field." ) VALUES ( ".$value." ) ";

			$result = mysqli_query($this->connection(), $sql);

			return $result;
		}

		public function showAllData($table){
			$sql = "SELECT * FROM ".$table." ORDER BY id DESC";

			$result = mysqli_query($this->connection(), $sql);

			return $result;
		}

		public function update($table, $value, $id){
			$sql = "UPDATE  ".$table." SET ".$value." WHERE id = '".$id."'";

			$result = mysqli_query($this->connection(), $sql);

			return $result;
		}

}

?>