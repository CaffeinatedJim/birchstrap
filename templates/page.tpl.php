<?php

/**
 * @file
 * Displays a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   element.
 * - $head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the
 *   current path, whether the user is logged in, and so on.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled in
 *   theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been
 *   disabled in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been
 *   disabled.
 * - $primary_links (array): An array containing primary navigation links for
 *   the site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links
 *   for the site, if they have been configured.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $content: The main content of the current Drupal page.
 * - $right: The HTML for the right sidebar.
 * - $node: The node object, if there is an automatically-loaded node associated
 *   with the page, and the node ID is the second argument in the page's path
 *   (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic
 *   content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if gt IE 8]> <html class="no-js <?php print $classes; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>> <![endif]-->
<html class="no-js <?php print $classes; ?>">
  <head>
    <?php print $head; ?>
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="<?php print url(drupal_get_path('theme', 'endo2014') . '/js/respond/respond.min.js'); ?>"></script>
    <![endif]-->
    <?php print $scripts; ?>
    
<script type="text/javascript" language="javascript"><!--
function HideContent(d) {
	document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
	document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
	if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
	else { document.getElementById(d).style.display = "none"; }
}
//-->
</script>

  </head>
  <body class="<?php print $body_classes; ?>">
    <div class="skip"><a href="#main-content" title="Skip to Content">Skip to Content</a></div>
    	
      <header id="header" class="row">
      	<div class="inner span12">
			  <?php if (!empty($header)): ?>
             <?php print $header; ?>
           <?php endif; ?>
        </div><!-- /.inner -->
      </header>
      
    <div class="container">
      
      <div class="navbar navbar-inverse">
         
         <div class="btn-navbar-container">  
         <!--<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">-->
         <a href="javascript:ReverseDisplay('navigation')"><button class="btn btn-navbar" type="button" >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
         </button></a>
         </div><!-- /.btn-navbar-container -->
         
         <!-- nav-collapse collapse menu -->
      	<div id="navigation" class="row <?php if (!empty($primary_links)) { print "withprimary"; } if (!empty($secondary_links)) { print " withsecondary"; } ?> " style="display: none;">
               
           <?php if (!empty($navigation)): ?>
             <?php print $navigation; ?>
           <?php endif; ?>
           <!-- Drupal Core Primary Navigation -->
           <?php if (!empty($primary_links)): ?>
             <div id="primary" class="clear-block">
               <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
             </div>
           <?php endif; ?>
           <!-- Drupal Core Secondary Navigation -->
           <?php if (!empty($secondary_links)): ?>
             <div id="secondary" class="clear-block">
               <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
             </div>
           <?php endif; ?>
         </div><!-- /#navigation /.nav-collapse -->

      </div><!-- /.navbar .navbar-inverse -->
      
      <?php if (!empty($hero)): ?>
        <div id="hero" class="row"><?php print $hero; ?></div>
      <?php endif; ?>
      

      <div id="communication" class="row">
        <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($messages)): ?><div class="messages"><?php print $messages; ?></div><?php endif; ?>
        <?php if (!empty($help)): ?><div class="help"><?php print $help; ?></div><?php endif; ?>
      </div>

      <div id="main-content" class="row">
			
         <?php if (!empty($title)): ?>
         	<h1 class="title" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
         
        <?php if (!empty($left)): ?>
          <div id="sidebar-left" class="span3 sidebar">
            <?php print $left; ?>
          </div> <!-- /sidebar-left -->
        <?php endif; ?>

        <div id="content" class="span9">
          <?php print $content; ?>
        </div>

        <?php if (!empty($right)): ?>
          <div id="sidebar-right" class="span3 sidebar">
            <?php print $right; ?>
          </div>
        <?php endif; ?>

      </div><!-- /#main-content -->

      
      <?php print $closure; ?>
    </div><!-- /.container -->
    
    <footer id="page-footer">
      <div class="inner span12">
			<?php print $footer_message; ?>
         <?php if (!empty($footer)): print $footer; endif; ?>
      </div><!-- /.inner -->
    </footer>
      
  </body>
</html>