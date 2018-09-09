<?php

/*
 *
 * Bootstrap3 -
 * Generic BS3 PageGen provider. Make a subclass and add per-type $opts['css']
 *
 * [BP -- 9 Nov 2017]
 */
require_once ($_SERVER['DOCUMENT_ROOT'] . "/Common/Phplib/PageGen/lib/PageGen.php");

class Bootstrap3 extends PageGen
{

    function __construct($opts = array())
    {
        // Define template for parent class to slurp
        // $opts['template'] = parent::template_path('Bootstrap4.php'); // Why is this not e.g. $this_file?
        $opts['template'] = $_SERVER['DOCUMENT_ROOT'] . "/Common/Phplib/PageGen/Bootstrap3/lib/template_Bootstrap3.php";
        return parent::__construct($opts); // Pass up chain
    }
}

?>
