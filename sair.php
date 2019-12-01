<?php
  session_start();
  session_destroy();
  header("Location: ../prog2/html/login.php");
?>
