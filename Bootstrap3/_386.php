<?php

/*
 *
 * Bootstrap3\_386
 *
 * A Pagegen class leveraging the Superhero template (https://bootswatch.com/superhero/)
 *
 * Effectively slaps the requisite CSS onto the class as it heads up to Pagegen through Bootstrap4
 *
 */

require_once ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Bootstrap3/lib/Bootstrap3.php");

class _386 extends Bootstrap3
{

    const RESOURCE_DIR = '/Phplib/PageGen/Bootstrap3/_386';
    function __construct($opts = array())
    {
        // sb moved to super or somethig :[
        foreach (array('css', 'js') as $arg) {
            $opts[$arg] = ($opts && $opts[$arg]) ? $opts[$arg] : array();
        }
                
        // Per-class CSS files
        array_unshift($opts['css'], 
                self::RESOURCE_DIR . "/css/bootstrap.min.css",
                self::RESOURCE_DIR . "/css/bootstrap-theme.min.css"
            
                );
        // Per-class JS files (_386)
        array_unshift($opts['js'],
            self::RESOURCE_DIR . "/js/bootstrap.min.js"                     
          );

        return parent::__construct($opts); // Pass up chain
    }
}

?>
