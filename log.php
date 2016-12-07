<?php
Include 'connect.php';

$submit = $_POST['loguj'];
if($submit)
{
	
	$login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo1']);
	$spr = $polacz -> query("SELECT * FROM uzytkownicy WHERE login  = '".$login."' and haslo='".$haslo."';");
	
		if($spr -> num_rows == 1){
			while ($row = mysqli_fetch_assoc($spr)){
			session_start();
			$session_login = $row['login'];
            $_SESSION['login'] = $session_login;
            $session_id = $row['id_uzyt'];
            $_SESSION['id'] = $session_id;
		echo "Wygrałeś tramwaj";
		header('location: Basic.php ');
        }
		}
		else {
			echo"coś sie zepsuło";	header('location: serwis_ogl.php');	
}}

?>
