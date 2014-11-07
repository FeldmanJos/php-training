<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Provinces</title>
  <link rel="stylesheet" href="css/main.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    <?php if (isset($_GET['searchbox'])):?>
        
    <?php endif?>
    <form id="search">
        <input type="text" id="searchbox" name="searchbox" placeholder="Search..." method="GET">
        <input type="submit" id="searchbtn" value="Search"/>
    </form>
    <hr>
</body>

</html>