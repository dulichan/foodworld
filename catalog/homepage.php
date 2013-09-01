<?php
  include 'dbconnection.php';
 // include 'Model/reviewdatahandle.php';
  require('includes/application_top.php'); 
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRODUCT_REVIEWS_INFO);
  require(DIR_WS_INCLUDES . 'template_top.php');
?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
      function initialize() {
/*$.ajax({
    type: 'json',
    url: 'view/fetchmapdata.php',
    success: function(data) {
        alert(data[0]);
    },  
    error: function() {
        alert('Page not found.');
    }
});*/


	$.ajax({                                      
      url: 'view/fetchmapdata.php?id=<?php echo $supplier_id;?>',    //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		/*alert(data[6]);*/
        var map_canvas = document.getElementById('map_canvas');
		var latlng=new google.maps.LatLng(data[12],data[11]);
        var map_options = {
          center: latlng,
          zoom: 8,
		   scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
		var myMarker2 = new google.maps.Marker({
  		position: latlng,
  		map: map,
  		title:data[1]
		});  
	 }
	 });	
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<!--<div id="bodyContent" class="grid_16 push_4">-->
<div>
  <div class="supdatafetch"> </div>
  <br/>
  <div id="map_canvas"></div>
  <br/>
  <div class="reviewContainer reviewlist">
    <h1>Review List</h1>
    <ul class="reivewdatafetch">
      <li><i>No review</i></li>
    </ul>
  </div>
  <br/>
  <div class="addreview">
    <input type="button" class="addreviewbtn" value="Add Review"/>
    <div class="addreviewcont">
      <div class="basic" data-average="12" data-id="1"></div>
      Comment:-
      <textarea class="commentbox"></textarea>
      <?php   		
   		if (tep_session_is_registered('customer_first_name') && tep_session_is_registered('customer_id')) {
      			$customer_id=tep_output_string_protected($customer_id);
				echo "<input type='hidden' class='usrid' value='$customer_id'/>";
		}?>
      
      <input type="button" value="Submit" class="submitval"/>
    </div>
  </div>
  </div>
<!--</div>-->
<!-- bodyContent //-->
<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
