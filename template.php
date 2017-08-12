<?php
/**
 * THEME FUNCTIONS
 */

// return the URL to the given file (generally used for images in theme)
function tricom_get_url ($path) {
  return file_create_url(path_to_theme() . '/' . $path);
}

// add a standard viewport meta tag to the head of every document
function tricom_drupal_7_base_preprocess_html (&$variables) {
  $viewport = array(
    '#tag'        => 'meta',
    '#attributes' => array(
      'name'    => 'viewport',
      'content' => 'width=device-width,initial-scale=1.0',
    )
  );

  drupal_add_html_head($viewport, 'viewport');
  /* Addin functionality for purpose of having Drupal recognize the use of sidebars - JM */

  // Compile a list of classes applied to the body element
	// Front page or not?
	$variables['classes_array'][] = $variables['is_front'] ? 'front' : 'not-front';

	// Logged in or not?
	$variables['classes_array'][] = $variables['logged_in'] ? 'logged-in' : 'not-logged-in';

	// Sidebars added, none, one or both
	if(!empty($variables['page']['sidebar_left']) && !empty($variables['page']['sidebar_right'])) {
		$variables['classes_array'][] = 'two-sidebars';
	} elseif (!empty($variables['page']['sidebar_left'])) {
		$variables['classes_array'][] = 'one-sidebar sidebar-left';
	} elseif (!empty($variables['page']['sidebar_right'])) {
		$variables['classes_array'][] = 'one-sidebar sidebar-right';
	} else {
		$variables['classes_array'][] = 'no-sidebars';
	}

	// Populates the body classes (It's Important!!)
	if ($suggestions = theme_get_suggestions(arg(), 'page', '-')) {
		foreach ($suggestions as $suggestion) {
			if ($suggestion != 'page-front') {
				$variables['classes_array'][] = drupal_html_class($suggestion);
			}
		}
	}
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
}*/
