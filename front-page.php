<?php 

/**
 * Template Name: Front Page
 */

get_header(); ?>

<header class="main-header pt-5 pb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-3">

                <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                                
                    <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                    
                <?php endif; ?>
                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#signUpModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    Click Here to Sign Up
                </a>

            </div>
            <div class="col-lg-6 col-md-6 mb-3">
                    <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
                        
                        <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
                        
                    <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<section class="features pb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid p-2" src="<?php echo the_field('feature_one_image');?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="flex-grow-1 ms-3">
                    <?php echo the_field('feature_one_heading');?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid p-2" src="<?php echo the_field('feature_two_image');?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_two_heading');?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid p-2" src="<?php echo the_field('feature_three_image');?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_three_heading');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course_cat border-top pt-3 pb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">

                    <?php if ( is_active_sidebar( 'course_cat_text' ) ) : ?>
                        
                        <?php dynamic_sidebar( 'course_cat_text' ); ?>
                        
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

            <div class="row mt-4">
                <div class="col-lg-3 col-md-3">
                    <a href="<?php echo bloginfo('url'); ?>/job-oriented/" class="card text-decoration-none text-dark text-center mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" alt="Job Oriented Courses">
                        <div class="card-body">
                            <h3 class="fs-6 m-0 bold">Job Oriented Courses</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="<?php echo bloginfo('url'); ?>/short-term/" class="card text-decoration-none text-dark text-center mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" alt="Short-Term Courses">
                        <div class="card-body">
                            <h3 class="fs-6 m-0 bold">Short-Term Courses</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="<?php echo bloginfo('url'); ?>/certificate/" class="card text-decoration-none text-dark text-center mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" alt="Sertification Courses">
                        <div class="card-body">
                            <h3 class="fs-6 m-0 bold">Certification Courses</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="<?php echo bloginfo('url'); ?>/online/" class="card text-decoration-none text-dark text-center mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" alt="Online Courses">
                        <div class="card-body">
                            <h3 class="fs-6 m-0 bold">Online Courses</h3>
                        </div>
                    </a>
                </div>
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

<section class="main-content border-top pt-4 pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="content-area">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
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

<?php get_footer(); ?>