<?php
/*
Template Name: Page création article
*/
 acf_form_head(); ?>
<?php get_header(); ?>

    <div id="primary">
        <div id="content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

                <?php acf_form(array(
                    'post_id'        => 'new_post',
                    'post_title' => true,
                    'post_content' => true,
                    'new_post'        => array(
                        'post_type'        => 'post',
                        'post_status'        => 'publish'
                    ),
                    'submit_value'        => __("Create post", "theme-hetic"  )
                )); ?>

            <?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
