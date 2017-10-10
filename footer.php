<?php
/**
 * The template for displaying the footer.
 *
 * @package wp-theme
 * @since 0.1.0
 */
?>
    <div class="row">
        <div calss="small-12 columns">
            <footer>
            <?php 
            wp_nav_menu( array(
                            'theme_location' => 'footer_menu',
                            'menu_class'     => 'menu',
                            'container'      => 'nav',
                        )); 
            ?>
            </footer>
        </div>
    </div>
	<?php wp_footer(); ?>
	</body>
</html>