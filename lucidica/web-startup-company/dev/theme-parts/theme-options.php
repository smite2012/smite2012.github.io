<?php
/**
 * Created by PhpStorm.
 * User: lykhachov
 * Date: 9/3/18
 * Time: 12:31
 */
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
    register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
    add_theme_page( __( 'Theme settings', 'sampletheme' ), __( 'Theme settings', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

add_theme_support('html5');
add_theme_support('custom-logo');

/**
 * Create the options page
 */
function theme_options_do_page() {
    global $select_options, $radio_options;

    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;

    ?>
    <div class="wrap">
        <?php screen_icon(); echo "<h2>Theme Options</h2>"; ?>

        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div class="updated fade"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields( 'sample_options' ); ?>
            <?php $options = get_option( 'sample_theme_options' ); ?>
          <!--    Admin email section      -->
            <div class="main main_header">
                <p>Admin email address for contact us form</p>
            </div>
          <div class="main main_header">
            <?php _e( 'Email', 'sampletheme' ); ?>
            <input id="sample_theme_options[admin_email]" class="regular-text" type="text" name="sample_theme_options[admin_email]" value="<?php esc_attr_e( $options['admin_email'] ); ?>" />
          </div>
          <!--  END  Admin email section      -->

                <p class="submit">
                    <input type="submit" class="button-primary" style="
                        background: <?php echo $options['selectinput'];?>;
                        border-color: <?php echo $options['selectinput'];?>;
                        text-shadow: 0 -1px 1px <?php echo $options['selectinput'];?>;
                        box-shadow: 0 1px 0 <?php echo $options['selectinput'];?>"
                           value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
                </p>
        </form>
    </div><!-- END wrap-->

    <?php
}