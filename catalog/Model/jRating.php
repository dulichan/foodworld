<?php

include '../dbconnection.php';

$dbcon = dbconnection::getInstance();



if (isset($_POST['action'])) {
	
    if (htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'rating') {
        
         //vars
       
		
        $id = intval($_POST['idBox']);
        $rate = floatval($_POST['rate']);
        $comment = $_POST['comment'];
        $userid = $_POST['userid'];
        //die;
        $sql = 'INSERT INTO reviewdata (userid,review,reviewcomment) VALUES ("' . $userid . '","' . $rate . '","' . $comment . '")';
		
        //echo json_encode($comment);
        // json datas send to the js file
        if ($dbcon->connect($sql)) {
            echo json_encode('success');
            //  return 'success';
        } else {
            //   $aResponse['error'] = true;
            echo json_encode('error');
        }
    }
	
}
	
	// echo json_encode('success');
	?>
	