<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM ACTU ASSO RP ________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="col1_layout_225_720">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php
            if ($node->field_fichier_joint[0]['view']):

                $theme_path = drupal_get_path('theme', 'cyrano_pf');
                include($theme_path . '/includes/inc_docs_actu.php');
            endif;
            ?>
       
            <?php 
  $theme_path = drupal_get_path('theme','cyrano_pf');
include($theme_path .'/includes/inc_region_col_G1.php');
?>
        </div><!-- /col-1 -->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_225_720 border-L-rose actu-presse">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php if ($node->field_minipresse[0]['view']): ?>
            <div id="minipresse" class="actu-minipresse">
                    <?php  print $node->field_minipresse[0]['view']  ?>
            </div>
            <?php endif;?>

                <?php print $node->content['body']['#value'];?>
                 </div><!-- /content -->   
                <?php if ($node->field_diapo_lycee_type[0]['view']): ?>
            <div class="galerie">
                    <?php  print $node->field_diapo_lycee_type[0]['view'];?>
            </div>
            <?php endif;?>
                
                <?php
/*
 * Vue affichant la Gallery assist incluse via UI dans region dédiée
 * Avec limitation de l'affichage sur le type (php)
 */             
                ?>
                
                
        <?php if ($node->field_video_externe[0]['view']): ?>
                        <div class="video">
                            <?php print $node->field_video_externe[0]['view'];?>
                        </div>
                    <?php endif; ?>

                    <?php if ($node->field_slideshare_actu[0]['view']): ?>
                        <div class="slideshare">
                            <?php print $node->field_slideshare_actu[0]['view'] ?>
                        </div>
                    <?php endif; ?>
                
                <?php 
  $theme_path = drupal_get_path('theme','cyrano_pf');
include($theme_path .'/includes/inc_region_col_G2.php');
?>

        </div><!-- /col-2 -->

        

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->