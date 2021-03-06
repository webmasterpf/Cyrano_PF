<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php /* Code pour scan par https://detectify.com */ ?>
    <meta name="detectify-verification" content="8497102470e46552eeca2eb8a07b7910" />
    <meta name="Generator" content="Drupal 6 (http://drupal.org)" />
    <!-- Meta pour tuile Windows 8 -->
    <meta name="msapplication-TileColor" content="white"/>
    <meta name="msapplication-TileImage" content="<?php Global $base_url;$theme_path = drupal_get_path('theme','cyrano_pf');print $base_url.$base_path.$theme_path.'/pinned-favicon.png'?>"/>
    <meta name="application-name" content="Provence Formation"/>

    <!--<script src="<?php print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>-->
     
  </head>

 <body class="<?php print $body_classes; ?>">
 
	<div id="general">
 <!-- ______________________ PAGE TOP BANDEAU _______________________ -->
<?php if (!empty($bandeau1)): ?>
<div id="bandeau-pagetop">
          <?php print $bandeau1; ?>
         </div>
<?php endif; ?>
 
    <!-- ______________________ HEADER _______________________ -->
	 <div id="header">
	 
		<div id="header-inner">
	
        <div id="headHaut">
		
          <div id="logoHead">
	           <?php if (!empty($logo)): ?>
		           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>   
		   
         <div id="menuImg">
              <?php if (!empty($navStatic)): ?>
		           <?php print $navStatic; ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">
		 
		 <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan">
	<?php print $site_slogan; ?>
            </div><!-- /site-slogan -->
            <?php endif; ?>


            <div id="headSearch">
		  <?php if (!empty($search_box)): ?>
		  <?php print $search_box ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->

                  
          <div id="menuHead">
	        <?php if (!empty($menuDyn)): ?>
			   <?php print $menuDyn; ?>
            <?php endif; ?>

          </div><!-- /menuHead -->
		 
		  
		</div><!-- /headBas -->
          
      
	  </div> <!-- /header-inner -->
   </div> <!-- /header -->
