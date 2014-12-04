<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Provinces</title>
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="containers">
            <div class="search">
                <input type="text" id="searchbox" name="searchbox" placeholder="Search..." method="GET">
                <input type="submit" id="searchbtn" value="Search"/>
                
            </div>
            <div class="resultbox">
                <div class="column-left">
                    <ul id="provinces">
                        <li>1. Ingrese una provincia en la búsqueda...</li>
                    </ul>
                    <ul id="contProv">
                        <li></li>
                    </ul>
                </div>
                <div class="column-right">
                    <ul id="cities">
                        <li>2. Seleccione una provincia de la lista a la izquierda para ver sus ciudades...</li>
                    </ul>
                    <ul id="contCities">
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>