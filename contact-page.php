<?php 

/**
 * Template Name: Contact Page
 */

get_header(); ?>


<section class="map-holder pb-3">
    <div class="container">
        <div class="row">
            <div class="col">
            <iframe class="border rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2029.2660333457886!2d24.757220117443847!3d59.42863749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469295796b8e0435%3A0x84fd8c16b8f7b513!2sFlikoston%20O%C3%9C!5e0!3m2!1sen!2sde!4v1664804129657!5m2!1sen!2sde" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                    <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>  
                        <?php dynamic_sidebar( 'contact_form' ); ?>
                    <?php endif; ?>
                
            </div>
            <div class="col-lg-8 col-md-8">

                    <?php 
                    
                    $table = get_field( 'timing' );

                    if ( ! empty ( $table ) ) {

                        echo '<table border="0" class="table border small">';

                            if ( ! empty( $table['caption'] ) ) {

                                echo '<caption>' . $table['caption'] . '</caption>';
                            }

                            if ( ! empty( $table['header'] ) ) {

                                echo '<thead>';

                                    echo '<tr>';

                                        foreach ( $table['header'] as $th ) {

                                            echo '<th>';
                                                echo $th['c'];
                                            echo '</th>';
                                        }

                                    echo '</tr>';

                                echo '</thead>';
                            }

                            echo '<tbody>';

                                foreach ( $table['body'] as $tr ) {

                                    echo '<tr>';

                                        foreach ( $tr as $td ) {

                                            echo '<td>';
                                                echo $td['c'];
                                            echo '</td>';
                                        }

                                    echo '</tr>';
                                }

                            echo '</tbody>';

                        echo '</table>';
                    }
                    
                ?>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>