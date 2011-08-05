<!-- ******* TEMPLATE DE NODE POUR PAGE BTS ET ENTREPRISE *********************** -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

      <!--_______________________ COLONNE 1 __________________ -->
      <div id="colonne-1" class="col-1-btsentrepise">
    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php  print $node->content['body']['#value']; ?>

         <?php
       if ($node->field_docs_bts_alternance[0]['view']
        OR $node->field_docs_bts_alternance[1]['view']
        OR $node->field_docs_bts_alternance[2]['view']
        OR $node->field_docs_bts_alternance[3]['view']
        ): ?>
        <ul id="docs-alternance-bts">
           <?php if ($node->field_docs_bts_alternance[0]['view']): ?>
              <li>      <?php  print $node->field_docs_bts_alternance[0]['view'] ?></li>
              <?php endif; ?>
              <?php if ($node->field_docs_bts_alternance[1]['view']): ?>
              <li>      <?php  print $node->field_docs_bts_alternance[1]['view'] ?></li>
              <?php endif; ?>
                 <?php if ($node->field_docs_bts_alternance[2]['view']): ?>
              <li>      <?php  print $node->field_docs_bts_alternance[2]['view'] ?></li>
              <?php endif; ?>
              <?php if ($node->field_docs_bts_alternance[3]['view']): ?>
              <li>      <?php  print $node->field_docs_bts_alternance[3]['view'] ?></li>
              <?php endif; ?>
        </ul>
   <?php endif; ?>




        <br clear="all"/>
       
      
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      </div>

<!--_______________________ COLONNE 2 __________________ -->
      <div id="colonne-2" class="col-2-btsentrepise">
          <?php
foreach($node->field_objectif_bts as $file) {
  if ($file['view']) {
      print $file['view'];
  }
}
?>

          <table id="objectif-bts">
    <?php
foreach($node->field_objectif_bts as $file) {
    ?>
<tr>
    <?php
  if ($file['view']) {
      ?>
  <td>
      <?php
      print $file['view'];
      ?>
</td>
<?php
  }
  ?>
</tr>
  <?php
}?>
</table>




      </div>

  </div> <!-- /node-inner -->
</div> <!-- /node-->