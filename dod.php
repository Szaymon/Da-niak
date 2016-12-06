<?php
session_start();
Include 'connect.php';

$submit=$_POST['dodaj'];
if($submit)
{
	$nazwa_prod = strip_tags($_POST['nazwa_prod']);
	$opis_prod = strip_tags($_POST['opis_prod']);
	$telefon = strip_tags($_POST['telefon']);		
}
if(isset($_SESSION['login']))
	{
	$ogl = mysqli_query($polacz,"INSERT INTO ogloszenie (nazwa_prod,opis_prod,telefon) VALUES ('$nazwa_prod','$opis_prod','$telefon')") or die('rower');
	header ('location : Basic.php');
	}
	else echo "Coś nie dziamga" ; 
	header ('location: abb_ogl.php');
?>