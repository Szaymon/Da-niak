<?php
Include 'connect.php'

$submit=$_POST['dodaj']
if($submit)
{
	$nazwa_kat = strip_tags($POST['naz']);
	$opis_prod = strip_tags($POST['opis']);
	$telefon = strip_tags($POST['telefon']);	
}
if(isset($_SESSION['login']))
	{
	mysql_query("INSERT INTO ogloszenie SET nazwa_kat='$nazwa_kat' , opis_prod='$opis_prod' , telefon='$telefon'");
	}
	else echo "Zrób sobie konto dziadu" ; header('location: rejestracja.html' );
?>