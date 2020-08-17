<?php
/* Template Name: Contact Page*/
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
    
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5">
                        <form action="#" method="post">
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Contact Info</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Address:</span>
                                    <span>KLN Towers (Palarivattom), Near JN international Stadium, Kochi</span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+91 8139840963</span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@cygnusit.co.in</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>