<?php
session_destroy();
mysql_close();
header('location:serwis_ogl.php');	
?>