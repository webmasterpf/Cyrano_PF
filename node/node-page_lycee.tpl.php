<!-- ************************ NODE.TPL POUR PAGE LYCEE *****************-->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
 <!-- ______________________ COLONNE GAUCHE _______________________ -->


         <div id="left-content-page-lycee">
            
  <?php if ($node->field_lycee_logocoordtxt[0]['view']): ?>
      <span id="lycee-coordlogo">
                 <?php  print $node->field_lycee_logocoordtxt[0]['view'] ?>
      </span>
             <?php endif; ?>    
             
       <br clear="all"/>      
    <?php if ($node->field_lycee_form[0]['view']): ?>
      <span id="lycee-formation">
                 <?php  print $node->field_lycee_form[0]['view'] ?>
      </span>
             <?php endif; ?>
    

         <?php if ($left): ?>
            <?php print $left; ?>
                 <?php endif; ?>
             
         
        </div>
           
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->
   <!--______________COLONNE CENTRALE________________ -->
   <div id="middle-content-page-lycee">
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
     <?php if ($title): ?>
     <h1 class="titre-fiche-bts"><?php print $title; ?></h1>
     <?php endif; ?>
     
      <br clear="all"/>


    
      
    <div class="contenu-lycee">
      <?php  print $node->content['body']['#value']; ?>

    </div>
 
<!-- retour haut selon resolution de l'ecran -->
          <a href="#general" id="retour_haut">Haut de page</a>
    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      </div>
<!-- ______________________ COLONNE DROITE _______________________ -->


         <div id="right-content-page-lycee">
            

             <?php if ($node->field_diapo_lycee_type[0]['view']): ?>
      <span id="diapo-lycee">
                 <?php  print $node->field_diapo_lycee_type[0]['view'] ?>
      </span>
             <?php endif; ?>      
             
       <br clear="all"/>         
             
      <?php if ($node->field_lycee_gmap[0]['view']): ?>
      <span id="gmap-lycee">
                 <?php  print $node->field_lycee_gmap[0]['view'] ?>
      </span>
             <?php endif; ?>
    
  

      
       

          
     
  
      
                 <?php if ($right): ?>
            <?php print $right; ?>
                 <?php endif; ?>
  <br clear="all"/>
    

          </div>
             <!-- /sidebar-right -->

		<!--fin du contenu droite -->
  </div> <!-- /node-inner -->
</div> <!-- /node-->