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
  	'content_bottom' => t('Content Bottom'),
  	'content_top' => t('Content Top'),
  	'help' => t('Help'),
  	'left_sidebar_1' => t('Left Sidebar 1'),
    'left_sidebar_2' => t('Left Sidebar 2'),
  	'right_sidebar_1' => t('Right Sidebar 1'),
    'right_sidebar_2' => t('Right Sidebar 2'),
    'subfooter_1' => t('Sub Footer 1'),
    'subfooter_2' => t('Sub Footer 2'),
  ),
);
