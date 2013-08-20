<?php
/*
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
  
  Google Infobox Translator Contribution 1.3 Dec29 2004.

  By: Apisith Chawla
  Email: apisith@gmail.com
 
  Tweaked By: David Hanwell
  eMail: webmaster@linemanhut.co.uk

  Variable pass through By: Tom St.Croix
  eMail: management@betterthannature.com
  
  Tweaked By: Dan Ashdown
  eMail: dan.ashdown@gmail.com
  
  This is not part of the official release of
  osCommerce.

*/
?>
<!-- languages //-->
          <tr>
            <td>
<?php   
  $info_box_contents = array();
  $info_box_contents[] = array('text' => LANGUAGES);

  new infoBoxHeading($info_box_contents, false, false);

  $info_box_contents = array();
  
  $fromLang = "el";
  $originalPage = HTTP_SERVER .$_SERVER['REQUEST_URI'];
  
  if(isset($_GET['hl'])) {
    $fromLang = $_GET['hl'];
	$originalPage = $_GET['u'];
  }
  
  $info_box_contents[] = array('align' => 'center','text' => 
			       '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=en\';" href="javascript:;"><img src="../../images/languages/english.gif" ALT="English"  border="0"></a>&nbsp;' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=fr\';" href="javascript:;"><img src="../../images/languages/french.gif" ALT="French"  border="0"></a>&nbsp;' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=es\';" href="javascript:;"><img src="../../images/languages/spanish.gif"  ALT="Spanish"  border="0"></a><br>' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=de\';" href="javascript:;"><img src="../../images/languages/german.gif"  ALT="German"  border="0"></a>&nbsp;' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=it\';" href="javascript:;"><img src="../../images/languages/italian.gif"  ALT="Italian" border="0"></a>&nbsp;' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=pt\';" href="javascript:;"><img src="../../images/languages/portuguese.gif"  ALT="Portuguese" border="0"></a><br>' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=ko\';" href="javascript:;"><img src="../../images/languages/korea.gif"  ALT="Korean" border="0"></a>&nbsp;' .
                                                             '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=ja\';" href="javascript:;"><img src="../../images/languages/japan.gif"  ALT="Japanese" border="0"></a>&nbsp;' .
	 		      '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=ar\';" href="javascript:;"><img src="../../images/languages/arabic.gif"  ALT="Arabic" border="0"></a>&nbsp;' .
			    '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=el\';" href="javascript:;"><img src="../../images/languages/greek.gif"  ALT="Greek" border="0"></a>&nbsp;' .
			     '<a onclick="javascript:top.location = \'http://translate.google.com/translate?u='.$originalPage.'&langpair='.$fromLang.'&hl=tr\';" href="javascript:;"><img src="../../images/languages/turkish_flag.gif"  ALT="Turkce" border="0"></a>');
  new infoBox($info_box_contents);
?>
            </td>
          </tr>
<!-- languages_eof //-->
