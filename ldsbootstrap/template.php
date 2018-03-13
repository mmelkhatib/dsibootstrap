<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


 function ldsbootstrap_preprocess_block(array $vars) {
   if ($vars['elements']['#block']->bid == 'menu_block-congress_main_menu_superfish') {
   drupal_add_css(libraries_get_path('superfish') . '/css/superfish.css');
   drupal_add_js(libraries_get_path('superfish') . '/superfish.js');
   drupal_add_js('jQuery(function(){
   jQuery(".main-menu.sf-menu").superfish({
          animation: {opacity:"show"},
          speed: "fast",
          autoArrows: false,
          dropShadows: false});
      });', array('type' => 'inline', 'scope' => 'footer'));
   }
 }

 function ldsbootstrap_preprocess_page(&$vars) {
   if(drupal_is_front_page()) {
     unset($vars['page']['content']['content']['content']['system_main']);
     $vars['title'] = "";
   }
 }

 function ldsbootstrap_preprocess_html(&$variables) {
     // Add conditional stylesheets for IE
     drupal_add_library('system', 'ui.datepicker');
     drupal_add_css(path_to_theme() . '/css/ie8.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE, 'weight' => 115));
 }


 function ldsbootstrap_menu_tree__main_menu_superfish__level_1(&$variables) {
       return '<ul class="main-menu sf-menu sf-style-default">' . $variables['tree'] . '</ul>';
 }

 function ldsbootstrap_block_view_alter(&$data, $block) {
   if ($block->bid == 'menu_block-congress_main_menu_superfish') {
     $data['content']['#content']['#theme_wrappers'] = array('menu_tree__main_menu_superfish__level_1');
   }
 }

 function ldsbootstrap_menu_link__menu_block__congress_main_menu_superfish(array $vars) {
   if (!empty($vars['element']['#original_link']['options']['attributes']['class'])) {
     $vars['element']['#attributes']['class'][] = $vars['element']['#original_link']['options']['attributes']['class'][0];
   }
   return theme_menu_link($vars);
 }

 // function ldsbootstrap_breadcrumb($vars) {
 //
 //   $breadcrumb = array_unique($vars['breadcrumb']);
 //
 //   if (count($breadcrumb) == 1) {
 //     array_shift($breadcrumb);
 //   }
 //
 //   // Remove breadcrumbs for reset password and user register pages
 //   if (arg(0) === 'user' && (arg(1) === 'password' || arg(1) === 'register')) {
 //     array_pop($breadcrumb);
 //   }
 //
 //   if (!empty($breadcrumb)) {
 //
 //     $separator = '&raquo;';
 //     $class = 'crumb';
 //     end($breadcrumb);
 //     $last = key($breadcrumb);
 //
 //     $output = '<div id="breadcrumb" class="clearfix"><nav class="breadcrumb-wrapper clearfix" role="navigation">';
 //     $output .= '<h2 class="element-invisible">' . t('You are here') . '</h2>';
 //     $output .= '<ol id="crumbs" class="clearfix">';
 //
 //     foreach ($breadcrumb as $key => $val) {
 //       if ($key == $last && count($breadcrumb) != 1) {
 //         $class = 'crumb crumb-last';
 //       }
 //       if ($key == 0) {
 //         $output .= '<li class="' . $class . ' crumb-first">' . $val . '</li>';
 //       }
 //       else {
 //         $output .= '<li class="' . $class . '"><span class="crumb-separator">' . $separator . '</span>' . $val . '</li>';
 //       }
 //     }
 //
 //     $output .= '</ol></nav></div>';
 //
 //     return $output;
 //   }
 // }
