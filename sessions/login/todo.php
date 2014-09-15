<!DOCTYPE html>
<html>
<?php session_start();?>
<head>

  <meta charset="UTF-8">

  <title>To Do List</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<?php if (isset($_SESSION['name']) && isset($_SESSION['pass'])):?>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial; background-repeat: initial initial;">Sign up</h1>
            <form action="login.php" method="POST" id="form-login">
                <div class="form-group">
                    <input id="task" class="inline-input" name="task" class= "task" placeholder="New task">
                    <button class="inline-button">Add</button>
                </div>
            </form>
        <ul>
            <li>Vacation planning</li>
            <li>Meeting client</li>
            <li>Coding</li>
        </ul>
    </div>
</div>
<script src="js/index.js"></script>
<?php else: ?>
  <?php Header('Location: index.php') ?>;
<?php endif; ?>
</body>

</html>
