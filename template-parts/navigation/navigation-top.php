<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
    <div class="nav-wrap-left">
        <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
            <?php
            echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
            echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
            _e( 'Menu', 'twentyseventeen' );
            ?>
        </button>

        <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'menu_id'        => 'top-menu',
        ) ); ?>

    </div>
    <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
    <div class="nav-wrap-right">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="<?php echo $unique_id; ?>">
                <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentyseventeen' ); ?></span>
            </label>
            <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit"><?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span></button>
        </form>
    </div>
</nav><!-- #site-navigation -->
