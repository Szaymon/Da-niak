<?php
session_start();
$polacz = mysql_connect('localhost','root','');
mysql_select_db('serwis',$polacz);

$submit = $_POST['loguj'];
if($submit)
{
    $login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo1']);
	
if (mysql_num_rows(mysql_query("SELECT login, haslo FROM uzytkownicy WHERE login= '".$login."' AND haslo = '".($haslo1)."';")) > 0){		
		
?>