<?php
function imoney_form_user_login_block_alter(&$form, &$form_state, $form_id) {
  if ($is_front && ($form_id == 'user_login_block')) {
    
    // alter the text box
//    $form['name']['#prefix'] = '<div class="form-group">';
//    $form['name']['#suffix'] = '</div>';
    $form['name']['#title'] = 'test';
//    $form['name']['#attributes'] = array('class' => 'form-control');
  }
}