<?php
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