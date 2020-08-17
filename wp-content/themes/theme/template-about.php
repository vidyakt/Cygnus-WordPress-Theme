<?php
/* Template Name: About Page*/
get_header(); 
?>

    <div class="ftco-blocks-cover-1">
       
        <?php $banner= get_field('banner_settings') ?>
                    <div class="site-section-cover overlay" style="background-image: url('<?php the_post_thumbnail_url('banner'); ?>">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 text-center">
                                    <h1 class="mb-4 text-white"><?php echo $banner['main_heading'] ?></h1>
                                    <p class="mb-4"><?php echo $banner['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="heading-29190">Our Works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="item web">
                            <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/img_1.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="item web">
                            <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/img_2.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="item web">
                            <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/img_3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="item web">
                            <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/img_4.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="item web">
                            <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/img_1.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="item web">
                            <a href="work-single.html" class="item-wrap" data-fancybox="gal">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/img_6.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 mx-auto text-center">
                    <h2 class="heading-29190">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div>
                        <div class="person-pic-39219 mb-4">
                            <img src="<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <blockquote class="quote_39823 mb-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
                        </blockquote>
                        <p class="mb-0">Chris Smith</p>
                        <p class="text-muted">Co-Founder</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <div class="person-pic-39219 mb-4">
                            <img src="<?php bloginfo('template_directory');?>/images/person_2.jpg" alt="Image" class="img-fluid">
                        </div>
                        <blockquote class="quote_39823 mb-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
                        </blockquote>
                        <p class="mb-0">Jean Smith</p>
                        <p class="text-muted">Co-Founder</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <div class="person-pic-39219 mb-4">
                            <img src="<?php bloginfo('template_directory');?>/images/person_3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <blockquote class="quote_39823 mb-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas excepturi accusantium non aut perspiciatis nisi magni libero, molestias.</p>
                        </blockquote>
                        <p class="mb-0">Hannah Cooper</p>
                        <p class="text-muted">Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    

<?php get_footer(); ?>