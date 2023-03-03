<?php
$db_connect = mysqli_connect('localhost','root','','baza');
//zmienne
$data = $_POST['data'];
$ilosc_osob = $_POST['osoby'];
$nr_tel = $_POST['nr_tel'];
//zapytanie
$zapytanie = "INSERT INTO rezerwacje (data_rez,liczba_osob,telefon) VALUES('$data','$ilosc_osob','$nr_tel')";
$wynik = mysqli_query($db_connect,$zapytanie);
// przekierowanie
header('location: restauracja.php');
?>