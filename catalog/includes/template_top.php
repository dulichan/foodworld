<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

  $oscTemplate->buildBlocks();

  if (!$oscTemplate->hasBlocks('boxes_column_left')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }

  if (!$oscTemplate->hasBlocks('boxes_column_right')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<title><?php echo tep_output_string_protected($oscTemplate->getTitle()); ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>" />
<link rel="stylesheet" type="text/css" href="ext/jquery/ui/theme11/jquery-ui-1.10.3.css" />
<script type="text/javascript" src="ext/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.10.3.min.js"></script>

<script type="text/javascript">
// fix jQuery 1.8.0 and jQuery UI 1.8.22 bug with dialog buttons; http://bugs.jqueryui.com/ticket/8484
if ( $.attrFn ) { $.attrFn.text = true; }
</script>

<?php
  if (tep_not_null(JQUERY_DATEPICKER_I18N_CODE)) {
?>
<script type="text/javascript" src="ext/jquery/ui/i18n/jquery.ui.datepicker-<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>.js"></script>
<script type="text/javascript">
$.datepicker.setDefaults($.datepicker.regional['<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>']);
</script>
<?php
  }
?>

<script type="text/javascript" src="ext/jquery/bxGallery/jquery.bxGallery.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="ext/jquery/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="ext/jquery/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="ext/960gs/<?php echo ((stripos(HTML_PARAMS, 'dir="rtl"') !== false) ? 'rtl_' : ''); ?>960_24_col.css" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<?php echo $oscTemplate->getBlocks('header_tags'); ?>
<?php
 $supplier_id=$_GET['id'];
?>
<!--
start supplier page imports
-->
<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
<link rel="stylesheet" href="js/jRating.jquery.css" type="text/css" />
<script type="text/javascript" src="js/jRating.jquery.js"></script>
<script type="text/javascript">
					  $(document).ready(function(){
						  $('.basic').jRating();
						  $('.addreviewbtn').click(function(){
							  //$('.basic').jRating();
							  $('.addreviewcont').toggle();
						  });
						  $.post('view/fetchreviewdata.php', function(data){
							  if(data){
								  $('.reivewdatafetch').html(data);
								  reloadfunctions();
							  }
						  });//}
						    $.post('view/fetchsupdata.php?id=<?php echo $supplier_id;?>', function(data){
							//alert("fetchsupdata");
							  if(data){
								  $('.supdatafetch').html(data);
							  }
						  });
						  $('#chrisButton').click(function(){
								var name = $("#chrisName input").val();
								var email = $("#chrisEmail input").val();
								$.get('newsletter.php?'+'email='+email+'&name='+name, function(data){
									 alert("Subscription success");
									 $("#chrisName input").val("");
									 $("#chrisEmail input").val("");
								});//}
						   });
					  });
				  
					  function reloadfunctions(){
						  $(document).ready(function(){
							  $(".static").jRating({
								  isDisabled : true
							  });							  
						  });					  
					  }
				  				  
					  function fetchdatareview(){
						  $(document).ready(function(){
							  $('.basic').jRating();
							  $('textarea.commentbox').val('');
							  $.post('view/fetchreviewdata.php', function(data){
								   //alert('second');
								  if(data){
									  $('.reivewdatafetch').html(data);
									  reloadfunctions();
						 
									  $('.addreviewcont').toggle();						 
								  }
							  });//}
						  });					
					  }           
				  </script>
                  <script type="text/javascript">
					  $(document).ready(function(){
						  $(".static").jRating({
							  isDisabled : true
						  });
					  });
				  </script>
<!--
end supplier page imports
-->
</head>
<body>

<div id="bodyWrapper" class="container_<?php echo $oscTemplate->getGridContainerWidth(); ?>">

<?php require(DIR_WS_INCLUDES . 'header.php'); ?>

<div id="bodyContent" class="grid_<?php echo $oscTemplate->getGridContentWidth(); ?> <?php echo ($oscTemplate->hasBlocks('boxes_column_left') ? 'push_' . $oscTemplate->getGridColumnWidth() : ''); ?>">
