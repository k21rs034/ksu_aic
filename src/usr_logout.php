<?php
 unset($_SESSION);
 session_destroy();
 header('Location:?do=usr_login');    
?>