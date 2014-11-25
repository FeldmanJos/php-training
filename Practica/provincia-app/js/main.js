$(document).ready(function() {
    $("#searchbox").focus();
    $("#searchbox").keyup(function(){
        var search = $("#searchbox").val();
        if (search.length>=1){
            $.ajax({
                type: "GET",
                url: 'filter_province.php',
                data: {"data": search},
                success: function(response) {
                    $('#results').html('');
                    
                    for (var i = 0; i< response.length; i++){
                        $('#results').append('<br>'+'<li>'+response[i].name+'</li>'+'<br>');
                                                                       
                    }
                 
                }
            });
        }
    });
$("#results").on('click','li',function(){
    $.ajax({
        url: 'filter_city.php',
        success: function(response1) {
            $('#cities').html('');
            for (var i = 0; i< response1.length; i++){
                $('#cities').append('<br>'+'<li>'+response1[i].name+'</li>'+'<br>');
            }
            
        }
            });
    });

});