<?php 

    if (!isset($_SESSION)) session_start();
    
 
  if (!isset($_SESSION['ID'])) {
     
      session_destroy();
      
      header("Location: index.php"); exit;
    
    }
    
  ?>
  