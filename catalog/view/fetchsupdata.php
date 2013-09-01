<?php
include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';
$supplier_id=$_GET['id'];
$reviwdata =reviewdatahandle::getInstance();
$result=$reviwdata->fetchSupplier($supplier_id);

//$veiw = mysqli_fetch_array ($result);

//print_r($veiw); 
	
	while($row=mysqli_fetch_array($result)){

		echo '<h1><label id="lblBrand">'.$row['suppliers_name'].'</label></h1>
				  <div id="tableDiv">
					  <table width="630"  border="0" >
						  <tbody>
						<tr>
								  <td width="80"  rowspan="4" class="style3">
								  <div id="itemImg" class="itemDiv">
										  <div style="border: 1px solid #d9cdcc;height:150px;">
											  
											  <table style=" width: 100%; height: 100%; text-align: center; vertical-align: middle;">
  												 <tr><td>
      													  <image src="'.$row['suppliers_image'].'" height="100" style="display: block; margin: 0 auto;"/>
    											</td></tr>
 											 </table>
										  </div>
									  </div>
									  </td>
									  <td width="100">
									  <h2><label>Telephone</label></h2>
									  <div>  
  											'.$row['suppliers_telephone'].'
  									 </div>
									  </td>
								  <td width="300">
									  <h2><label>Address</label></h2>
									  <div>  
										'.$row['suppliers_address'].'
  									 </div>
									  </td>
							  </tr>
						  </tbody>
					  </table>
  
				  </div>';
				
		}			

?>
