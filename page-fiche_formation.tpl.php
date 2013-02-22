<?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_header.php'); ?>
 <!-- ______________________ LAYOUT PAGE FICHE FORMATION _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPage">
      
          <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div id="content-top">
	<span id="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
	  
      
       <!-- ______________________ COLONNE GAUCHE _______________________ -->
		
			  
         <div id="left-content-ficheFormation">
             <?php if ($decoTitre): ?>
                <div id="$decoTitreImg"><?php print $decoTitre; ?></div>
              <?php endif; ?>
              <?php if ($title): ?>
                <h1 class="title-fiche-formation"><?php print $title; ?></h1>
              <?php endif; ?>
                <?php if ($node->field_complement_info_formation[0]['view']): ?>

                <div class="complement_titre_fiche"><?php  (print $node->field_complement_info_formation[0]['view']); /*Info complementaire sur formation*/ ?></div>

            <?php endif; ?>
            <?php print $left; ?>
          </div>
             <!-- /sidebar-left -->
		
		<!--fin du contenu gauche -->
        
        <div id="content-inner-ficheFormation" class="inner column center">
		             
		
           

          <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">              

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>
		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-ficheFormation">
               <?php print $node->content['body']['#value'] ?>
            <?php //print $content; ?>
<!-- <?php print_r($node->taxonomy)?> -->
 <?php if ($terms): ?>
      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node->taxonomy);?>
      </div>
<?php endif;?>

              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->

        

         
      </div> <!-- /content-inner /content -->
  <br clear="all" />
  <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
            
        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>

       
		  <!-- ______________________ COLONNE DROITE _______________________ -->
        <?php if ($right): ?>
         <!--d�but du contenu droit -->
		<div id="right-content-ficheFormation">
			
				
            <?php print $right; ?>
        </div>
        <?php endif; ?> <!-- /sidebar-right -->

   
    	  <br clear="all" />
	 </div> <!-- /contentPage -->
	  
	  <?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_footer.php'); ?>
         <?php endif; ?>
     