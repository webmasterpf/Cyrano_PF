//Pour avoir un retour haut dynamique selon longueur du contenu
Drupal.behaviors.goTop = function(context) {
  var link = $('#retour_haut', context);

  $(window).scroll(function(){
    if ($(window).scrollTop() >= 250) { // Si la page est descendue de 250px.
      link.fadeIn(500); // On fait un fadeIn pendant 500ms.
    } else {
      link.fadeOut(500); // On est au dessus de 250 donc fadeOut pendant 500ms.
    }
  });

  link.click(function(e) {
    e.preventDefault; // Lors d'un click on empêche le navigateur de rafraichir
    //$.scrollTo(); // Et on va en haut de page.
     $('html,body').animate({scrollTop:0},'slow');//smooth scroll
  });
}
//Suivre les soumissions des webform
jQuery(document).ready(function($) {
// Track submission events for all forms with class="webform-client-form".
  $('.webform-client-form').submit(function() {
_gaq.push(['_trackEvent', 'Webform global', 'Form submission']);
  });
});
//Suivre les soumissions d'un formulaire particulier: 65 Contact
jQuery(document).ready(function($) {
// Track submission events 
  $('#webform-client-form-65').submit(function() {
      // Action de l'évènement - Catégorie de l'évènement
_gaq.push(['_trackEvent', 'Contact Webform-65', 'Contact Form submission-65']);
  });
});
//Suivre les soumissions d'un formulaire particulier: 67 Offre de stage
jQuery(document).ready(function($) {
// Track submission events 
  $('#webform-client-form-67').submit(function() {
_gaq.push(['_trackEvent', 'Webform-67 Offre de stage', 'Form submission-67']);
  });
});
//Suivre les soumissions d'un formulaire particulier: 68 Candidature
jQuery(document).ready(function($) {
// Track submission events 
  $('#webform-client-form-68').submit(function() {
_gaq.push(['_trackEvent', 'Webform-68 Candidature', 'Form submission-68']);
  });
});
//Suivre les soumissions d'un formulaire particulier: 184 Postuler Ct Pro
jQuery(document).ready(function($) {
// Track submission events 
  $('#webform-client-form-184').submit(function() {
_gaq.push(['_trackEvent', 'Webform-184 Postuler Ct Pro', 'Form submission-184']);
  });
});
//Suivre les soumissions d'un formulaire particulier: 226 Avis anciens
jQuery(document).ready(function($) {
// Track submission events 
  $('#webform-client-form-226').submit(function() {
_gaq.push(['_trackEvent', 'Webform-226 Avis anciens', 'Form submission-226']);
  });
});
//Suivre les soumissions d'un formulaire particulier: 389 BTS(choix)
jQuery(document).ready(function($) {
// Track submission events 
  $('#webform-client-form-389').submit(function() {
_gaq.push(['_trackEvent', 'Webform-389 BTS(choix)', 'Form submission-389']);
  });
});