<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 7.11.2015.
 * Time: 12:38
 */

function boolQuery($sql,$var)
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
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':var',$var);
        $stmt->execute();
        if($stmt->fetch())
            return 1;
        else return 0;


    } catch (Exception $e) {
        $dbh->rollBack();
        echo "\nFailed: " . $e->getMessage();
    }
    //return -1;
}
function getQuery($sql,$var)
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
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':var',$var);
        $stmt->execute();
        $result = $stmt->fetch();
        if($result != 0){
            return $result[0];
        }

        else return 0;


    } catch (Exception $e) {
        $dbh->rollBack();
        echo "\nFailed: " . $e->getMessage();
    }
}