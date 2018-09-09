<?php

//error_reporting(E_ALL);
error_reporting(E_ERROR | E_PARSE );
ini_set('display_errors', 1);


require_once ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap4/NeonGlow.php");

$page = new NeonGlow(array(
    title => "Bootstrap 4: Neon Glow Test Page",
));

require_once 'cores/Core-Bootstrap4.html';

?>

