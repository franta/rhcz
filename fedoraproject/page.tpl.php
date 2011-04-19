<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body id="fedoraproject-org">
<div id="header">
    <div class="container_16">
        <div class="grid_10" id="site-heading">
            <h1><a href="/"><span id="logo"><?php print check_plain($site_name); ?></span></a></h1>
            <h2><?php print check_plain($site_slogan); ?></h2>
        </div>
        <div class="grid_1"> <!-- search filler --></div>
        <div class="grid_5" id="site-heading-rh">
            <a href="http://redhat.com">Komunitní projekt Red Hatu<img id="rh-community" src="/themes/fedoraproject/images/sponsors/redhat-community.png" alt="RedHat" /></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="main-nav">
    <div class="container_16">
<?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('id' => 'nav-menu')) ?>
        <?php endif; ?>
<!--    <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>-->
    </div>
</div>

        <!-- /header -->
        <!-- site-content -->
        <div id="site-content">
            <div class="clear"></div><div class="container_16">
            <div class="grid_12 alpha">
                <div class="main-page-section">
                  <!--<?php print $breadcrumb; ?>-->
                  <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
                  <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
                  <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
                  <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                  <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                  <?php if ($show_messages && $messages): print $messages; endif; ?>
                  <?php print $help; ?>
                  <?php if ($left): ?>
                      <?php print $left ?>
                  <?php endif; ?>
                  <div class="clear-block">
                    <?php print $content ?>
                  </div>
                  <?php print $feed_icons ?>
                  <?php print $footer_message . $footer ?>
   
               </div>
               <div class="clear"></div>
            </div>
            <!-- start sidebar -->
            <div class="grid_4 omega" id="right-sidebar">
            <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
            <?php if ($right): ?>
              <?php print $right ?>
            <?php endif; ?>

            </div>
            <!-- /start sidebar -->
            <div class="clear"></div>
        </div>
        </div>
        <!-- /site-content -->
        <!-- bottom -->
        <div id="bottom">
            
    <div class="container_12">
        
    </div>

        </div>
        <!-- /bottom -->
  <?php print $closure ?>
    </body>
</html>