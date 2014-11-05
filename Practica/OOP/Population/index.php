<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="../../../assets/js/libs/jquery-1.9.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $.ajax({
                    type: "GET",
                    url: "./getProvinces.php",
                    contentType: 'application/json; charset=UTF-8',
                    success: function(response) {
                        var select = $('#selectProvince');
                        $.each(response.provinces, function() {
                            select.append($('<option>').html(this));
                        });
                    },
                    error: function () {
                        alert('Hubo un problema para obtener los datos de las Provincias. Intente nuevamente más tarde.');
                    }
                });

                $('#selectProvince').change(function() {
                    var provincia = $('#selectProvince').val();
                    getCities(provincia);
                });

                function getCities(nameCity) {
                    $.ajax({
                        type: "GET",
                        data: {'provinceName': nameCity},
                        url: "./getCitiesByProvince.php",
                        contentType: 'application/json; charset=UTF-8',
                        //beforeSend: function(),
                        success: function(response) {
                            var select = $('#selectCity');
                            select.html('');
                            $.each(response.cities, function() {
                                select.append($('<option>').html(this));
                            });
                        },
                        error: function () {
                            alert('Hubo un problema para obtener los datos de las ciudades  de la provincia seleccionada. Intente nuevamente más tarde.');
                        }
                        //complete: function()
                    });
                }

            }
            );
        </script>
    </head>
    <body>
        <select id="selectProvince" style="">
            <option value="">Seleccione una Provincia</option>
        </select>
        <select id="selectCity">
            <option value="">Seleccione una Ciudad</option>
        </select>
    </body>

</html>
