<!-- ******* TEMPLATE DE NODE POUR PAGE BTS *********************** -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--_______________________ COLONNE 1 __________________ -->
<div id="colonne-1" class="col-1-btsentrepise">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php  print $node->content['body']['#value']; ?>

         <?php if ($node->field_centres_bts[0]['view']): ?>
        <div id="centres-bts">
                <?php  print $node->field_centres_bts[0]['view'] ?>
        </div>
   <?php endif; ?>

         <?php if ($node->field_txt_dossier[0]['view']): ?>
        <div id="txt-dossier-bts">
                <?php  print $node->field_txt_dossier[0]['view'] ?>
        </div>
   <?php endif; ?>


         <?php if ($node->field_dossier_bts[0]['view']): ?>
        <div id="dossier-bts">
            <span id="DossierBTS">
<?php  print $node->field_dossier_bts[0]['view'] ?>
</span>
               
        </div>
   <?php endif; ?>



        <br clear="all"/>
        <?php
$viewname = 'liste_bts_fiches';
$view = views_get_view ($viewname);
$view->set_display('block_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="vue-liste-bts"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue.Voir le template de view pour le theming de cette sortie .
print $output;

?>
      
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
</div>
<!--_______________________ COLONNE 2 __________________ -->
<div id="colonne-2" class="col-2-btsentrepise">
         <?php
 /* inclusion d'une region pour bloc */
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>
</div>
  </div> <!-- /node-inner -->
</div> <!-- /node-->