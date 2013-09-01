<?php
include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';

$reviwdata = reviewdatahandle::getInstance();
$result = $reviwdata->fetchdata();

    while($row=$result->fetch_array(MYSQLI_ASSOC)){
                //var_dump($row);
              //  echo $row['review'];
				
				$customer_result=$reviwdata->fetchCustomer($row['userid']); 
				if($customer=$customer_result->fetch_array(MYSQLI_ASSOC)){
                echo '<li>
                        <div class="static" data-average="'.$row['review'].'" data-id="1"></div>
    						
                           <i>"'.$row['reviewcomment'].'"</i>
                           <p>by '.$customer['customers_firstname'].'</p>
                       </li>';
            }
			}
				
?>
