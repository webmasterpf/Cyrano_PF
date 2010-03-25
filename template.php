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
?>
<?php
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
?>
<?php
// permet le debugage de php avec drupal
function debug_print($var) {
  drupal_set_message('<pre>'. print_r($var, TRUE) .'</pre>');
}
//Webform "You have already submitted this form." message off
function Cyrano_PF_webform_view_messages($node, $teaser, $page, $submission_count, $limit_exceeded, $allowed_roles) {
  theme_webform_view_messages($node, $teaser, $page, 0, $limit_exceeded, $allowed_roles);
}
?>