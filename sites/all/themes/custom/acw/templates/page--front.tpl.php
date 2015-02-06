<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header" id="top">
    <div id="large-header" class="large-header">
    <!-- <canvas id="dust_up"></canvas> -->

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php print render($top_bar); ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <section class="headerSection row <?php print $alt_header_classes; ?>">
        <div class="large-12 columns">

          <?php if ($site_slogan): ?>
            <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>

          <?php if ($alt_main_menu): ?>
          <div class="cbp-af-header">
            <div class="cbp-af-inner">
              
              <div class="siteLogo">
                <?php if ($site_name): ?>
                  <?php if ($title): ?>
                    <div id="site-name" class="element-invisible">
                      <strong>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                      </strong>
                    </div>
                  <?php else: /* Use h1 when the content title is empty */ ?>
                    <h1 id="site-name">
                      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                    </h1>
                  <?php endif; ?>
                <?php endif; ?>
                
                <!-- <img src="http://placehold.it/200x100/336699/FFFFFF" class="placeholder" > -->
                <?php // if ($linked_logo): print $linked_logo; endif; ?>

                <div class="nameLogo">
                  <div class="herLogo">
                    <h4>Jessica<br>Alleven</h4>
                  </div>
                  <div class="ampLogo">
                    <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/assets/images/ampersand.svg" class="ampersand" >
                  </div>
                  <div class="himLogo">
                    <h4>Joseph<br>Carey</h4>
                  </div>
                </div>
                
              </div>

              <nav id="main-menu" class="navigation" role="navigation">
                <?php print ($alt_main_menu); ?>
              </nav> <!-- /#main-menu -->

            </div>
          </div>
          <?php endif; ?>

          <?php if ($alt_secondary_menu): ?>
            <nav id="secondary-menu" class="navigation" role="navigation">
              <?php print $alt_secondary_menu; ?>
            </nav> <!-- /#secondary-menu -->
          <?php endif; ?>

        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

    <section class="heroImg row">
      <div class="large-12 columns">
        <?php print render($page['hero_image']); ?>
      </div>
    </section>
    
    </div>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$fett_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <!--.l-main-->
  <main role="main" class="l-main">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    <!--/.l-main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> l-sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> l-sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>

    
    <?php
      $result = db_query("SELECT count(1) from {users}")->fetchField();
      print '<ul><li>' . $result . '</li></ul>';
    ?>

    <?php
      $directory = "sites/default/files/user_photos/";
      $filecount = 0;
      $files = glob($directory . "*.{png,gif,jpg,jpeg}", GLOB_BRACE);
      
      if ($files){
        $filecount = count($files);
      }

      echo "There are $filecount files";    
    ?>

    

  </main>
  <!--/.l-main-->

  <?php // if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
    <!--.l-footer-->
    <footer class="l-footer" role="contentinfo">

      <div class="row">
        <div class="large-12 columns">

          <div class="siteLogo">
            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div id="site-name" class="element-invisible">
                  <strong>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                  </strong>
                </div>
              <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>
            
            <!-- <img src="http://placehold.it/200x100/336699/FFFFFF" class="placeholder" > -->
            <?php // if ($linked_logo): print $linked_logo; endif; ?>

            <div class="nameLogo">
              <div class="herLogo">
                <h4>Jessica<br>Alleven</h4>
              </div>
              <div class="ampLogo">
                <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/assets/images/ampersand.svg" class="ampersand" >
              </div>
              <div class="himLogo">
                <h4>Joseph<br>Carey</h4>
              </div>
            </div>  
          </div>

          <nav id="main-menu" class="navigation" role="navigation">
            <?php print ($alt_main_menu); ?>
          
            <?php if ($site_name) :?>
              <div class="copyright">
                &copy; <?php print date('Y') . ' ' . t('Joseph Carey. All rights reserved  |  '); ?>
                <a class="" href="contact_us">Contact Us</a>
              </div>
            <?php endif; ?>

          </nav> <!-- /#main-menu -->

        </div>
      </div>

    </footer>
    <!--/.footer-->

  <?php // endif; ?>

  <?php if ($messages && $fett_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
