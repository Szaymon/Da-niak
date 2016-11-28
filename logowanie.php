<?php
$polacz = new mysqli("localhost","root","","serwis");

$submit = $_POST['loguj'];
if($submit)
{
    $login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo1']);
	$rower = $polacz -> query("SELECT login FROM uzytkownicy WHERE login  = '".$login."' and haslo='".$haslo."';");

		if($rower -> num_rows == 1){
				$tramwaj=$rower -> fetch_row();
			session_start();
				$session_login = $tramwaj[0];
				$_SESSION['login'] = $session_login;
				
				echo "Wygrałeś tramwaj";header('location:strona_główna.html ');
		}
		else echo"coś sie zepsuło";
}

?>