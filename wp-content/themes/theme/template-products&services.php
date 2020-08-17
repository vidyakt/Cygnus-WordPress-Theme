
<?php
/* Template Name: Products&Services Page*/
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
<?php get_footer(); ?>