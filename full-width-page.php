<?php 
/**
 * Template Name: Full Width
 */

get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <header class="custom-page-header pb-3 pt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-title-heading">
                        <h1 class="fs-4 fw-bold">
                            <?php echo get_the_title(); ?>
                        </h1>
                        <p>
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <?php 
                        // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) { 
                    ?>
                        <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title(); ?>" />
                    <?php }else{ ?>
                        <img class="img-fluid rounded" src="<?php echo get_template_directory_uri() . '/img/placeholder.png' ?>" alt="<?php echo get_the_title(); ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>

    <section class="page-contents border-top pb-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <article class="main-content">
                        <?php the_content(); ?>
                    </article>
                </div>
                
            </div>
        </div>
    </section>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


<?php get_footer(); ?>