<!DOCTYPE HTML>
<html>
<head>
<!-- Enable IE9 Standards mode -->
<meta http-equiv="X-UA-Compatible" content="IE=9" >
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $GLOBALS['sim_title']; ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo getTempCss('reset.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo getTempCss('grid.css'); ?>" />
<link href="<?php echo getTempCss('mainstyle.css'); ?>" rel="stylesheet" type="text/css" />
<link href="js/nanoscroller/nanoscroller.css" rel="stylesheet" type="text/css" />
<script src="js/nanoscroller/overthrow.min.js"></script>
<script src="js/jquery/1.7/jquery-1.7.1.js"></script>
<script src="js/nanoscroller/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="js/nanoscroller/touchready.js"></script>
<script type="text/javascript" src="js/nanoscroller/main.js"></script>
<!--[if IE]><script src="js/excanvas.js"></script><![endif]-->
<?php getIncludes(); ?>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<script src="js/js-webshim/1.9.7/minified/extras/modernizr-custom.js"></script>
<script> 
if( !Modernizr.inputtypes.range ){  
		document.write("<script type=\"text/javascript\" src=\"js/js-webshim/1.9.7/minified/polyfiller.js\"></"+"script>");
        $(document).ready(function(){
			$.webshims.setOptions("waitReady", false);
     		$.webshims.polyfill('forms-ext');
		});  
    };  


</script>

</head>
<body>
<div id="layout" class="main">
<header id="silumatorTemp">
  <div class="g99 logo">
  </div>
  <!-- end .g99 -->
    <div class="g495 mainTitle">
    <p id="expName"><?php echo $GLOBALS['sim_title']; ?></p>
  </div>
  <!-- end .g495 -->
    <div class="g198 menuSet">
          
  </div>
  <!-- end .g198 -->
<div class="g792 bannerFoot">
<ul id="olabmenuBar">
  	<li><a href="#"><?php echo $GLOBALS['simTempSave']; ?></a></li>
    <li><a id="olabFullscrBtn" onClick="parent.simFullScreenOlab()" style="cursor:pointer;" ><?php echo $GLOBALS['simTempFullScreen']; ?></a></li>
    <li><a href="#"><?php echo $GLOBALS['simTempExit']; ?></a></li>
  </ul>
</div>
    <!-- end .grid_8 -->
</header><!-- /header -->
  <a href="http://purecss.io/layouts/side-menu/#menu" id="menuLink" class="menu-link"> 
  <!-- Hamburger icon --> 
  <span></span> </a>