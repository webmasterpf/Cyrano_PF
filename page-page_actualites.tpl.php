<?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_header.php'); ?>
<?php /*REDESIGN PAGE ACTU*/ ?>
 <!-- ______________________ LAYOUT PAGE ACTUS GLOBALE _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPageActu">
      
          <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div id="content-top">
	<span id="ariane"> <?php print $breadcrumb; ?></span>
        <br clear="all"/>
         <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>
                
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
	  
      
 
        
        <div id="content-inner" class="inner column center">
		             
		
           

       
    <!-- ______________________ CONTENU CENTRAL _______________________ -->
                   <?php if ($actuAssociation): ?>
              <div id="actualite-association">
                    <?php print $actuAssociation; ?>
              </div><!-- /#actualite-association -->
                     <?php endif; ?>
                  <div id="middle-content-actu-globale">
          
                   
              <br clear="all"/>
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
            <?php print $content; ?>
             
              
        

          </div> <!-- /#content-area -->

        
          
          
      </div> <!-- /content-inner /content -->
 
            
        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>

       
		

   
    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
                 <?php print $feed_icons; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
            
	 </div> <!-- /contentPage -->
	  
	  <?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_footer.php'); ?>
         <?php endif; ?>
     