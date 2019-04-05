$(document).ready(function() {
    
    function infoOeuvre(idOeuvre) {
        $.ajax({
            url : 'testjs.php',
            type : 'POST',
            data : 'idOeuvre=' + idOeuvre,
            success : function(code_html) {

                var infoOeuvre = JSON.parse(code_html);
                
                $("#block_infos #test").text(infoOeuvre[0]["annee"]);
            }
        })
    }
    
});

/*JE SAIS PAS TROP CE QUE JE FAIS
$(document).ready(function() {
    $("#checkboxAnnee1").click(update);
  });
  
  function update() {
    $.ajax({
      url: 'fichier PHP exécuté côté serveur.php',
      type: 'GET',
      data : 'oeuvres=' + oeuvres
    });
}*/


//id pour checkbox
$('#containerAnnee label').attr('id', function(i) {
    return 'checkboxAnnee'+(i+1);
});

$('#containerTheme label').attr('id', function(i) {
    return 'checkboxTheme'+(i+1);
});
 
