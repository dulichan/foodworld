<?php
/*
  $Id: header.php,v 1.19 2002/04/13 16:11:52 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size > 0) {
    echo $messageStack->output();
  }
?>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
     </tr>
  <tr class="headerBar">
    <td class="headerBarContent">&nbsp;</td>
    <td class="headerBarContent" align="right"><?php echo '<a href="' . tep_catalog_href_link() . '" class="headerLink">' . HEADER_TITLE_ONLINE_CATALOG . '</a>'; ?>&nbsp;&nbsp;</td>
  </tr>
</table>