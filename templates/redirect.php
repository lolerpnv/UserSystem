<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 7.11.2015.
 * Time: 14:22
 */
function redirect($to,$args)
{
    $url = $to.$args;
    return "
    <html>
        <body>
            <meta http-equiv='refresh' content='0; URL= $url' />
        </body>
    </html>
    ";
}