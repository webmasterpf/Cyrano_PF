<?php
/* Template pour la page actualité - redesign façon newspaper/magazine
 * Start Juillet 2011
 */?>
<!-- ************ NODE TEMPLATE PAGE ACTU REDESIGN ****************** -->
<h1> PAGE ACTU REDESIGN DEV</h1>
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
      <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
<!-- ______________________ COLONNE REVUE PRESSE _______________________ -->
<div class="col_375" id="rp_actu_gloable">
         <?php
 /* inclusion vue liste illustrée */
              global $theme_path;
              include ($theme_path.'/includes/inc_vue_actu_globale_rp.php');
              ?>
     <?php
 /* inclusion d'une region pour bloc */
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
</div>
<!-- ______________________ COLONNE ACTUS ASSO _______________________ -->
<div class="col_375" id="actu_asso_actu_globale">
     <?php
 /* inclusion vue liste illustrée */
              global $theme_path;
              include ($theme_path.'/includes/inc_vue_actu_globale_actuasso.php');
              ?>
         <?php
 /* inclusion d'une region pour bloc */
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
</div>
<!-- ______________________ COLONNE INFOS FIXES RSS _______________________ -->
<div class="col_220" id="infos_fixes_actu_globale">
     <?php
 /* inclusion d'une region pour bloc */
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
    
        <div class="content">
      <?php print $content; ?>
    </div>

</div>
<br clear="all"/>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>



    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->