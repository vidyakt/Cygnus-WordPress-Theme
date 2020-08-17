<?php get_header(); ?>

<div class="ftco-blocks-cover-1">

        <?php $banner= get_field('banner_settings') ?>
            <div class="site-section-cover overlay" style="background-image: url('<?php the_post_thumbnail_url('banner'); ?>">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center">
                            <h1 class="mb-4 text-white"><?php echo $banner['main_heading'] ?></h1>
                            <p class="mb-4"><?php echo $banner['description'] ?></p>
                            <p><a href="#" class="btn btn-primary btn-outline-white py-3 px-5"><?php echo $banner['button_text'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $second_section= get_field('second_section') ?>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h2 class="h4 mb-4"><?php echo $second_section['_second_section_heading'] ?></h2>
                        <p><?php echo $second_section['description'] ?></p>
                        <p><a href="#" class="btn btn-primary text-white px-5"><?php echo $second_section['button_text'] ?></a></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $second_section['image'] ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <h2 class="h4 mb-4"><?php echo $second_section['second_heading'] ?></h2>
                        <div class="progress-wrap mb-4">
                            <div class="d-flex">
                                <span>Writing</span>
                                <span class="ml-auto">55%</span>
                            </div>
                            <div class="progress rounded-0" style="height: 7px;">
                                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-wrap mb-4">
                            <div class="d-flex">
                                <span>WordPress</span>
                                <span class="ml-auto">85%</span>
                            </div>
                            <div class="progress rounded-0" style="height: 7px;">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-wrap mb-4">
                            <div class="d-flex">
                                <span>Bootstrap</span>
                                <span class="ml-auto">93%</span>
                            </div>
                            <div class="progress rounded-0" style="height: 7px;">
                                <div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-wrap mb-4">
                            <div class="d-flex">
                                <span>jQuery</span>
                                <span class="ml-auto">83%</span>
                            </div>
                            <div class="progress rounded-0" style="height: 7px;">
                                <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="heading-29190"><?php echo get_field('third_section_heading') ?></h2>
                    </div>
                </div>
                <div class="row">

                <?php
                    // Check rows exists.
                    if( have_rows('third_section') ):

                        // Loop through rows.
                        while( have_rows('third_section') ) : the_row();

                            ?>
                            <div class="col-md-6 col-lg-4 mb-2 mt-4">
                                <div class="service-29128 text-center">
                                    <span class="d-block wrap-icon">
                                        <span class="icon-desktop_mac"></span>
                                    </span>
                                    <h3><?php echo get_sub_field('heading'); ?></h3>
                                    <p><?php echo get_sub_field('description'); ?></p>
                                </div>
                            </div>
                        <?php
                        // End loop.
                        endwhile;

                    endif;
                    ?>

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
        <div class="site-section bg-light">
            <div class="container">
                <div class="row">

                <?php
                    // Check rows exists.
                    if( have_rows('counter') ):

                        // Loop through rows.
                        while( have_rows('counter') ) : the_row();

                ?>

                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="fact-39281 d-flex align-items-center">
                            <div class="wrap-icon mr-3">
                                <span class="<?php echo get_sub_field('icon'); ?>"></span>
                            </div>
                            <div class="text">
                                <span class="d-block"><?php echo get_sub_field('counter'); ?></span>
                                <span><?php echo get_sub_field('text'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php
                    // End loop.
                    endwhile;

                endif;
                ?>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
            <?php $video= get_field('video') ?>
                <div class="row mb-5">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="heading-29190"><?php echo $video['video_heading'] ?></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <a href="<?php echo $video['video_link'] ?>" data-fancybox="" class="btn-video_38929">
                            <span><span class="icon-play"></span></span>
                            <img src="<?php echo $video['video_thumbnail'] ?>" alt="Image" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
            
        
        <div class="site-section bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="heading-29190">Blog</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html">
                                <img src="<?php bloginfo('template_directory');?>/images/img_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html">
                                <img src="<?php bloginfo('template_directory');?>/images/img_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html">
                                <img src="<?php bloginfo('template_directory');?>/images/img_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
      

<?php get_footer(); ?>