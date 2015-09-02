<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM Stacked and Packed 1'),
  'category' => t('WWM'),
  'icon' => 'wwm_stacked_and_packed_1.png',
  'theme' => 'wwm_stacked_and_packed_1',
  'css' => 'wwm_stacked_and_packed_1.css',
  'regions' => array(
  	'content' => t('Main Content'),
  	'content_bottom' => t('Bottom Content'),
  	'content_top' => t('Top Content'),
  	'help' => t('Help'),
  	'left_sidebar' => t('Left Sidebar'),
  	'right_sidebar' => t('Right Sidebar'),
  ),
);
