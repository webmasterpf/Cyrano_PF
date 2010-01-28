<?php include "inc_header.php"; ?>
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	
      <div id="contentHome">
   

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($annonceImg || $breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
            <div id="content-areaHaut">
			
              <?php if ($annonceImg): ?>
                 <div id="annonceImg"><?php print $annonceImg; ?></div>
              <?php endif; ?>
              

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
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
	
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
         <?php print $feed_icons; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
	
	
	 </div> <!-- /mainPage -->
     <?php include "inc_footer.php";?>
