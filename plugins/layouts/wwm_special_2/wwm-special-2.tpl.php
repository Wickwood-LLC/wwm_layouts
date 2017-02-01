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
 *   $content['top_1']
 *   $content['top_2']
 *   $content['top_3']
 *   $content['top_4']
 *   $content['bottom_1']
 *   $content['bottom_2']
 *   $content['bottom_3']
 */
?>

<main id="wwm-special-2">
  <header class="header <?php if (!($renderer->prepared['regions']['header']['pids'])) {print "empty";}?>">
    <?php print $content['header']; ?>
  </header>
  <section class="top-columns">
    <section class="top-1 <?php if (!($renderer->prepared['regions']['top_1']['pids'])) {print "empty";}?>">
      <?php print $content['top_1']; ?>
    </section>
    <section class="top-2 <?php if (!($renderer->prepared['regions']['top_2']['pids'])) {print "empty";}?>">
      <?php print $content['top_2']; ?>
    </section>
    <section class="top-3 <?php if (!($renderer->prepared['regions']['top_3']['pids'])) {print "empty";}?>">
      <?php print $content['top_3']; ?>
    </section>
    <section class="top-4 <?php if (!($renderer->prepared['regions']['top_4']['pids'])) {print "empty";}?>">
      <?php print $content['top_4']; ?>
    </section>
  </section>
  <section class="bottom-columns">
    <section class="bottom-1 <?php if (!($renderer->prepared['regions']['bottom_1']['pids'])) {print "empty";}?>">
      <?php print $content['bottom_1']; ?>
    </section>
    <section class="bottom-2 <?php if (!($renderer->prepared['regions']['bottom_2']['pids'])) {print "empty";}?>">
      <?php print $content['bottom_2']; ?>
    </section>
    <section class="bottom-3 <?php if (!($renderer->prepared['regions']['bottom_3']['pids'])) {print "empty";}?>">
      <?php print $content['bottom_3']; ?>
    </section>
  </section>
  <footer class="footer <?php if (!($renderer->prepared['regions']['footer']['pids'])) {print "empty";}?>">
    <?php print $content['footer']; ?>
  </footer>
</main>
