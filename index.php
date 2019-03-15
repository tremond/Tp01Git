<?php
include("header.php");
?>
<div class="row grey lighten-2" style="text-align:center">
    <h2>Image de présentation</h2>
</div>

<div class="container">
    <div class="row" style="text-align:center">
        <h4>BRYANGELO CRANG</h4>
        <img src="FranklinInTheHood" alt="FranklinInTheHood">
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
        <!--Filtre-->
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

            <!-- Oeuvres -->
            <div class="col s9" style="text-align:center">
                    <?php 
                    $oeuvres = listeOeuvresEnLigne();
                    foreach ($oeuvres as $oeuvre) {
                        echo '  <div class="col s3">
                                    <div class="card" style="width:73%">
                                        <div class="card-image">
                                            <img src="">
                                        </div>
                                        <div class="card-content">
                                            <p>'.$oeuvre['nomOeuvre'].'</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="#" style="color:#00e676; text-align:center; margin:0">Acheter</a>
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

<?php
    include("footer.php");
?>