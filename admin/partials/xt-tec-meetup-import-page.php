<?php
/**
 * Content for meetup import page.
 *
 * @link       http://xylusthemes.com/
 * @since      1.0.0
 *
 * @package    XT_TEC_Meetup_Import
 * @subpackage XT_TEC_Meetup_Import/admin/partials
 */

?>
<div class="wrap">
    <h2><?php esc_html_e( 'Meetup import', 'xt-tec-meetup-import' ); ?></h2>
    <?php
    // Set Default Tab to S`ettings.
    $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'settings';
    ?>
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">

            <div id="postbox-container-1" class="postbox-container">

            </div>
            <div id="postbox-container-2" class="postbox-container">

                <h2 class="nav-tab-wrapper">
                    <a href="<?php echo esc_url( add_query_arg( 'tab', 'settings' ) ); ?>" class="nav-tab <?php if ( $active_tab == 'settings' ) { echo 'nav-tab-active'; } ?>">
                        <?php esc_html_e( 'Settings', 'xt-tec-meetup-import' ); ?>
                    </a>
                    <a href="<?php echo esc_url( add_query_arg( 'tab', 'meetup_import' ) ); ?>" class="nav-tab <?php if ( $active_tab == 'meetup_import' ) { echo 'nav-tab-active'; } ?>">
                        <?php esc_html_e( 'Meetup import', 'xt-tec-meetup-import' ); ?>
                    </a>
                </h2>
                <?php
                    if ( $active_tab == 'settings' ) {
                        require_once 'xt-tec-meetup-import-tab-settings.php';
                    } else {
                        $xtmi_event_cats = get_terms( 'tribe_events_cat', array( 'hide_empty' => 0 ) );
                        require_once 'xt-tec-meetup-import-tab-content.php';
                    }
                    ?>
                </div>
        </div>
        <br class="clear">
    </div>
</div>
