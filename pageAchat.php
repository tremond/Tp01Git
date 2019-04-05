<?php
    include("header.php");

    $bdd = new PDO('mysql:host=localhost;dbname=ppe2;charset=utf8', 'root', '');

    $oeuvres = listeOeuvresEnLigne();
    foreach ($oeuvres as $oeuvre) {
        if($oeuvre['nomOeuvre'] == $_GET['oeuvre']) {
            echo $oeuvre['nomOeuvre'];
        }
    }


?>
<div class="container">
    <div class="boutonAchat">
        <form method="post" id="acheter" action="pageAchat.php">
            <input class=bouton type="submit" value="Acheter"/>
        </form>
    </div>
</div>



<?php



    include("footer.php");
?>