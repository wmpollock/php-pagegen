<?php
if (0) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

require_once ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap3/_386.php");

$page = new _386(array(
    'title' => "386 test",
    // 'favicon' => file_get_contents('Favicon/favicon.include'),
    'css' => array(

        // "Toast/jquery.toast.css"
    ),
    'js' => array(),
    'additional_head' => '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">',
    'additional_footer' => '<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fetch/1.0.0/fetch.min.js"></script>'
));
require_once 'cores/Core-Bootstrap3.html';

?>

