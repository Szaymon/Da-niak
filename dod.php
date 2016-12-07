<?php
session_start();
Include 'connect.php';

$submit=$_POST['dodaj'];
if($submit)
{
	$kategoria = strip_tags($_POST['kategoria']);
    $nazwa_prod = strip_tags($_POST['nazwa_prod']);
    $opis_prod = strip_tags($_POST['opis_prod']);
    $telefon = strip_tags($_POST['telefon']);
	$data = date("Y-m-s");
}
if(isset($_SESSION['login']))
    {
    $id_uzyt = $_SESSION['id'];
    $ogl = mysqli_query($polacz,"INSERT INTO ogloszenie (id_uzyt, id_kat, nazwa_prod, opis_prod, telefon ,data_dod) VALUES ('$id_uzyt', '$kategoria ', '$nazwa_prod', '$opis_prod', '$telefon', '$data')") or die('rower');
    header ('location : Basic.php');
    }
    else echo "Coś nie dziamga" ; 
    header ('location: abb_ogl.php');
?>