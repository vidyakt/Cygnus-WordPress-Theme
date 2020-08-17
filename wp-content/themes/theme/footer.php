<footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- <h2 class="footer-heading mb-3">About Me</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p> -->
                    
                    <?php
                        if(is_active_sidebar('footer-sidebar-1')){
					    dynamic_sidebar('footer-sidebar-1');
					}
					else{?>
						<div class="footer-heading mb-3">
							<h1>Add Widget</h1>
						</div>
					<?php } ?> 
                    
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-6 ml-auto">
                                <!-- <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul> -->
                                <?php
                                    if(is_active_sidebar('footer-sidebar-2')){
                                    dynamic_sidebar('footer-sidebar-2');
                                }
                                else{?>
                                    <div class="footer-heading mb-3">
                                        <h1>Add Widget</h1>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-lg-6">
                               <h2 class="footer-heading mb-4">Social Links</h2>
                                <!--  <div class="social_29128 white mb-5">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div> -->
                                <?php
                                if ( is_active_sidebar( 'social-links' ) ) : ?>
                                    <div id="footer-widget-area" class="chw-widget-area widget-area" role="complementary">
                                    <?php dynamic_sidebar( 'social-links' ); ?>
                                    </div>
                                <?php endif; ?>
                                <h2 class="footer-heading mb-4">Newsletter</h2>
                                <form action="#" class="d-flex">
                                    <input type="text" class="form-control mr-3" placeholder="Email">
                                    <input type="submit" value="Send" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>

                                Copyright ©
                                <script type="text/javascript">
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   


    <?php wp_footer(); ?>


</body>

</html>