<?php
/*
  $Id: links.php,v 1.00 2003/10/02 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
?>
<!-- links //-->
          <tr>
            <td>
<?php
  $heading = array();
  $contents = array();

  $heading[] = array('text'  => BOX_CATALOG_SUPPLIERADMIN,
                     'link'  => tep_href_link(FILENAME_SUPPLIERSADMIN, 'selected_box=suppliersadmin'));

    $contents[] = array('text'  => '<a href="' . tep_href_link(FILENAME_SUPPLIERSADMIN, '', 'NONSSL') . '" class="menuBoxContentSupplier">' . BOX_SUPPLIERADMIN . '</a>');


  $box = new box;
  echo $box->menuBox($heading, $contents);
?>
            </td>
          </tr>
<!-- links_eof //-->
