<?php
/**
 * @file
 * Template for Radix Sanderson.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display sanderson clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 radix-layouts-column1 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column1']; ?>
        </div>
      </div>
      <div class="col-md-6 radix-layouts-column2 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column2']; ?>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 radix-layouts-secondarycolumn1 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['secondarycolumn1']; ?>
        </div>
      </div>
      <div class="col-md-4 radix-layouts-secondarycolumn2 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['secondarycolumn2']; ?>
        </div>
      </div>
      <div class="col-md-4 radix-layouts-secondarycolumn3 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['secondarycolumn3']; ?>
        </div>
      </div>
    </div>

    <div class="row <?php if (!($renderer->prepared['regions']['bottomcolumn1']['pids']) && !($renderer->prepared['regions']['bottomcolumn2']['pids'])) {print "empty";}?>">
      <div class="col-md-6 radix-layouts-bottomcolumn1 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['bottomcolumn1']; ?>
        </div>
      </div>
      <div class="col-md-6 radix-layouts-bottomcolumn2 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['bottomcolumn2']; ?>
        </div>
      </div>
    </div>

  </div>
  
</div><!-- /.sanderson -->
