<?php

function tryConnection ($login, $password) {
    $bdd = new PDO('mysql:host=localhost;dbname=tp09web;charset=utf8', 'root', '');
    $sqlSelect = 
        "   SELECT * 
            FROM Users 
            WHERE login = '$login' 
            AND password = SHA1('$password')";
    
    $reponse = $bdd->query($sqlSelect);
    //remplace du while
    $donnees = $reponse->fetchAll();
    $reponse->closeCursor();
    if(!empty($donnees)) {
        return $donnees[0];
    }
    return $donnees;
}

?>