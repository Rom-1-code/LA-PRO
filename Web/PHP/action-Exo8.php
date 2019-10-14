<?php 
   if(isset($_POST['cache']) AND $_POST['cache'] == 1) 
       session_destroy();
?>
