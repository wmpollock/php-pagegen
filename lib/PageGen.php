<?php

/*
 *
 * PageGen -- bottom-of-the-well for page generation classes
 *
 * Slurps page content, provides output, handy methods. Irons out wrinkles.
 *
 * [BP -- 9 Nov 2017]
 *
 */
class PageGen
{

    // On init we need to start glomming the ob_start()
    private $opts;
    //private $defaults = {
        
    
    public $content;

    function __construct($opts)
    {
        $this->opts = $opts;
        
        // So, IDK that I care or this is the best way to do it but having
        // these indexes unset makes things unhappy when I barge in and use them 
        // later.
        
        
        foreach ($opts['css'] as $css_file) {
            $this->opts['css_include'] = $this->opts['css_include'] . sprintf("    <link href=\"%s\" rel=\"stylesheet\">\n", $this->mstamp($css_file));
        }

        if ($opts['js']) {
            foreach ($opts['js'] as $js_file) {
                $this->opts['js_include'] = $this->opts['js_include'] . sprintf("    <script src=\"%s\" type=\"text/javascript\"></script>\n", $this->mstamp($js_file));
            }
        }

        ob_start();
    }

    // Complete aborbing the content and render the page
    function __destruct()
    {
        $this->content = ob_get_clean();
        // Pull the template in, it can use $this->whatever or $this->opts['whatever']
        require ($this->opts['template']);
    }

    // Sugarcoat template path. ++facist placement compliance
    function template_path($template)
    {
        return ($_SERVER['DOCUMENT_ROOT'] . "/Phplib/PageGen/Templates/$template");
    }

    function mstamp($resource)
    {
        // echo($resource . "?mtime=" . filectime($_SERVER['DOCUMENT_ROOT'] . $resource));
        $stat_file = $resource;
        if (! file_exists($stat_file)) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $resource)) {
                $stat_file = $_SERVER['DOCUMENT_ROOT'] . $resource;
            }
        }
        return ($resource . "?mtime=" . filectime($stat_file));
    }
}

?>
