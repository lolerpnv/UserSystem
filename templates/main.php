<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 5.11.2015.
 * Time: 21:57
 */
echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

    <!-- Latest compiled JavaScript -->
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script

    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js'></script>
</head>
<body>
    <div class='container' style='align-self: center'>
        <a href='$PageData->templates/login.php' >
            <button type='button' class='btn btn-default'>
                Login
            </button>
        </a>

        <a href='$PageData->templates/register.php' >
            <button type='button' class='btn btn-default'>
                Register
            </button>
        </a>
    </div>
</body>
</html>
";