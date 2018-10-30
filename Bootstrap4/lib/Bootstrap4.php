<?php

  /*

Bootstrap4 - 
Generic BS4 PageGen provider.  Make a subclass and add per-type $opts['css']

[BP --  9 Nov 2017]
   */

require_once($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/lib/PageGen.php");

class Bootstrap4 extends PageGen {
    function __construct($opts = array()) {
        // Define template for parent class to slurp
//      $opts['template'] = parent::template_path('Bootstrap4.php'); // Why is this not e.g. $this_file?
        $opts['template'] = $_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap4/lib/template_Bootstrap4.php";
        return parent::__construct($opts); // Pass up chain
    }
}

?>
