<?php
include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';

$reviwdata = new reviewdatahandle(1);
$result = $reviwdata->fetchdata();

    while($row=$result->fetch_array(MYSQLI_ASSOC)){
                //var_dump($row);
              //  echo $row['review'];
                
                echo '<li>
                        <div class="static" data-average="'.$row['review'].'" data-id="1"></div>
    
                           <i>"'.$row['reviewcomment'].'"</i>
                           <p>by '.$row['userid'].'</p>
                       </li>';
            }
				
?>
