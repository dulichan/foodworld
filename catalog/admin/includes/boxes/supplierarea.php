<?php
/*
  $Id: configuration.php,v 1.17 2003/07/09 01:18:53 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
?>
<!-- configuration //-->
          <tr>
            <td>
<?php
  $heading = array();
  $contents = array();

  $heading[] = array('text'  => BOX_HEADING_SUPPLIERAREA,
                     'link'  => tep_href_link(FILENAME_SUPPLIERAREA, 'gID=1&selected_box=supplierarea'));

  {
     $contents[] = array('text'  => '<a href="' . tep_href_link(FILENAME_SUPPLIER_S_CATEGORIES_PRODUCTS, 'gID=1&selected_box=supplierarea') . '" class="menuBoxContentLink">' . BOX_HEADING_SUPPLIER_S_PRODUCTS . '</a><br>' .
	'<a href="' . tep_href_link(FILENAME_SUPPLIER_STATISTIC, 'gID=1&selected_box=supplierarea') . '" class="menuBoxContentLink">' . BOX_HEADING_SUPPLIER_STATISTIC . '</a><br>' .
	'<a href="' . tep_href_link(FILENAME_SUPPLIER_VIEWED, 'gID=1&selected_box=supplierarea') . '" class="menuBoxContentLink">' . BOX_HEADING_SUPPLIER_VIEWED . '</a><br>' .
    '<a href="' . tep_href_link(FILENAME_SUPPLIER_LOGOUT, 'gID=1&selected_box=supplierarea') . '" class="menuBoxContentLink">' . BOX_HEADING_SUPPLIER_LOGOUT . '</a><br>'

						);
  }
  $box = new box;
  echo $box->menuBox($heading, $contents);
?>
            </td>
          </tr>
<!-- configuration_eof //-->
