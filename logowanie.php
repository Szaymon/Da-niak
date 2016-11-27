<?php
$polacz = mysql_connect('localhost','root','');
mysql_select_db('serwis',$polacz);

$submit = $_POST['loguj'];
if($submit)
{
    $login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo1']);

if (mysql_num_rows(mysql_query("SELECT login FROM uzytkownicy WHERE login  = '".$login."';")) > 0)
	{	
	if (mysql_num_rows(mysql_query("SELECT haslo FROM uzytkownicy WHERE haslo = '".$haslo1."';")) > 0)
	{
			session_start();
				$session_login = $row['login'];
				$_SESSION['login'] = $session_login;
				$session_haslo = $row['haslo1'];
				$_SESSION['haslo1'] = $session_haslo;
	}
		else echo "Zły login";
	}
		else echo"Chujowe hasło popraw";
}
?>