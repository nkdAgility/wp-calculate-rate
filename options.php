<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('nkdCalculations Settings', 'nkdCalculations Settings', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_nkdCalculations_plugin_settings' );
}


function register_nkdCalculations_plugin_settings() {
	//register our settings
	register_setting( 'nkdCalculations-plugin-settings-group', 'my_rate' );
}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Your Plugin Name</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'nkdCalculations-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'nkdCalculations-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">My Rate:</th>
        <td><input type="text" name="my_rate" value="<?php echo esc_attr( get_option('my_rate') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>