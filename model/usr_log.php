<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 6.11.2015.
 * Time: 20:46
 */

function getHash()
{
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $result = "";
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
        $stmt = $dbh->prepare("SELECT * FROM pass");
        //$stmt->bindParam(':has',$hash);
        $stmt->execute();
        $result = $stmt->fetch();


    } catch (Exception $e) {
        //$dbh->rollBack();
        echo "\nFailed: " . $e->getMessage();
    }
    return $result;
}
function login($email,$password)
{
    require("query.php");
    $id = getQuery("SELECT id FROM users WHERE email=:var",$email);
    $hash = getQuery("SELECT hash FROM pass WHERE id=:var",$id);
    if(password_verify($password,$hash)) return "true";

    return "nece";


}