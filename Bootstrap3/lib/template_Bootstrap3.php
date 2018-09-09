<!DOCTYPE html>
<html>
  <head>
    <title><?php echo($this->opts['title']);?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    
    <!-- Additional header -->
    <?php echo($this->opts['additional_head']);?>

    <!-- Includes from the app/classes, ordered after additional_head for now since it jacks with CDN in current formmm -->
    <?php echo($this->opts['css_include']);?>
    <?php echo($this->opts['favicon']);?>
      
  </head>
  <body>
    <?php echo($this->content) ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <?php

    echo ($this->opts['js_include']);
    echo ($this->opts['additional_footer']);
    ?>
  </body>
</html>