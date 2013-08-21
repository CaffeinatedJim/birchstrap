<?php

/**
 * @file
 * Theme setting callbacks for the Birchstrap theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Add in configuration for left, main, and right columns.
 */
function birchstrap_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['birchstrap_columns'] = array(
    '#type' => 'fieldset',
    '#title' => t('Columns'),
  );

  $spans = array(
    1 => 'span1',
    2 => 'span2',
    3 => 'span3',
    4 => 'span4',
    5 => 'span5',
    6 => 'span6',
    7 => 'span7',
    8 => 'span8',
    9 => 'span9',
    10 => 'span10',
    11 => 'span11',
    12 => 'span12',
  );

  $form['birchstrap_columns']['birchstrap_left_span'] = array(
    '#type' => 'select',
    '#title' => t('Left'),
    '#options' => $spans,
    '#default_value' => theme_get_setting('birchstrap_left_span'),
  );

  $form['birchstrap_columns']['birchstrap_right_span'] = array(
    '#type' => 'select',
    '#title' => t('Right'),
    '#options' => $spans,
    '#default_value' => theme_get_setting('birchstrap_right_span'),
  );

}
