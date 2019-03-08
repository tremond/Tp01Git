<?php

function tryConnection ($login, $password) {
    $bdd = new PDO('mysql:host=localhost;dbname=tp01git;charset=utf8', 'root', '');
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

function getFiltreAnnee() {
    $bdd = new PDO('mysql:host=localhost;dbname=tp01git;charset=utf8', 'root', '');
    $sqlSelect = 
        "   SELECT DISTINCT(oeuvres.annee) 
            FROM oeuvres";
    $reponse = $bdd->query($sqlSelect);
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
    $reponse->closeCursor();
    return $donnees;        
}

function getFiltreTheme() {
    $bdd = new PDO('mysql:host=localhost;dbname=tp01git;charset=utf8', 'root', '');
    $sqlSelect = 
        "   SELECT DISTINCT(theme.nomTheme) 
            FROM theme";
    $reponse = $bdd->query($sqlSelect);
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
    $reponse->closeCursor();
    return $donnees;        
}

function listeOeuvresEnLigne() {
    $bdd = new PDO('mysql:host=localhost;dbname=tp01git;charset=utf8', 'root', '');
    $sqlSelect = 
        "   SELECT * 
            FROM oeuvres";
    $reponse = $bdd->query($sqlSelect);
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
    $reponse->closeCursor();
    return $donnees;
}



?>