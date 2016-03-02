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
    'top_1' => t('Top 1'),
    'top_2' => t('Top 2'),
    'top_3' => t('Top 3'),
    'top_4' => t('Top 4'),
    'bottom_1' => t('Bottom 1'),
    'bottom_2' => t('Bottom 2'),
    'bottom_3' => t('Bottom 3'),
    'footer' => t('Footer'),
  ),
);
