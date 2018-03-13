<?php

/**
 * @file
 * Implementation of hook_panels_layouts.
 */
// Plugin definition.
$plugin = array(
  'title' => t('Wide single column page'),
  'category' => t('DSI Layouts'),
  'icon' => 'wide-one-col.png',
  'theme' => 'panels_wide_one_col',
  'theme arguments' => array('id', 'content'),
  'regions' => array(
    'page_header' => t('Page Header'),
    'page_content' => t('Content'),
  ),
);
