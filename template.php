<?php
// permet template suggestions avec page-
function Cyrano_PF_preprocess(&$vars, $hook)
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
?>
<?php
// fonction pour avoir la possibilité de faire un template pour page recherche
function Cyrano_PF_preprocess_page(&$vars) {
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
?>
<?php
// permet le debugage de php avec drupal
function debug_print($var) {
  drupal_set_message('<pre>'. print_r($var, TRUE) .'</pre>');
}
?>
<?php
// Webform "You have already submitted this form." message off. 9 arguments
function theme_name_webform_view_messages($node, $teaser, $page, $submission_count,$user_limit_exceeded,$total_limit_exceeded, $allowed_roles,$closed,$cached) {
  theme_webform_view_messages($node, $teaser, $page, 0, $user_limit_exceeded,$total_limit_exceeded, $allowed_roles,$closed,$cached);}
?>
<?php
/*
// permet de trier la taxonomie - utilisé sur les fiches formations
//pour afficher corrrectement la taxonomie en bas de page via "print Cyrano_PF_print_terms"
//http://drupalfr.org/node/23218#comment-35519
*/
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
?>
<?php
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
?>
<?php
//Pour afficher une seule taxonomie dans la fiche de poste bts alternance  - http://drupal.org/node/823918
function Cyrano_PF_preprocess_node(&$vars) {
    /**
* Override or insert variables into the node templates.
*
* @param $vars
*   An array of variables to pass to the theme template.
* @param $hook
*   The name of the template being rendered ("node" in this case.)
*/
//Partie regions dans node.tpl- ajoute les regions utiles au node.tpl
 
 $vars['col_G1'] = theme('blocks', 'col_G1');
 $vars['col_G2'] = theme('blocks', 'col_G2');
 $vars['col_G3'] = theme('blocks', 'col_G3');
 ///////////////////////////////////////////////////////////
  $node = $vars['node'];
  $vars['template_file'] = 'node-'. $node->nid;
  $wanted_vid = 7;//Choisir ici le vid voulu,ici celui de l'etat de l'offre
  foreach($node->taxonomy as $term) {
    if ( $wanted_vid == $term->vid ) {
      $vars['my_terms'] .= $term->name; //You would need to format this the way you want it displayed, or pass it to a theme function
    }
  }
}
?>
<?php
/*_______________FONCTIONS POUR ACTION SUR AGGREGATOR____________*/
/* modify link items in the aggregator to open in a new window and
suppress the "blog it" icon & links should the module ever be enabled.
(Code removed--not commented out--from this copy of the original function.)
 * drupal.org/node/573054 */

function Cyrano_PF_aggregator_block_item($item, $feed = 0) {
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
// permet d'ouvrir en blank les fichiers uploadés via filefield
//NE PAS OUBLIER DE CHANGER NOM DU THEME !!!
function Cyrano_PF_filefield_file($file) {
  // Views may call this function with a NULL value, return an empty string.
  if (empty($file['fid'])) {
    return '';
  }

  $path = $file['filepath'];
  $url = file_create_url($path);
  $icon = theme('filefield_icon', $file);

  // Set options as per anchor format described at
  // http://microformats.org/wiki/file-format-examples
  // TODO: Possibly move to until I move to the more complex format described
  // at http://darrelopry.com/story/microformats-and-media-rfc-if-you-js-or-css
  $options = array(
    'attributes' => array(
      'type' => $file['filemime'] . '; length=' . $file['filesize'],
    ),
  );

  // Use the description as the link text if available.
  if (empty($file['data']['description'])) {
    $link_text = $file['filename'];
  }
  else {
    $link_text = $file['data']['description'];
    $options['attributes']['title'] = $file['filename'];
  }
//open allfiles in new window
$options['attributes']['target'] = '_blank';

  return '<div class="filefield-file clear-block">'. $icon . l($link_text, $url, $options) .'</div>';
}
?>
<?php
// HTML format for the webform mail - envoi mail au format HTML
/*function phptemplate_webform_mail_headers($form_values, $node, $sid, $cid) {
  $headers = array(
    'Content-Type'  => 'text/html; charset=UTF-8; format=flowed; delsp=yes',
    'X-Mailer'      => 'Drupal Webform (PHP/'. phpversion() .')',
  );
  return $headers;
}
 * 
 */
?>
<?php
/* Fonction pour splitter le contenu de $body en plusieurs colonnes
 * S'utilise en insérant dans le node.tpl
 * $output = Cyrano_PF_split_bodycontent ($content);
    print $output;
 * dans le node-custom.tpl et en ajoutant le tag <columns> dans le corps du node
 */
function Cyrano_PF_split_bodycontent ($colcontent) {
    $coloutput =  "";
    $string = "<columns>";
    $columns = explode($string,$colcontent); // cut the text for splitting the body into columns

    $i = 0;
    foreach($columns as $cle=>$valeur) {   //go through the array and add div to contents when necessary

        if ($i == 0) {

            $coloutput .= $valeur;
            $i ++;

        }

        else if ($i == 1) {
            $coloutput .= "<div class=\"column_".$i."\">".$valeur."</div>";
            $i = 2;
        }

        else {
            $coloutput .= "<div class=\"column_".$i."\">".$valeur."</div>";
            $i = 1;
        }

    }

    return $coloutput;
}
?>