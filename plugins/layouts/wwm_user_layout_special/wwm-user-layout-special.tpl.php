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

<section class="wwm-user-layout-special <?php if (!($renderer->prepared['regions']['sidebar']['pids'])) {print "no-sidebar ";}?>
<?php if (!($renderer->prepared['regions']['content_left']['pids']) && !($renderer->prepared['regions']['content_right']['pids']) && !($renderer->prepared['regions']['content_top']['pids']) && !($renderer->prepared['regions']['content_bottom']['pids'])) {print "no-content ";}?>
<?php if (!($renderer->prepared['regions']['content_left']['pids'])) {print "no-left ";}?>
<?php if (!($renderer->prepared['regions']['content_right']['pids'])) {print "no-right ";}?>
<?php if (!($renderer->prepared['regions']['sub_footer_left']['pids'])) {print "no-sub-footer-left ";}?>
<?php if (!($renderer->prepared['regions']['sub_footer_mid']['pids'])) {print "no-sub-footer-mid ";}?>
<?php if (!($renderer->prepared['regions']['sub_footer_right']['pids'])) {print "no-sub-footer-right ";}?>">
  <section class="main">
    <aside class="sidebar">
      <?php print $content['sidebar']; ?>
    </aside>
    <section class="content-area">
      <div class="content-top">
        <?php print $content['content_top']; ?>
      </div>
      <div class="content-left">
        <?php print $content['content_left']; ?>
      </div>
      <div class="content-right">
        <?php print $content['content_right']; ?>
      </div>
      <div class="content-bottom">
        <?php print $content['content_bottom']; ?>
      </div>
    </section>
  </section>
  <footer class="sub-footer">
    <div class="sub-footer-left">
      <?php print $content['sub_footer_left']; ?>
    </div>
    <div class="sub-footer-mid">
      <?php print $content['sub_footer_mid']; ?>
    </div>
    <div class="sub-footer-right">
      <?php print $content['sub_footer_right']; ?>
    </div>
  </footer>
  <footer class="footer">
    <?php print $content['footer']; ?>
  </footer>
</section>
