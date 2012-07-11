<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to simplenews-newsletter-body--<tid>.tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - $node: Newsletter node object
 * - $body: Newsletter body (formatted as plain text or HTML)
 * - $title: Node title
 * - $language: Language object
 *
 * @see template_preprocess_simplenews_newsletter_body()
 * 
 * Pour Tpl selon le Tid : Entreprise=27 Parents=28 Interne=29
 * 
 * !!!!!!!!!!!!! LARGEUR 700 PX !!!!!!!!!
 */
?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!--general stylesheet-->
<style type="text/css">
#table-nl-bordure{border:#FF6600 2px solid;width:703px;background:url("http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/bg_content_etoile.gif");margin:0 auto;}
#table-nl-bordure{border: 2px solid #FF6600;padding: 5px;}
#table-nl table{ border-collapse: collapse;border-spacing: 0;}
#table-nl h2{text-align: center;color: #E7512F; margin: 5px;}
#table-nl tbody{display: block; width: auto;}
#table-nl tr{}
#table-nl td{}
td.colonne-1-nl{vertical-align:top}
td.colonne-2-nl{}
td.colonne-3-nl{vertical-align:top;vspace:2px;hspace:2px;display:block;}
td#col-3 span{}
span#illustration-nl{display:block;padding:2px;margin:2px;border:1px solid #F29400;background:#FFCC66;}
span#custom-list-01{border:#6633CC 1px solid;margin:2px;display:block;padding:2px;background:#DDBBFF;}
#table-nl a{color: #911381;}
#table-nl a:hover{text-decoration: none;}
#table-nl strong{color: #E7512F;}
tr.table-tr-content{border-bottom-color: #d6d6d6; border-bottom-width: 1px; border-bottom-style: solid;}
#bloc_grawitz_actus{display:block;}
#bloc_grawitz_actus table{}
#bloc_grawitz_actus{}
#bloc_grawitz_actus{}
#custom-list-01{border:#6633CC 1px solid;margin:2px;padding:1px;}
#txt-footer{color: #911381;}
#txt-footer a{color: #E7512F;}
#txt-footer a:hover{}
</style>
</head>

<!-- TEMPLATE CUSTOM NEWSLETTER BODY -->


<table align="center" background="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/bg_content_etoile.gif" id="table-nl-bordure" style="border:#FF6600 2px solid;margin:0 auto;width:703px;" >
  <tbody><tr><td>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" id="table-nl">
   <thead><tr><td colspan="3" height="150">
     <div align="center"><img src="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/newsletter/header-newsletter.jpg" alt="El&egrave;ves devant le Lyc&eacute;e" width="693" height="142"/>
        </div></td>
   </tr></thead>   
<tbody>
<tr><td colspan="3" style="text-align:center"> <a href="<?php print $front_page; ?>" title="Accueil du site" rel="home" id="logo" style="color: #E7512F;">
            Aller sur le site</a> - <a href="<?php print $front_page; ?>/node/<?php print $node->nid ?>" target="_blank" style="color: #E7512F;">Voir la newsletter sur le site</a></td></tr>
    <tr border="0">
       
      <td><h2 style="text-align: center;color: #E7512F; margin: 5px;"><?php print $title; ?></h2></td>
<td height="100"><div align="center"><a href="<?php print $front_page; ?>" title="Accueil du site" rel="home" id="logo">
      <img src="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/newsletter/logo-nl.png" alt="Logo LPP C.Grawitz" width="216" height="55"/></a> </div></td>
<td>   <h3 style="text-align:right;color:#911381;font-size:12px;font-family:Trebuchet-MS,Arial, sans-serif">
                  <?php  print $node->field_nl_edition[0]['view']  ?>  </h3></td></tr>
       <tr border="0" style="border-bottom-color: #d6d6d6; border-bottom-width: 1px; border-bottom-style: solid;" class="table-tr-content">
<td style="bordercolor:#FF3399; vertical-align:top" class="colonne-1-nl">
       
           <!-- table colonne Gauche-->
          <table width="210" align="center"><tr><td> <div id="bloc_grawitz_actus" style="background:url(http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/newsletter/bg-actus-nl.png);margin:5px;color: #911381;display:block;">
    <?php  print $node->field_nl_lastnews[0]['view']  ?></div> <!-- liste actus -->   </td></tr></table>  
          </td>
    <td bgcolor="#ebebeb"class="colonne-2-nl" style="vertical-align:top;"><!-- Corps -->
            <?php   print $node->content['body']['#value'];/*contenu du node newsletter*/ ?> </td>
     <td style="vertical-align:top;vspace:2px;hspace:2px;" class="colonne-3-nl">
    <!-- table colonne Droite-->
     <table width="190" align="center" id="col-3">
     <tr><td height="170"> <span id="illustration-nl" style="border:1px solid #F29400;display:block;padding:2px;background:#FFCC66;"><?php  print $node->field_nl_illustration[0]['view']?> </span> </td>
     </tr><!-- illustration -->
     <tr><td height="48">
     <span id="custom-list-01" style="border:#6633CC 1px solid;margin:2px;display:block;padding:2px;background:#DDBBFF;"><?php  print $node->field_nl_listeperso_01[0]['view']?> </span></td>
     </tr><!-- liste custom -->
     </table>       </td></tr>
<!-- TEMPLATE CUSTOM NEWSLETTER FOOTER -->

<tr border="0"style="text-align:center">
<td colspan="3"><a href="http://twitter.com/#!/LPPCGrawitz" target="_blank" style="color: #E7512F;">Twitter Officiel</a> - <a href="fr-fr.facebook.com/pages/Lyc&eacute;e-Charlotte-Grawitz/114627971979570" target="_blank" style="color: #E7512F;">Page Facebook du Lyc&eacute;e</a></td>
</tr>
<tr border="0"style="text-align:center">
<td colspan="3"><div id="txt-footer" style="color: #911381;">
    <p>Lyc&eacute;e Priv&eacute; Professionnel Charlotte Grawitz - 13013 MARSEILLE</p></div></td></tr>
<tr border="0" style="text-align:center">
<td colspan="3"  style="color: #911381"> 
  <p class="newsletter-footer"><?php if ($format == 'html'): ?><a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a><?php else: ?>-- <?php print $unsubscribe_text ?>: [simplenews-unsubscribe-url]<?php endif ?>
  <?php if ($key == 'test'): ?>- <?php print $test_message ?>  -<?php endif ?></p></td></tr>
<tr border="0"><td colspan="3"  style="color: #911381" height="55">
<div align="right"><img src="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/bg_footer.jpg"/></div>
</td></tr><!-- /table Footer NL-->
</tbody></table>
<!-- /table NL -->
</td></tr></tbody></table><!-- /table bordure -->
