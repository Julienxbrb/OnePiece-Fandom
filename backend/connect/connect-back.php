<?php
include "../server-config.php";
var_dump($bdd);
session_start();
// COMPARRE L EMAIL ET LE MOT DE PASSE AVEC LA BDD
$connectTest = $bdd->query('SELECT * FROM users');
var_dump($connectTest);
if(isset($_POST['submit'])){
    while($connect = $connectTest->fetch()){
        if($_POST['email'] == $connect['email'] && $_POST['password'] == $connect['password']){
            echo '<script>alert("Connexion réussie")</script>';
            $_SESSION['email'] =$connect['email'];
            $_SESSION['password'] = $connect['password'];
            $_SESSION['role'] = $connect['role'];
            header('Location: ../../pages/admin/home.php');
        }
    }
}
