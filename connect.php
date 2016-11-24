<?php
$connect= mysql_connect("localhost","root","") or die ('Nie można połączyć z bazą danych', mysql_error());
$database=mysql_select_db('serwis',$connect) or die ('Brak bazy danych #CygańskieKradziejstwo'.mysql_error());
?>