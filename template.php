<?php 
function opench_preprocess_html(&$variables) {
  drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array('type' => 'external'));

  drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js?ver=3.1.0', array('type' => 'external'));
}
?>