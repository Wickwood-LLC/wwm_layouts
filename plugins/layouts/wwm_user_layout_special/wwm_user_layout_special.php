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

<section class="www-user-layout-special">
  <aside class="sidebar"></aside>
  <section class="content-area">
    <div class="content-top"></div>
    <div class="content-left"></div>
    <div class="content-right"></div>
    <div class="content-bottom"></div>
  </section>
</section>

