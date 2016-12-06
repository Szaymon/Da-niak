<?php
Include 'connect.php';

$submit = $_POST['loguj'];
if($submit)
{
    $login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo1']);
	$spr = $polacz -> query("SELECT login FROM uzytkownicy WHERE login  = '".$login."' and haslo='".$haslo."';");

		if($spr -> num_rows == 1){
				$tramwaj=$spr -> fetch_row();
			session_start();
				$session_login = $tramwaj[0];
				$_SESSION['login'] = $session_login;
				
				echo "Wygrałeś tramwaj"; header('location: Basic.php ');
		}
		else {
			echo"coś sie zepsuło";	header('location: serwis_ogl.php');	
}}

?>