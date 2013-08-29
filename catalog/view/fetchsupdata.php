<?php
include_once '../dbconnection.php';
include_once '../Model/reviewdatahandle.php';

$reviwdata = new reviewdatahandle(1);
$result=$reviwdata->fetchSupplier();

//$veiw = mysqli_fetch_array ($result);

//print_r($veiw); 
	
	while($row=mysqli_fetch_array($result)){

		echo '<label id="lblBrand">'.$row['s_name'].'</label>
				  <div id="tableDiv">
					  <table width="630"  border="0" >
						  <tbody>
						<tr>
								  <td width="80"  rowspan="4" class="style3">
								  <div id="itemImg" class="itemDiv">
										  <div style="border: 1px solid #d9cdcc;height:150px;">
											  <div style="margin-left: 37.5px;margin-top: 25px;">
												  <image src="'.$row['img_url'].'" height="100"/>
											  </div>
										  </div>
									  </div>
									  </td>
									  <td width="50">
									  <label>Telephone</label>
									  <div>  
  											'.$row['t_no'].'
  									 </div>
									  </td>
								  <td width="300">
									  <label>Address</label>
									  <div>  
										'.$row['address'].'
  									 </div>
									  </td>
							  </tr>
						  </tbody>
					  </table>
  
				  </div>';
				
		}			

?>
