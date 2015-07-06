<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM Stacked and Packed 9'),
  'category' => t('WWM'),
  'icon' => 'wwm_stacked_and_packed_9.png',
  'theme' => 'wwm_stacked_and_packed_9',
  'css' => 'wwm_stacked_and_packed_9.css',
  'regions' => array(
    'subheader_1_left' => t('Sub Header 1 Left'),
    'subheader_1_mid' => t('Sub Header 1 Middle'),
    'subheader_1_right' => t('Sub Header 1 Right'),
    'subheader_2_left' => t('Sub Header 2 Left'),
    'subheader_2_mid' => t('Sub Header 2 Middle'),
    'subheader_2_right' => t('Sub Header 2 Right'),
  	'content' => t('Main Content'),
  	'content_bottom' => t('Content Bottom'),
  	'content_top' => t('Content Top'),
  	'help' => t('Help'),
  	'left_sidebar_1' => t('Left Sidebar 1'),
    'left_sidebar_2' => t('Left Sidebar 2'),
  	'right_sidebar_1' => t('Right Sidebar 1'),
    'right_sidebar_2' => t('Right Sidebar 2'),
    'subfooter_1_left' => t('Sub Footer 1 Left'),
    'subfooter_1_mid' => t('Sub Footer 1 Middle'),
    'subfooter_1_right' => t('Sub Footer 1 Right'),
    'subfooter_2_left' => t('Sub Footer 2 Left'),
    'subfooter_2_mid' => t('Sub Footer 2 Middle'),
    'subfooter_2_right' => t('Sub Footer 2 Right'),
  ),
);