 <!-- ______________________ LAYOUT PAGE WEBFORM PROVIDE _______________________ -->
<?php
include_once( 'form-formatting-helpers.php' );

$personal_info_header = array( '', 'First name', 'Surname', 'SSN' );

// If editing or viewing submissions, display the navigation at the top.
if (isset($form['submission_info']) || isset($form['navigation'])) {
	print drupal_render($form['navigation']);
	print drupal_render($form['submission_info']);
}

// Print out the main part of the form.
// dpm( $form['submitted'] );

fieldset_labels_on_left_table( $form['submitted']['premium'], false, -50 );
fieldset_labels_on_left_table( $form['submitted']['personal_details'], true, -10 );
fieldset_subfieldsets_to_table( $form['submitted']['spouse'], $personal_info_header );
fieldset_subfieldsets_to_table( $form['submitted']['children'], $personal_info_header );
fieldset_labels_on_left_table( $form['submitted']['confirmation'], false, 50 );

// Always print out the entire $form. This renders the remaining pieces of the
// form that haven't yet been rendered above.
print drupal_render($form);

// Print out the navigation again at the bottom.
if (isset($form['submission_info']) || isset($form['navigation'])) {
	unset($form['navigation']['#printed']);
	print drupal_render($form['navigation']);
}
