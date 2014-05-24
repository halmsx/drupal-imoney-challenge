<?php
/**
 * @file
 * imoney_node_types.features.inc
 */

/**
 * Implements hook_views_api().
 */
function imoney_node_types_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function imoney_node_types_node_info() {
  $items = array(
    'mobileplan' => array(
      'name' => t('Mobile plan'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'phone' => array(
      'name' => t('Phone'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
