<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div class="blog-entry"> 
                <div class="blog-entry-post"> 
                    <div class="blog-entry-header"> 
                        <div class="blog-entry-author"> 
 
                                <?php print $picture ?>
                                <br><?php print $date; ?>
 
                                <div class="fas-account"></div> 
                        </div> 

  <div class="blog-entry-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></div>

                    </div> 
 
                    <div class="blog-entry-content-container"> 
 
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
                    <div class="blog-entry-timestamp"><?php print $name; ?></div> 
                    </div> 
                </div> 
            </div>
<?php if ($above_comments): ?>
    <?php print $above_comments ?>
<?php endif ?>