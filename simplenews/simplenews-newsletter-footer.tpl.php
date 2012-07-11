<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter footer.
 *
 * Copy this file in your theme directory to create a custom themed footer.
 * Rename it to simplenews-newsletter-footer--<tid>.tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - $node: newsletter node object
 * - $language: language object
 * - $key: email key [node|test]
 * - $format: newsletter format [plain|html]
 * - $unsubscribe_text: unsubscribe text
 * - $test_message: test message warning message
 *
 * Available tokens:
 * - [simplenews-unsubscribe-url]: unsubscribe url to be used as link
 * for more tokens: see simplenews_token_list()
 *
 * Note that unsubscribe links are broken in case of test send to a non-subscriber.
 *
 * @see template_preprocess_simplenews_newsletter_footer()
 * 
 * Il faut ajouter les fichiers de theme de simplenews dans le theme admin !!! IMPORTANT
 */
?>
<!-- TEMPLATE CUSTOM NEWSLETTER FOOTER -->
<table align="center">
<div id="txt-footer">
    <?php print $site_slogan; ?>
    Lyc&eacute;e Priv&eacute; Professionnel Charlotte Grawitz - 13013 MARSEILLE<br/>
    <a href="<?php print $front_page; ?>" title="Accueil du site" rel="home" id="logo">
            Aller sur le site</a> - <a href="<?php print $front_page; ?>/node/<?php print $node->nid ?>" target="_blank">Voir la newsletter sur le site</a><br/>
    <?php if ($format == 'html'): ?>
  <p class="newsletter-footer"><a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a></p>
<?php else: ?>
-- <?php print $unsubscribe_text ?>: [simplenews-unsubscribe-url]
<?php endif ?>

<?php if ($key == 'test'): ?>
- - - <?php print $test_message ?> - - -
<?php endif ?>
</div>
    </table>