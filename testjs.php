<?php
require_once("./functions.php");
include("header.php");

/*
$oeuvres = listeOeuvresEnLigne();
foreach ($oeuvres as $oeuvre ) {
    echo json_encode('{ "id": '.$oeuvre['idOeuvre'].', "nom": '.$oeuvre['nomOeuvre'].', prix: '.$oeuvre['prix'].'}'); 
    echo '<br>';
}
?>

<p id="demo"></p>


*/

function getOeuvre() {
    if (!empty($_POST['idOeuvre'])) {
        $idOeuvre = $_POST['idOeuvre'];
    }

    $bdd = new PDO('mysql:host=localhost;dbname=tp01git;charset=utf8', 'root', '');
    $query = 'SELECT * FROM Oeuvres WHERE idOeuvre = '.$idOeuvre;
    $reponse = $bdd->query($query);
    $tab = array();
    while($data = $reponse->fetch())
		{
            $tab[] = $data;
            var_dump($tab);
		}
        echo json_encode($tab);
        
        
}

 
    include("footer.php");
?>