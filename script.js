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

$(document).ready(function() {
    $("#UpdateButton").click(update);
  });
  
  function update() {
    $.ajax({
      url: '/Transactions/NativeUpdate',
      type: 'POST',
      dataType: 'json'
    });
}


//id pour checkbox
$('#containerAnnee label').attr('id', function(i) {
    return 'checkbox'+(i+1);
 });