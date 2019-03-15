var test = "je suis un tableau ";

$.ajax({
    url : 'testjs.php',
    type : 'POST',
    data : 'nomTest=' + test,
    success : function(code_html) {
        console.log(code_html);

        

        /*$(".jambon").html(code_html);*/
    }
});