<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div class="blog-entry"> 
                <div class="blog-entry-post"> 
                    <div class="blog-entry-header"> 
                        <div class="blog-entry-author"> 
 
                                <?php print $picture ?>
                                <br><?php print $date; ?>
 <br /><img src="/<?php print path_to_theme(); ?>/images/hawk88_locked_calendar.png" />
                                <div class="fas-account"></div> 
                        </div> 

  <div class="blog-entry-title2"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></div>

                    </div> 
 
                    <div class="blog-entry-content-container2"> 
 
                        <div class="blog-entry-content">
    <?php print $content ?>
</div> 
   <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    </div>

    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>
                    </div> 
                    <div class="blog-entry-footer"> 
                    <div class="blog-entry-timestamp2"><?php print $name; ?></div> 
                    </div> 
                </div> 
            </div>
<?php if ($above_comments): ?>
    <?php print $above_comments ?>
<?php endif ?>
<?php if ($page!=0): ?>
<button onclick="Drupal.gmap.getMap('gmap-auto1map-gmap0').map.returnToSavedPosition();Drupal.gmap.getMap('gmap-auto1map-gmap0').map.setZoom(14);">Původní pozice mapy</button>
<?php endif ?>