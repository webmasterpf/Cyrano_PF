<?php

/*
 * Tableau pour afficher les objectifs BTS (pdf) sans limite 
 * de nombre.
 */
?>
<?php

foreach($node->field_objectif_bts as $file) {
  if ($file['view']) {
      $header = array('data' => 'Les objectifs des formations BTS');
      $rows[] = array($file['view']);
      $attributes = array('id'=> 'objectif-bts','sticky' => FALSE);
    }
}

$output = theme('table', $header,$rows, $attributes);
print $output;
?>