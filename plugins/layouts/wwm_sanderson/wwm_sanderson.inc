<?php
// Plugin definition
$plugin = array(
  'title' => t('WWM Sanderson'),
  'icon' => 'wwm_sanderson.png',
  'category' => t('WWM'),
  'theme' => 'wwm_sanderson',
  'css' => 'wwm_sanderson.css',
  'regions' => array(
    'column1' => t('Row 1: First Column'),
    'column2' => t('Row 1: Second Column'),
    'secondarycolumn1' => t('Row 2: First Column'),
    'secondarycolumn2' => t('Row 2: Second Column'),
    'secondarycolumn3' => t('Row 2: Third Column'),
    'bottomcolumn1' => t('Row 3: First Column'),
    'bottomcolumn2' => t('Row 3: Second Column'),
  ),
);

/**
 * Prepares variables for wwm_sanderson templates.
 *
 * Default template: wwm-sanderson.tpl.php.
 *
 * @param array $variables
 *   An associative array containing:
 *   - $content: An array of content, each item in the array is keyed to one
 *     panel of the layout.
 */
function template_preprocess_wwm_sanderson(&$variables) {
  $variables['third_row'] = FALSE;

  if ($variables['content']['bottomcolumn1'] || $variables['content']['bottomcolumn2']) {
    $variables['third_row'] = TRUE;
  }
}
