<?php
require 'dbadmin.php';
 
	class db_class extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}
 
        public function create( 
		 $product_cat,
         $product_title,
         $product_price,
         $product_desc, 
         $product_image, 
         $product_keyword) {
		//prepare: prepares the SQL query, and returns a statement handle to be used for further operations on the statement
			$stmt = $this->conn->prepare("INSERT INTO `products` (`product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`,`product_keywords`) VALUES (?, ?, ?, ?, ?, ?)") or die($this->conn->error);
		//bind_param: Binds variables to a prepared statement as parameters
			$stmt->bind_param("ssssss", $product_cat, $product_title, $product_price, $product_desc, $product_image, $product_keyword);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
 
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `products` ORDER BY `product_id` DESC") or die($this->conn->error);
			if($stmt->execute()){
			//get_result :  Gets a result set from a prepared statement
				$result = $stmt->get_result();
				return $result;
			}
		}
		
		public function product_id($product_id){
			$stmt = $this->conn->prepare("SELECT * FROM `products` WHERE `product_id` = '$product_id'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				$stmt->close();
				$this->conn->close();
				return $fetch;
			}
		}
		
		public function delete($product_id){
			$stmt = $this->conn->prepare("DELETE FROM `products` WHERE `product_id` = '$product_id'") or die($this->conn->error);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
        
        
		public function update($product_cat, $product_title, $product_price, $product_desc,$product_id){
			$stmt = $this->conn->prepare("UPDATE `products` SET
			 `product_cat` = '$product_cat', `product_price` = '$product_price', 
			 `product_title` = '$product_title', `product_desc` = '$product_desc'
			
			 WHERE `product_id` = '$product_id'") or die($this->conn->error);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
        }
		
 	}	

?>