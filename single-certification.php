<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="main-header pt-5 pb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-3">

                <div class="course-excerpt small">
                    <h1 class="fs-5 fw-bold">
                        <?php echo get_the_title(); ?>
                    </h1>
                    <p>
                    <?php echo get_the_excerpt(); ?>
                    </p>
                    <p>
                        <span class="badge bg-primary">
                            <strong>Course Fee:</strong> <?php echo the_field('course_fee'); ?>
                        </span>
                        <span class="badge bg-secondary">
                            <strong>Course Duration:</strong> <?php echo the_field('course_duration'); ?>
                        </span>
                    </p>
                </div>
                
                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#signUpModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    Click Here to Sign Up
                </a>

            </div>
            <div class="col-lg-6 col-md-6 mb-3">
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

<section class="course-description">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">

            <?php
            
                $value = get_field( "course_description_image" );

                if( $value ) { ?>
                    <img class="img-fluid rounded pt-3 pb-3" src="<?php echo $value;?>" alt="<?php echo get_the_title(); ?>">
                <?php } else { ?>
                    <img class="img-fluid rounded pt-3 pb-3" src="<?php echo get_template_directory_uri() . '/img/placeholder.png' ?>" alt="<?php echo get_the_title(); ?>" />
                <?php }
            
            ?>

            </div>
            <div class="col-lg-6 col-md-6">
                <div class="course-description small">
                    <h2 class="fs-5 fw-bold">Course Description</h2>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-syllabus border-top">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6 col-md-6">
                <div class="course-description small">
                    <h2 class="fs-5 fw-bold">Course Syllabus</h2>
                    <?php the_field('course_syllabus'); ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <?php
                
                    $value = get_field( "course_syllabus_image" );

                    if( $value ) { ?>
                        <img class="img-fluid rounded pt-3 pb-3" src="<?php echo $value;?>" alt="<?php echo get_the_title(); ?>">
                    <?php } else { ?>
                        <img class="img-fluid rounded pt-3 pb-3" src="<?php echo get_template_directory_uri() . '/img/placeholder.png' ?>" alt="<?php echo get_the_title(); ?>" />
                    <?php }
                
                ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>