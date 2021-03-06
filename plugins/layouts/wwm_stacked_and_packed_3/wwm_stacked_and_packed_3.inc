<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM Stacked and Packed 3'),
  'category' => t('WWM'),
  'icon' => 'wwm_stacked_and_packed_3.png',
  'theme' => 'wwm_stacked_and_packed_3',
  'css' => 'wwm_stacked_and_packed_3.css',
  'regions' => array(
    'subheader_1' => t('Sub Header 1'),
    'subheader_2' => t('Sub Header 2'),
  	'content' => t('Main Content'),
  	'content_bottom' => t('Bottom Content'),
  	'content_top' => t('Top Content'),
  	'help' => t('Help'),
  	'left_sidebar_top' => t('Left Sidebar Top'),
    'left_sidebar_bottom' => t('Left Sidebar Bottom'),
  	'right_sidebar_top' => t('Right Sidebar Top'),
    'right_sidebar_bottom' => t('Right Sidebar Bottom'),
    'subfooter_1' => t('Sub Footer 1'),
    'subfooter_2' => t('Sub Footer 2'),
  ),
);
