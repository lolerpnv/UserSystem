<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 6.11.2015.
 * Time: 20:46
 */

function login($email,$password)
{
    require("query.php");
    $id = getQuery("SELECT id FROM users WHERE email=:var",$email);
    $hash = getQuery("SELECT hash FROM pass WHERE id=:var",$id);
        if(md5($password) == $hash) return "true";

    //if(password_verify($password,$hash)) return "true"; PHP 5.5+

    return "nece";


}