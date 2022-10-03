<?php get_header(); ?>

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
                        <p>
                            <span class="badge bg-primary"><?php the_time('F jS, Y'); ?></span> by <?php the_author_posts_link(); ?>
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
                <div class="col-lg-9 col-md-9">
                    <article class="main-content">
                        <?php the_content(); ?>
                        <p class="postmetadata alert alert-secondary">
                            <?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
                            <br>
                            <?php the_tags('Social tagging: ', ', '); ?>
                        </p>
                        
                    </article>
                    <?php comments_template(); ?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="services border pb-4 pt-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col md-6">
                <div class="course_cat_text text-center small">

                    <?php if ( is_active_sidebar( 'services_text' ) ) : ?>
                        
                        <?php dynamic_sidebar( 'services_text' ); ?>
                        
                    <?php endif; ?>

                    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#signUpModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                        Click Here to Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


<?php get_footer(); ?>