<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require(DIR_WS_INCLUDES . 'counter.php');
?>

<div class="grid_24 footer">
  <p align="center"><?php echo FOOTER_TEXT_BODY; ?></p>
</div>

<?php
  if ($banner = tep_banner_exists('dynamic', '10x0')) {
?>


<div class="grid_4 push_2" style="text-align: center; padding-bottom: 20px;">
    <p align="right"><?php echo tep_display_banner('static', $banner); ?>    </p>
</div>

<?php
  }
?>


<?php
if ($banner = tep_banner_exists('dynamic', '20x0')) {
?>
    <div class="grid_4 push_2" style="text-align: center; padding-bottom: 20px;">
        <p align="left">  <?php echo tep_display_banner('static', $banner); ?>  </p>
</div>
<?php
}
?>

<?php
if ($banner = tep_banner_exists('dynamic', '30x0')) {
    ?>
    <div class="grid_4 push_2" style="text-align: center; padding-bottom: 20px;">
        <p align="left">  <?php echo tep_display_banner('static', $banner); ?>  </p>
    </div>
<?php
  }
?>

<script type="text/javascript">
$('.productListTable tr:nth-child(even)').addClass('alt');
</script>
