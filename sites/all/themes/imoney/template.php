<?php

function imoney_form_user_login_block_alter(&$form, &$form_state, $form_id) {
  if (drupal_is_front_page() && ($form_id == 'user_login_block')) {

    $form['#attributes'] = array('class' => 'form-inline');

    // alter the text box
    $form['name']['#prefix'] = '<div class="form-group">';
    $form['name']['#suffix'] = '</div>';
    $form['name']['#attributes'] = array('class' => array('form-control', ''));
//    $form['name']['#attributes']['placeholder'] = t('Username').'<span class="form-required" title="This field is required.">*</span>';

    // alter the pass box
    $form['pass']['#prefix'] = '<div class="form-group">';
    $form['pass']['#suffix'] = '</div>';
//    $form['name']['#title'] = 'test';
    $form['pass']['#attributes'] = array('class' => array('form-control'));
    
    // button
    $form['actions']['submit']['#attributes']['class'] = array('btn', 'btn-warning btn-lg');
    
    $form['links']['#attributes']['class'] = array('user-login-block');
  }
}
