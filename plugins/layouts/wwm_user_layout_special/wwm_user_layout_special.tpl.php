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
  <?php if (($renderer->prepared['regions']['sidebar']['pids'])) : ?>
    <aside class="sidebar"><?php print $content['sidebar']; ?></aside>
  <?php endif; ?>
  <?php if (($renderer->prepared['regions']['content_top']['pids']) || ($renderer->prepared['regions']['content_left']['pids']) || ($renderer->prepared['regions']['content_right']['pids']) || ($renderer->prepared['regions']['content_bottom']['pids'])) : ?>
    <section class="content-area">
      <?php if (($renderer->prepared['regions']['content_top']['pids'])) : ?>
        <div class="content-top"><?php print $content['content_top']; ?></div>
      <?php endif; ?>
      <?php if (($renderer->prepared['regions']['content_left']['pids'])) : ?>
        <div class="content-left"><?php print $content['content_left']; ?></div>
      <?php endif; ?>
      <?php if (($renderer->prepared['regions']['content_right']['pids'])) : ?>
        <div class="content-right"><?php print $content['content_right']; ?></div>
      <?php endif; ?>
      <?php if (($renderer->prepared['regions']['content_bottom']['pids'])) : ?>
        <div class="content-bottom"><?php print $content['content_bottom']; ?></div>
      <?php endif; ?>
    </section>
  <?php endif; ?>
</section>
<footer class="sub-footer">
  <?php if (($renderer->prepared['regions']['sub_footer_left']['pids'])) : ?>
    <div class="sub-footer-left"><?php print $content['sub_footer_left']; ?></div>
  <?php endif; ?>
  <?php if (($renderer->prepared['regions']['sub_footer_mid']['pids'])) : ?>
    <div class="sub-footer-mid"><?php print $content['sub_footer_mid']; ?></div>
  <?php endif; ?>
  <?php if (($renderer->prepared['regions']['content_bottom']['sub_footer_right'])) : ?>
    <div class="sub-footer-right"><?php print $content['sub_footer_right']; ?></div>
  <?php endif; ?>
<?php if (($renderer->prepared['regions']['content_bottom']['sub_footer_right'])) : ?><footer class="footer">
  </footer>
      <?php print $content['footer']; ?>
  </footer>
<?php endif; ?>
