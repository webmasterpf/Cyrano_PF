<?php include "inc_header.php"; ?>
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	
      <div id="contentHome">
   

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($annonceImg): ?>
            <div id="content-areaHaut">
			
              <?php if ($annonceImg): ?>
                 <div id="annonceImg"><?php print $annonceImg; ?></div>
              <?php endif; ?>
              
            </div> <!-- /#content-areaHaut -->
          <?php endif; ?>

                 <?php if ($blocLycee): ?>
                 <div id="blocLycee"><?php print $blocLycee; ?></div>
              <?php endif; ?>


                  

          </div><!-- /contentHome -->
		  
		  
	  
	  
	   <!-- ______________________ EDITO DROITE _______________________ -->
      
	  
	  <div id="contentAnim"> 		
        <?php if ($Anim): ?>
            <div id="textAnim"><?php print $Anim; ?></div><!-- /#textAnim -->
        <?php endif; ?>
		
      </div><!-- /#contentAnim -->
	  
   
	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
         <?php //print $feed_icons; ?>
      <?php endif; ?>
       </div> <!-- /content_bottom_home -->

	<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
                <?php endif; ?>
            </div><!-- /#content-bottom -->
        
	
	 </div> <!-- /mainPage -->
     <?php include "inc_footer.php";?>