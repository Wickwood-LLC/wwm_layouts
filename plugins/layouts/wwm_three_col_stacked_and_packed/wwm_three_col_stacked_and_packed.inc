<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM 3-Column Stacked and Packed'),
  'category' => t('WWM'),
  'icon' => 'wwm_three_col_stacked_and_packed.png',
  'theme' => 'wwm_three_col_stacked_and_packed',
  'css' => 'wwm_three_col_stacked_and_packed.css',
  'regions' => array(
  	'content' => t('Main Content'),
  	'content_bottom' => t('Content Bottom'),
  	'content_top' => t('Content Top'),
  	'help' => t('Help'),
  	'left_sidebar' => t('Left Sidebar'),
  	'right_sidebar' => t('Right Sidebar'),
  ),
);
