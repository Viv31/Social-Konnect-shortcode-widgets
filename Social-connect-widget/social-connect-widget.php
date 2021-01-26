<?php
/***
* Plugin Name: Connect to social media Widget
* Plugin URI:
* Description:
* Author: Vaibhav Gangrade
* Version:1.0
*/
if(!defined('ABSPATH')){
	 exit;
}

/* Adding main plugin class in plugin */
require_once(plugin_dir_path(__FILE__).'/widget-main-class.php');

/* this function is used for registering widget  */
function Social_Konnect_widget(){
	register_widget("SocialKonnect_Widget");
}


/* Adding our shortcode in widget */

 function Sk_social_konnect($attr){

	$options = shortcode_atts(array(
'widget_headline' =>'Connect With Us',
'button_text' => 'Google',
'link_of_social_media'=>'https://www.google.com'),$attr);
$output = "<div class='social_box'>
	<h4>".$options['widget_headline']."</h4>
	<a href='".$options['link_of_social_media']."'><button>".$options['button_text']."</button></a>
</div>";

return $output;

}

/* Adding shortcode */
add_shortcode('SocailKonnect','Sk_social_konnect'); 

/* Adding widget*/
add_action('widgets_init','Social_Konnect_widget');


?>