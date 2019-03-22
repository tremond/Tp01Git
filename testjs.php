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


<?php 
    include("footer.php");
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
		}
		echo json_encode($tab);
}

?>


