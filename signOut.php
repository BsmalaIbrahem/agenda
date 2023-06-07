<?php 
include 'nav.php';
 session::destroy_session();
 echo '<script>location = "login.php";</script>';
?>