<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<!--    <link rel="icon" href="/Phplib/PageGen/Templates/Bootstrap4favicon.ico">-->



<title><?php echo($this->opts['title']);?></title>

<!-- Bootstrap core CSS, now with more themeing -->
<link href="/Phplib/PageGen/Bootstrap4/css/bootstrap.min.css" rel="stylesheet">


<!--ADD    <link href="/Phplib/PageGen/Templates/Bootstrap4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

<!-- ADD    <script src="/Phplib/PageGen/Templates/Bootstrap4/assets/js/ie-emulation-modes-warning.js"></script>-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- load early to help inline scripts :[ [BP - 15 May 2018] -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Additional header -->
<?php echo($this->opts['additional_head']);?>

<!-- Includes from the app/classes, ordered after additional_head for now since it jacks with CDN in current formmm -->
<?php echo($this->opts['css_include']);?>
<?php echo($this->opts['favicon']);?>
</head>

<body>
  <?php echo($this->content) ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

  <script src="/Phplib/PageGen/Bootstrap4/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!--ADD
    <script src="/Phplib/PageGen/Templates/Bootstrap4/assets/js/ie10-viewport-bug-workaround.js"></script>-->


  <?php

echo ($this->opts['js_include']);
echo ($this->opts['additional_footer']);
?>
</body>
</html>
