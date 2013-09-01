<?php


 
class reviewdatahandle {
	
	private $dbcon;

	
	
	private static $instance;
	 
   
 	
	public static function getInstance() {

    if(!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;

 	 } 
	
 		private function __construct() {
      		 $this->dbcon = dbconnection::getInstance();
				
 		} 
  
        function fetchdata(){
			
            			      					  
           $sql = "SELECT * FROM reviewdata";
           
           $result = $this->dbcon->connect($sql);
                   
           return $result;
                  
        }
		
		function fetchSupplier($supplier_id){
            			      					  
           $sql = "SELECT * FROM suppliers where suppliers_id='$supplier_id' ";
           
           $result = $this->dbcon->connect($sql);
         				
			if(!$result){
				die("mysql query failed: ".mysql_error());
				}	
					       
           return $result;
			
			}
		function fetchCustomer($customer_id){
            			      					  
           $sql = "select customers_firstname from customers where customers_id='$customer_id'";
           
           $result = $this->dbcon->connect($sql);
         				
			if(!$result){
				die("mysql query failed: ".mysql_error());
				}	
					       
           return $result;
			
			}	
		
}

?>
