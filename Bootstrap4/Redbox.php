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

class Redbox extends Bootstrap4
{

    function __construct($opts = array())
    {
        $opts['css'] = $opts['css'] ? $opts['css'] : array(); // Will make you miss perl

        // Add the template class, pretty much the only reason we're here :/
        array_unshift($opts['css'], '/Phplib/PageGen/Bootstrap4/Redbox/css/custom-css-bootstrap-magic-2018-09-27.css');
        $opts['additional_head'] = $opts['additional_head'] . '<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">';
            
        return parent::__construct($opts); // Pass up chain
    }
}

?>
