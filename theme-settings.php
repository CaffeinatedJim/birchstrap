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
    1 => 'col-md-1',
    2 => 'col-md-2',
    3 => 'col-md-3',
    4 => 'col-md-4',
    5 => 'col-md-5',
    6 => 'col-md-6',
    7 => 'col-md-7',
    8 => 'col-md-8',
    9 => 'col-md-9',
    10 => 'col-md-10',
    11 => 'col-md-11',
    12 => 'col-md-12',
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
