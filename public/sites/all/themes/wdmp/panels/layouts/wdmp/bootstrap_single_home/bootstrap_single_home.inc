<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Single Column Home'),
  'category' => t('Bootstrap'),
  'icon' => 'bootstrap_single_home.png',
  'theme' => 'bootstrap_single_home',
  'regions' => array(
	  
    'jumbotron' => t('Jumbotron'),
    'top' => t('Top'),
    'products' => t('Products'),
    'bottom' => t('Bottom'),
  ),
);
