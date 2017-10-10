<?php
/**
 *Template Name: Homepage
 * 
 * @package wp-theme
 * @since 0.1.0
 */

get_header(); ?>
<div class="row">
    <div class="small-12 columns">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ): the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>
<?php get_footer();