        <footer class="main-footer bg-dark text-white pt-5 pb-3">
            <div class="container">
                <div class="row">
                    
                    <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
                            
                        <?php dynamic_sidebar( 'footer_widgets' ); ?>
                        
                    <?php endif; ?>

                </div>
            </div>
        </footer>
        <div class="copyright bg-dark pt-3 pb-3 border-top-gray">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p class="small m-0 text-white">
                            Copyright &copy; <?php echo date('Y'); ?> <a href="https://kayacuneyt.com" class="text-decoration-none" target="_blank">Cüneyt Kaya</a>. 
                            All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content top-25">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign-up to Get Started</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php if ( is_active_sidebar( 'pop_up_form' ) ) : ?>
                            
                            <?php dynamic_sidebar( 'pop_up_form' ); ?>
                            
                        <?php endif; ?>
                    </div>
                    
                    </div>
                </div>
                </div>
        
        
        <?php wp_footer(); ?>
    </body>
</html>