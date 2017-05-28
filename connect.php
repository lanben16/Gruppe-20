<?php
/* Lager variabler med login info */
$port = 3306;
    
$username = 'lanben16_gr20';
    
$password = 'Ntcrvy&6])8k';
    
$name = 'lanben16_Barer';
    
// Lager en connection til databasen med UTF8 for å få kunne printe ut norske bokstaver
$connection = new PDO("mysql:host=tek.westerdals.no;dbname={$name};charset=UTF8;port={$port}", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>
