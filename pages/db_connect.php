<?php
// connexion au serveur db avec mysqli 
$serv = "localhost";
$username = "root";
$pass = "";
$dbname="canoe";

$connex = mysqli_connect($serv, $username, $pass , $dbname);

if(!$connex){

    die("Connection failed" .mysqli_connect_error());
}
