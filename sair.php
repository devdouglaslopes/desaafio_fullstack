<?php
   session_start();
   session_destroy();
   header('Location: fazerlogin.php?logout=ok');
?>