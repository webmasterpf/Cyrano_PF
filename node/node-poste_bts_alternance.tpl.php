<!--_________ NODE TEMPLATE POUR ANNONCE BTS -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

  <!--Partie splitter -->

       <table class="table-poste-bts">
           <tr class="line1">
               <td>  <?php  print $node->content['field_reference_pbts']['field']['#title']  ?></td>
               <td>  <?php  print $node->field_reference_pbts[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_lieu_poste_bts']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_lieu_poste_bts[0]['view'] ?></td>

           </tr>
              <tr class="line1">
               <td>  <?php  print $node->content['field_formation_bts']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_formation_bts[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_domaine_activite_bts']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_domaine_activite_bts[0]['view'] ?></td>

           </tr>
             <tr class="line1">
               <td>  Etat du recrutement</td>
               <td class="etat">  <?php  print $my_terms; ?></td>

           </tr>
            <tr class="line2">
               <td> Postuler à l'offre</td>
               <td> <?php print '<a href=/node/184?destinataire='.$node->field_centre_bts[0]['value'].'&ref_offre='.$node->field_reference_pbts[0]['value'].'>ICI</a>';?></td>

           </tr>
          
       </table>

    <div class="content">
    
      
      <?php 
      //print $content;
      print $node->content['body']['#value']
              ?>
        <!--Lien vers formulaire -->
        <!--<div id="postule"><a href="/site/node/110" title="Pour postuler cliquez ici"> Postuler</a></div>-->
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
    <?php //print Cyrano_PF_taxonomy_specifique($node,7); ?>

      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->