<?php

/**
 * @file
 * Implementation of hook_panels_layouts.
 */
// Plugin definition.
$plugin = array(
  'title' => t('Wide Page with Sidebar'),
  'category' => t('DSI Layouts'),
  'icon' => 'wide-one-col-sidebar.png',
  'theme' => 'panels_wide_one_col_sidebar',
  'theme arguments' => array('id', 'content'),
  'regions' => array(
    'page_header' => t('Page Header'),
    'page_content' => t('Content'),
    'page_sidebar' => t('Sidebar'),

  ),
);
