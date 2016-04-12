<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('WWM Collpase-3'),
  'category' => t('WWM'),
  'icon' => 'wwm_collpase_3.png',
  'theme' => 'wwm_collpase_3',
  'css' => 'wwm_collpase_3.css',
  'regions' => array(
    'left' => t('Left'),
    'middle' => t('Middle'),
    'right' => t('Right'),
  ),
);
