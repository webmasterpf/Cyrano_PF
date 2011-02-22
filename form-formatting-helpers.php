<?php

// Author: Juho Manninen, 2009, http://1013.fi/cms/theming-drupal-web-forms

// helper function to remove header prior rendering form element
function render_titleless( $el ) {
	unset( $el['#title'] ); // title already in header, don't repeat in cell
	return drupal_render( $el ); // returns field without label
}

/**
 * Replace a form fieldset (group) by a table formatted as:
 * +----------+--------------+--------------+
 * |          | name         | ssn          |
 * +----------+--------------+--------------+
 * | spouse   | [input /]    | [input /]    |
 * +----------+--------------+--------------+
 * | another  | [input /]    | [input /]    |
 * | fieldset |              |              |
 * +----------+--------------+--------------+
 *
 *
 * @param $group - reference to the fieldset
 * @param $header - set table's header cell's content
 */
function fieldset_subfieldsets_to_table( &$group, $header ) {

	// dpm( $group );
	// confirm we get fieldsets, not form elements nor type-less elements behind page brake
	if( empty( $group['#type'] ) || $group['#type'] != 'fieldset' ) {
		return;
	}

	$rows = array();

	foreach( element_children( $group ) as $group_name ) { // for each sub-fieldset
		$row = array( 'data' => array() );
		$row['data'][0] = array( // header cell's content lives in data
			'data' => $group[$group_name]['#title'],
			'class' => 'label_cell'
		);
		foreach( element_children( $group[$group_name] ) as $form_field_name ) {
			$row['data'][] = render_titleless( $group[$group_name][$form_field_name] );
		}
		drupal_render($group[$group_name]); //  sub-fieldset rendered it into void
		$rows[] = $row;
	}

	$group['table'] = array(
		'#type' => 'markup',
		'#value' => theme('table', $header, $rows)
	);
}

/**
 * Replace a form fieldset (group) by a table formatted as:
 * +----------+--------------+
 * | name     | [input /]    |
 * +----------+--------------+
 * | ssn      | [input /]    |
 * +----------+--------------+
 *
 * @param $group - reference to the fieldset
 * @param $keep_fieldset - whether to keep the fieldset border, or to remove it
 * @param $weight - set group weight - heavier float down on the page
 */
function fieldset_labels_on_left_table( &$group, $keep_fieldset = false, $weight = 0 ) {

	// dpm( $group );
	// confirm we get fieldsets, not form elements nor type-less elements behind page brake
	if( empty( $group['#type'] ) || $group['#type'] != 'fieldset' ) {
		return;
	}

	$rows = array();

	foreach( element_children( $group ) as $form_field_name ) {
		$description = $group[$form_field_name]['#description'];
		$group[$form_field_name]['#description'] = ''; // no duplicate description below title
		// theme_form_element prepares label together with the required star
		$title = theme( 'form_element', $group[$form_field_name], '' );
		$group[$form_field_name]['#description'] = $description;
		$group[$form_field_name]['#title'] = ''; // we don't want the label to repeat
		$row = array(
			'data' => array( // row's cells live in data, option for attributes
				0 => array( // header cell's content lives in data, option for attributes
					// 'data' => $title,
					'data' => $title,
					'class' => 'label_cell'
				),
				1 => drupal_render( $group[$form_field_name] )
			)
		);
		$rows[] = $row;
	}

	$grp = array(
		'#type' => 'markup',
		'#weight' => $weight,
		'#value' => theme('table', array(), $rows)
	);

	(!$keep_fieldset) ? $group = $grp : $group['table'] = $grp;
}
