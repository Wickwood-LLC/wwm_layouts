<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM User Layout Special'),
  'category' => t('WWM'),
  'icon' => 'wwm_user_layout_special.png',
  'theme' => 'wwm_user_layout_special',
  'css' => 'wwm_user_layout_special.css',
  'regions' => array(
    'sidebar' => t('Sidebar'),
    'content_top' => t('Content Top'),
    'content_left' => t('Content Left'),
    'content_right' => t('Content Right'),
    'content_bottom' => t('Content Bottom'),
    'sub_footer_left' => t('Sub Footer Left'),
    'sub_footer_mid' => t('Sub Footer Middle'),
    'sub_footer_right' => t('Sub Footer Right'),
    'footer' => t('Footer'),
  ),
);
