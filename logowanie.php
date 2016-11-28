<?php
$polacz = mysql_connect('localhost','root','') or die ("nie można połączyć z bazą danych");
mysql_select_db('serwis',$polacz) or die("nie ma takiej bazy danych");

$submit = $_POST['loguj'];
if($submit)
{
    $login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo']);

if (mysql_num_rows(mysql_query("SELECT login FROM uzytkownicy WHERE login  = '".$login."';")) > 0)
	{	
	if (mysql_num_rows(mysql_query("SELECT haslo FROM uzytkownicy WHERE haslo = '".$haslo."';")) > 0)
		{
			session_start();
				$session_login = $row['login'];
				$_SESSION['login'] = $session_login;
				$session_haslo = $row['haslo'];
				$_SESSION['haslo'] = $session_haslo;
		}
		else echo "Zły login";
	}
		else echo"Hasło popraw";
}
?>