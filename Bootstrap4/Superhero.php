<?php

/*
 *
 * Bootstrap4\Superhero
 *
 * A Pagegen class leveraging the Superhero template (https://bootswatch.com/superhero/)
 *
 * Effectively slaps the requisite CSS onto the class as it heads up to Pagegen through Bootstrap4
 *
 */

require_once ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap4/lib/Bootstrap4.php");

class Superhero extends Bootstrap4
{

    function __construct($opts = array())
    {
        $opts['css'] = $opts['css'] ? $opts['css'] : array(); // Will make you miss perl

        // Add the template class, pretty much the only reason we're here :/
        array_unshift($opts['css'], '/Phplib/PageGen/Bootstrap4/Superhero/css/superhero.bpremix.css');

        return parent::__construct($opts); // Pass up chain
    }
}

?>
