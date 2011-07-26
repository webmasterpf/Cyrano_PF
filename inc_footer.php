    <!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
        <div id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
        </div> <!-- /footer -->
      <?php endif; ?>
        <div id="bloc_stats"><?php include "js/code_stats.php";?></div>
        
    </div> <!-- /general OR /page -->
    <!-- ajout des scripts utiles pour drupal -->
     <?php print $scripts; ?>
       <?php
global $theme_path;
include ($theme_path.'/js/google_font.php');
?>
	<?php print $closure ?>
  </body>
</html>