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
 *   $content['content']
 *   $content['content_bottom']
 *   $content['content_top']
 *   $content['help']
 *   $content['left_sidebar']
 *   $content['right_sidebar']
 */
?>
<div class="sub-header-1">
  <div class="sub-header-1-left <?php if (!($renderer->prepared['regions']['subheader_1_left']['pids'])) {print "empty";}?>">
    <?php print $content['subheader_1_left']; ?>
  </div>
  <div class="sub-header-1-mid <?php if (!($renderer->prepared['regions']['subheader_1_mid']['pids'])) {print "empty ";} if (!($renderer->prepared['regions']['subheader_1_left']['pids']) || !($renderer->prepared['regions']['subheader_1_right']['pids'])) {print "no-sides";} ?>">
    <?php print $content['subheader_1_mid']; ?>
  </div>
  <div class="sub-header-1-right <?php if (!($renderer->prepared['regions']['subheader_1_right']['pids'])) {print "empty";}?>">
    <?php print $content['subheader_1_right']; ?>
  </div>
</div>
<div class="sub-header-2">
  <div class="sub-header-2-left <?php if (!($renderer->prepared['regions']['subheader_2_left']['pids'])) {print "empty";}?>">
    <?php print $content['subheader_2_left']; ?>
  </div>
  <div class="sub-header-2-mid <?php if (!($renderer->prepared['regions']['subheader_2_mid']['pids'])) {print "empty ";} if (!($renderer->prepared['regions']['subheader_2_left']['pids']) || !($renderer->prepared['regions']['subheader_2_right']['pids'])) {print "no-sides";} ?>">
    <?php print $content['subheader_2_mid']; ?>
  </div>
  <div class="sub-header-2-right <?php if (!($renderer->prepared['regions']['subheader_2_right']['pids'])) {print "empty";}?>">
    <?php print $content['subheader_2_right']; ?>
  </div>
</div>
<div class="panel-display panel-wwm-3col-stacked
<?php if (($renderer->prepared['regions']['left_sidebar_top']['pids'] || $renderer->prepared['regions']['left_sidebar_bottom']['pids']) && ($renderer->prepared['regions']['right_sidebar_top']['pids'] || $renderer->prepared['regions']['right_sidebar_bottom']['pids'])) { 
    print "has-two-sidebars";
  } elseif ($renderer->prepared['regions']['left_sidebar_top']['pids'] || $renderer->prepared['regions']['left_sidebar_bottom']['pids']) {
    print "has-one-sidebar left-sidebar";
  } elseif ($renderer->prepared['regions']['right_sidebar_top']['pids'] || $renderer->prepared['regions']['right_sidebar_bottom']['pids']) {
    print "has-one-sidebar right-sidebar";
  } else {
    print "no-sidebar";
  }?>
  <?php if (!($renderer->prepared['regions']['content']['pids']) && !($renderer->prepared['regions']['content_bottom']['pids']) && !($renderer->prepared['regions']['content_top']['pids']) && !($renderer->prepared['regions']['help']['pids'])) {
    print "no-mid";
  }?> clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col panel-col-mid">
    <?php if ($content['help']): ?>
      <div class="help">
        <?php print $content['help']; ?>
      </div>
    <?php endif; ?>
    <?php if ($content['content_top']): ?>
    	<div class="content-top">
        <?php print $content['content_top']; ?>
      </div>
    <?php endif; ?>
    <?php if ($content['content']): ?>
    	<div class="content-main">
    	  <?php print $content['content']; ?>
    	</div>
    <?php endif; ?>
    <?php if ($content['content_bottom']): ?>
    	<div class="content-bottom">
    	  <?php print $content['content_bottom']; ?>
    	</div>
    <?php endif; ?>
  </div>
  <div class="panel-panel panel-col-sidebar panel-col-left">
    <?php print $content['left_sidebar_top']; ?>
    <?php print $content['left_sidebar_bottom']; ?>
  </div>
  <div class="panel-panel panel-col-sidebar panel-col-right">
    <?php print $content['right_sidebar_top']; ?>
    <?php print $content['right_sidebar_bottom']; ?>
  </div>
</div>
<div class="sub-footer-1">
  <div class="sub-footer-1-right <?php if (!($renderer->prepared['regions']['subfooter_1_left']['pids'])) {print "empty";}?>">
    <?php print $content['subfooter_1_left']; ?>
  </div>
  <div class="sub-footer-1-mid <?php if (!($renderer->prepared['regions']['subfooter_1_mid']['pids'])) {print "empty ";} if (!($renderer->prepared['regions']['subfooter_1_left']['pids']) || !($renderer->prepared['regions']['subfooter_1_right']['pids'])) {print "no-sides";} ?>">
    <?php print $content['subfooter_1_mid']; ?>
  </div>
  <div class="sub-footer-1-right <?php if (!($renderer->prepared['regions']['subfooter_1_right']['pids'])) {print "empty";}?>">
    <?php print $content['subfooter_1_right']; ?>
  </div>
</div>
<div class="sub-footer-2">
  <div class="sub-footer-2-right <?php if (!($renderer->prepared['regions']['subfooter_2_left']['pids'])) {print "empty";}?>">
    <?php print $content['subfooter_2_left']; ?>
  </div>
  <div class="sub-footer-2-mid <?php if (!($renderer->prepared['regions']['subfooter_2_mid']['pids'])) {print "empty ";} if (!($renderer->prepared['regions']['subfooter_2_left']['pids']) || !($renderer->prepared['regions']['subfooter_2_right']['pids'])) {print "no-sides";} ?>">
    <?php print $content['subfooter_2_mid']; ?>
  </div>
  <div class="sub-footer-2-right <?php if (!($renderer->prepared['regions']['subfooter_2_right']['pids'])) {print "empty";}?>">
    <?php print $content['subfooter_2_right']; ?>
  </div>
</div>
