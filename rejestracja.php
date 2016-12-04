<?php
$polacz = mysql_connect('localhost','root','');
mysql_select_db('serwis',$polacz);

$submit = $_POST['Rejestruj'];
if($submit)
{
    $login = strip_tags($_POST['login']);
    $haslo = strip_tags($_POST['haslo1']);
    $powtorz_haslo = strip_tags($_POST['haslo2']);
    $email = strip_tags($_POST['email']);
    $imie = strip_tags($_POST['imie']);
    $nazwisko = strip_tags($_POST['nazwisko']);
    $telefon = strip_tags($_POST['telefon']);
    $data_ur = strip_tags($_POST['data_ur']);
}
if (mysql_num_rows(mysql_query("SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
    {
        if (mysql_num_rows(mysql_query("SELECT email FROM uzytkownicy WHERE email = '".$email."';")) == 0)
        {
            if ($haslo == $powtorz_haslo) 
            {
                mysql_query("INSERT INTO uzytkownicy SET login='$login ', haslo='$haslo' , email='$email',imie='$imie',nazwisko='$nazwisko',telefon='$telefon ',data_ur='$data_ur '" ); 
 
                echo "Konto zostało utworzone!";
				header('location: strona_glowna.html ');
            }
            else echo "Hasła nie są takie same";
        }
        else echo "Podany email jest już zajęty.";
    }
    else echo "Podany login jest zajęty" ;
header('location: rejestracja.html');
?>

