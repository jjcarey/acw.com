<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">
    <!-- <div id="large-header" class="large-header"> -->

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php print render($top_bar); ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <section class="headerSection <?php print $alt_header_classes; ?>">
        <div class="">

          <?php if ($site_slogan): ?>
            <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>

          <?php if ($alt_main_menu): ?>
          <div class="cbp-af-header-g cbp-af-header-global">
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
                    <h4>Jess</h4>
                  </div>
                  <div class="ampLogo">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 41" enable-background="new 0 0 36 41" xml:space="preserve">
                    <g id="shadow"><path d="M26,33.6c2.3,1.8,4.7,3.6,7.2,5.1c0.3,0.2,0.4,0.6,0.2,0.9l-0.7,1.1c-0.2,0.3-0.6,0.4-0.9,0.2
                    c-2.5-1.5-4.8-3.2-7-5c-0.3-0.2-0.6-0.2-0.9,0c-2.5,2.4-6.3,4.3-11,4.3C3.5,40.3,1,33.7,1,30.2c0-4.1,1-6.2,5.1-9.5
                    c0.3-0.2,0.8-0.2,1,0.1l0.7,1.1c0.2,0.3,0.1,0.7-0.1,0.9c-3.8,3.1-4,4.5-4,7.4c0,0.3,0.1,7.4,9.2,7.4c3.8,0,6.7-1.5,8.8-3.3
                    c0.3-0.3,0.3-0.8,0-1c-4.9-4.3-9-8.9-11.7-12.3l-1.6-2.1c-0.5-0.7-0.9-1.2-1.2-1.7C4.6,13,4.1,8.1,5.9,4.7C7.3,2.3,9.6,1,12.6,1
                    C16.3,1,19,2.9,20,6c1.2,3.9-0.8,8.6-4.9,11.4c-0.9,0.6-1.7,1.1-2.4,1.7c-0.3,0.2-0.4,0.7-0.1,1c2.7,3.4,6.7,7.7,11.4,11.8L26,33.6
                    z M27.5,20.8c2.1-0.5,7.8-3.6,8-3.5c0.2,0.1,0.3,1.8,0.1,2.6c0,0.2-0.2,0.4-0.4,0.5c-2.6,1.4-4.8,2.3-6.8,2.8
                    c-0.3,0.1-0.5,0.4-0.5,0.7c0.2,2.1,0.2,3.3-0.2,5.1c-0.1,0.4-0.2,0.9-0.5,1.4c-0.2,0.4-0.7,0.5-1,0.3L25.4,30
                    c-0.3-0.2-0.4-0.5-0.2-0.8c0.1-0.2,0.2-0.5,0.2-0.6c0.4-1.7,0.3-2.4,0.1-4c0-0.4-0.3-0.7-0.7-0.6c-2.1,0.1-3.5-0.3-4.5-0.8
                    c-1.4-0.6-2.3-1.7-2.5-2.8c-0.3-1.6,0.2-2.6,0.7-3.1c0.7-0.9,1.9-1.3,3.5-1.3c1.6,0,2.7,0.3,3.7,1.6c0.2,0.3,0.4,0.6,0.6,0.9
                    c0.2,0.4,0,0.9-0.4,1l-1.3,0.3c-0.3,0.1-0.6,0-0.7-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c-0.5-0.7-0.9-0.6-1.7-0.6c-0.7,0-1.3,0.1-1.5,0.4
                    c-0.2,0.2-0.2,0.5-0.1,0.8c0,0.1,0.1,0.3,0.1,0.4c0.2,0.2,0.5,0.5,1.1,0.7c0.6,0.2,1.6,0.5,3.2,0.4C26.5,21.1,27.5,20.8,27.5,20.8z
                     M12.6,3.6c-2,0-3.5,0.8-4.4,2.4c-1.4,2.5-0.9,6.4,1.2,9.8c0.2,0.3,0.4,0.7,0.7,1c0.2,0.3,0.6,0.4,0.9,0.2c0.8-0.6,1.7-1.1,2.6-1.8
                    c3.7-2.5,4.6-6.1,3.9-8.4C16.8,4.7,15.1,3.6,12.6,3.6z"/></g>
                    <g id="ampersand"><path d="M25,32.6c2.3,1.8,4.7,3.6,7.2,5.1c0.3,0.2,0.4,0.6,0.2,0.9l-0.7,1.1c-0.2,0.3-0.6,0.4-0.9,0.2
                    c-2.5-1.5-4.8-3.2-7-5c-0.3-0.2-0.6-0.2-0.9,0c-2.5,2.4-6.3,4.3-11,4.3C2.5,39.3,0,32.7,0,29.2c0-4.1,1-6.2,5.1-9.5
                    c0.3-0.2,0.8-0.2,1,0.1l0.7,1.1c0.2,0.3,0.1,0.7-0.1,0.9c-3.8,3.1-4,4.5-4,7.4c0,0.3,0.1,7.4,9.2,7.4c3.8,0,6.7-1.5,8.8-3.3
                    c0.3-0.3,0.3-0.8,0-1c-4.9-4.3-9-8.9-11.7-12.3l-1.6-2.1c-0.5-0.7-0.9-1.2-1.2-1.7C3.6,12,3.1,7.1,4.9,3.7C6.3,1.3,8.6,0,11.6,0
                    C15.3,0,18,1.9,19,5c1.2,3.9-0.8,8.6-4.9,11.4c-0.9,0.6-1.7,1.1-2.4,1.7c-0.3,0.2-0.4,0.7-0.1,1c2.7,3.4,6.7,7.7,11.4,11.8L25,32.6
                    z M26.5,19.8c2.1-0.5,7.8-3.6,8-3.5c0.2,0.1,0.3,1.8,0.1,2.6c0,0.2-0.2,0.4-0.4,0.5c-2.6,1.4-4.8,2.3-6.8,2.8
                    c-0.3,0.1-0.5,0.4-0.5,0.7c0.2,2.1,0.2,3.3-0.2,5.1c-0.1,0.4-0.2,0.9-0.5,1.4c-0.2,0.4-0.7,0.5-1,0.3L24.4,29
                    c-0.3-0.2-0.4-0.5-0.2-0.8c0.1-0.2,0.2-0.5,0.2-0.6c0.4-1.7,0.3-2.4,0.1-4c0-0.4-0.3-0.7-0.7-0.6c-2.1,0.1-3.5-0.3-4.5-0.8
                    c-1.4-0.6-2.3-1.7-2.5-2.8c-0.3-1.6,0.2-2.6,0.7-3.1c0.7-0.9,1.9-1.3,3.5-1.3c1.6,0,2.7,0.3,3.7,1.6c0.2,0.3,0.4,0.6,0.6,0.9
                    c0.2,0.4,0,0.9-0.4,1l-1.3,0.3c-0.3,0.1-0.6,0-0.7-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c-0.5-0.7-0.9-0.6-1.7-0.6c-0.7,0-1.3,0.1-1.5,0.4
                    c-0.2,0.2-0.2,0.5-0.1,0.8c0,0.1,0.1,0.3,0.1,0.4c0.2,0.2,0.5,0.5,1.1,0.7c0.6,0.2,1.6,0.5,3.2,0.4C25.5,20.1,26.5,19.8,26.5,19.8z
                     M11.6,2.6c-2,0-3.5,0.8-4.4,2.4c-1.4,2.5-0.9,6.4,1.2,9.8c0.2,0.3,0.4,0.7,0.7,1c0.2,0.3,0.6,0.4,0.9,0.2c0.8-0.6,1.7-1.1,2.6-1.8
                    c3.7-2.5,4.6-6.1,3.9-8.4C15.8,3.7,14.1,2.6,11.6,2.6z"/></g>
                    </svg>
                  </div>
                  <div class="himLogo">
                    <h4>Joe</h4>
                  </div>
                </div>
              </div>

              <nav id="main-menu" class="navigation" role="navigation">
                <ul id="main-menu-links" class="links inline-list clearfix">
                  <li class="first"><a  href="/#the_couple"   title=""  >The Couple</a></li>
                  <li class=""><a       href="/#our_story"   title=""  >Our Story</a></li>
                  <li class=""><a       href="/#rsvp"   title=""  >RSVP</a></li>
                  <li class=""><a       href="/#locations"   title=""  >Locations</a></li>
                  <li class=" last"><a  href="/#registry"   title=""  >Registry</a></li>
                </ul>
              </nav> <!-- /#main-menu -->

            </div>
          </div>
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
  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

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
    </div>
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
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 41" enable-background="new 0 0 36 41" xml:space="preserve">
                <g id="shadow"><path d="M26,33.6c2.3,1.8,4.7,3.6,7.2,5.1c0.3,0.2,0.4,0.6,0.2,0.9l-0.7,1.1c-0.2,0.3-0.6,0.4-0.9,0.2
                c-2.5-1.5-4.8-3.2-7-5c-0.3-0.2-0.6-0.2-0.9,0c-2.5,2.4-6.3,4.3-11,4.3C3.5,40.3,1,33.7,1,30.2c0-4.1,1-6.2,5.1-9.5
                c0.3-0.2,0.8-0.2,1,0.1l0.7,1.1c0.2,0.3,0.1,0.7-0.1,0.9c-3.8,3.1-4,4.5-4,7.4c0,0.3,0.1,7.4,9.2,7.4c3.8,0,6.7-1.5,8.8-3.3
                c0.3-0.3,0.3-0.8,0-1c-4.9-4.3-9-8.9-11.7-12.3l-1.6-2.1c-0.5-0.7-0.9-1.2-1.2-1.7C4.6,13,4.1,8.1,5.9,4.7C7.3,2.3,9.6,1,12.6,1
                C16.3,1,19,2.9,20,6c1.2,3.9-0.8,8.6-4.9,11.4c-0.9,0.6-1.7,1.1-2.4,1.7c-0.3,0.2-0.4,0.7-0.1,1c2.7,3.4,6.7,7.7,11.4,11.8L26,33.6
                z M27.5,20.8c2.1-0.5,7.8-3.6,8-3.5c0.2,0.1,0.3,1.8,0.1,2.6c0,0.2-0.2,0.4-0.4,0.5c-2.6,1.4-4.8,2.3-6.8,2.8
                c-0.3,0.1-0.5,0.4-0.5,0.7c0.2,2.1,0.2,3.3-0.2,5.1c-0.1,0.4-0.2,0.9-0.5,1.4c-0.2,0.4-0.7,0.5-1,0.3L25.4,30
                c-0.3-0.2-0.4-0.5-0.2-0.8c0.1-0.2,0.2-0.5,0.2-0.6c0.4-1.7,0.3-2.4,0.1-4c0-0.4-0.3-0.7-0.7-0.6c-2.1,0.1-3.5-0.3-4.5-0.8
                c-1.4-0.6-2.3-1.7-2.5-2.8c-0.3-1.6,0.2-2.6,0.7-3.1c0.7-0.9,1.9-1.3,3.5-1.3c1.6,0,2.7,0.3,3.7,1.6c0.2,0.3,0.4,0.6,0.6,0.9
                c0.2,0.4,0,0.9-0.4,1l-1.3,0.3c-0.3,0.1-0.6,0-0.7-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c-0.5-0.7-0.9-0.6-1.7-0.6c-0.7,0-1.3,0.1-1.5,0.4
                c-0.2,0.2-0.2,0.5-0.1,0.8c0,0.1,0.1,0.3,0.1,0.4c0.2,0.2,0.5,0.5,1.1,0.7c0.6,0.2,1.6,0.5,3.2,0.4C26.5,21.1,27.5,20.8,27.5,20.8z
                 M12.6,3.6c-2,0-3.5,0.8-4.4,2.4c-1.4,2.5-0.9,6.4,1.2,9.8c0.2,0.3,0.4,0.7,0.7,1c0.2,0.3,0.6,0.4,0.9,0.2c0.8-0.6,1.7-1.1,2.6-1.8
                c3.7-2.5,4.6-6.1,3.9-8.4C16.8,4.7,15.1,3.6,12.6,3.6z"/></g>
                <g id="ampersand"><path d="M25,32.6c2.3,1.8,4.7,3.6,7.2,5.1c0.3,0.2,0.4,0.6,0.2,0.9l-0.7,1.1c-0.2,0.3-0.6,0.4-0.9,0.2
                c-2.5-1.5-4.8-3.2-7-5c-0.3-0.2-0.6-0.2-0.9,0c-2.5,2.4-6.3,4.3-11,4.3C2.5,39.3,0,32.7,0,29.2c0-4.1,1-6.2,5.1-9.5
                c0.3-0.2,0.8-0.2,1,0.1l0.7,1.1c0.2,0.3,0.1,0.7-0.1,0.9c-3.8,3.1-4,4.5-4,7.4c0,0.3,0.1,7.4,9.2,7.4c3.8,0,6.7-1.5,8.8-3.3
                c0.3-0.3,0.3-0.8,0-1c-4.9-4.3-9-8.9-11.7-12.3l-1.6-2.1c-0.5-0.7-0.9-1.2-1.2-1.7C3.6,12,3.1,7.1,4.9,3.7C6.3,1.3,8.6,0,11.6,0
                C15.3,0,18,1.9,19,5c1.2,3.9-0.8,8.6-4.9,11.4c-0.9,0.6-1.7,1.1-2.4,1.7c-0.3,0.2-0.4,0.7-0.1,1c2.7,3.4,6.7,7.7,11.4,11.8L25,32.6
                z M26.5,19.8c2.1-0.5,7.8-3.6,8-3.5c0.2,0.1,0.3,1.8,0.1,2.6c0,0.2-0.2,0.4-0.4,0.5c-2.6,1.4-4.8,2.3-6.8,2.8
                c-0.3,0.1-0.5,0.4-0.5,0.7c0.2,2.1,0.2,3.3-0.2,5.1c-0.1,0.4-0.2,0.9-0.5,1.4c-0.2,0.4-0.7,0.5-1,0.3L24.4,29
                c-0.3-0.2-0.4-0.5-0.2-0.8c0.1-0.2,0.2-0.5,0.2-0.6c0.4-1.7,0.3-2.4,0.1-4c0-0.4-0.3-0.7-0.7-0.6c-2.1,0.1-3.5-0.3-4.5-0.8
                c-1.4-0.6-2.3-1.7-2.5-2.8c-0.3-1.6,0.2-2.6,0.7-3.1c0.7-0.9,1.9-1.3,3.5-1.3c1.6,0,2.7,0.3,3.7,1.6c0.2,0.3,0.4,0.6,0.6,0.9
                c0.2,0.4,0,0.9-0.4,1l-1.3,0.3c-0.3,0.1-0.6,0-0.7-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c-0.5-0.7-0.9-0.6-1.7-0.6c-0.7,0-1.3,0.1-1.5,0.4
                c-0.2,0.2-0.2,0.5-0.1,0.8c0,0.1,0.1,0.3,0.1,0.4c0.2,0.2,0.5,0.5,1.1,0.7c0.6,0.2,1.6,0.5,3.2,0.4C25.5,20.1,26.5,19.8,26.5,19.8z
                 M11.6,2.6c-2,0-3.5,0.8-4.4,2.4c-1.4,2.5-0.9,6.4,1.2,9.8c0.2,0.3,0.4,0.7,0.7,1c0.2,0.3,0.6,0.4,0.9,0.2c0.8-0.6,1.7-1.1,2.6-1.8
                c3.7-2.5,4.6-6.1,3.9-8.4C15.8,3.7,14.1,2.6,11.6,2.6z"/></g>
                </svg>
              </div>
              <div class="himLogo">
                <h4>Joseph<br>Carey</h4>
              </div>
            </div>  
          </div>

          <nav id="main-menu" class="navigation" role="navigation">
            <ul id="main-menu-links" class="links inline-list clearfix">
              <li class="first"><a  href="/#the_couple"   title=""  >The Couple</a></li>
              <li class=""><a       href="/#our_story"   title=""  >Our Story</a></li>
              <li class=""><a       href="/#rsvp"   title=""  >RSVP</a></li>
              <li class=""><a       href="/#locations"   title=""  >Locations</a></li>
              <li class=" last"><a  href="/#registry"   title=""  >Registry</a></li>
            </ul>

            <?php if ($site_name) :?>
              <div class="copyright">
                &copy; <?php print date('Y') . ' ' . t('Joseph Carey. All rights reserved  |  '); ?>
                <a class="" href="/node/60/">Contact Us</a>
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
