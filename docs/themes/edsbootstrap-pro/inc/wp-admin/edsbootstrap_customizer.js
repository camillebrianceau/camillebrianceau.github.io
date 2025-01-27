/*jQuery(document).ready(function ($) {
   jQuery('.wp-full-overlay-sidebar-content .customize-info').prepend('<div style="border-bottom: 1px solid #ddd;"><div class="lite-box" style="text-align:center"><a style="margin: 20px 10px 0px;"href="' + eds_advert.support_url + '" class="button" target="_blank">' + eds_advert.support_text + '</a><a style="margin: 20px 10px 0px;"href="' + eds_advert.documentation_url + '" class="button" target="_blank">' + eds_advert.documentation_text + '</a></div><a class="button-primary" style="display: table;margin: 20px auto;" href="' + eds_advert.pro_url + '" class="button" target="_blank" >' + eds_advert.pro_text + '</a></div>');
});*/

jQuery(document).ready(function($) {
	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="http://crestaproject.com/demo/edsbootstrap-pro/" class="button" target="_blank">{pro-demo}</a>'.replace( '{pro-demo}', customBtns.prodemo ) );
 	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="http://crestaproject.com/downloads/edsbootstrap/" class="button" target="_blank">{pro-get}</a>'.replace( '{pro-get}', customBtns.proget ) );
});