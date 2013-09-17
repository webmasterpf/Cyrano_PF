<?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_header.php'); ?>  
 <!-- ______________________ LAYOUT PAGE ACTU REVUE DE PRESSE _______________________ -->

  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPage">
      <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div id="content-top">
			<span id="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
      
       <!-- ______________________ COLONNE GAUCHE _______________________ -->
		
			
         <div id="left-content-detailActu-presse">
              <?php if ($title): ?>
                <h1 class="title-association"><?php print $title; ?></h1>
              <?php endif; ?>
            <?php print $left; ?>
          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->
        
        <div id="content-inner-detailActu-presse">
		
			
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
          <div id="middle-content-detailActu-presse">
              
            <?php print $content; ?>
              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->

        
		
          
      </div> <!-- /content-inner /content -->
  

        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>

       
		  <!-- ______________________ COLONNE DROITE _______________________ -->

                   <!-- colonne droite detailActu-presse -->
          <?php if ($right): ?>
            <div id="right-content-detailActu-presse">
              <?php print $right; ?>
            </div>
        <?php endif; ?> <!-- /colonne droite detailActu-presse -->
		
<br clear="all" />
<!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
   
    	
		  
	 </div> <!-- /contentPage -->
	  
	  <?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_footer.php'); ?>
         <?php endif; ?>
     