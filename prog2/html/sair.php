<?php
  session_start();
  session_destroy();
  header("Location: ../html/principal-sl.php");
?>
