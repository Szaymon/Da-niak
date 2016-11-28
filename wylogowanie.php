<?php
session_destroy();
mysql_close();
header('location:logowanie.html');	
?>