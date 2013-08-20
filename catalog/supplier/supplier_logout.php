<?php
session_start();
session_unregister('suppliers_login');
session_unregister('login');
header('Location:supplier_area.php');
?>