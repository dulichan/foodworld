<?php
  require('includes/application_top.php');
  if (!tep_session_is_registered('login')){
	  require('includes/supplier_area_top.php');
  }
	$cat = array(
				array(
					'title' => BOX_HEADING_SUPPLIERAREA,
					'image' => 'supplier.gif',
					'children' => array(
										array(
											'title' => BOX_HEADING_SUPPLIER_S_PRODUCTS,
											'link' => tep_href_link(FILENAME_SUPPLIER_S_CATEGORIES_PRODUCTS, 'selectbox=supplier')),
										array(
											'title' => BOX_HEADING_SUPPLIER_ORDERS,
											'link' => tep_href_link(FILENAME_SUPPLIER_ORDERS, 'selectbox=supplier')),
										array(
											'title' => BOX_HEADING_SUPPLIER_STATISTIC,
											'link' => tep_href_link(FILENAME_SUPPLIER_STATISTIC, 'selectbox=supplier')),
											array(
											'title' => BOX_HEADING_SUPPLIER_VIEWED,
											'link' => tep_href_link(FILENAME_SUPPLIER_VIEWED, 'selectbox=supplier')),
										)
				)
		);
  $languages = tep_get_languages();
  $languages_array = array();
  $languages_selected = DEFAULT_LANGUAGE;
  for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
    $languages_array[] = array('id' => $languages[$i]['code'],
                               'text' => $languages[$i]['name']);
    if ($languages[$i]['directory'] == $language) {
      $languages_selected = $languages[$i]['code'];
    }
  }
  
  
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE; ?></title>
<style type="text/css">
<!--
a { color:#080381; text-decoration:none; }
a:hover { color:#aabbdd; text-decoration:underline; }
a.text:link, a.text:visited { color: #000000; text-decoration: none; }
a:text:hover { color: #000000; text-decoration: underline; }
a.main:link, a.main:visited { color: #7187BB; text-decoration: none; }
A.main:hover { color: #D3DBFF; text-decoration: underline; }
a.sub:link, a.sub:visited { color: #dddddd; text-decoration: none; }
A.sub:hover { color: #dddddd; text-decoration: underline; }
a:link.headerLink { font-family: Verdana, Arial, sans-serif; font-size: 10px; color: #000000; font-weight: bold; text-decoration: none; }
a:visited.headerLink { font-family: Verdana, Arial, sans-serif; font-size: 10px; color: #000000; font-weight: bold; text-decoration: none }
a:active.headerLink { font-family: Verdana, Arial, sans-serif; font-size: 10px; color: #000000; font-weight: bold; text-decoration: none; }
a:hover.headerLink { font-family: Verdana, Arial, sans-serif; font-size: 10px; color: #000000; font-weight: bold; text-decoration: underline; }

#.heading { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; font-weight: bold; line-height: 1.5; color: #000000; }
.heading { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; font-weight: bold; line-height: 1.5; color: #D3DBFF; }
.main { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 17px; font-weight: bold; line-height: 1.5; color: #000000; }
.sub { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; line-height: 1.5; color: #dddddd; }
.text { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; line-height: 1.5; color: #000000; }
#.menuBoxHeading { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffff; font-weight: bold; background-color: #093570; border-color: #093570; border-style: solid; border-width: 1px; }
.menuBoxHeading { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffff; font-weight: bold; background-color: #7187bb; border-color: #7187bb; border-style: solid; border-width: 1px; }
.infoBox { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #080381; background-color: #ffffff; border-color: #7187bb; border-style: solid; border-width: 1px; }
.smallText { font-family: Verdana, Arial, sans-serif; font-size: 10px; }

.menusub { font-family: Verdana, Arial, sans-serif; font-size: 10px; }


.style1 {color: #00009B}
-->
</style>
</head>
<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" bgcolor="#FFFFFF">
<table border="0" width="600" height="100%" cellspacing="0" cellpadding="0" align="center" valign="middle">
  <tr>
    <td><table border="0" width="600" height="440" cellspacing="0" cellpadding="1" align="center" valign="middle">
      <tr bgcolor="#000000">
        <td><table border="0" width="600" height="440" cellspacing="0" cellpadding="0">
            <tr bgcolor="#ffffff" height="50">            <td height="50"></td>
    <td class="headerBarContent" align="right"  width="462" height="82"><?php echo '<a href="' . tep_catalog_href_link() . '" class="headerLink">' . HEADER_TITLE_ONLINE_CATALOG . '</a>'; ?>&nbsp;&nbsp;</td>

  </tr>
          <tr bgcolor="#ffffff"  valign="top">
            <td colspan="2"><table border="0" width="100%" cellspacing="0" cellpadding="2">
              <tr valign="top">
               
<?php
  $heading = array();
  $contents = array();
?>
                <td width="636" align="center" >
				<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                          <tr>
                            <td bgcolor="#F2F4FF" class="heading style1">Supplier's Area </td>
                          </tr>
</table>
				</td>
                  </tr>
<?php
  $col = 2;
  $counter = 0;
  for ($i = 0, $n = sizeof($cat); $i < $n; $i++) {
    $counter++;
    if ($counter < $col) {		
//      echo '                  <tr>' . "\n";
    }
    
    $cn = ($i >= 4 ? 2 : 1);
    
    ${'c' . $cn}.= '                    <table border="0" cellspacing="0" cellpadding="2">' . "\n" .
         '                      <tr>' . "\n" .
         '                        <td valign="top">' . tep_image(DIR_WS_IMAGES . 'categories/' . $cat[$i]['image'], $cat[$i]['title'], '283', '200') . '</td>' . "\n" .
         '                        <td><table border="0" cellspacing="0" cellpadding="2">' . "\n" .
         '                          <tr>' . "\n" .
         '                            <td class="main"></td>' . "\n" .
         '                          </tr>' . "\n" .
         '                          <tr>' . "\n" .
         '                            <td class="menusub">';

    $children = '';
    $children1 = '';
    $children2 = '';
    
    for ($j = 0, $k = sizeof($cat[$i]['children']); $j < $k; $j++) {
      
      if(isset($cat[$i]['cols'])) {
        if($j >= $cat[$i]['cols']) {
          $chn = 2;
        } else {
          $chn = 1;
        }
        ${'children'.$chn} .= '<a href="' . $cat[$i]['children'][$j]['link'] . '" class="menusub">' . $cat[$i]['children'][$j]['title'] . '</a><br>';
      } else {
        $children .= '<a href="' . $cat[$i]['children'][$j]['link'] . '" class="menusub">' . $cat[$i]['children'][$j]['title'] . '</a><br>';
      }
    }
    $children .= '<table><tr><td valign="top">' . $children1 . '</td><td valign="top">' . $children2 . '</td></tr></table>';
    
    
    ${'c' . $cn} .= $children;

    ${'c' . $cn} .='</td> ' . "\n" .
         '                          </tr>' . "\n" .
         '                        </table></td>' . "\n" .
         '                      </tr>' . "\n" .
         '                    </table>' . "\n";

    if ($counter >= $col) {
//      echo '                  </tr>' . "\n";
      $counter = 0;
    }
  }
?>

              <tr>
                <td valign="top">

                
                <? echo $c1;?></td>
              </tr>

                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php require(DIR_WS_INCLUDES . 'footer.php'); ?></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>

</html>
