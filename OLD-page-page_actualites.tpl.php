<?php include "inc_header.php"; ?>
 <!-- ______________________ LAYOUT PAGE ACTUS _______________________ -->
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
	  
      
       <!-- ______________________ COLONNE GAUCHE _______________________ -->
		
	 <?php if ($revue_presse): ?>
             <div id="left-content-actualites">
         <?php print $revue_presse; ?>
            </div>
             <?php endif; ?> <!-- /colonne gauche revue de presse -->
		
		<!--fin du contenu gauche -->
        
        <div id="content-inner-actualites" class="inner column center">
		             
		
           

       
    <!-- ______________________ CONTENU CENTRAL _______________________ -->
                   <?php if ($actuAssociation): ?>
              <div id="actualite-association">
                    <?php print $actuAssociation; ?>
              </div><!-- /#actualite-association -->
                     <?php endif; ?>
                  <div id="middle-content-actualites">
          
                   
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
        <?php if ($right): ?>
         <!--debut du contenu droit -->
		<div id="right-content-actualites">
		<?php print $right; ?>
        </div>
        <?php endif; ?> <!-- /fin colonne de droite -->

   
    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
            
	 </div> <!-- /contentPage -->
	  
	  <?php include "inc_footer.php";?>
         <?php endif; ?>
     