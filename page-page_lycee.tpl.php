<?php include "inc_header.php"; ?>  
 <!-- ______________________ LAYOUT PAGE LYCEE _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPage">
      
      
      
       <!-- ______________________ COLONNE GAUCHE _______________________ -->
		
			<?php include "inc_left_content.php";?>
        
        <div id="content-inner" class="inner column lycee">
		
			<?php if ($breadcrumb || $title ||$content_top ): ?>
            <div id="content-top">
			 <?php print $breadcrumb; ?>
			 <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
            <?php endif; ?>

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
          <div id="middle-content-lycee">
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
       
         <!--pas de colonne droite -->
		

   
    	 <br clear="all">
          <?php if ($content_bottom): ?>
            <div id="content-bottom-lycee">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
		  
	 </div> <!-- /contentPage -->
	  
	  <?php include "inc_footer.php";?>
    
     