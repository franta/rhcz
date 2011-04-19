<?php
// $Id: comment.tpl.php,v 1.10 2008/01/04 19:24:24 goba Exp $
?>
<div class="blog-entry"> 
                <div class="blog-entry-post"> 
                    <div class="blog-entry-header"> 
                        <div class="blog-entry-author"> 
 
                                <?php print $picture ?>
                                <br><?php print $date; ?>
 
                                <div class="fas-account"></div> 
                        </div> 

  <div class="blog-entry-title"><?php print $title ?></a></div>

                    </div> 
 
                    <div class="blog-entry-content-container"> 
 
                        <div class="blog-entry-content">
    <?php print $content; ?>
    <?php if ($signature): ?>
    <div class="user-signature clear-block">
      <?php print $signature; ?>
</div>
    <?php endif; ?>
</div> 
   <div class="clear-block">
    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>
                    </div> 
                    <div class="blog-entry-footer"> 
                    <div class="blog-entry-timestamp"><?php print $author; ?></div> 
                    </div> 
                </div> 
            </div>
