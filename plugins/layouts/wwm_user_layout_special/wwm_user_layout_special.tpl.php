<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['sidebar']
 *   $content['content_top']
 *   $content['content_left']
 *   $content['content_right']
 *   $content['content_bottom']
 *   $content['sub_footer_left']
 *   $content['sub_footer_mid']
 *   $content['sub_footer_right']
 *   $content['footer']
 */
?>

<section class="main">
  <aside class="sidebar">
    <?php if (($renderer->prepared['regions']['sidebar']['pids'])) : ?><?php print $content['sidebar']; ?><?php endif; ?>
  </aside>
  <section class="content-area">
    <div class="content-top">
      <?php if (($renderer->prepared['regions']['content_top']['pids'])) : ?><?php print $content['content_top']; ?><?php endif; ?>
    </div>
    <div class="content-left">
      <?php if (($renderer->prepared['regions']['content_left']['pids'])) : ?><?php print $content['content_left']; ?><?php endif; ?>
    </div>
    <div class="content-right">
      <?php if (($renderer->prepared['regions']['content_right']['pids'])) : ?><?php print $content['content_right']; ?><?php endif; ?>
    </div>
    <div class="content-bottom">
      <?php if (($renderer->prepared['regions']['content_bottom']['pids'])) : ?><?php print $content['content_bottom']; ?><?php endif; ?>
    </div>
  </section>
</section>
<footer class="sub-footer">
  <div class="sub-footer-left">
    <?php if (($renderer->prepared['regions']['sub_footer_left']['pids'])) : ?><?php print $content['sub_footer_left']; ?><?php endif; ?>
  </div>
  <div class="sub-footer-mid">
    <?php if (($renderer->prepared['regions']['sub_footer_mid']['pids'])) : ?><?php print $content['sub_footer_mid']; ?><?php endif; ?>
  </div>
  <div class="sub-footer-right">
    <?php if (($renderer->prepared['regions']['content_bottom']['sub_footer_right'])) : ?><?php print $content['sub_footer_right']; ?><?php endif; ?>
  </div>
</footer>
<footer class="footer">
  <?php if (($renderer->prepared['regions']['content_bottom']['sub_footer_right'])) : ?><?php print $content['footer']; ?><?php endif; ?>
</footer>
