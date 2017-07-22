<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function opench_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['section_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Section Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['section_settings']['get_involved'] = array(
    '#type' => 'fieldset',
    '#title' => t('Get involved links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['section_settings']['get_involved']['show_get_involved'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show get involved section'),
    '#default_value' => theme_get_setting('show_get_involved'),
  );
  $form['section_settings']['get_involved']['meetup_link'] = array(
    '#type' => 'textfield',
    '#title' => t('MeetUp Group URL'),
    '#default_value' => theme_get_setting('meetup_link'),
  );
  $form['section_settings']['get_involved']['slack_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Slack Group URL'),
    '#default_value' => theme_get_setting('slack_link'),
  );
  $form['section_settings']['get_involved']['google_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Group URL'),
    '#default_value' => theme_get_setting('google_link'),
  );


  $form['section_settings']['our_mission'] = array(
    '#type' => 'fieldset',
    '#title' => t('Our Mission'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['section_settings']['our_mission']['show_our_mission'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show our mission section'),
    '#default_value' => theme_get_setting('show_our_mission'),
  );
  $form['section_settings']['our_mission']['first_section_title'] = array(
    '#type' => 'textfield',
    '#title' => t('First section title'),
    '#default_value' => theme_get_setting('first_section_title'),
  );
  $form['section_settings']['our_mission']['second_section_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Second section title'),
    '#default_value' => theme_get_setting('second_section_title'),
  );
  $form['section_settings']['our_mission']['third_section_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Third section title'),
    '#default_value' => theme_get_setting('third_section_title'),
  );
  $form['section_settings']['our_mission']['first_section_content'] = array(
    '#type' => 'textfield',
    '#title' => t('First section content'),
    '#default_value' => theme_get_setting('first_section_content'),
  );
  $form['section_settings']['our_mission']['second_section_content'] = array(
    '#type' => 'textfield',
    '#title' => t('Second section content'),
    '#default_value' => theme_get_setting('second_section_content'),
  );
  $form['section_settings']['our_mission']['third_section_content'] = array(
    '#type' => 'textfield',
    '#title' => t('Third section content'),
    '#default_value' => theme_get_setting('third_section_content'),
  );


  $form['footer_section'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['footer_section']['social_link_twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('twitter Link'),
    '#default_value' => theme_get_setting('social_link_twitter'),
  );
  $form['footer_section']['social_link_facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('facebook Link'),
    '#default_value' => theme_get_setting('social_link_facebook'),
  );
  $form['footer_section']['social_link_google'] = array(
    '#type' => 'textfield',
    '#title' => t('google Link'),
    '#default_value' => theme_get_setting('social_link_google'),
  );
}
