<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 6.11.2015.
 * Time: 20:30
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


    <div class='container'>
    <h2>Login</h2>
        <form role='form' action='http://localhost/OsijekNightlife-Site/index.php?page=log' method='post'>
          <div class='form-group'>
            <label for='email'>Email address:</label>
            <input type='email' class='form-control' id='email' name='email'>
          </div>
              <div class='form-group'>
                <label for='pwd'>Password:</label>
                <input type='password' class='form-control' id='password' name='password'>
              </div>
          <button type='submit' class='btn btn-default'>Submit</button>
        </form>
    </div>

</body>
</html>
";