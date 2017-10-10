<?php
/**
 * The template for displaying the header.
 *
 * @package wp-theme
 * @since 0.1.0
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <div class="row">
        <div class="small-12 columns">
            <header>
            <?php 
            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'menu',
                                'container'      => 'nav',
                            )); 
            ?>
            </header>
        </div>
    </div>