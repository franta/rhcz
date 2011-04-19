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
 <?php if ($page == 0): ?>
  <div class="blog-entry-title"><a href="<?php print $node->field_url[0]['url'] ?>" title="<?php print $title ?>"><?php print $title ?></a></div>
<?php endif; ?>
                    </div> 
 
                    <div class="blog-entry-content-container"> 
 
                        <div class="blog-entry-content">
    <?php print $content ?>
</div> 

                    </div> 
                    <div class="blog-entry-footer"> 
                    <div class="blog-entry-timestamp"><?php print $name; ?></div> 
                    </div> 
                </div> 
            </div>
