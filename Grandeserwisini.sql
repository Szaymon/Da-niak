CREATE database Serwis;
use Serwis;

CREATE table uzytkownicy (
id_uzyt int not null auto_increment ,
login text (32) not null  ,
haslo text (32) not null ,
email text (48) not null , 
imie text(32) not null ,
nazwisko text (32) not null,
telefon varchar(9)not null ,
data_ur date not null,
primary key (id_uzyt)
) ;


CREATE table kategoria (
id_kat int not null auto_increment ,
nazwa_kat text (32) not null ,
opis_kat text (32) not null  ,
primary key (id_kat)
);

CREATE table ogloszenie (
id_oglo int not null auto_increment ,
id_uzyt int not null ,
id_kat int not null ,
nazwa_kat text (32) not null ,
opis_prod text (32) not null ,
telefon varchar (9) not null ,
zdjecie text ,
primary key (id_oglo) ,
foreign key (id_uzyt)
references uzytkownicy (id_uzyt),
foreign key (id_kat)
references kategoria (id_kat)
);