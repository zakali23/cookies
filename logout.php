<?php session_start();
  if (!isset($_SESSION['loginName'])) {
   header('Location:login.php');}
else {
session_destroy();
    setcookie('pinuts', '', time() - 3600, '/');
    setcookie('choco', '', time() - 3600, '/');
    setcookie('chips', '', time() - 3600, '/');
    setcookie('mms', '', time() - 3600, '/');
    header('Location:login.php');}

   ?>
