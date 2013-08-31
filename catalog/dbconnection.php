<?php
include_once('dbconfig.php');

class dbconnection
{

    private static $instance;
	
	private function __construct() {}     
   
 	
	public static function getInstance() {

    if(!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;

 	 } 
	
	
    public function connect($querrystring)
    {
        //Connect Database
        $con = new MySQLi(DBSERVER, USER, PASSWORD, DB);
        
        
        if ($con) {
            try {
                //Execute Query
                $result = $con->query($querrystring);
                if ($result) {
                    return $result;
                }
                
            }
            catch (Exception $e) {
                echo $e;
                
            }
        } else {
            echo "Not Connected";
        }
    }
}
?>