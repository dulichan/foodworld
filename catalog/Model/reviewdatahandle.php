<?php


 
class reviewdatahandle {
	
	private $dbcon;
	private $supid;
	
 		public function __construct($supid) {
      		 $this->dbcon = dbconnection::getInstance();
			 $this->supid=$supid;			
 		} 
		/*public function __construct() {
      		 $this->dbcon = dbconnection::getInstance();			
 		}*/    
        function fetchdata(){
			
            			      					  
           $sql = "SELECT * FROM reviewdata";
           
           $result = $this->dbcon->connect($sql);
                   
           return $result;
                  
        }
		
		function fetchSupplier(){
            			      					  
           $sql = "SELECT * FROM suppliers where suppliers_id='$this->supid' ";
           
           $result = $this->dbcon->connect($sql);
         				
			if(!$result){
				die("mysql query failed: ".mysql_error());
				}	
					       
           return $result;
			
			}
		
}

?>
