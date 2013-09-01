<?php 

include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';

$supplier_id=$_GET['id'];

$reviwdata = reviewdatahandle::getInstance();
$result = $reviwdata->fetchSupplier($supplier_id);
$array = mysqli_fetch_row($result);                          

echo json_encode($array);

?>