<?php
include("header.php");
?>
<div class="row grey lighten-2" style="text-align:center">
    <h2>Image de présentation</h2>
</div>

<script scr="script.js"></script>
<div class="container">
    <div class="row" id="ligneTitre">
        <h4>BRYANGELO CRANG</h4>
    </div>
    <div class="row" id="ligneMeilleurPaint">
        <img src="lourdCetteImage" id="meilleurePaint" alt="FranklinInTheHood">
    </div>
    <div class="row" style="text-align:center">
    Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.
    </div>

    <div class="container">
            <div class="row grey lighten-2" style="text-align:center">
                <h4>Mes oeuvres</h4>
            </div>
    </div>

    <div class="container">
        <div class="row grey lighten-2">
            <div class="col s3">
                <p class="flat-text-header">
                    Filtrer par :
                </p>
                <form action="#">
                    <p class="flat-text">Année : <br>
                        <?php
                        $dateOeuvre = getFiltreAnnee();
                        foreach ($dateOeuvre as $date ) {
                            echo '<label><input type="checkbox"/><span>'.$date['annee'].'</span></label><br>';
                        }
                        ?>
                    </p>
                    <p class="flat-text">Thème : <br>
                        <?php
                        $themes = getFiltreTheme();
                        foreach ($themes as $theme) {
                            echo '<label><input type="checkbox"/><span>'.$theme['nomTheme'].'</span></label><br>';
                        }
                        ?>
                    </p>
                </form> 
            </div>


            <div class="col s9" id="containerOeuvre">
                    <?php 
                    $oeuvres = listeOeuvresEnLigne();
                    foreach ($oeuvres as $oeuvre) {
                        echo '  <div class="col s3">
                                    <div id="cardOeuvre" class="card">
                                        <div class="card-image">
                                            <img src="">
                                        </div>
                                        <div class="card-content">
                                            <p>'.$oeuvre['nomOeuvre'].'</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="pageAchat.php?oeuvre='.$oeuvre['nomOeuvre'].'" style="color:#00e676; text-align:center; margin:0">Acheter</a>
                                            <a id="lienAcheter" href="#">Acheter</a>
                                            <p>'.$oeuvre['prix'].' $</p>
                                        </div>
                                    </div>    
                                </div>';
                    } 
                    ?>
                
            </div>
        </div>
    </div>    
</div>



<div id="block_infos">
		<div><span class="title_info">Alors peut etre (année): </span> <span id="test"></span></div>
</div>

<?php
    $bdd = connectToDatabase();
    $query = 'SELECT * FROM Oeuvres';
    $reponse = $bdd->query($query);

    if (!empty($reponse) && $reponse->rowCount() > 0) {

?>
        <h2>TEST OEUVRE AJAX</h2>
        <div class="container">
            <div class="row">
                <div class="container">
<?php

                while($data = $reponse->fetch()) {
?>

                    <div id="<?php echo $data["idOeuvre"];?>"></div>
<?php
                }
    }
?>

            </div>
        </div>
    </div>

<?php
    include("footer.php");
?>

