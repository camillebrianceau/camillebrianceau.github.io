<?php

/**
 * @package     WP Subtitle
 * @subpackage  Admin
 */


add_action( 'edit_form_after_title', 'add_content_before_editor',10, 2);
function add_content_before_editor($post) {
	wp_nonce_field( 'eds-subtitle', 'eds_noncesubtitle' );
    ?>
    <div id="titlediv">
        <div id="titlewrap">
                <label for="title" id="title-prompt-text" class="screen-reader-text">
                	<?php esc_html__( 'Enter title here', 'edsbootstrap' );?>
                </label>
            <input type="text" autocomplete="off" spellcheck="true" id="title" size="30" name="post_subtitle" value="Sub title" 
            onfocus="if(this.value == 'Sub title') {this.value=''}" onblur="if(this.value == ''){this.value ='Sub title'}"
            >
        </div>
      
    </div>
    <?php
}
// Save the Metabox Data

function eds_save_events_meta($post_id, $post) {
	$_REQUEST['post_subtitle'];
	var_dump($post);
	exit;
	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	

}

add_action('save_post', 'eds_save_events_meta', 1, 2); // save the custom fields



