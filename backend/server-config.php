<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onepiecefandom";

// Create connection

$bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
