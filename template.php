<?php

/**
 * Implements hook_preprocess_HOOK().
 */
function birchstrap_preprocess_page(&$vars) {

  // Compute spans for left, main, and right columns.
  $vars['main_span'] = 12;
  $vars['left_span'] = theme_get_setting('birchstrap_left_span');
  $vars['right_span'] = theme_get_setting('birchstrap_right_span');
  if ($vars['page']['left']) {
    $vars['main_span'] -= $vars['left_span'];
  }
  if ($vars['page']['right']) {
    $vars['main_span'] -= $vars['right_span'];
  }

}
