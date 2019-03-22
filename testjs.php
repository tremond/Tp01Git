<?php
    require_once("./functions.php");

    function getOeuvre() {
        if (!empty($_POST['idOeuvre'])) {

            $idOeuvre = $_POST['idOeuvre'];
        
            $bdd = connectToDatabase();
            $query = 'SELECT * FROM Oeuvres WHERE idOeuvre = '.$idOeuvre;

            $reponse = $bdd->query($query);

            $tab = array();

            while($data = $reponse->fetch()) {
                $tab[] = $data;
            }

            echo json_encode($tab);
        }
    }
?>