<?php
  require_once('template.php');
  require_once('config_import.php');
  require_once('db.php');
  require_once('functions.php');
  //session_set_cookie_params(120);
  ini_set('session.gc_maxlifetime','240');
  session_start();
?>
