<?php
/* 
 * Inclusion du tableau avec les liens
 * pour fiche BTS
 */

?>
<?php if ($node->field_lien_fiche_bts[0]['view']): ?>
      
             <table id="liens-fiche-bts">
           <tr class="line1">

               <td>  <?php  print $node->field_lien_fiche_bts[0]['view'] ?></td>

           </tr>
              <tr class="line2">

               <td>  <?php  print $node->field_lien_fiche_bts[1]['view'] ?></td>

           </tr>
              <tr class="line1">

               <td>  <?php  print $node->field_lien_fiche_bts[2]['view'] ?></td>

           </tr>
              <tr class="line2">

               <td>  <?php  print $node->field_lien_fiche_bts[3]['view'] ?></td>

           </tr>
         
       </table>
   <?php endif; ?>