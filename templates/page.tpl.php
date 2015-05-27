<!DOCTYPE html>
<html lang="en">
  <head>
    <?php print $head; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php print $scripts; ?>

  </head>
  <body class="<?php print $body_classes; ?>">
    <div class="skip"><a href="#main-content" title="Skip to Content">Skip to Content</a></div>
    	<div class="container">
        <header id="header" class="row">
        	<div class="col-sm-12">
  			  <?php if (!empty($header)): ?>
               <?php print $header; ?>
             <?php endif; ?>
          </div>
        </header>
      </div>
    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="btn-navbar-container">  
            <a href="javascript:ReverseDisplay('navigation')"><button class="btn btn-navbar" type="button" >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button></a>
        </div>
      	<div id="navigation" class="row <?php if (!empty($primary_links)) { print "withprimary"; } if (!empty($secondary_links)) { print " withsecondary"; } ?> " style="display: none;">
          <?php if (!empty($navigation)): ?><?php print $navigation; ?><?php endif; ?>
          <?php if (!empty($primary_links)): ?><div id="primary" class="clear-block"><?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?></div><?php endif; ?>
          <?php if (!empty($secondary_links)): ?><div id="secondary" class="clear-block"><?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?></div><?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (!empty($hero)): ?><div class="container"><div class="row"><div id="hero" class="col-sm-12"><?php print $hero; ?></div></div></div><?php endif; ?>
    <?php if (!empty($tabs)): ?><div class="container"><div class="row"><div class="tabs col-sm-12"><?php print $tabs; ?></div></div></div><?php endif; ?>
    <?php if (!empty($messages)): ?><div class="container"><div class="row"><div class="messages col-sm-12"><?php print $messages; ?></div></div></div><?php endif; ?>
    <?php if (!empty($help)): ?><div class="container"><div class="row"><div class="help col-sm-12"><?php print $help; ?></div></div></div><?php endif; ?>

    <div id="main-content" class="container">
		  <?php if (!empty($title)): ?><div class="row"><div class="col-sm-12"><h1 class="title" id="page-title"><?php print $title; ?></h1></div></div><?php endif; ?>
      <div class="row">
        <?php if (!empty($left)): ?>
          <div id="sidebar-left" class="col-sm-3 sidebar"><?php print $left; ?></div>
        <?php endif; ?>
        <div id="content" class="col-sm-9"><?php print $content; ?></div>
        <?php if (!empty($right)): ?>
          <div id="sidebar-right" class="col-sm-3 sidebar"><?php print $right; ?></div>
        <?php endif; ?>
      </div>
    </div>

    <?php print $closure; ?>
    
    <footer id="page-footer" class="container">
      <div class="row">
        <div class="col-sm-12">
			   <?php print $footer_message; ?>
         <?php if (!empty($footer)): print $footer; endif; ?>
        </div>
      </div>
    </footer>
  </body>
</html>