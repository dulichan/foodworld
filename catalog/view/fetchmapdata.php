<?php 

include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';

$reviwdata = new reviewdatahandle(1);
$result = $reviwdata->fetchSupplier();
$array = mysqli_fetch_row($result);                          

echo json_encode($array);

?>