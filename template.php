<?php
/**
 * THEME FUNCTIONS
 */

// return the URL to the given file (generally used for images in theme)
function tricom_get_url ($path) {
  return file_create_url(path_to_theme() . '/' . $path);
}

// search form functionality - TEMP COMMENTED OUT
/*function tricom_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'search_block_form') {
        /* Adding information to the search box */
        /*$form['search_block_form']['#title'] = t('Search');
        $form['search_block_form']['#title_display'] = 'invisible';
        $form['search_block_form']['#default_value'] = t('Search');*/

        /* extra attributes */
/*        $form['search_block_form']['#attributes']['onblur'] = "if(this.value == '') {this.value = 'Search') {this.value = '';}";
        $form['search_block_form']['#attributes']['onfocus'] = "if(this.value == 'Search') {this.value = '';}";
        $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";*/

        /* alternate placeholder attribute - HTML5 vs Javascript */
/*        $form['search_block_form']['#attributes']['placeholder'] = t('Search');
    }
}

function tricom_block_view_alter(&$data, $block) {*/
    // adding a class to the search function area
    /*if ($block->region == 'subnav' && isset($data['content']['search_block_form'])) {
      $data['content']['actions']['#attributes']['class'][] = 'submit-search';
    }
}*/*/