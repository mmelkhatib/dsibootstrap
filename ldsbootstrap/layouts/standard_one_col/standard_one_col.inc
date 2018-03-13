<?php

/**
 * @file
 * Implementation of hook_panels_layouts.
 */
// Plugin definition.
$plugin = array(
  'title' => t('Standard single column page'),
  'category' => t('DSI Layouts'),
  'icon' => 'standard-one-col.png',
  'theme' => 'panels_standard_one_col',
  'theme arguments' => array('id', 'content'),
  'regions' => array(
    'page_header' => t('Page Header'),
    'page_content' => t('Content'),
  ),
);
