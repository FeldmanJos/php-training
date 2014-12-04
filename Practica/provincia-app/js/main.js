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
                    $('#provinces').html('');
                    for (var i = 0; i< response.length; i++){
                        var resaltar = '<b>'+response[i].name.substr(0,search.length)+'</b>'
                        $('#provinces').append('<br>' + '<li>' + resaltar + response[i].name.substr(search.length)+'</li>' + '<br>');
                    }
                    $('#contProv').html('');
                    $('#contProv').append('<br>'+'<li>'+'<b>Provincias Encontradas: '+response.length+'</li></b>'+'<br>'); 
                    if (response.length == 0) {
                        $('#contCities').html('');
                        $('#cities').html('No existen ciudades disponibles.');
                        $('#provinces').html('<b>No se han encontrado provincias.</b><br><font color="red">¿Ingresó correctamente el nombre de la provincia?</font>');
                    }
                 
                }
            });
        } else {
            $('#provinces').html('1. Ingrese una provincia en la búsqueda...');
            $('#contCities').html('');
            $('#cities').html('2. Seleccione una provincia de la lista a la izquierda para ver sus ciudades...');
            $('#contProv').html('');
          }
    });
$("#provinces").on('click','li',function(){
    $.ajax({
        url: 'filter_city.php',
        data: {"prov": $(this).text()},
        success: function(response1) {
            $('#cities').html('');
            for (var i = 0; i< response1.length; i++){
                $('#cities').append('<br>'+'<li>'+response1[i].name+'</li>'+'<br>');
                $('#contCities').html('');
                $('#contCities').append('<br>'+'<li>'+'<b>Ciudades Encontradas: '+response1.length+'</li></b>'+'<br>');
            }
            
        }
            });
    });
function updateList(province, search){
    var $li = $('<li></li>');
    var tail = province.substr(search.length);
    var htmlinner = '<span class = "match">'+search+'</span>'
}
});

