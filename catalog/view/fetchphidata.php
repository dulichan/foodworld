<?php 

include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';

$supplier_id=$_GET['id'];

$reviwdata = reviewdatahandle::getInstance();
$result = $reviwdata->fetchSupplier($supplier_id);
$array = mysqli_fetch_row($result);                          
//print_r($array);
echo '<label><strong>  PHI No : </strong>'.$array['13'].' &nbsp <strong>  PHI From : </strong>'.$array['14'].'   <strong>To :</strong> '.$array['15'].'</label>';

?>