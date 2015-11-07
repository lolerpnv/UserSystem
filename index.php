<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 26.10.2015.
 * Time: 10:43
 */
$is = isset($_GET['page']);

$PageData = new stdClass();
$PageData->baselink = "http://localhost/OsijekNightlife-Site/index.php?";
$PageData->templates = "http://localhost/OsijekNightlife-Site/templates";
$PageData->model = "http://localhost/OsijekNightlife-Site/model";

if($is)
{
    switch($_GET['page'])
    {
        case "reg":
            require("model/usr_reg.php");
            $email = $_POST['email'];
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $result = register($email,$user,$pass);
            //$page = "<body><h1>$result</h1></body>";
            require("templates/redirect.php");
            $page = redirect($PageData->baselink,"page=login");
            break;
        case "log":
            require("model/usr_log.php");
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $result = login($email,$pass);
            $page = "<body><h1>$result</h1></body>";
            break;
        default:
            $temp = $_GET['page'];
            $page = include_once("templates/$temp.php");
            break;
    }

}
else
{
    $page = include_once("templates/main.php");
}


echo $page;