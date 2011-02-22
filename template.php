<?php
// permet template suggestions avec page-
function phptemplate_preprocess(&$vars, $hook)
{
  switch($hook)
  {
      case 'page' :
      if (arg(0) == 'node')
      {
        $vars['template_files'][]  = 'page-' . $vars['node']->type;
      }
      break;

  }
}

// fonction pour avoir la possibilité de faire un template pour page recherche
function phptemplate_preprocess_page(&$vars) {
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }
}

// permet le debugage de php avec drupal
function debug_print($var) {
  drupal_set_message('<pre>'. print_r($var, TRUE) .'</pre>');
}
//Webform "You have already submitted this form." message off
function Cyrano_PF_webform_view_messages($node, $teaser, $page, $submission_count, $limit_exceeded, $allowed_roles) {
  theme_webform_view_messages($node, $teaser, $page, 0, $limit_exceeded, $allowed_roles);
}

// permet de trier la taxonomie
function Cyrano_PF_print_terms($node, $vid = NULL, $ordered_list = TRUE) {
     $vocabularies = taxonomy_get_vocabularies();
     if ($ordered_list) $output .= '<ul>'; //checks to see if you want an ordered list
     if ($vid) { //checks to see if you've passed a number with vid, prints just that vid
        $output = '<div class=tags-'. $vid . '>';
        foreach($vocabularies as $vocabulary) {
         if ($vocabulary->vid == $vid) {
           $terms = taxonomy_node_get_terms_by_vocabulary($node, $vocabulary->vid);
           if ($terms) {
             $links = array();
             $output .= '<span class=only-vocabulary-'. $vocabulary->vid . '>';
             if ($ordered_list) $output .= '<li class=vocabulary-'. $vocabulary->vid . '>' . $vocabulary->name . ': ';
             foreach ($terms as $term) {
               $links[] = '<span class="term-' . $term->tid . '">' . l($term->name, taxonomy_term_path($term), array('rel' => 'tag', 'title' => strip_tags($term->description))) .'</span>';
             }
             $output .= implode(', ', $links);
             if ($ordered_list) $output .= '</li>';
             $output .= '</span>';
           }
         }
       }
     }
     else {
       $output = '<div class="tags">';
       foreach($vocabularies as $vocabulary) {
         if ($vocabularies) {
           $terms = taxonomy_node_get_terms_by_vocabulary($node, $vocabulary->vid);
           if ($terms) {
             $links = array();
             $output .= '<ul class=vocabulary-'. $vocabulary->vid . '>';
             if ($ordered_list) $output .= '<li class=vocabulary-'. $vocabulary->vid . '>' . $vocabulary->name . ': ';
             foreach ($terms as $term) {
               $links[] = '<span class="term-' . $term->tid . '">' . l($term->name, taxonomy_term_path($term), array('rel' => 'tag', 'title' => strip_tags($term->description))) .'</span>';
             }
             $output .= implode(', ', $links);
             if ($ordered_list) $output .= '</li>';
             $output .= '</ul>';
           }
         }
       }
     }
     if ($ordered_list) $output .= '</ul>';
     $output .= '</div>';
     return $output;
}

/**
* Imprimer des termes présent sur un noeud d'un vocabulaire
* spécifique.
*
* @param object $node
*   Le noeud en cours de visualisation.
* @param integer $vid
*   L'id du vocabulaire que l'on souhaite imprimer.
*
* @return string $output
*   La taxonomy présente sur le noeud correspondant à ce vocabulaire.
*/
function Cyrano_PF_taxonomy_specifique($node, $vid) {
  $output = '';

  if (count($node->taxonomy)) {
    $taxonomys = array();
    foreach ($node->taxonomy as $taxo) {
      if ($taxo->vid == $vid) {
        $taxonomys[] = array('title' => $taxo->name, 'href' => taxonomy_term_path($taxo));
      }
    }

    if ($taxonomys) {
      foreach ($taxonomys as $taxonomy) {
        $output .= l($taxonomys['title'], $taxonomys['href']);
      }
    }
  }

  return $output;
}

//Pour afficher une seule taxonomie dans la fiche de poste bts alternance  - http://drupal.org/node/823918
function Cyrano_PF_preprocess_node(&$vars) {
  $node = $vars['node'];
  $wanted_vid = 7;//Choisir ici le vid voulu,ici celui de l'etat de l'offre
  foreach($node->taxonomy as $term) {
    if ( $wanted_vid == $term->vid ) {
      $vars['my_terms'] .= $term->name; //You would need to format this the way you want it displayed, or pass it to a theme function
    }
  }
}

/*_______________FONCTIONS POUR ACTION SUR AGGREGATOR____________*/
/* modify link items in the aggregator to open in a new window and
suppress the "blog it" icon & links should the module ever be enabled.
(Code removed--not commented out--from this copy of the original function.)
 * drupal.org/node/573054 */

function phptemplate_aggregator_block_item($item, $feed = 0) {
  global $user;

  $output = '';

  // Display the external link to the item.
  $output .= '<a href="'. check_url($item->link) .'" target="_blank">'. check_plain($item->title) ."</a>\n";

  return $output;
}
/**Enleve le lien en savoir plus - NE PAS OUBLIER DE CHANGER LE NOM DU THEME !!!___*/
function Cyrano_PF_more_link ($url, $title) {
  if (stristr( $url, 'aggregator')) {
    return "";
  }
}
?>
<?php
// HTML format for the webform mail - envoi mail au format HTML
function phptemplate_webform_mail_headers($form_values, $node, $sid, $cid) {
  $headers = array(
    'Content-Type'  => 'text/html; charset=UTF-8; format=flowed; delsp=yes',
    'X-Mailer'      => 'Drupal Webform (PHP/'. phpversion() .')',
  );
  return $headers;
}
?>
<?php
// permet d'ouvrir en blank les fichiers uploadés via filefield
//NE PAS OUBLIER DE CHANGER NOM DU THEME !!!
function Cyrano_PF_filefield_file($file) {
  // Views may call this function with a NULL value, return an empty string.
  if (empty($file['fid'])) {
    return '';
  }
?>