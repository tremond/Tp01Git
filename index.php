<?php
include("header.php");
?>
<div id=topIndex class="row grey lighten-2">
    <h2>Image de présentation</h2>
</div>

<div class="container">
    <div class="row" style="text-align:center">
        <h4>BRYANGELO CRANK</h4>
        <img src="FranklinInTheHood" alt="FranklinInTheHood">
    </div>
    <div class="row" style="text-align:center">
    Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.
    </div>

    <div class="container">
        <div class="row grey lighten-2" style="text-align:center">
            <h4>Mes ouevres</h4>
        </div>

        <h4>Filtrer par :</h4> 
            <form action="#">
                <p>
                    <label><input type="checkbox"/><span>2018</span></label>
                    <label><input type="checkbox"/><span>2017</span></label>
                    <label><input type="checkbox"/><span>2017</span></label>
                </p>
            </form>

        <?php 
        $oeuvres = ListeOeuvresEnLigne();
        foreach ($oeuvres as $oeuvre) {
            echo '';
        } 
        var_dump($listeOuvre);
        ?>
    </div>
</div>
    
