<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 6.11.2015.
 * Time: 20:46
 */
function generateRandomString($length = 22) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
function register($email,$username,$password)
{
    require("query.php");
    $var = boolQuery("SELECT * FROM users WHERE email=:var",$email);
    $var2 = boolQuery("SELECT * FROM users WHERE username=:var",$username);

    if($var) return "email already registered";
    else if($var2) return "username already registered";
    else{
        $salt = generateRandomString();
        $options = [
            'salt' => $salt,
            'cost' => 10
        ];
        $hash = password_hash($password,PASSWORD_DEFAULT,$options);

        putOnDB($email,$username,$salt,$hash);
        return "Registered";
    }
}
function putOnDB($email,$username,$salt,$hash)
{
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $user = "tpap";
    $pass = "ArVz.318.BE";

    $link = "mysql:host=localhost;dbname=tpap";
    try {
        $dbh = new PDO($link, $user, $pass);

    } catch (PDOException $e) {
        die("Unable to connect: " . $e->getMessage());
    }
    try {
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->beginTransaction();
        $stmt = $dbh->prepare("insert into users(email,username,salt) VALUES (:em,:usr,:sal)");
        $stmt->bindparam(':em',$email);
        $stmt->bindparam(':usr',$username);
        $stmt->bindparam(':sal',$salt);
        $stmt->execute();
        $dbh->commit();

        $dbh->beginTransaction();
        $stmt2 = $dbh->prepare("insert into pass(hash)VALUE (:has)");
        $stmt2->bindParam(':has',$hash);
        $stmt2->execute();
        $dbh->commit();

    } catch (Exception $e) {
        $dbh->rollBack();
        echo "\nFailed: " . $e->getMessage();
    }
}