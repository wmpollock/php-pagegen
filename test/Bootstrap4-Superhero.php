<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap4/Superhero.php");

$page = new Superhero(array(
    title => "Bootstrap 4: Superhero Test Page",
));

require_once 'cores/Core-Bootstrap4.html';

?>

