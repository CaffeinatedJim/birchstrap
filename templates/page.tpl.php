      <header id="navbar" role="banner" class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container-fluid">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>

            <?php if (!empty($logo)): ?>
              <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>

            <?php if (!empty($site_name)): ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
              </h1>
            <?php endif; ?>

            <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
              <div class="nav-collapse collapse">
                <nav role="navigation">
                  <?php if (!empty($primary_nav)): ?>
                    <?php print render($primary_nav); ?>
                  <?php endif; ?>
                  <?php if (!empty($secondary_nav)): ?>
                    <?php print render($secondary_nav); ?>
                  <?php endif; ?>
                  <?php if (!empty($page['navigation'])): ?>
                    <?php print render($page['navigation']); ?>
                  <?php endif; ?>
                </nav>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </header>

      <div id="main-content-row" class="container-fluid">
        <div class="row-fluid">
          <?php if ( $page['hero'] ): ?>
            <div id="hero" class="row-fluid"><?php print render($page['hero']); ?></div>
          <?php endif; ?>

          <?php if ( $page['left'] ): ?>
            <div class="span4" id="left">
              <?php print render($page['left']); ?>
            </div>
          <?php endif; ?>
          <div class="span12" id="main-content">
            <?php if ($breadcrumb): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
            <?php if (!empty($messages)): ?><div id="messages"><?php print $messages; ?></div><?php endif; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
          <?php if ( $page['right'] ): ?>
            <div class="span4" id="right">
              <?php print render($page['right']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div><!-- Close container-fluid -->
      <footer id="footer" class="container-fluid">
        <div class="row-fluid">
          <?php print render($page['footer']); ?>
        </div>
      </footer>