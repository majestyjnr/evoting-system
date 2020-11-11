$(document).ready(function(){
    done();
});
function done(){
    setTimeout(function() { 
        updates(); 
        done();}, 200);
}

function updates(){
    $.getJSON('records.php', function(data){
        $('ul').empty();
 
        $.each(data.result, function(){
            $('ul').append(this.value);
        })
     })
}