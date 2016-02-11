<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM Stacked and Packed 9 - Press Release'),
  'category' => t('WWM'),
  'icon' => 'wwm_stacked_and_packed_9_pr.png',
  'theme' => 'wwm_stacked_and_packed_9_pr',
  'css' => 'wwm_stacked_and_packed_9_pr.css',
  'regions' => array(
    'subheader_1_left' => t('Sub Header 1 Left'),
    'subheader_1_mid' => t('Sub Header 1 Middle'),
    'subheader_1_right' => t('Sub Header 1 Right'),
    'subheader_2_left' => t('Sub Header 2 Left'),
    'subheader_2_mid' => t('Sub Header 2 Middle'),
    'subheader_2_right' => t('Sub Header 2 Right'),
    'content_inner_header' => t('Main Content Header'),
    'content_inner_top_left' => t('Main Content Top Left'),
    'content_inner_top_right' => t('Main Content Top Right'),
    'content_inner_main' => t('Main Content'),
    'content_inner_footer' => t('Main Content Footer'),
  	'content_bottom' => t('Bottom Content'),
  	'content_top' => t('Top Content'),
  	'help' => t('Help'),
  	'left_sidebar_top' => t('Left Sidebar Top'),
    'left_sidebar_bottom' => t('Left Sidebar Bottom'),
  	'right_sidebar_top' => t('Right Sidebar Top'),
    'right_sidebar_bottom' => t('Right Sidebar Bottom'),
    'subfooter_1_left' => t('Sub Footer 1 Left'),
    'subfooter_1_mid' => t('Sub Footer 1 Middle'),
    'subfooter_1_right' => t('Sub Footer 1 Right'),
    'subfooter_2_left' => t('Sub Footer 2 Left'),
    'subfooter_2_mid' => t('Sub Footer 2 Middle'),
    'subfooter_2_right' => t('Sub Footer 2 Right'),
  ),
);
