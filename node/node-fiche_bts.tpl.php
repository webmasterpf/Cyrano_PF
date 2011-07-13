<!-- ************************ NODE.TPL POUR FICHE BTS *****************-->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
 <!-- ______________________ COLONNE GAUCHE _______________________ -->


         <div id="left-content-fiche-bts">
            <?php if ($title): ?>
     <h1 class="titre-fiche-bts"><?php print $title; ?></h1>
     <?php endif; ?>
     
      <br clear="all"/>
      
      <?php if ($node->field_abreviation_bts[0]['view']): ?>
                 <?php  print $node->field_abreviation_bts[0]['view'] ?>
             <?php endif; ?>

    
      <br clear="all"/>

      <?php if ($node->field_illus_fichebts[0]['view']): ?>
                 <?php  print $node->field_illus_fichebts[0]['view'] ?>
             <?php endif; ?>
        <br clear="all"/>

             <?php if ($node->field_intro_fiche_bts[0]['view']): ?>
                 <?php  print $node->field_intro_fiche_bts[0]['view'] ?>
             <?php endif; ?>
        <br clear="all"/>
        <?php if ($node->field_fiche_bts[0]['view']): ?>
        <div id="fiche-detaille-bts">
                <?php  print $node->field_fiche_bts[0]['view'] ?>
        </div>
   <?php endif; ?>
      
                 <?php if ($left): ?>
            <?php print $left; ?>
                 <?php endif; ?>
  <br clear="all"/>
     <?php if ($node->field_info_plus_bts[0]['view']): ?>
  <div id="info-plus-fiche-bts">
      <h3>En savoir plus...</h3>
  <?php  print $node->field_info_plus_bts[0]['view'] ?>
  </div>
        <?php endif; ?> 

          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->
   <!--______________COLONNE CENTRALE________________ -->
   <div id="middle-content-fiche-bts">
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php   //print $node->content['body']['#value'] ?>
      <?php 
      $output = Cyrano_PF_split_bodycontent ($node->content['body']['#value']);
        print $output;?>

    </div>

<?php 
 global $theme_path;
 include ($theme_path.'/includes/inc_fiche_bts_liste_liens.php');
 ?>

    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      </div>
<!-- ______________________ COLONNE DROITE _______________________ -->
        <?php if ($right): ?>
         <!--d�but du contenu droit -->
		<div id="right-content-fiche-bts">


            <?php print $right; ?>
        </div>
        <?php endif; ?> <!-- /sidebar-right -->
  </div> <!-- /node-inner -->
</div> <!-- /node-->