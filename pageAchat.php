<?php
    include("header.php");

    $oeuvres = listeOeuvresEnLigne();
    foreach ($oeuvres as $oeuvre) {
        if($oeuvre['nomOeuvre'] == $_GET['oeuvre']) {
            echo $oeuvre['nomOeuvre'];
        }
    }
?>
<div class="container">
    <div class="boutonAchat">
        <input class=bouton type="submit" value="Acheter"/>
    </div>
</div>



<?php



    include("header.php");
?>