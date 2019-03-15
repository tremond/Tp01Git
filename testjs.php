<?php
require_once("./functions.php");
listeOeuvresEnLigne();
foreach ($oeuvres as $oeuvre) {
    $tab = array('test 1' => "oui", 'test 2' => false);
}

echo json_encode($tab);
?>



