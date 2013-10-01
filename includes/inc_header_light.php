<?php
/*
 * Header allégé pour les pages comme portail ou squeeze, 
 * ou toute page n'ayant pas besoin d'un header avec la navigation
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php /* Code pour scan par https://detectify.com */ ?>
  <meta name="detectify-verification" content="8497102470e46552eeca2eb8a07b7910" />
    <meta name="Generator" content="Drupal 6 (http://drupal.org)" />
    <!-- Meta pour tuile Windows 8 -->
    <meta name="msapplication-TileColor" content="white"/>
    <meta name="msapplication-TileImage" content="<?php Global $base_url;$theme_path = drupal_get_path('theme','cyrano_pf');print $base_url.$base_path.$theme_path.'/pinned-favicon.png'?>"/>
    <meta name="application-name" content="Provence Formation"/>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
