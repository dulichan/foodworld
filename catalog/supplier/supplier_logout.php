<?php
// define how the session functions will be used
require('includes/application_top.php');
tep_session_destroy();
session_start();
tep_session_unregister('suppliers_login');
tep_session_unregister('login');
header('Location:supplier_area.php');
?>