<?php
// Include the definition of zen_settings() and zen_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'zen') . '/theme-settings.php';


/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @return
 *   A form array.
 */
function denmark_settings($saved_settings) {

  // Get the default values from the .info file.
  $defaults = zen_theme_get_default_settings('denmark');

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);
//dsm($settings);

  /*
   * Create the form using Forms API: http://api.drupal.org/api/6
   */
  $form = array();
  $form['denmark_layouts'] = array(
    '#type'          => 'radios',
    '#title'         => t('Color scheme'),
    '#default_value' => ($settings['denmark_layouts'] ? $settings['denmark_layouts'] : 0) ,
    '#description'   => t("Select a color scheme."),
    '#options'       => array(
      '0' => t('DTU (default)'),
      '1' => t('CDIO'),
    ),
  );
  $form['denmark_logo_link'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Customized Logo Link'),
    '#default_value' => ($settings['denmark_logo_link'] ? $settings['denmark_logo_link'] : null) ,
    '#description'   => t("Enter a URL for the logo link, or leave blank to have logo link to this site's <front>"),
  );

  // Add the base theme's settings.
  $form += zen_settings($saved_settings, $defaults);

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_layout']); // We don't need to select the base stylesheet.

  // Return the form
  return $form;
}
