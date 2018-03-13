<?php

/**
 * @file
 * Implementation of hook_panels_layouts.
 */
// Plugin definition.
$plugin = array(
  'title' => t('Standar Page with Sidebar'),
  'category' => t('DSI Layouts'),
  'icon' => 'standard-one-col-sidebar.png',
  'theme' => 'panels_standard_one_col_sidebar',
  'theme arguments' => array('id', 'content'),
  'regions' => array(
    'page_header' => t('Page Header'),
    'page_content' => t('Content'),
    'page_sidebar' => t('Sidebar'),

  ),
);
